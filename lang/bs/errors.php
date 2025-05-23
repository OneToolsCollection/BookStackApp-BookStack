<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'Nemate ovlaštenje da pristupite ovoj stranici.',
    'permissionJson' => 'Nemate ovlaštenje da izvršite tu akciju.',

    // Auth
    'error_user_exists_different_creds' => 'Korisnik sa e-mailom :email već postoji ali sa različitim podacima.',
    'auth_pre_register_theme_prevention' => 'User account could not be registered for the provided details',
    'email_already_confirmed' => 'E-mail je već potvrđen, pokušajte se prijaviti.',
    'email_confirmation_invalid' => 'Ovaj token za potvrdu nije ispravan ili je već iskorišten, molimo vas pokušajte se registrovati ponovno.',
    'email_confirmation_expired' => 'Ovaj token za potvrdu je istekao, novi e-mail za potvrdu je poslan.',
    'email_confirmation_awaiting' => 'E-mail adresa za račun koji se koristi mora biti potvrđena',
    'ldap_fail_anonymous' => 'LDAP pristup nije uspio koristeći anonimno povezivanje',
    'ldap_fail_authed' => 'LDAP pristup nije uspio koristeći date detalje lozinke i dn',
    'ldap_extension_not_installed' => 'LDAP PHP ekstenzija nije instalirana',
    'ldap_cannot_connect' => 'Nije se moguće povezati sa ldap serverom, incijalna konekcija nije uspjela',
    'saml_already_logged_in' => 'Već prijavljeni',
    'saml_no_email_address' => 'E-mail adresa za ovog korisnika nije nađena u podacima dobijenim od eksternog autentifikacijskog sistema',
    'saml_invalid_response_id' => 'Proces, koji je pokrenula ova aplikacija, nije prepoznao zahtjev od eksternog sistema za autentifikaciju. Navigacija nazad nakon prijave može uzrokovati ovaj problem.',
    'saml_fail_authed' => 'Prijava koristeći :system nije uspjela, sistem nije obezbijedio uspješnu autorizaciju',
    'oidc_already_logged_in' => 'Already logged in',
    'oidc_no_email_address' => 'Could not find an email address, for this user, in the data provided by the external authentication system',
    'oidc_fail_authed' => 'Login using :system failed, system did not provide successful authorization',
    'social_no_action_defined' => 'Nema definisane akcije',
    'social_login_bad_response' => "Došlo je do greške prilikom prijave preko :socialAccount :\n:error",
    'social_account_in_use' => 'Ovaj :socialAccount račun se već koristi, pokušajte se prijaviti putem :socialAccount opcije.',
    'social_account_email_in_use' => 'E-mail :email se već koristi. Ako već imate račun možete povezati vaš :socialAccount račun u postavkama profila.',
    'social_account_existing' => 'Ovaj :socialAccount je već povezan sa vašim profilom.',
    'social_account_already_used_existing' => 'Drugi korisnik već koristi ovaj :socialAccount.',
    'social_account_not_used' => 'Ovaj :socialAccount nije povezan ni sa jednim korisnikom. Povežite ga u postavkama profila. ',
    'social_account_register_instructions' => 'Ako još uvijek nemate račun, možete se registrovati koristeći :socialAccount opciju.',
    'social_driver_not_found' => 'Driver društvene mreže nije pronađen',
    'social_driver_not_configured' => 'Vaše :socialAccount postavke nisu konfigurisane ispravno.',
    'invite_token_expired' => 'Pozivni link je istekao. Možete umjesto toga pokušati da resetujete lozinku.',
    'login_user_not_found' => 'A user for this action could not be found.',

    // System
    'path_not_writable' => 'Na putanju fajla :filePath se ne može učitati. Potvrdite da je omogućeno pisanje na server.',
    'cannot_get_image_from_url' => 'Nije moguće dobiti sliku sa :url',
    'cannot_create_thumbs' => 'Server ne može kreirati sličice. Provjerite da imate instaliranu GD PHP ekstenziju.',
    'server_upload_limit' => 'Server ne dopušta učitavanja ove veličine. Pokušajte sa manjom veličinom fajla.',
    'server_post_limit' => 'The server cannot receive the provided amount of data. Try again with less data or a smaller file.',
    'uploaded'  => 'Server ne dopušta učitavanja ove veličine. Pokušajte sa manjom veličinom fajla.',

    // Drawing & Images
    'image_upload_error' => 'Desila se greška prilikom učitavanja slike',
    'image_upload_type_error' => 'Vrsta slike koja se učitava je neispravna',
    'image_upload_replace_type' => 'Image file replacements must be of the same type',
    'image_upload_memory_limit' => 'Failed to handle image upload and/or create thumbnails due to system resource limits.',
    'image_thumbnail_memory_limit' => 'Failed to create image size variations due to system resource limits.',
    'image_gallery_thumbnail_memory_limit' => 'Failed to create gallery thumbnails due to system resource limits.',
    'drawing_data_not_found' => 'Drawing data could not be loaded. The drawing file might no longer exist or you may not have permission to access it.',

    // Attachments
    'attachment_not_found' => 'Prilog nije pronađen',
    'attachment_upload_error' => 'An error occurred uploading the attachment file',

    // Pages
    'page_draft_autosave_fail' => 'Snimanje skice nije uspjelo. Provjerite da ste povezani na internet prije snimanja ove stranice',
    'page_draft_delete_fail' => 'Failed to delete page draft and fetch current page saved content',
    'page_custom_home_deletion' => 'Stranicu nije moguće izbrisati dok se koristi kao početna stranica',

    // Entities
    'entity_not_found' => 'Entitet nije pronađen',
    'bookshelf_not_found' => 'Shelf not found',
    'book_not_found' => 'Knjiga nije pronađena',
    'page_not_found' => 'Stranica nije pronađena',
    'chapter_not_found' => 'Poglavlje nije pronađeno',
    'selected_book_not_found' => 'Odabrana knjiga nije pronađena',
    'selected_book_chapter_not_found' => 'Odabrana knjiga ili poglavlje nije pronađeno',
    'guests_cannot_save_drafts' => 'Gosti ne mogu snimati skice',

    // Users
    'users_cannot_delete_only_admin' => 'Ne možete izbrisati jedinog administratora',
    'users_cannot_delete_guest' => 'Ne možete izbrisati gost korisnika',
    'users_could_not_send_invite' => 'Could not create user since invite email failed to send',

    // Roles
    'role_cannot_be_edited' => 'Ova uloga ne može biti mijenjana',
    'role_system_cannot_be_deleted' => 'Ova uloga je sistemska uloga i ne može biti izbrisana',
    'role_registration_default_cannot_delete' => 'Ova uloga ne može biti izbrisana dok je postavljena kao osnovna registracijska uloga',
    'role_cannot_remove_only_admin' => 'Ovaj korisnik je jedini korisnik sa ulogom administratora. Postavite ulogu administratora drugom korisniku prije nego je uklonite ovdje.',

    // Comments
    'comment_list' => 'Desila se greška prilikom dobavljanja komentara.',
    'cannot_add_comment_to_draft' => 'Ne možete dodati komentare na skicu.',
    'comment_add' => 'Desila se greška prilikom dodavanja / ažuriranja komentara.',
    'comment_delete' => 'Desila se greška prilikom brisanja komentara.',
    'empty_comment' => 'Nemoguće dodati prazan komentar.',

    // Error pages
    '404_page_not_found' => 'Stranica nije pronađena',
    'sorry_page_not_found' => 'Stranica koju ste tražili nije pronađena.',
    'sorry_page_not_found_permission_warning' => 'Ako ste očekivali da ova stranica postoji, možda nemate privilegije da joj pristupite.',
    'image_not_found' => 'Image Not Found',
    'image_not_found_subtitle' => 'Sorry, The image file you were looking for could not be found.',
    'image_not_found_details' => 'If you expected this image to exist it might have been deleted.',
    'return_home' => 'Nazad na početnu stranu',
    'error_occurred' => 'Desila se greška',
    'app_down' => ':appName trenutno nije u funkciji',
    'back_soon' => 'Biti će uskoro u funkciji.',

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
    'api_no_authorization_found' => 'Na zahtjevu nije pronađen token za autorizaciju',
    'api_bad_authorization_format' => 'Token za autorizaciju je pronađen u zahtjevu ali je format neispravan',
    'api_user_token_not_found' => 'Nije pronađen odgovarajući API token za pruženi token autorizacije',
    'api_incorrect_token_secret' => 'Tajni ključ naveden za dati korišteni API token nije tačan',
    'api_user_no_api_permission' => 'Vlasnik korištenog API tokena nema dozvolu za upućivanje API poziva',
    'api_user_token_expired' => 'Autorizacijski token je istekao',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'Došlo je do greške prilikom slanja testnog e-maila:',

    // HTTP errors
    'http_ssr_url_no_match' => 'The URL does not match the configured allowed SSR hosts',
];
