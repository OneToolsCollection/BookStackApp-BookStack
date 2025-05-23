<?php

namespace BookStack\Uploads;

use BookStack\Exceptions\HttpFetchException;
use BookStack\Http\HttpRequestService;
use BookStack\Users\Models\User;
use BookStack\Util\WebSafeMimeSniffer;
use Exception;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Psr\Http\Client\ClientExceptionInterface;

class UserAvatars
{
    public function __construct(
        protected ImageService $imageService,
        protected HttpRequestService $http
    ) {
    }

    /**
     * Fetch and assign an avatar image to the given user.
     */
    public function fetchAndAssignToUser(User $user): void
    {
        if (!$this->avatarFetchEnabled()) {
            return;
        }

        try {
            $this->destroyAllForUser($user);
            $avatar = $this->saveAvatarImage($user);
            $user->avatar()->associate($avatar);
            $user->save();
        } catch (Exception $e) {
            Log::error('Failed to save user avatar image', ['exception' => $e]);
        }
    }

    /**
     * Assign a new avatar image to the given user using the given image data.
     */
    public function assignToUserFromExistingData(User $user, string $imageData, string $extension): void
    {
        try {
            $this->destroyAllForUser($user);
            $avatar = $this->createAvatarImageFromData($user, $imageData, $extension);
            $user->avatar()->associate($avatar);
            $user->save();
        } catch (Exception $e) {
            Log::error('Failed to save user avatar image', ['exception' => $e]);
        }
    }

    /**
     * Assign a new avatar image to the given user by fetching from a remote URL.
     */
    public function assignToUserFromUrl(User $user, string $avatarUrl): void
    {
        try {
            $this->destroyAllForUser($user);
            $imageData = $this->getAvatarImageData($avatarUrl);

            $mime = (new WebSafeMimeSniffer())->sniff($imageData);
            [$format, $type] = explode('/', $mime, 2);
            if ($format !== 'image' || !ImageService::isExtensionSupported($type)) {
                return;
            }

            $avatar = $this->createAvatarImageFromData($user, $imageData, $type);
            $user->avatar()->associate($avatar);
            $user->save();
        } catch (Exception $e) {
            Log::error('Failed to save user avatar image from URL', [
                'exception' => $e->getMessage(),
                'url'       => $avatarUrl,
                'user_id'   => $user->id,
            ]);
        }
    }

    /**
     * Destroy all user avatars uploaded to the given user.
     */
    public function destroyAllForUser(User $user): void
    {
        $profileImages = Image::query()->where('type', '=', 'user')
            ->where('uploaded_to', '=', $user->id)
            ->get();

        foreach ($profileImages as $image) {
            $this->imageService->destroy($image);
        }
    }

    /**
     * Save an avatar image from an external service.
     *
     * @throws HttpFetchException
     */
    protected function saveAvatarImage(User $user, int $size = 500): Image
    {
        $avatarUrl = $this->getAvatarUrl();
        $email = strtolower(trim($user->email));

        $replacements = [
            '${hash}'  => md5($email),
            '${size}'  => $size,
            '${email}' => urlencode($email),
        ];

        $userAvatarUrl = strtr($avatarUrl, $replacements);
        $imageData = $this->getAvatarImageData($userAvatarUrl);

        return $this->createAvatarImageFromData($user, $imageData, 'png');
    }

    /**
     * Creates a new image instance and saves it in the system as a new user avatar image.
     */
    protected function createAvatarImageFromData(User $user, string $imageData, string $extension): Image
    {
        $imageName = Str::random(10) . '-avatar.' . $extension;

        $image = $this->imageService->saveNew($imageName, $imageData, 'user', $user->id);
        $image->created_by = $user->id;
        $image->updated_by = $user->id;
        $image->save();

        return $image;
    }

    /**
     * Get an image from a URL and return it as a string of image data.
     *
     * @throws HttpFetchException
     */
    protected function getAvatarImageData(string $url): string
    {
        try {
            $client = $this->http->buildClient(5);
            $responseCount = 0;

            do {
                $response = $client->sendRequest(new Request('GET', $url));
                $responseCount++;
                $isRedirect = ($response->getStatusCode() === 301 || $response->getStatusCode() === 302);
                $url = $response->getHeader('Location')[0] ?? '';
            } while ($responseCount < 3 && $isRedirect && is_string($url) && str_starts_with($url, 'http'));

            if ($responseCount === 3) {
                throw new HttpFetchException("Failed to fetch image, max redirect limit of 3 tries reached. Last fetched URL: {$url}");
            }

            if ($response->getStatusCode() !== 200) {
                throw new HttpFetchException(trans('errors.cannot_get_image_from_url', ['url' => $url]));
            }

            return (string) $response->getBody();
        } catch (ClientExceptionInterface $exception) {
            throw new HttpFetchException(trans('errors.cannot_get_image_from_url', ['url' => $url]), $exception->getCode(), $exception);
        }
    }

    /**
     * Check if fetching external avatars is enabled.
     */
    public function avatarFetchEnabled(): bool
    {
        $fetchUrl = $this->getAvatarUrl();

        return str_starts_with($fetchUrl, 'http');
    }

    /**
     * Get the URL to fetch avatars from.
     */
    public function getAvatarUrl(): string
    {
        $configOption = config('services.avatar_url');
        if ($configOption === false) {
            return '';
        }

        $url = trim($configOption);

        if (empty($url) && !config('services.disable_services')) {
            $url = 'https://www.gravatar.com/avatar/${hash}?s=${size}&d=identicon';
        }

        return $url;
    }
}
