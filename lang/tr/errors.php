<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'Bu sayfaya erişim izniniz bulunmuyor.',
    'permissionJson' => 'Bu işlemi yapmaya yetkiniz bulunmuyor.',

    // Auth
    'error_user_exists_different_creds' => ':email e-posta adresine sahip bir kullanıcı zaten var.',
    'auth_pre_register_theme_prevention' => 'User account could not be registered for the provided details',
    'email_already_confirmed' => 'E-posta adresi zaten doğrulanmış, giriş yapmayı deneyin.',
    'email_confirmation_invalid' => 'Bu doğrulama kodu ya geçersiz ya da daha önce kullanılmış, lütfen tekrar kaydolmayı deneyin.',
    'email_confirmation_expired' => 'Doğrulama kodunun süresi doldu, yeni bir doğrulama kodu e-posta adresine gönderildi.',
    'email_confirmation_awaiting' => 'Bu hesaba ait e-posta adresinin doğrulanması gerekiyor',
    'ldap_fail_anonymous' => 'Anonim olarak gerçekleştirilmeye çalışılan LDAP erişimi başarısız oldu',
    'ldap_fail_authed' => 'Verilen bilgiler kullanılarak gerçekleştirilmeye çalışılan LDAP erişimi başarısız oldu',
    'ldap_extension_not_installed' => 'LDAP PHP eklentisi kurulu değil',
    'ldap_cannot_connect' => 'LDAP sunucusuna bağlanılamadı, ilk bağlantı başarısız oldu',
    'saml_already_logged_in' => 'Zaten giriş yapılmış',
    'saml_no_email_address' => 'Harici kimlik doğrulama sisteminden gelen veriler, bu kullanıcının e-posta adresini içermiyor',
    'saml_invalid_response_id' => 'Harici doğrulama sistemi tarafından sağlanan bir veri talebi, bu uygulama tarafından başlatılan bir işlem tarafından tanınamadı. Giriş yaptıktan sonra geri dönmek bu soruna yol açmış olabilir.',
    'saml_fail_authed' => ':system kullanarak giriş yapma başarısız oldu; sistem, başarılı bir kimlik doğrulama sağlayamadı',
    'oidc_already_logged_in' => 'Zaten oturum açılmış',
    'oidc_no_email_address' => 'Harici kimlik doğrulama sisteminden gelen veriler, bu kullanıcının e-posta adresini içermiyor',
    'oidc_fail_authed' => ':system kullanarak giriş yapma başarısız oldu; sistem, başarılı bir kimlik doğrulama sağlayamadı',
    'social_no_action_defined' => 'Herhangi bir eylem tanımlanmamış',
    'social_login_bad_response' => ":socialAccount girişi sırasında bir hata meydana geldi: \n:error",
    'social_account_in_use' => 'Bu :socialAccount zaten kullanımda, :socialAccount hesabıyla giriş yapmayı deneyin.',
    'social_account_email_in_use' => ':email e-posta adresi zaten kullanılıyor. Zaten bir hesabınız varsa, :socialAccount hesabınızı profil ayarlarınızdan mevcut hesabınıza bağlayabilirsiniz.',
    'social_account_existing' => 'Bu :socialAccount zaten hesabınıza bağlanmış.',
    'social_account_already_used_existing' => 'Bu :socialAccount, başka bir kullanıcı tarafından kullanılıyor.',
    'social_account_not_used' => 'Bu :socialAccount hesabı hiç bir kullanıcıya bağlanmamış. Lütfen profil ayarlarınızdan mevcut hesabınıza bağlayınız. ',
    'social_account_register_instructions' => 'Hâlâ bir hesabınız yoksa, :socialAccount aracılığıyla kaydolabilirsiniz.',
    'social_driver_not_found' => 'Social driver bulunamadı',
    'social_driver_not_configured' => ':socialAccount ayarlarınız doğru bir şekilde ayarlanmadı.',
    'invite_token_expired' => 'Davetiye bağlantısının süresi doldu. Bunun yerine parolanızı sıfırlamayı deneyebilirsiniz.',
    'login_user_not_found' => 'A user for this action could not be found.',

    // System
    'path_not_writable' => ':filePath dosya yolu yüklenemedi. Sunucuya yazılabilir olduğundan emin olun.',
    'cannot_get_image_from_url' => ':url adresindeki görsel alınamadı',
    'cannot_create_thumbs' => 'Sunucu, görsel ön izlemelerini oluşturamadı. Lütfen GD PHP eklentisinin kurulu olduğundan emin olun.',
    'server_upload_limit' => 'Sunucu bu boyutta dosya yüklemenize izin vermiyor. Lütfen daha küçük bir dosya deneyin.',
    'server_post_limit' => 'The server cannot receive the provided amount of data. Try again with less data or a smaller file.',
    'uploaded'  => 'Sunucu bu boyutta dosya yüklemenize izin vermiyor. Lütfen daha küçük bir dosya deneyin.',

    // Drawing & Images
    'image_upload_error' => 'Görsel yüklenirken bir hata meydana geldi',
    'image_upload_type_error' => 'Yüklemeye çalıştığınız dosya türü geçersizdir',
    'image_upload_replace_type' => 'Görsel dosyası değişimleri, aynı dosya uzantı tipinde olmalı',
    'image_upload_memory_limit' => 'Failed to handle image upload and/or create thumbnails due to system resource limits.',
    'image_thumbnail_memory_limit' => 'Failed to create image size variations due to system resource limits.',
    'image_gallery_thumbnail_memory_limit' => 'Failed to create gallery thumbnails due to system resource limits.',
    'drawing_data_not_found' => 'Çizim verileri yüklenemedi. Çizim dosyası artık mevcut olmayabilir veya erişim izniniz olmayabilir.',

    // Attachments
    'attachment_not_found' => 'Ek bulunamadı',
    'attachment_upload_error' => 'Ekler yüklenirken bir hata oluştu',

    // Pages
    'page_draft_autosave_fail' => 'Taslak kaydetme başarısız oldu. Bu sayfayı kaydetmeden önce internet bağlantınız olduğundan emin olun',
    'page_draft_delete_fail' => 'Sayfa taslağı silinemedi ve geçerli sayfanın kayıtlı içeriği getirilemedi',
    'page_custom_home_deletion' => 'Bu sayfa, "Ana Sayfa" olarak ayarlandığı için silinemez',

    // Entities
    'entity_not_found' => 'Öge bulunamadı',
    'bookshelf_not_found' => 'Kitaplık bulunamadı',
    'book_not_found' => 'Kitap bulunamadı',
    'page_not_found' => 'Sayfa bulunamadı',
    'chapter_not_found' => 'Bölüm bulunamadı',
    'selected_book_not_found' => 'Seçilen kitap bulunamadı',
    'selected_book_chapter_not_found' => 'Seçilen kitap veya bölüm bulunamadı',
    'guests_cannot_save_drafts' => 'Misafirler taslak kaydedemezler',

    // Users
    'users_cannot_delete_only_admin' => 'Tek olan yöneticiyi silemezsiniz',
    'users_cannot_delete_guest' => 'Misafir kullanıyıcıyı silemezsiniz',
    'users_could_not_send_invite' => 'Could not create user since invite email failed to send',

    // Roles
    'role_cannot_be_edited' => 'Bu rol düzenlenemez',
    'role_system_cannot_be_deleted' => 'Bu rol, bir sistem rolüdür ve silinemez',
    'role_registration_default_cannot_delete' => 'Bu rol, kaydolan üyelere varsayılan olarak atandığı için silinemez',
    'role_cannot_remove_only_admin' => 'Bu kullanıcı, yönetici rolü olan tek kullanıcı olduğu için silinemez. Bu kullanıcıyı silmek için önce başka bir kullanıcıya yönetici rolü atayın.',

    // Comments
    'comment_list' => 'Yorumlar yüklenirken bir hata oluştu.',
    'cannot_add_comment_to_draft' => 'Taslaklara yorum ekleyemezsiniz.',
    'comment_add' => 'Yorum eklerken/güncellerken bir hata olıuştu.',
    'comment_delete' => 'Yorum silinirken bir hata oluştu.',
    'empty_comment' => 'Boş bir yorum ekleyemezsiniz.',

    // Error pages
    '404_page_not_found' => 'Sayfa Bulunamadı',
    'sorry_page_not_found' => 'Üzgünüz, aradığınız sayfa bulunamıyor.',
    'sorry_page_not_found_permission_warning' => 'Bu sayfanın var olduğunu düşünüyorsanız, görüntüleme iznine sahip olmayabilirsiniz.',
    'image_not_found' => 'Görsel Bulunamadı',
    'image_not_found_subtitle' => 'Üzgünüz, aradığınız görsel dosyası bulunamadı.',
    'image_not_found_details' => 'Bu resmin var olmasını bekliyorsanız silinmiş olabilir.',
    'return_home' => 'Ana sayfaya dön',
    'error_occurred' => 'Bir Hata Oluştu',
    'app_down' => ':appName şu anda erişilemez durumda',
    'back_soon' => 'En kısa sürede tekrar erişilebilir duruma gelecektir.',

    // Import
    'import_zip_cant_read' => 'Could not read ZIP file.',
    'import_zip_cant_decode_data' => 'Could not find and decode ZIP data.json content.',
    'import_zip_no_data' => 'ZIP file data has no expected book, chapter or page content.',
    'import_validation_failed' => 'Import ZIP failed to validate with errors:',
    'import_zip_failed_notification' => 'Failed to import ZIP file.',
    'import_perms_books' => 'You are lacking the required permissions to create books.',
    'import_perms_chapters' => 'You are lacking the required permissions to create chapters.',
    'import_perms_pages' => 'You are lacking the required permissions to create pages.',
    'import_perms_images' => 'You are lacking the required permissions to create images.',
    'import_perms_attachments' => 'You are lacking the required permission to create attachments.',

    // API errors
    'api_no_authorization_found' => 'Yapılan istekte, yetkilendirme anahtarı bulunamadı',
    'api_bad_authorization_format' => 'Yapılan istekte bir yetkilendirme anahtarı bulundu fakat doğru görünmüyor',
    'api_user_token_not_found' => 'Sağlanan yetkilendirme anahtarı ile eşleşen bir API anahtarı bulunamadı',
    'api_incorrect_token_secret' => 'Kullanılan API için sağlanan gizli anahtar doğru değil',
    'api_user_no_api_permission' => 'Kullanılan API anahtarının sahibi API çağrısı yapmak için izne sahip değil',
    'api_user_token_expired' => 'Kullanılan yetkilendirme anahtarının süresi doldu',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'Test e-postası gönderilirken bir hata meydana geldi:',

    // HTTP errors
    'http_ssr_url_no_match' => 'The URL does not match the configured allowed SSR hosts',
];
