<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Configurações',
    'settings_save' => 'Guardar Configurações',
    'system_version' => 'Versão do sistema',
    'categories' => 'Categorias',

    // App Settings
    'app_customization' => 'Personalização',
    'app_features_security' => 'Recursos & Segurança',
    'app_name' => 'Nome da Aplicação',
    'app_name_desc' => 'Este nome será mostrado no cabeçalho e em e-mails.',
    'app_name_header' => 'Mostrar o nome no cabeçalho',
    'app_public_access' => 'Acesso Público',
    'app_public_access_desc' => 'Ativar esta opção irá permitir que os visitantes que não estão autenticados, acedam ao conteúdo da sua instância do BookStack.',
    'app_public_access_desc_guest' => 'O acesso de visitantes públicos pode ser controlado através do utilizador "Convidado".',
    'app_public_access_toggle' => 'Permitir acesso público',
    'app_public_viewing' => 'Permitir visualização pública?',
    'app_secure_images' => 'Carregamento de Imagens mais Seguro',
    'app_secure_images_toggle' => 'Ativar o carregamento de imagem mais seguro',
    'app_secure_images_desc' => 'Por razões de performance, todas as imagens são públicas. Esta opção adiciona uma string aleatória na frente das Urls de imagens. Certifique-se de que os diretórios não possam ser indexados para prevenir acesso indesejado.',
    'app_default_editor' => 'Editor de Página Padrão',
    'app_default_editor_desc' => 'Selecione qual editor será usado por padrão ao editar novas páginas. Isto pode ser substituído a nível de página onde as permissões estiverem disponíveis.',
    'app_custom_html' => 'Conteúdo personalizado para para o Head do HTML',
    'app_custom_html_desc' => 'Quaisquer conteúdos aqui adicionados serão inseridos no final da secção <head> de cada página. Esta é uma maneira útil de sobrescrever estilos e adicionar códigos de análise de site.',
    'app_custom_html_disabled_notice' => 'O conteúdo personalizado do <head> HTML está desativado nesta página de configurações, para garantir que quaisquer alterações que acabem maliciosas possam ser revertidas.',
    'app_logo' => 'Logo da Aplicação',
    'app_logo_desc' => 'Isto é usado na barra de cabeçalho da aplicação, entre outras áreas. Esta imagem deve ter 86px de altura. Imagens grandes serão redimensionadas.',
    'app_icon' => 'Ícone da aplicação',
    'app_icon_desc' => 'Este ícone é usado para guias e ícones de atalhos do navegador. A imagem para o ícone deve ser quadrada, de lado 256px e com o formato PNG.',
    'app_homepage' => 'Página Inicial',
    'app_homepage_desc' => 'Selecione uma opção para ser exibida como página inicial em vez da padrão. Permissões de página serão ignoradas para as páginas selecionadas.',
    'app_homepage_select' => 'Selecione uma página',
    'app_footer_links' => 'Links do Rodapé',
    'app_footer_links_desc' => 'Adicionar links para mostrar dentro do rodapé do site. Estes serão exibidos no rodapé da maioria das páginas, incluindo as que não requerem autenticação. Pode utilizar uma etiqueta de "trans::<key>" para utilizar traduções definidas pelo sistema. Por exemplo: Utilizando "trans::common.privacy_policy" fornecerá o texto traduzido "Política de Privacidade" e "trans::common.terms_of_service" fornecerá o texto traduzido "Termos de Serviço".',
    'app_footer_links_label' => 'Etiqueta do Link',
    'app_footer_links_url' => 'URL do link',
    'app_footer_links_add' => 'Adicionar Link de Rodapé',
    'app_disable_comments' => 'Desativar Comentários',
    'app_disable_comments_toggle' => 'Desativar comentários',
    'app_disable_comments_desc' => 'Desativar comentários em todas as páginas da aplicação.<br> Comentários existentes não serão exibidos.',

    // Color settings
    'color_scheme' => 'Esquema de cores da aplicação',
    'color_scheme_desc' => 'Defina as cores a serem utilizadas na aplicação. As cores podem ser configuradas separadamente para modos escuro e claro para melhor se adequar ao tema e garantir legibilidade.',
    'ui_colors_desc' => 'Defina a cor primária e a cor padrão para links da aplicação. A cor principal é utilizada principalmente para o banner do cabeçalho, botões e decorações da interface. A cor padrão do link é usada para links e ações baseados em texto, tanto dentro do conteúdo escrito quanto na interface da aplicação.',
    'app_color' => 'Cor primária',
    'link_color' => 'Cor padrão do link',
    'content_colors_desc' => 'Definir cores para todos os elementos na hierarquia da organização da página. Escolher cores com um brilho semelhante às cores padrão é recomendado para a legibilidade.',
    'bookshelf_color' => 'Cor da Prateleira',
    'book_color' => 'Cor do Livro',
    'chapter_color' => 'Cor do Capítulo',
    'page_color' => 'Cor da Página',
    'page_draft_color' => 'Cor do Rascunho',

    // Registration Settings
    'reg_settings' => 'Inscrição',
    'reg_enable' => 'Permitir inscrições',
    'reg_enable_toggle' => 'Permitir inscrições',
    'reg_enable_desc' => 'Quando o registo é ativado, os visitantes poderão registar se como utilizadores padrão da aplicação.',
    'reg_default_role' => 'Papel por omissão apôs registo',
    'reg_enable_external_warning' => 'A opção acima é ignorada enquanto a autenticação externa LDAP ou SAML estiver ativa. Contas de usuários para membros não existentes serão criadas automaticamente se a autenticação pelo sistema externo em uso for bem sucedida.',
    'reg_email_confirmation' => 'Confirmação de E-mail',
    'reg_email_confirmation_toggle' => 'Requerer confirmação de e-mail',
    'reg_confirm_email_desc' => 'Em caso da restrição de domínios estar em uso, a confirmação de e-mail será requerida e esta opção será ignorada.',
    'reg_confirm_restrict_domain' => 'Restrição de Domínios',
    'reg_confirm_restrict_domain_desc' => 'Entre com uma lista separada por vírgulas de domínios de e-mails aos quais você deseja restringir o registo. Um e-mail de confirmação será enviado para o utilizador validar o seu respetivo endereço de e-mail antes de ser permitida a interação com a aplicação. <br> Note que os utilizadores serão capazes de alterar os seus endereços de e-mail após o sucesso na confirmação do registo.',
    'reg_confirm_restrict_domain_placeholder' => 'Nenhuma restrição definida',

    // Sorting Settings
    'sorting' => 'Sorting',
    'sorting_book_default' => 'Default Book Sort',
    'sorting_book_default_desc' => 'Select the default sort rule to apply to new books. This won\'t affect existing books, and can be overridden per-book.',
    'sorting_rules' => 'Sort Rules',
    'sorting_rules_desc' => 'These are predefined sorting operations which can be applied to content in the system.',
    'sort_rule_assigned_to_x_books' => 'Assigned to :count Book|Assigned to :count Books',
    'sort_rule_create' => 'Create Sort Rule',
    'sort_rule_edit' => 'Edit Sort Rule',
    'sort_rule_delete' => 'Delete Sort Rule',
    'sort_rule_delete_desc' => 'Remove this sort rule from the system. Books using this sort will revert to manual sorting.',
    'sort_rule_delete_warn_books' => 'This sort rule is currently used on :count book(s). Are you sure you want to delete this?',
    'sort_rule_delete_warn_default' => 'This sort rule is currently used as the default for books. Are you sure you want to delete this?',
    'sort_rule_details' => 'Sort Rule Details',
    'sort_rule_details_desc' => 'Set a name for this sort rule, which will appear in lists when users are selecting a sort.',
    'sort_rule_operations' => 'Sort Operations',
    'sort_rule_operations_desc' => 'Configure the sort actions to be performed by moving them from the list of available operations. Upon use, the operations will be applied in order, from top to bottom. Any changes made here will be applied to all assigned books upon save.',
    'sort_rule_available_operations' => 'Available Operations',
    'sort_rule_available_operations_empty' => 'No operations remaining',
    'sort_rule_configured_operations' => 'Configured Operations',
    'sort_rule_configured_operations_empty' => 'Drag/add operations from the "Available Operations" list',
    'sort_rule_op_asc' => '(Asc)',
    'sort_rule_op_desc' => '(Desc)',
    'sort_rule_op_name' => 'Name - Alphabetical',
    'sort_rule_op_name_numeric' => 'Name - Numeric',
    'sort_rule_op_created_date' => 'Created Date',
    'sort_rule_op_updated_date' => 'Updated Date',
    'sort_rule_op_chapters_first' => 'Chapters First',
    'sort_rule_op_chapters_last' => 'Chapters Last',

    // Maintenance settings
    'maint' => 'Manutenção',
    'maint_image_cleanup' => 'Limpeza de Imagens',
    'maint_image_cleanup_desc' => 'Examina páginas e reviste os seus conteúdos para verificar quais imagens e desenhos estão atualmente em uso e quais são redundantes. Certifique-se de criar uma cópia de segurança completa da base de dados e imagens antes de executar esta ação.',
    'maint_delete_images_only_in_revisions' => 'Eliminar também imagens que existam apenas em revisões de página antigas',
    'maint_image_cleanup_run' => 'Executar Limpeza',
    'maint_image_cleanup_warning' => ':count imagens potencialmente não utilizadas foram encontradas. Tem certeza de que deseja eliminar estas imagens?',
    'maint_image_cleanup_success' => ':count imagens potencialmente não utilizadas foram encontradas e eliminadas!',
    'maint_image_cleanup_nothing_found' => 'Nenhuma imagem por utilizar foi encontrada, nada foi eliminado!',
    'maint_send_test_email' => 'Enviar um E-mail de Teste',
    'maint_send_test_email_desc' => 'Esta opção envia um e-mail de teste para o endereço especificado no seu perfil.',
    'maint_send_test_email_run' => 'Enviar e-mail de teste',
    'maint_send_test_email_success' => 'E-mail enviado para :address',
    'maint_send_test_email_mail_subject' => 'E-mail de Teste',
    'maint_send_test_email_mail_greeting' => 'O envio de e-mails parece funcionar!',
    'maint_send_test_email_mail_text' => 'Parabéns! Já que recebeu esta notificação, as suas opções de e-mail parecem estar configuradas corretamente.',
    'maint_recycle_bin_desc' => 'Estantes, livros, capítulos e páginas eliminados são mandados para a reciclagem podendo assim ser restaurados ou excluídos permanentemente. Itens mais antigos da podem vir a ser automaticamente removidos da reciclagem após um tempo, dependendo da configuração do sistema.',
    'maint_recycle_bin_open' => 'Abrir Reciclagem',
    'maint_regen_references' => 'Regerar Referências',
    'maint_regen_references_desc' => 'Esta ação irá reconstruir o índice de referência no banco de dados. Isto geralmente é tratado automaticamente, mas esta ação pode ser útil para indexar conteúdo antigo ou conteúdo adicionado através de métodos não oficiais.',
    'maint_regen_references_success' => 'Índice de referência foi regenerado!',
    'maint_timeout_command_note' => 'Nota: Esta ação pode levar algum tempo para executar, retornando \'timeout\' em alguns ambientes web. Como alternativa, esta ação pode ser executada via terminal.',

    // Recycle Bin
    'recycle_bin' => 'Reciclagem',
    'recycle_bin_desc' => 'Aqui pode restaurar itens que foram eliminados ou eliminá-los permanentemente do sistema. Esta lista não é filtrada diferentemente de listas de atividades parecidas no sistema onde filtros de permissão são aplicados.',
    'recycle_bin_deleted_item' => 'Item eliminado',
    'recycle_bin_deleted_parent' => 'Parente',
    'recycle_bin_deleted_by' => 'Eliminado por',
    'recycle_bin_deleted_at' => 'Data de Eliminação',
    'recycle_bin_permanently_delete' => 'Eliminar permanentemente',
    'recycle_bin_restore' => 'Restaurar',
    'recycle_bin_contents_empty' => 'A reciclagem está atualmente vazia',
    'recycle_bin_empty' => 'Esvaziar Reciclagem',
    'recycle_bin_empty_confirm' => 'Isto irá destruir permanentemente todos os itens na reciclagem inclusive o conteúdo de cada item. Tem certeza de que a deseja esvaziar?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item from the system, along with any child elements listed below, and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Itens a serem Destruídos',
    'recycle_bin_restore_list' => 'Itens a serem Restaurados',
    'recycle_bin_restore_confirm' => 'Esta ação irá restaurar o item excluído, inclusive quaisquer elementos filhos, para o seu local original. Se a localização original tiver, entretanto, sido eliminada e estiver agora na reciclagem, o item pai também precisará de ser restaurado.',
    'recycle_bin_restore_deleted_parent' => 'O parente deste item foi também eliminado. Estes permanecerão eliminados até que o parente seja também restaurado.',
    'recycle_bin_restore_parent' => 'Restaurar Parente',
    'recycle_bin_destroy_notification' => 'Eliminados no total :count itens da lixeira.',
    'recycle_bin_restore_notification' => 'Restaurados no total :count itens da reciclagem.',

    // Audit Log
    'audit' => 'Registo de auditoria',
    'audit_desc' => 'Este registo de auditoria exibe uma lista de atividades rastreadas no sistema. Esta lista não é filtrada ao contrário de listas de atividades semelhantes no sistema onde os filtros de permissão são aplicados.',
    'audit_event_filter' => 'Filtro de Evento',
    'audit_event_filter_no_filter' => 'Sem filtro',
    'audit_deleted_item' => 'Item excluído',
    'audit_deleted_item_name' => 'Nome: :name',
    'audit_table_user' => 'Utilizador',
    'audit_table_event' => 'Evento',
    'audit_table_related' => 'Item ou Detalhe Relacionado',
    'audit_table_ip' => 'Endereço de IP',
    'audit_table_date' => 'Data da Atividade',
    'audit_date_from' => 'Intervalo De',
    'audit_date_to' => 'Intervalo Até',

    // Role Settings
    'roles' => 'Cargos',
    'role_user_roles' => 'Cargos de Utilizador',
    'roles_index_desc' => 'Papéis são usados para agrupar utilizadores & fornecer permissão ao sistema para os seus membros. Quando um utilizador é membro de múltiplas funções, os privilégios concedidos irão acumular e o utilizador herdará todas as habilidades.',
    'roles_x_users_assigned' => ':count utilizadores atribuído|:count utilizadores atribuídos',
    'roles_x_permissions_provided' => ':count permissão|:count permissões',
    'roles_assigned_users' => 'Utilizadores atribuídos',
    'roles_permissions_provided' => 'Permissões fornecidas',
    'role_create' => 'Criar novo Cargo',
    'role_delete' => 'Excluir Cargo',
    'role_delete_confirm' => 'A ação vai eliminar o cargo de nome \':roleName\'.',
    'role_delete_users_assigned' => 'Esse cargo tem :userCount utilizadores vinculados nele. Se quiser migrar utilizadores deste cargo para outro, selecione um novo cargo.',
    'role_delete_no_migration' => "Não migrar utilizadores",
    'role_delete_sure' => 'Tem certeza que deseja excluir este cargo?',
    'role_edit' => 'Editar Cargo',
    'role_details' => 'Detalhes do Cargo',
    'role_name' => 'Nome do Cargo',
    'role_desc' => 'Breve Descrição do Cargo',
    'role_mfa_enforced' => 'Exige autenticação de múltiplos fatores',
    'role_external_auth_id' => 'IDs de Autenticação Externa',
    'role_system' => 'Permissões do Sistema',
    'role_manage_users' => 'Gerir utilizadores',
    'role_manage_roles' => 'Gerir cargos e permissões de cargos',
    'role_manage_entity_permissions' => 'Gerir todos os livros, capítulos e permissões de páginas',
    'role_manage_own_entity_permissions' => 'Gerir permissões de seu próprio livro, capítulo e paginas',
    'role_manage_page_templates' => 'Gerir modelos de página',
    'role_access_api' => 'Aceder à API do sistema',
    'role_manage_settings' => 'Gerir as configurações da aplicação',
    'role_export_content' => 'Exportar conteúdo',
    'role_import_content' => 'Import content',
    'role_editor_change' => 'Alterar editor de página',
    'role_notifications' => 'Receive & manage notifications',
    'role_asset' => 'Permissões de Ativos',
    'roles_system_warning' => 'Esteja ciente de que o acesso a qualquer uma das três permissões acima pode permitir que um utilizador altere os seus próprios privilégios ou privilégios de outros no sistema. Apenas atribua cargos com essas permissões a utilizadores de confiança.',
    'role_asset_desc' => 'Estas permissões controlam o acesso padrão para os ativos dentro do sistema. Permissões em Livros, Capítulos e Páginas serão sobrescritas por estas permissões.',
    'role_asset_admins' => 'Os administradores recebem automaticamente acesso a todo o conteúdo, mas estas opções podem mostrar ou ocultar as opções da Interface de Usuário.',
    'role_asset_image_view_note' => 'Isto está relacionado com a visibilidade do gerenciador de imagens. O acesso real dos arquivos de imagem enviados dependerá da opção de armazenamento de imagens do sistema.',
    'role_all' => 'Todos',
    'role_own' => 'Próprio',
    'role_controlled_by_asset' => 'Controlado pelo ativo para o qual eles são enviados',
    'role_save' => 'Guardar Cargo',
    'role_users' => 'Utilizadores com este cargo',
    'role_users_none' => 'Nenhum utilizador está atualmente vinculado a este cargo',

    // Users
    'users' => 'Utilizadores',
    'users_index_desc' => 'Crie & gira individualmente contas de utilizador no sistema. Contas de utilizador são usadas para iniciar sessão e atribuição de conteúdo & atividade. As permissões de acesso são principalmente baseadas em funções, mas a propriedade de conteúdo do utilizador, entre outros fatores, também pode afetar permissões e acesso.',
    'user_profile' => 'Perfil do Utilizador',
    'users_add_new' => 'Adicionar Novo Utilizador',
    'users_search' => 'Pesquisar Utilizadores',
    'users_latest_activity' => 'Última atividade',
    'users_details' => 'Detalhes do Utilizador',
    'users_details_desc' => 'Defina um nome de exibição e um endereço de e-mail para este utilizador. O endereço de e-mail será utilizado na autenticação da aplicação.',
    'users_details_desc_no_email' => 'Defina um nome de exibição para este utilizador para que outros possam reconhecê-lo.',
    'users_role' => 'Cargos do Utilizador',
    'users_role_desc' => 'Selecione os cargos aos quais este utilizador será vinculado. Se um utilizador for vinculado a múltiplos cargos, as suas permissões serão empilhadas e ele receberá todas as habilidades dos cargos atribuídos.',
    'users_password' => 'Palavra-passe do Utilizador',
    'users_password_desc' => 'Defina uma palavra-passe para efetuar a autenticação na aplicação. Esta deve ter pelo menos 8 caracteres.',
    'users_send_invite_text' => 'Pode escolher enviar a este utilizador um convite por e-mail que o possibilitará definir a sua própria palavra-passe, ou defina você mesmo uma.',
    'users_send_invite_option' => 'Enviar convite por e-mail',
    'users_external_auth_id' => 'ID de Autenticação Externa',
    'users_external_auth_id_desc' => 'When an external authentication system is in use (such as SAML2, OIDC or LDAP) this is the ID which links this BookStack user to the authentication system account. You can ignore this field if using the default email-based authentication.',
    'users_password_warning' => 'Only fill the below if you would like to change the password for this user.',
    'users_system_public' => 'Este utilizador representa quaisquer convidados que visitam a aplicação. Não pode ser utilizado para efetuar autenticação, mas é automaticamente atribuído.',
    'users_delete' => 'Eliminar Utilizador',
    'users_delete_named' => 'Eliminar :userName',
    'users_delete_warning' => 'A ação vai eliminar completamente o utilizador de nome \':userName\' do sistema.',
    'users_delete_confirm' => 'Tem certeza que eliminar este utilizador?',
    'users_migrate_ownership' => 'Migrar Posse',
    'users_migrate_ownership_desc' => 'Selecione um utilizador aqui se desejar que outro se torne o proprietário de todos os itens atualmente pertencentes a este.',
    'users_none_selected' => 'Nenhum utilizador selecionado',
    'users_edit' => 'Editar Utilizador',
    'users_edit_profile' => 'Editar Perfil',
    'users_avatar' => 'Avatar do Utilizador',
    'users_avatar_desc' => 'Defina uma imagem para representar este utilizador. Deve ser um quadrado com aproximadamente 256px de altura e largura.',
    'users_preferred_language' => 'Linguagem de Preferência',
    'users_preferred_language_desc' => 'Esta opção irá alterar o idioma utilizado para a interface de utilizador da aplicação. Isto não afetará nenhum conteúdo criado por utilizadores.',
    'users_social_accounts' => 'Contas Sociais',
    'users_social_accounts_desc' => 'View the status of the connected social accounts for this user. Social accounts can be used in addition to the primary authentication system for system access.',
    'users_social_accounts_info' => 'Aqui pode ligar outras contas para acesso mais rápido. Desligar uma conta não retira a possibilidade de acesso usando-a. Para revogar o acesso ao perfil através da conta social, você deverá fazê-lo na sua conta social.',
    'users_social_connect' => 'Contas Associadas',
    'users_social_disconnect' => 'Dissociar Conta',
    'users_social_status_connected' => 'Conectado',
    'users_social_status_disconnected' => 'Desconectado',
    'users_social_connected' => 'A conta:socialAccount foi associada com sucesso ao seu perfil.',
    'users_social_disconnected' => 'A conta:socialAccount foi dissociada com sucesso de seu perfil.',
    'users_api_tokens' => 'Tokens de API',
    'users_api_tokens_desc' => 'Create and manage the access tokens used to authenticate with the BookStack REST API. Permissions for the API are managed via the user that the token belongs to.',
    'users_api_tokens_none' => 'Nenhum token de API foi criado para este utilizador',
    'users_api_tokens_create' => 'Criar Token',
    'users_api_tokens_expires' => 'Expira',
    'users_api_tokens_docs' => 'Documentação da API',
    'users_mfa' => 'Autenticação Multi-fator',
    'users_mfa_desc' => 'Configure a autenticação multi-fatores como uma camada extra de segurança para sua conta de utilizador.',
    'users_mfa_x_methods' => ':count método configurado|:count métodos configurados',
    'users_mfa_configure' => 'Configurar Métodos',

    // API Tokens
    'user_api_token_create' => 'Criar Token de API',
    'user_api_token_name' => 'Nome',
    'user_api_token_name_desc' => 'Dê ao seu token um nome legível como um futuro lembrete de seu propósito.',
    'user_api_token_expiry' => 'Data de Expiração',
    'user_api_token_expiry_desc' => 'Defina uma data em que este token expira. Depois desta data, as requisições feitas usando este token deixarão de funcionar. Deixar este campo em branco definirá um prazo de 100 anos futuros.',
    'user_api_token_create_secret_message' => 'Imediatamente após a criação deste token, um "ID de token" e "Segredo de token" serão gerados e exibidos. O segredo só será mostrado uma única vez, portanto, certifique-se de copiar o valor para algum lugar seguro antes de prosseguir.',
    'user_api_token' => 'Token de API',
    'user_api_token_id' => 'ID do Token',
    'user_api_token_id_desc' => 'Este é um identificador de sistema não editável, gerado para este token, que precisará ser fornecido em solicitações de API.',
    'user_api_token_secret' => 'Segredo do Token',
    'user_api_token_secret_desc' => 'Este é um segredo de sistema gerado para este token que precisará ser fornecido em requisições de API. Isto só será mostrado nesta única vez, portanto, copie este valor para um lugar seguro.',
    'user_api_token_created' => 'Token criado a :timeAgo',
    'user_api_token_updated' => 'Token atualizado a :timeAgo',
    'user_api_token_delete' => 'Eliminar Token',
    'user_api_token_delete_warning' => 'Isto irá excluir completamente este token de API com o nome \':tokenName\' do sistema.',
    'user_api_token_delete_confirm' => 'Tem certeza que deseja eliminar este token de API?',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_index_desc' => 'Webhooks são uma maneira de enviar dados para URLs externas quando certas ações e eventos ocorrem no sistema. Isto permite uma integração baseada em eventos com plataformas externas como mensagens ou sistemas de notificação.',
    'webhooks_x_trigger_events' => ':count acionador|:count acionadores',
    'webhooks_create' => 'Criar um novo webhook',
    'webhooks_none_created' => 'Ainda nenhum webhooks foi criado.',
    'webhooks_edit' => 'Editar Webhook',
    'webhooks_save' => 'Guardar Webhook',
    'webhooks_details' => 'Detalhes do Webhook',
    'webhooks_details_desc' => 'Providencie um nome fácil e um endpoint POST para onde os dados do webhook serão enviados.',
    'webhooks_events' => 'Eventos de Webhook',
    'webhooks_events_desc' => 'Selecionar todos os eventos que devem acionar este webhook.',
    'webhooks_events_warning' => 'Tenha em mente que esses eventos serão acionados para todos os eventos selecionados, mesmo se as permissões personalizadas forem aplicadas. Certifique-se de que o uso deste webhook não exponha conteúdo confidencial.',
    'webhooks_events_all' => 'Todos os eventos do sistema',
    'webhooks_name' => 'Nome do Webhook',
    'webhooks_timeout' => 'Tempo máximo de solicitação do webhook(segundos)',
    'webhooks_endpoint' => 'Endpoint do Webhook',
    'webhooks_active' => 'Webhook ativo',
    'webhook_events_table_header' => 'Eventos',
    'webhooks_delete' => 'Eliminar Webhook',
    'webhooks_delete_warning' => 'Isto irá excluir completamente, do sistema, este API token com o nome \':tokenName\'.',
    'webhooks_delete_confirm' => 'Tem a certeza que deseja eliminar este webhook?',
    'webhooks_format_example' => 'Exemplo de formato Webhook',
    'webhooks_format_example_desc' => 'Os dados do Webhook são enviados como uma solicitação POST para o endpoint configurado em JSON seguindo o formato abaixo. As propriedades "related_item" e "url" são opcionais e dependerão do tipo de evento acionado.',
    'webhooks_status' => 'Estado do webhook',
    'webhooks_last_called' => 'Última chamada:',
    'webhooks_last_errored' => 'Último erro:',
    'webhooks_last_error_message' => 'Última mensagem de erro:',

    // Licensing
    'licenses' => 'Licenses',
    'licenses_desc' => 'This page details license information for BookStack in addition to the projects & libraries that are used within BookStack. Many projects listed may only be used in a development context.',
    'licenses_bookstack' => 'BookStack License',
    'licenses_php' => 'PHP Library Licenses',
    'licenses_js' => 'JavaScript Library Licenses',
    'licenses_other' => 'Other Licenses',
    'license_details' => 'License Details',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Catalão',
        'cs' => 'Česky',
        'cy' => 'Cymraeg',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fi' => 'Suomi',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nb' => 'Norsk (Bokmål)',
        'ne' => 'नेपाली',
        'nn' => 'Nynorsk',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'uz' => 'O‘zbekcha',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
