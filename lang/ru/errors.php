<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'У вас нет доступа к запрашиваемой странице.',
    'permissionJson' => 'У вас нет разрешения для запрашиваемого действия.',

    // Auth
    'error_user_exists_different_creds' => 'Пользователь с электронной почтой :email уже существует, но с другими учетными данными.',
    'auth_pre_register_theme_prevention' => 'Пользователь не может быть зарегистрирован по предоставленной информации',
    'email_already_confirmed' => 'Адрес электронной почты уже был подтвержден, попробуйте войти в систему.',
    'email_confirmation_invalid' => 'Этот токен подтверждения недействителен или уже используется. Повторите попытку регистрации.',
    'email_confirmation_expired' => 'Истек срок действия токена. Отправлено новое письмо с подтверждением.',
    'email_confirmation_awaiting' => 'Для используемой учетной записи необходимо подтвердить адрес электронной почты',
    'ldap_fail_anonymous' => 'Недопустимый доступ LDAP с использованием анонимной привязки',
    'ldap_fail_authed' => 'Не удалось получить доступ к LDAP, используя данные dn & password',
    'ldap_extension_not_installed' => 'LDAP расширение для PHP не установлено',
    'ldap_cannot_connect' => 'Не удается подключиться к серверу LDAP, не удалось выполнить начальное соединение',
    'saml_already_logged_in' => 'Уже вошли в систему',
    'saml_no_email_address' => 'Не удалось найти email для этого пользователя в данных, предоставленных внешней системой аутентификации',
    'saml_invalid_response_id' => 'Запрос от внешней системы аутентификации не распознается процессом, запущенным этим приложением. Переход назад после входа в систему может вызвать эту проблему.',
    'saml_fail_authed' => 'Вход с помощью :system не удался, система не предоставила успешную авторизацию',
    'oidc_already_logged_in' => 'Вход в систему уже произведен',
    'oidc_no_email_address' => 'Не удалось найти email этого пользователя в данных, предоставленных внешней системой аутентификации',
    'oidc_fail_authed' => 'Вход в систему с помощью :system не удался, система не обеспечила успешную авторизацию',
    'social_no_action_defined' => 'Действие не определено',
    'social_login_bad_response' => "При попытке входа с :socialAccount произошла ошибка: \\n:error",
    'social_account_in_use' => 'Этот :socialAccount аккаунт уже используется, попробуйте войти с параметрами :socialAccount.',
    'social_account_email_in_use' => 'Электронный ящик :email уже используется. Если у вас уже есть учетная запись, вы можете подключить свою учетную запись :socialAccount из настроек своего профиля.',
    'social_account_existing' => 'Этот :socialAccount уже привязан к вашему профилю.',
    'social_account_already_used_existing' => 'Этот :socialAccount уже используется другим пользователем.',
    'social_account_not_used' => 'Этот :socialAccount не связан ни с какими пользователями. Прикрепите его в настройках вашего профиля.',
    'social_account_register_instructions' => 'Если у вас еще нет учетной записи, вы можете зарегистрироваться, используя параметр :socialAccount.',
    'social_driver_not_found' => 'Драйвер для Соцсети не найден',
    'social_driver_not_configured' => 'Настройки вашего :socialAccount заданы неправильно.',
    'invite_token_expired' => 'Срок действия приглашения истек. Вместо этого вы можете попытаться сбросить пароль своей учетной записи.',
    'login_user_not_found' => 'Пользователь для этого действия не найден.',

    // System
    'path_not_writable' => 'Невозможно загрузить файл по пути :filePath. Убедитесь что сервер доступен для записи.',
    'cannot_get_image_from_url' => 'Не удается получить изображение из :url',
    'cannot_create_thumbs' => 'Сервер не может создавать эскизы. Убедитесь, что у вас установлено расширение GD PHP.',
    'server_upload_limit' => 'Сервер не разрешает загрузку файлов такого размера. Попробуйте уменьшить размер файла.',
    'server_post_limit' => 'Сервер не может получить указанный объем данных. Повторите попытку, используя меньшее количество данных или файл меньшего размера.',
    'uploaded'  => 'Сервер не позволяет загружать файлы такого размера. Пожалуйста, попробуйте файл меньше.',

    // Drawing & Images
    'image_upload_error' => 'Произошла ошибка при загрузке изображения',
    'image_upload_type_error' => 'Неправильный тип загружаемого изображения',
    'image_upload_replace_type' => 'Замена файла изображения должна быть того же типа',
    'image_upload_memory_limit' => 'Не удалось выполнить загрузку изображений и/или создать эскизы из-за ограничения системных ресурсов.',
    'image_thumbnail_memory_limit' => 'Не удалось создать вариации размера изображения из-за ограничений системных ресурсов.',
    'image_gallery_thumbnail_memory_limit' => 'Не удалось создать эскизы галереи из-за ограниченности системных ресурсов.',
    'drawing_data_not_found' => 'Данные чертежа не могут быть загружены. Возможно, файл чертежа больше не существует или у вас нет разрешения на доступ к нему.',

    // Attachments
    'attachment_not_found' => 'Вложение не найдено',
    'attachment_upload_error' => 'Произошла ошибка при загрузке вложенного файла',

    // Pages
    'page_draft_autosave_fail' => 'Не удалось сохранить черновик. Перед сохранением этой страницы убедитесь, что у вас есть подключение к Интернету.',
    'page_draft_delete_fail' => 'Не удалось удалить черновик страницы и получить текущее сохраненное содержимое страницы',
    'page_custom_home_deletion' => 'Невозможно удалить страницу, пока она установлена как домашняя страница',

    // Entities
    'entity_not_found' => 'Объект не найден',
    'bookshelf_not_found' => 'Полка не найдена',
    'book_not_found' => 'Книга не найдена',
    'page_not_found' => 'Страница не найдена',
    'chapter_not_found' => 'Глава не найдена',
    'selected_book_not_found' => 'Выбранная книга не найдена',
    'selected_book_chapter_not_found' => 'Выбранная книга или глава не найдена',
    'guests_cannot_save_drafts' => 'Гости не могут сохранять черновики',

    // Users
    'users_cannot_delete_only_admin' => 'Вы не можете удалить единственного администратора',
    'users_cannot_delete_guest' => 'Вы не можете удалить гостевого пользователя',
    'users_could_not_send_invite' => 'Could not create user since invite email failed to send',

    // Roles
    'role_cannot_be_edited' => 'Эта роль не может быть изменена',
    'role_system_cannot_be_deleted' => 'Эта роль является системной и не может быть удалена',
    'role_registration_default_cannot_delete' => 'Эта роль не может быть удалена, так как она установлена в качестве роли по умолчанию',
    'role_cannot_remove_only_admin' => 'Этот пользователь единственный с правами администратора. Назначьте роль администратора другому пользователю, прежде чем удалить этого.',

    // Comments
    'comment_list' => 'Произошла ошибка при получении комментариев.',
    'cannot_add_comment_to_draft' => 'Вы не можете добавлять комментарии к черновику.',
    'comment_add' => 'Произошла ошибка при добавлении / обновлении комментария.',
    'comment_delete' => 'Произошла ошибка при удалении комментария.',
    'empty_comment' => 'Нельзя добавить пустой комментарий.',

    // Error pages
    '404_page_not_found' => 'Страница не найдена',
    'sorry_page_not_found' => 'Извините, страница, которую вы искали, не найдена.',
    'sorry_page_not_found_permission_warning' => 'Если вы ожидали что страница существует, возможно у вас нет прав для её просмотра.',
    'image_not_found' => 'Изображение не найдено',
    'image_not_found_subtitle' => 'К сожалению, файл изображения, который вы искали, не найден.',
    'image_not_found_details' => 'Возможно данное изображение было удалено.',
    'return_home' => 'вернуться на главную страницу',
    'error_occurred' => 'Произошла ошибка',
    'app_down' => ':appName в данный момент не доступно',
    'back_soon' => 'Скоро восстановится.',

    // Import
    'import_zip_cant_read' => 'Could not read ZIP file.',
    'import_zip_cant_decode_data' => 'Could not find and decode ZIP data.json content.',
    'import_zip_no_data' => 'ZIP file data has no expected book, chapter or page content.',
    'import_validation_failed' => 'Import ZIP failed to validate with errors:',
    'import_zip_failed_notification' => 'Failed to import ZIP file.',
    'import_perms_books' => 'У вас недостаточно прав для создания книг.',
    'import_perms_chapters' => 'У вас недостаточно прав для создания глав.',
    'import_perms_pages' => 'У вас недостаточно прав для создания страниц.',
    'import_perms_images' => 'У вас недостаточно прав для создания изображений.',
    'import_perms_attachments' => 'У вас недостаточно прав для создания вложений.',

    // API errors
    'api_no_authorization_found' => 'Отсутствует токен авторизации в запросе',
    'api_bad_authorization_format' => 'Токен авторизации найден, но формат запроса неверен',
    'api_user_token_not_found' => 'Отсутствует соответствующий API токен для предоставленного токена авторизации',
    'api_incorrect_token_secret' => 'Секрет, предоставленный для данного использованного API токена неверен',
    'api_user_no_api_permission' => 'Владелец используемого API токена не имеет прав на выполнение вызовов API',
    'api_user_token_expired' => 'Срок действия используемого токена авторизации истек',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'Ошибка при отправке тестового письма:',

    // HTTP errors
    'http_ssr_url_no_match' => 'URL-адрес не соответствует настроенным разрешенным хостам SSR',
];
