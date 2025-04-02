<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Préférences',
    'settings_save' => 'Enregistrer les préférences',
    'system_version' => 'Version du système',
    'categories' => 'Catégories',

    // App Settings
    'app_customization' => 'Personnalisation',
    'app_features_security' => 'Fonctionnalités et sécurité',
    'app_name' => 'Nom de l\'application',
    'app_name_desc' => 'Ce nom est affiché dans l\'en-tête et les e-mails.',
    'app_name_header' => 'Afficher le nom dans l\'en-tête ?',
    'app_public_access' => 'Accès public',
    'app_public_access_desc' => 'L\'activation de cette option permettra aux visiteurs, qui ne sont pas connectés, d\'accéder au contenu de votre instance BookStack.',
    'app_public_access_desc_guest' => 'L\'accès pour les visiteurs publics peut être contrôlé par l\'utilisateur "Guest".',
    'app_public_access_toggle' => 'Autoriser l\'accès public',
    'app_public_viewing' => 'Accepter l\'affichage public des pages ?',
    'app_secure_images' => 'Ajout d\'image sécurisé',
    'app_secure_images_toggle' => 'Activer l\'ajout d\'image sécurisé',
    'app_secure_images_desc' => 'Pour des questions de performances, toutes les images sont publiques. Cette option ajoute une chaîne aléatoire difficile à deviner dans les URLs des images.',
    'app_default_editor' => 'Éditeur de page par défaut',
    'app_default_editor_desc' => 'Sélectionnez l\'éditeur qui sera utilisé par défaut lors de l\'édition de nouvelles pages. Cela peut être remplacé au niveau de la page où les permissions sont autorisées.',
    'app_custom_html' => 'HTML personnalisé dans l\'en-tête',
    'app_custom_html_desc' => 'Le contenu inséré ici sera ajouté en bas de la balise <head> de toutes les pages. Vous pouvez l\'utiliser pour ajouter du CSS personnalisé ou un tracker analytique.',
    'app_custom_html_disabled_notice' => 'Le contenu de l\'en-tête HTML personnalisé est désactivé sur cette page de paramètres pour garantir que les modifications les plus récentes puissent être annulées.',
    'app_logo' => 'Logo de l\'application',
    'app_logo_desc' => 'Celui-ci est utilisé dans la barre d\'en-tête de l\'application, entre autres zones. L\'image doit être de 86 px de hauteur. Les plus grandes images seront réduites.',
    'app_icon' => 'Icône de l\'application',
    'app_icon_desc' => 'Cette icône est utilisée pour les onglets du navigateur et les icônes de raccourci. Doit être une image PNG carrée de 256 px.',
    'app_homepage' => 'Page d\'accueil de l\'application',
    'app_homepage_desc' => 'Choisissez une page à afficher sur la page d\'accueil au lieu de la vue par défaut. Les permissions sont ignorées pour les pages sélectionnées.',
    'app_homepage_select' => 'Choisissez une page',
    'app_footer_links' => 'Liens de pied de page',
    'app_footer_links_desc' => 'Ajoutez des liens dans le pied de page du site. Ils seront affichés en bas de la plupart des pages, incluant celles qui ne nécesittent pas de connexion. Vous pouvez utiliser l\'étiquette "trans::<key>" pour utiliser les traductions définies par le système. Par exemple, utiliser "trans::common.privacy_policy" fournira la traduction de "Politique de Confidentalité" et "trans::common.terms_of_service" fournira la traduction de "Conditions d\'utilisation".',
    'app_footer_links_label' => 'Libellé du lien',
    'app_footer_links_url' => 'URL du lien',
    'app_footer_links_add' => 'Ajouter un lien en pied de page',
    'app_disable_comments' => 'Désactiver les commentaires',
    'app_disable_comments_toggle' => 'Désactiver les commentaires',
    'app_disable_comments_desc' => 'Désactive les commentaires sur toutes les pages de l\'application. Les commentaires existants ne sont pas affichés.',

    // Color settings
    'color_scheme' => 'Schéma de couleurs de l\'application',
    'color_scheme_desc' => 'Défini les couleurs à utiliser dans l\'interface utilisateur de l\'application. Les couleurs peuvent être configurées séparément pour les modes sombre et clair pour mieux correspondre au thème et assurer la lisibilité.',
    'ui_colors_desc' => 'Défini la couleur primaire de l\'application et la couleur de lien par défaut. La couleur primaire est principalement utilisée pour la bannière d\'en-tête, les boutons et les décorations de l\'interface. La couleur par défaut du lien est utilisée pour les liens et les actions basées sur le texte, à la fois dans le contenu écrit et dans l\'interface de l\'application.',
    'app_color' => 'Couleur primaire',
    'link_color' => 'Couleur de lien par défaut',
    'content_colors_desc' => 'Défini les couleurs pour tous les éléments de la hiérarchie d\'organisation des pages. Choisir les couleurs avec une luminosité similaire aux couleurs par défaut est recommandé pour la lisibilité.',
    'bookshelf_color' => 'Couleur des étagères',
    'book_color' => 'Couleur des livres',
    'chapter_color' => 'Couleur des chapitres',
    'page_color' => 'Couleur des pages',
    'page_draft_color' => 'Couleur des brouillons',

    // Registration Settings
    'reg_settings' => 'Préférence pour l\'inscription',
    'reg_enable' => 'Activer l\'inscription',
    'reg_enable_toggle' => 'Activer l\'inscription',
    'reg_enable_desc' => 'Lorsque l\'inscription est activée, l\'utilisateur pourra s\'enregistrer en tant qu\'utilisateur de l\'application. Lors de l\'inscription, ils se voient attribuer un rôle par défaut.',
    'reg_default_role' => 'Rôle par défaut lors de l\'inscription',
    'reg_enable_external_warning' => 'L\'option ci-dessus est ignorée lorsque l\'authentification externe LDAP ou SAML est activée. Les comptes utilisateur pour les membres non existants seront créés automatiquement si l\'authentification, par rapport au système externe utilisé, est réussie.',
    'reg_email_confirmation' => 'Confirmation de l\'e-mail',
    'reg_email_confirmation_toggle' => 'Obliger la confirmation par e-mail ?',
    'reg_confirm_email_desc' => 'Si la restriction de domaine est activée, la confirmation sera automatiquement obligatoire et cette valeur sera ignorée.',
    'reg_confirm_restrict_domain' => 'Restreindre l\'inscription à un domaine',
    'reg_confirm_restrict_domain_desc' => 'Entrez une liste de domaines acceptés lors de l\'inscription, séparés par une virgule. Les utilisateurs recevront un e-mail de confirmation à cette adresse. <br> Les utilisateurs pourront changer leur adresse après inscription s\'ils le souhaitent.',
    'reg_confirm_restrict_domain_placeholder' => 'Aucune restriction en place',

    // Sorting Settings
    'sorting' => 'Tri',
    'sorting_book_default' => 'Tri des livres par défaut',
    'sorting_book_default_desc' => 'Sélectionnez le tri par défaut à mettre en place sur les nouveaux livres. Cela n’affectera pas les livres existants, et peut être redéfini dans les livres.',
    'sorting_rules' => 'Règles de tri',
    'sorting_rules_desc' => 'Ce sont les opérations de tri qui peuvent être appliquées au contenu du système.',
    'sort_rule_assigned_to_x_books' => 'Assignée à :count livre|Assignée à :count livres',
    'sort_rule_create' => 'Créer une règle de tri',
    'sort_rule_edit' => 'Modifier une règle de tri',
    'sort_rule_delete' => 'Supprimer une règle de tri',
    'sort_rule_delete_desc' => 'Supprimer cette règle du système. Les livres l’utilisant précédemment reviendront au tri manuel.',
    'sort_rule_delete_warn_books' => 'Cette règle est actuellement utilisée par :count livre(s). Êtes-vous sûr·e de vouloir la supprimer ?',
    'sort_rule_delete_warn_default' => 'Cette règle est actuellement utilisée par défaut pour les livres. Êtes-vous sûr·e de vouloir la supprimer ?',
    'sort_rule_details' => 'Détails de la Règle de Tri',
    'sort_rule_details_desc' => 'Assignez un nom à cette règle, qui apparaîtra dans les listes servant à sélectionner une règle de tri.',
    'sort_rule_operations' => 'Opérations de tri',
    'sort_rule_operations_desc' => 'Configurez les actions de tri à appliquer en les déplaçant depuis la liste d’opérations. Lors de l’usage de cette règle, les opérations seront appliquées dans l’ordre, de haut en bas. Les changements effectués ici seront appliqués à tous les livres utilisant cette règle lors de la sauvegarde.',
    'sort_rule_available_operations' => 'Opérations disponibles',
    'sort_rule_available_operations_empty' => 'Aucune opération restante',
    'sort_rule_configured_operations' => 'Opérations sélectionnées',
    'sort_rule_configured_operations_empty' => 'Déplacez/ajoutez des opérations depuis la liste "Opérations disponibles"',
    'sort_rule_op_asc' => '(Asc)',
    'sort_rule_op_desc' => '(Desc)',
    'sort_rule_op_name' => 'Nom - Alphabétique',
    'sort_rule_op_name_numeric' => 'Nom - Numérique',
    'sort_rule_op_created_date' => 'Date de création',
    'sort_rule_op_updated_date' => 'Date de mise à jour',
    'sort_rule_op_chapters_first' => 'Chapitres en premier',
    'sort_rule_op_chapters_last' => 'Chapitres en dernier',

    // Maintenance settings
    'maint' => 'Maintenance',
    'maint_image_cleanup' => 'Nettoyer les images',
    'maint_image_cleanup_desc' => 'Scanne le contenu des pages et des révisions pour vérifier les images, les dessins en cours d\'utilisation et les doublons. Assurez-vous d\'avoir une sauvegarde de la base de données et des images avant de lancer ceci.',
    'maint_delete_images_only_in_revisions' => 'Supprimer également les images qui n\'existent que dans les anciennes révisions de page',
    'maint_image_cleanup_run' => 'Lancer le nettoyage',
    'maint_image_cleanup_warning' => ':count images potentiellement inutilisées trouvées. Êtes-vous sûr de vouloir supprimer ces images ?',
    'maint_image_cleanup_success' => ':count images potentiellement inutilisées trouvées et supprimées !',
    'maint_image_cleanup_nothing_found' => 'Aucune image inutilisée trouvée, rien à supprimer !',
    'maint_send_test_email' => 'Envoyer un e-mail de test',
    'maint_send_test_email_desc' => 'Ceci envoie un e-mail de test à votre adresse e-mail spécifiée dans votre profil.',
    'maint_send_test_email_run' => 'Envoyer un e-mail de test',
    'maint_send_test_email_success' => 'E-mail envoyé à :address',
    'maint_send_test_email_mail_subject' => 'E-mail de test',
    'maint_send_test_email_mail_greeting' => 'L\'envoi d\'e-mail semble fonctionner !',
    'maint_send_test_email_mail_text' => 'Félicitations ! Comme vous avez bien reçu cette notification, vos paramètres d\'e-mail semblent être configurés correctement.',
    'maint_recycle_bin_desc' => 'Les étagères, livres, chapitres et pages supprimés sont envoyés dans la corbeille afin qu\'ils puissent être restaurés ou supprimés définitivement. Les éléments plus anciens de la corbeille peuvent être supprimés automatiquement après un certain temps selon la configuration du système.',
    'maint_recycle_bin_open' => 'Ouvrir la corbeille',
    'maint_regen_references' => 'Régénérer les références',
    'maint_regen_references_desc' => 'Cette action reconstruira l\'index des références croisées dans la base de données. Ceci est généralement géré automatiquement, mais cette action peut être utile pour indexer les anciens contenus ou contenus ajoutés par des méthodes non officielles.',
    'maint_regen_references_success' => 'L\'index de référence a été régénéré !',
    'maint_timeout_command_note' => 'Note : Cette action peut prendre du temps pour s\'exécuter, ce qui peut conduire à des problèmes d\'expiration dans certains environnements Web. En tant qu\'alternative, cette action peut être effectuée à l\'aide d\'une commande de terminal.',

    // Recycle Bin
    'recycle_bin' => 'Corbeille',
    'recycle_bin_desc' => 'Ici, vous pouvez restaurer les éléments qui ont été supprimés ou choisir de les effacer définitivement du système. Cette liste n\'est pas filtrée contrairement aux listes d\'activités similaires dans le système pour lesquelles les filtres d\'autorisation sont appliqués.',
    'recycle_bin_deleted_item' => 'Élément supprimé',
    'recycle_bin_deleted_parent' => 'Parent',
    'recycle_bin_deleted_by' => 'Supprimé par',
    'recycle_bin_deleted_at' => 'Date de suppression',
    'recycle_bin_permanently_delete' => 'Supprimer définitivement',
    'recycle_bin_restore' => 'Restaurer',
    'recycle_bin_contents_empty' => 'La corbeille est vide',
    'recycle_bin_empty' => 'Vider la corbeille',
    'recycle_bin_empty_confirm' => 'Cela détruira définitivement tous les éléments de la corbeille, y compris le contenu de chaque élément. Êtes-vous sûr de vouloir vider la corbeille ?',
    'recycle_bin_destroy_confirm' => 'Cette action supprimera définitivement cet élément du système ainsi que tous les éléments enfants listés ci-dessous et vous ne pourrez plus restaurer ce contenu. Êtes-vous sûr de vouloir supprimer définitivement cet élément ?',
    'recycle_bin_destroy_list' => 'Éléments à détruire',
    'recycle_bin_restore_list' => 'Éléments à restaurer',
    'recycle_bin_restore_confirm' => 'Cette action restaurera l\'élément supprimé, y compris tous les éléments enfants, à leur emplacement d\'origine. Si l\'emplacement d\'origine a été supprimé depuis et est maintenant dans la corbeille, l\'élément parent devra également être restauré.',
    'recycle_bin_restore_deleted_parent' => 'Le parent de cet élément a aussi été supprimé. Cet élément ne pourra être restauré sans que son parent le soit également.',
    'recycle_bin_restore_parent' => 'Restaurer le parent',
    'recycle_bin_destroy_notification' => ':count éléments supprimés de la corbeille au total.',
    'recycle_bin_restore_notification' => ':count éléments restaurés de la corbeille au total.',

    // Audit Log
    'audit' => 'Journal d\'audit',
    'audit_desc' => 'Ce journal d\'audit affiche un suivi des activités de l\'application. Cette liste n\'est pas filtrée contrairement aux suivis d\'activités similaires de l\'application où les filtres d\'autorisation sont appliqués.',
    'audit_event_filter' => 'Filtres d\'événement',
    'audit_event_filter_no_filter' => 'Pas de filtre',
    'audit_deleted_item' => 'Élément supprimé',
    'audit_deleted_item_name' => 'Nom: :name',
    'audit_table_user' => 'Utilisateur',
    'audit_table_event' => 'Événement',
    'audit_table_related' => 'Élément concerné ou action réalisée',
    'audit_table_ip' => 'Adresse IP',
    'audit_table_date' => 'Horodatage',
    'audit_date_from' => 'À partir du',
    'audit_date_to' => 'Jusqu\'au',

    // Role Settings
    'roles' => 'Rôles',
    'role_user_roles' => 'Rôles des utilisateurs',
    'roles_index_desc' => 'Les rôles sont utilisés pour regrouper les utilisateurs et fournir une autorisation système à leurs membres. Lorsqu\'un utilisateur est membre de plusieurs rôles, les privilèges accordés se cumulent et l\'utilisateur hérite de tous les droits d\'accès.',
    'roles_x_users_assigned' => ':count utilisateur assigné|:count utilisateurs assignés',
    'roles_x_permissions_provided' => ':count permission|:count permissions',
    'roles_assigned_users' => 'Utilisateurs assignés',
    'roles_permissions_provided' => 'Permissions accordées',
    'role_create' => 'Créer un nouveau rôle',
    'role_delete' => 'Supprimer le rôle',
    'role_delete_confirm' => 'Ceci va supprimer le rôle \':roleName\'.',
    'role_delete_users_assigned' => 'Ce rôle a :userCount utilisateurs assignés. Vous pouvez choisir un rôle de remplacement pour ces utilisateurs.',
    'role_delete_no_migration' => "Ne pas assigner de nouveau rôle",
    'role_delete_sure' => 'Êtes-vous sûr de vouloir supprimer ce rôle ?',
    'role_edit' => 'Modifier le rôle',
    'role_details' => 'Détails du rôle',
    'role_name' => 'Nom du rôle',
    'role_desc' => 'Courte description du rôle',
    'role_mfa_enforced' => 'Nécessite une authentification multi-facteurs',
    'role_external_auth_id' => 'Identifiants d\'authentification externes',
    'role_system' => 'Permissions système',
    'role_manage_users' => 'Gérer les utilisateurs',
    'role_manage_roles' => 'Gérer les rôles et permissions',
    'role_manage_entity_permissions' => 'Gérer les permissions sur les livres, chapitres et pages',
    'role_manage_own_entity_permissions' => 'Gérer les permissions de ses propres livres, chapitres et pages',
    'role_manage_page_templates' => 'Gérer les modèles de page',
    'role_access_api' => 'Accès à l\'API du système',
    'role_manage_settings' => 'Gérer les préférences de l\'application',
    'role_export_content' => 'Exporter le contenu',
    'role_import_content' => 'Importer le contenu',
    'role_editor_change' => 'Changer l\'éditeur de page',
    'role_notifications' => 'Recevoir et gérer les notifications',
    'role_asset' => 'Permissions des ressources',
    'roles_system_warning' => 'Sachez que l\'accès à l\'une des trois permissions ci-dessus peut permettre à un utilisateur de modifier ses propres privilèges ou les privilèges des autres utilisateurs du système. N\'attribuez uniquement des rôles avec ces permissions qu\'à des utilisateurs de confiance.',
    'role_asset_desc' => 'Ces permissions contrôlent l\'accès par défaut des ressources dans le système. Les permissions dans les livres, les chapitres et les pages ignoreront ces permissions',
    'role_asset_admins' => 'Les administrateurs ont automatiquement accès à tous les contenus mais les options suivantes peuvent afficher ou masquer certaines options de l\'interface.',
    'role_asset_image_view_note' => 'Cela concerne la visibilité dans le gestionnaire d\'images. L\'accès réel des fichiers d\'image téléchargés dépendra de l\'option de stockage d\'images du système.',
    'role_all' => 'Tous',
    'role_own' => 'Propres',
    'role_controlled_by_asset' => 'Contrôlé par les ressources les ayant envoyés',
    'role_save' => 'Enregistrer le rôle',
    'role_users' => 'Utilisateurs ayant ce rôle',
    'role_users_none' => 'Aucun utilisateur avec ce rôle actuellement',

    // Users
    'users' => 'Utilisateurs',
    'users_index_desc' => 'Créer et gérer des comptes utilisateur individuels au sein du système. Les comptes utilisateur sont employés pour la connexion et l\'attribution du contenu et le suivi d\'activité. Les permissions d\'accès sont principalement basées sur les rôles, mais la propriété du contenu de l\'utilisateur, entre autres facteurs, peut également affecter les permissions et l\'accès.',
    'user_profile' => 'Profil d\'utilisateur',
    'users_add_new' => 'Ajouter un nouvel utilisateur',
    'users_search' => 'Rechercher les utilisateurs',
    'users_latest_activity' => 'Dernière activité',
    'users_details' => 'Informations de l\'utilisateur',
    'users_details_desc' => 'Définissez un nom et une adresse e-mail pour cet utilisateur. L\'adresse e-mail sera utilisée pour se connecter à l\'application.',
    'users_details_desc_no_email' => 'Définissez un nom d\'affichage pour cet utilisateur afin que les autres puissent le reconnaître.',
    'users_role' => 'Rôles de l\'utilisateur',
    'users_role_desc' => 'Sélectionnez les rôles auxquels cet utilisateur sera affecté. Si un utilisateur est affecté à plusieurs rôles, les permissions de ces rôles s\'empileront et ils recevront toutes les capacités des rôles affectés.',
    'users_password' => 'Mot de passe de l\'utilisateur',
    'users_password_desc' => 'Définissez un mot de passe pour vous connecter à l\'application. Il doit comporter au moins 8 caractères.',
    'users_send_invite_text' => 'Vous pouvez choisir d\'envoyer à cet utilisateur un e-mail d\'invitation qui lui permet de définir son propre mot de passe, sinon vous pouvez définir son mot de passe vous-même.',
    'users_send_invite_option' => 'Envoyer l\'e-mail d\'invitation',
    'users_external_auth_id' => 'Identifiant d\'authentification externe',
    'users_external_auth_id_desc' => 'Lorsqu\'un système d\'authentification externe est utilisé (SAML2, OIDC ou LDAP) c\'est l\'identifiant unique qui relie cet utilisateur à un compte système d\'authentification. Vous pouvez ignorer ce champ si vous utilisez l\'authentification email par défaut.',
    'users_password_warning' => 'Remplissez ce qui suit uniquement si vous souhaitez changer le mot de passe de cet utilisateur.',
    'users_system_public' => 'Cet utilisateur représente les invités visitant votre instance. Il est assigné automatiquement aux invités.',
    'users_delete' => 'Supprimer un utilisateur',
    'users_delete_named' => 'Supprimer l\'utilisateur :userName',
    'users_delete_warning' => 'Ceci va supprimer \':userName\' du système.',
    'users_delete_confirm' => 'Êtes-vous sûr(e) de vouloir supprimer cet utilisateur ?',
    'users_migrate_ownership' => 'Transférer la propriété',
    'users_migrate_ownership_desc' => 'Sélectionnez un utilisateur ici si vous voulez qu\'un autre utilisateur devienne le propriétaire de tous les éléments actuellement détenus par cet utilisateur.',
    'users_none_selected' => 'Aucun utilisateur n\'a été sélectionné',
    'users_edit' => 'Modifier l\'utilisateur',
    'users_edit_profile' => 'Modifier le profil',
    'users_avatar' => 'Avatar de l\'utilisateur',
    'users_avatar_desc' => 'Cette image doit être un carré d\'environ 256 px.',
    'users_preferred_language' => 'Langue préférée',
    'users_preferred_language_desc' => 'Cette option changera la langue utilisée pour l\'interface utilisateur de l\'application. Ceci n\'affectera aucun contenu créé par l\'utilisateur.',
    'users_social_accounts' => 'Réseaux sociaux',
    'users_social_accounts_desc' => 'Voir l\'état des comptes sociaux connectés pour cet utilisateur. Les comptes sociaux peuvent être utilisés en plus du système d\'authentification principal pour l\'accès au système.',
    'users_social_accounts_info' => 'Vous pouvez connecter des réseaux sociaux à votre compte pour vous connecter plus rapidement. Déconnecter un compte n\'enlèvera pas les accès autorisés précédemment sur votre compte de réseau social.',
    'users_social_connect' => 'Connecter le compte',
    'users_social_disconnect' => 'Déconnecter le compte',
    'users_social_status_connected' => 'Connecté',
    'users_social_status_disconnected' => 'Déconnecté',
    'users_social_connected' => 'Votre compte :socialAccount a été ajouté avec succès.',
    'users_social_disconnected' => 'Votre compte :socialAccount a été déconnecté avec succès',
    'users_api_tokens' => 'Jetons API',
    'users_api_tokens_desc' => 'Créer et gérer les jetons d\'accès utilisés pour s\'authentifier avec l\'API REST de BookStack. Les permissions pour l\'API sont gérées par l\'utilisateur auquel le jeton appartient.',
    'users_api_tokens_none' => 'Aucun jeton API n\'a été créé pour cet utilisateur',
    'users_api_tokens_create' => 'Créer un jeton',
    'users_api_tokens_expires' => 'Expire',
    'users_api_tokens_docs' => 'Documentation de l\'API',
    'users_mfa' => 'Authentification multi-facteurs',
    'users_mfa_desc' => 'Configurer l\'authentification multi-facteurs ajoute une couche supplémentaire de sécurité à votre compte utilisateur.',
    'users_mfa_x_methods' => ':count méthode configurée|:count méthodes configurées',
    'users_mfa_configure' => 'Méthode de configuration',

    // API Tokens
    'user_api_token_create' => 'Créer un nouveau jeton API',
    'user_api_token_name' => 'Nom',
    'user_api_token_name_desc' => 'Donnez à votre jeton un nom lisible pour l\'identifier plus tard.',
    'user_api_token_expiry' => 'Date d\'expiration',
    'user_api_token_expiry_desc' => 'Définissez une date à laquelle ce jeton expire. Après cette date, les demandes effectuées à l\'aide de ce jeton ne fonctionneront plus. Le fait de laisser ce champ vide entraînera une expiration dans 100 ans.',
    'user_api_token_create_secret_message' => 'Immédiatement après la création de ce jeton, un "ID de jeton" "et" Secret de jeton "sera généré et affiché. Le secret ne sera affiché qu\'une seule fois, alors assurez-vous de copier la valeur dans un endroit sûr et sécurisé avant de continuer.',
    'user_api_token' => 'Jeton API',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'Il s\'agit d\'un identifiant généré par le système non modifiable pour ce jeton qui devra être fourni dans les demandes d\'API.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'Il s\'agit d\'un secret généré par le système pour ce jeton, qui devra être fourni dans les demandes d\'API. Cela ne sera affiché qu\'une seule fois, alors copiez cette valeur dans un endroit sûr et sécurisé.',
    'user_api_token_created' => 'Jeton créé :timeAgo',
    'user_api_token_updated' => 'Jeton mis à jour :timeAgo',
    'user_api_token_delete' => 'Supprimer le jeton',
    'user_api_token_delete_warning' => 'Cela supprimera complètement le jeton d\'API avec le nom \':tokenName\'.',
    'user_api_token_delete_confirm' => 'Souhaitez-vous vraiment effacer ce jeton API ?',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_index_desc' => 'Les Webhooks sont un moyen d\'envoyer des données à des URL externes lorsque certaines actions et événements se produisent dans le système, ce qui permet une intégration basée sur des événements avec des plates-formes externes telles que les systèmes de messagerie ou de notification.',
    'webhooks_x_trigger_events' => ':count événement déclencheur|:count événements déclencheurs',
    'webhooks_create' => 'Créer un nouveau Webhook',
    'webhooks_none_created' => 'Aucun webhook n\'a encore été créé.',
    'webhooks_edit' => 'Éditer le Webhook',
    'webhooks_save' => 'Enregistrer le Webhook',
    'webhooks_details' => 'Détails du Webhook',
    'webhooks_details_desc' => 'Renseignez un nom ainsi que votre endpoint POST sur lequel les données du webhook doivent être envoyées.',
    'webhooks_events' => 'Événements du Webhook',
    'webhooks_events_desc' => 'Sélectionnez tous les évènements qui doivent déclencher un appel sur ce webhook.',
    'webhooks_events_warning' => 'Gardez à l\'esprit que ces événements seront déclenchés pour chaque événement sélectionné, même si des permissions personnalisées sont appliquées. Vérifiez bien que l\'utilisation de ce webhook n\'exposera pas de contenu confidentiel.',
    'webhooks_events_all' => 'Tous les événements système',
    'webhooks_name' => 'Nom du Webhook',
    'webhooks_timeout' => 'Délai d\'expiration de requête du Webhook (en secondes)',
    'webhooks_endpoint' => 'Point de terminaison du Webhook',
    'webhooks_active' => 'Webhook actif',
    'webhook_events_table_header' => 'Événements',
    'webhooks_delete' => 'Supprimer le Webhook',
    'webhooks_delete_warning' => 'Ceci supprimera complètement du système le webhook ayant le nom \':webhookName\'.',
    'webhooks_delete_confirm' => 'Êtes-vous sûr(e) de vouloir supprimer ce webhook ?',
    'webhooks_format_example' => 'Exemple de format de webhook',
    'webhooks_format_example_desc' => 'Les données du webhook sont envoyées dans une requête POST vers l\'endpoint au format JSON respectant le format ci-dessous. Les propriétés "related_item" et "url" sont optionnelles et dépendront du type d\'événement déclenché.',
    'webhooks_status' => 'Statut du webhook',
    'webhooks_last_called' => 'Dernier appel :',
    'webhooks_last_errored' => 'Dernier en erreur :',
    'webhooks_last_error_message' => 'Dernier message d\'erreur : ',

    // Licensing
    'licenses' => 'Licences',
    'licenses_desc' => 'Cette page détaille les informations de licence pour BookStack ainsi que les projets et librairies utilisées dans BookStack. Nombre des projets listés peuvent n\'être utilisés que dans un contexte de développement.',
    'licenses_bookstack' => 'Licences BookStack',
    'licenses_php' => 'Licences de librairies PHP',
    'licenses_js' => 'Licences de librairies JavaScript',
    'licenses_other' => 'Autres Licences',
    'license_details' => 'Détails de la licence',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'Anglais',
        'ar' => 'Arabe',
        'bg' => 'Bulgare',
        'bs' => 'Bosniaque',
        'ca' => 'Catalan',
        'cs' => 'Tchèque',
        'cy' => 'Cymraeg',
        'da' => 'Danois',
        'de' => 'Allemand',
        'de_informal' => 'Allemand (informel)',
        'el' => 'ελληνικά',
        'es' => 'Espagnol',
        'es_AR' => 'Espagnol (Argentine)',
        'et' => 'Estonien',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fi' => 'Suomi',
        'fr' => 'Français',
        'he' => 'Hébreu',
        'hr' => 'Croate',
        'hu' => 'Hongrois',
        'id' => 'Indonésien',
        'it' => 'Italien',
        'ja' => 'Japonais',
        'ko' => 'Coréen',
        'lt' => 'Lituanien',
        'lv' => 'Letton',
        'nb' => 'Norvegien',
        'nn' => 'Nynorsk',
        'nl' => 'Néerlandais',
        'pl' => 'Polonais',
        'pt' => 'Portugais',
        'pt_BR' => 'Portugais (Brésil)',
        'ro' => 'Română',
        'ru' => 'Russe',
        'sk' => 'Slovaque',
        'sl' => 'Slovène',
        'sv' => 'Suédois',
        'tr' => 'Turc',
        'uk' => 'Ukrainien',
        'uz' => 'O‘zbekcha',
        'vi' => 'Vietnamien',
        'zh_CN' => 'Chinois (simplifié)',
        'zh_TW' => 'Mandarin de Taïwan',
    ],
    //!////////////////////////////////
];
