<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'Du har ikkje tilgang til å sjå denne sida.',
    'permissionJson' => 'Du har ikke tilgang til å utføre denne handlingen.',

    // Auth
    'error_user_exists_different_creds' => 'En konto med :email finnes allerede, men har andre detaljer.',
    'auth_pre_register_theme_prevention' => 'User account could not be registered for the provided details',
    'email_already_confirmed' => 'E-posten er allerede bekreftet, du kan forsøke å logge inn.',
    'email_confirmation_invalid' => 'Denne bekreftelseskoden er allerede benyttet eller utgått. Prøv å registrere på nytt.',
    'email_confirmation_expired' => 'Bekreftelseskoden er allerede utgått, en ny e-post er sendt.',
    'email_confirmation_awaiting' => 'Du må bekrefte e-posten for denne kontoen.',
    'ldap_fail_anonymous' => 'LDAP kan ikke benyttes med anonym tilgang for denne tjeneren.',
    'ldap_fail_authed' => 'LDAP tilgang feilet med angitt DN',
    'ldap_extension_not_installed' => 'LDAP PHP modulen er ikke installert.',
    'ldap_cannot_connect' => 'Klarer ikke koble til LDAP på denne adressen',
    'saml_already_logged_in' => 'Allerede logget inn',
    'saml_no_email_address' => 'Denne kontoinformasjonen finnes ikke i det eksterne autentiseringssystemet.',
    'saml_invalid_response_id' => 'Forespørselen fra det eksterne autentiseringssystemet gjenkjennes ikke av en prosess som startes av dette programmet. Å navigere tilbake etter pålogging kan forårsake dette problemet.',
    'saml_fail_authed' => 'Innlogging gjennom :system feilet. Fikk ikke kontakt med autentiseringstjeneren.',
    'oidc_already_logged_in' => 'Allerede logget inn',
    'oidc_no_email_address' => 'Finner ikke en e-postadresse, for denne brukeren, i dataene som leveres av det eksterne autentiseringssystemet',
    'oidc_fail_authed' => 'Innlogging ved hjelp av :system feilet, systemet ga ikke vellykket godkjenning',
    'social_no_action_defined' => 'Ingen handlinger er definert',
    'social_login_bad_response' => "Feilmelding mottat fra :socialAccount innloggingstjeneste: \n:error",
    'social_account_in_use' => 'Denne :socialAccount kontoen er allerede registrert, Prøv å logge inn med :socialAccount alternativet.',
    'social_account_email_in_use' => 'E-posten :email er allerede i bruk. Har du allerede en konto hos :socialAccount kan dette angis fra profilsiden din.',
    'social_account_existing' => 'Denne :socialAccount er allerede koblet til din konto.',
    'social_account_already_used_existing' => 'Denne :socialAccount kontoen brukes allerede av noen andre.',
    'social_account_not_used' => 'Denne :socialAccount konten er ikke koblet til noen konto, angi denne i profilinnstillingene dine. ',
    'social_account_register_instructions' => 'Har du ikke en konto her ennå, kan du benytte :socialAccount alternativet for å registrere deg.',
    'social_driver_not_found' => 'Autentiseringstjeneste fra sosiale medier er ikke installert',
    'social_driver_not_configured' => 'Dine :socialAccount innstilliner er ikke angitt.',
    'invite_token_expired' => 'Invitasjonslenken har utgått, du kan forsøke å be om nytt passord istede.',
    'login_user_not_found' => 'A user for this action could not be found.',

    // System
    'path_not_writable' => 'Filstien :filePath aksepterer ikkje filer, du må sjekke filstitilganger i systemet.',
    'cannot_get_image_from_url' => 'Kan ikkje hente bilete frå :url',
    'cannot_create_thumbs' => 'Kan ikkje opprette miniatyrbilete. GD PHP er ikkje installert.',
    'server_upload_limit' => 'Vedlegget er for stort, forsøk med et mindre vedlegg.',
    'server_post_limit' => 'Serveren kan ikkje ta i mot denne mengda med data. Prøv igjen med mindre data eller ei mindre fil.',
    'uploaded'  => 'Tjenesten aksepterer ikke vedlegg som er så stor.',

    // Drawing & Images
    'image_upload_error' => 'Biletet kunne ikkje lastast opp, prøv igjen',
    'image_upload_type_error' => 'Bileteformatet er ikkje støtta, prøv med eit anna format',
    'image_upload_replace_type' => 'Bileteerstatning må vere av same type',
    'image_upload_memory_limit' => 'Klarte ikkje å ta i mot bilete og lage miniatyrbilete grunna grenser knytt til systemet.',
    'image_thumbnail_memory_limit' => 'Klarte ikkje å lage miniatyrbilete grunna grenser knytt til systemet.',
    'image_gallery_thumbnail_memory_limit' => 'Klarte ikkje å lage miniatyrbilete grunna grenser knytt til systemet.',
    'drawing_data_not_found' => 'Tegningsdata kunne ikke lastes. Det er mulig at tegningsfilen ikke finnes lenger, eller du har ikke rettigheter til å få tilgang til den.',

    // Attachments
    'attachment_not_found' => 'Vedlegget ble ikke funnet',
    'attachment_upload_error' => 'En feil har oppstått ved opplasting av vedleggsfil',

    // Pages
    'page_draft_autosave_fail' => 'Kunne ikke lagre utkastet, forsikre deg om at du er tilkoblet tjeneren (Har du nettilgang?)',
    'page_draft_delete_fail' => 'Kunne ikke slette sideutkast og hente gjeldende side lagret innhold',
    'page_custom_home_deletion' => 'Kan ikke slette en side som er satt som forside.',

    // Entities
    'entity_not_found' => 'Entitet ble ikke funnet',
    'bookshelf_not_found' => 'Bokhyllen ble ikke funnet',
    'book_not_found' => 'Boken ble ikke funnet',
    'page_not_found' => 'Siden ble ikke funnet',
    'chapter_not_found' => 'Kapittel ble ikke funnet',
    'selected_book_not_found' => 'Den valgte boken eksisterer ikke',
    'selected_book_chapter_not_found' => 'Den valgte boken eller kapittelet eksisterer ikke',
    'guests_cannot_save_drafts' => 'Gjester kan ikke lagre utkast',

    // Users
    'users_cannot_delete_only_admin' => 'Du kan ikke kaste ut den eneste administratoren',
    'users_cannot_delete_guest' => 'Du kan ikke slette gjestebrukeren (Du kan deaktivere offentlig visning istede)',
    'users_could_not_send_invite' => 'Could not create user since invite email failed to send',

    // Roles
    'role_cannot_be_edited' => 'Denne rollen kan ikke endres',
    'role_system_cannot_be_deleted' => 'Denne systemrollen kan ikke slettes',
    'role_registration_default_cannot_delete' => 'Du kan ikke slette en rolle som er satt som registreringsrolle (rollen nye kontoer får når de registrerer seg)',
    'role_cannot_remove_only_admin' => 'Denne brukeren er den eneste brukeren som er tildelt administratorrollen. Tilordne administratorrollen til en annen bruker før du prøver å fjerne den her.',

    // Comments
    'comment_list' => 'Det oppstod en feil under henting av kommentarene.',
    'cannot_add_comment_to_draft' => 'Du kan ikke legge til kommentarer i et utkast.',
    'comment_add' => 'Det oppsto en feil da kommentaren skulle legges til / oppdateres.',
    'comment_delete' => 'Det oppstod en feil under sletting av kommentaren.',
    'empty_comment' => 'Kan ikke legge til en tom kommentar.',

    // Error pages
    '404_page_not_found' => 'Siden finnes ikke',
    'sorry_page_not_found' => 'Beklager, siden du leter etter ble ikke funnet.',
    'sorry_page_not_found_permission_warning' => 'Hvis du forventet at denne siden skulle eksistere, har du kanskje ikke tillatelse til å se den.',
    'image_not_found' => 'Bilete vart ikkje funne',
    'image_not_found_subtitle' => 'Orsak, biletefila vart ikkje funne.',
    'image_not_found_details' => 'Det kan sjå ut til at biletet du leiter etter er sletta.',
    'return_home' => 'Gå til hovedside',
    'error_occurred' => 'En feil oppsto',
    'app_down' => ':appName er nede for øyeblikket',
    'back_soon' => 'Den vil snart komme tilbake.',

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
    'api_no_authorization_found' => 'Ingen autorisasjonstoken ble funnet på forespørselen',
    'api_bad_authorization_format' => 'Det ble funnet et autorisasjonstoken på forespørselen, men formatet virket feil',
    'api_user_token_not_found' => 'Ingen samsvarende API-token ble funnet for det angitte autorisasjonstokenet',
    'api_incorrect_token_secret' => 'Hemmeligheten som er gitt for det gitte brukte API-tokenet er feil',
    'api_user_no_api_permission' => 'Eieren av det brukte API-tokenet har ikke tillatelse til å ringe API-samtaler',
    'api_user_token_expired' => 'Autorisasjonstokenet som er brukt, har utløpt',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'Feil kastet når du sendte en test-e-post:',

    // HTTP errors
    'http_ssr_url_no_match' => 'URLen samsvarer ikke med de konfigurerte SSR-vertene',
];
