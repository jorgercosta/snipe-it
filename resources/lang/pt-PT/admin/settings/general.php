<?php

return [
    'ad'                        => 'Active Directory',
    'ad_domain'                    => 'Dominio do Active Directory',
    'ad_domain_help'            => 'Em alguns casos isto e o mesmo que o dominio de email, mas nem sempre.',
    'ad_append_domain_label'    => 'Acrescentar nome de domínio',
    'ad_append_domain'          => 'Acrescentar nome de domínio ao campo de utilizador',
    'ad_append_domain_help'     => 'O utilizador não tem que escrever "username@domain.local", pode apenas digitar "username".',
    'admin_cc_email'            => 'E-mail em CC',
    'admin_cc_email_help'       => 'Se prefere que seja enviada uma cópia do e-mail de checkin/checktout que é enviado aos utilizadores para uma conta de e-mail adicional, introduza o endereço de e-mail aqui. Caso contrário, deixe este campo em branco.',
    'is_ad'                        => 'Isto é um servidor do Active Directoriy',
    'alerts'                    => 'Alerts',
    'alert_title'               => 'Update Alert Settings',
    'alert_email'                => 'Enviar alertas para',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'            => 'Alertas ativos',
    'alert_interval'            => 'Alertas expiram (em dias)',
    'alert_inv_threshold'        => 'Alerta limite do inventário',
    'allow_user_skin'           => 'Allow User Skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids'                    => 'IDs dos Artigos',
    'audit_interval'            => 'Intervalo de auditoria',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date.',
    'audit_warning_days'        => 'Limiar de aviso de auditoria',
    'audit_warning_days_help'   => 'Quantos dias de antecedência devemos avisar quando os ativos são devidos para a auditoria?',
    'auto_increment_assets'        => 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'        => 'Prefixo (opcional)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'                    => 'Cópias de segurança',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'            => 'Definições de Código de Barras',
    'confirm_purge'                => 'Confirmar remoção',
    'confirm_purge_help'        => 'Digite o texto "DELETE" na caixa abaixo para limpar seus registros excluídos. Essa ação não pode ser desfeita e irá excluir todos os itens e utilizadores excluídos por soft-delete. (Você deve fazer um backup primeiro, apenas para estar seguro.)',
    'custom_css'                => 'CSS Personalizado',
    'custom_css_help'            => 'Insira o CSS personalizado que deseja utilizar. Não use as tags <style></style>.',
    'custom_forgot_pass_url'    => 'Endereço de redefinição de palavra-passe personalizado',
    'custom_forgot_pass_url_help'    => 'Isto substitui o endereço de recuperação de palavra-passe que vem configurado por defeito na página de login, útil para direcionar utilizadores para o serviço de recuperação de palavras-passe da LDAP interna ou alojada. Vai efetivamente desabilitar a funcionalidade de "palavra-passe esquecida" do utilizador local.',
    'dashboard_message'            => 'Mensagem do painel de controle',
    'dashboard_message_help'    => 'Este texto aparecerá no painel de controle, para qualquer utilizador que tenha permissões para ver o painel de controle.',
    'default_currency'          => 'Moeda padrão',
    'default_eula_text'            => 'EULA padrão',
    'default_language'            => 'Idioma predefinido',
    'default_eula_help_text'    => 'Também pode associar EULAs personalizados para categorias de artigos especificas.',
    'display_asset_name'        => 'Mostrar Nome do Artigo',
    'display_checkout_date'     => 'Mostrar Data de Alocação',
    'display_eol'               => 'Mostrar EOL na tabela',
    'display_qr'                => 'Mostrar códigos Qr',
    'display_alt_barcode'        => 'Mostrar codigos de barra 1D',
    'email_logo'                => 'Logotipo do e-mail',
    'barcode_type'                => 'Tipo de código de barras 2D',
    'alt_barcode_type'            => 'Tipo de código de barras 1D',
    'email_logo_size'       => 'Logos quadrados no e-mail são os melhores. ',
    'enabled'                   => 'Enabled',
    'eula_settings'                => 'Definições de EULA',
    'eula_markdown'                => 'Este EULA permite <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Ícone de Favoritos',
    'favicon_format'            => 'Os tipos de arquivos aceites são ico, png e gif. Outros formatos de imagem podem não funcionar em todos os navegadores.',
    'favicon_size'          => 'Favicons devem ser imagens quadradas, 16x16 pixels.',
    'footer_text'               => 'Texto de rodapé adicional',
    'footer_text_help'          => 'Este texto aparecerá no lado direito do rodapé. São permitidos o uso de hiperligações, utilizando <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. O uso de quebras de linha, cabeçalhos, imagens, etc... podem ter resultados imprevisíveis. ',
    'general_settings'            => 'Configurações Gerais',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula,  tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'            => 'Gerar Backup',
    'header_color'              => 'Cor do cabeçalho',
    'info'                      => 'Estas configurações permitem costumizar certos aspetos desta instalação.',
    'label_logo'                => 'Logotipo da etiqueta',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Versão do Laravel',
    'ldap'                      => 'LDAP',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'LDAP ativo',
    'ldap_integration'          => 'Integração LDAP',
    'ldap_settings'             => 'Configurações LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
    'ldap_client_tls_key'       => 'LDAP Client-Side TLS key',
    'ldap_login_test_help'      => 'Introduza um utilizador e palavra-passe da LDAP válido pertencente ao DN que especificou acima +ara testar se a sua autenticação da LDAP foi configurada corretamente, PRIMEIRO DEVE GRAVAR AS SUAS DEFINIÇÕES ATUALIZADAS DA LDAP.',
    'ldap_login_sync_help'      => 'Isto apenas testa que a LDAP consegue sincronizar corretamente. Se a sua consulta de autenticação LDAP não estiver correta, os utilizadores poderão ainda não conseguir fazer a autenticação. PRIMEIRO DEVE GRAVAR AS SUAS DEFINIÇÕES ATUALIZADAS DA LDAP.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'Servidor LDAP',
    'ldap_server_help'          => 'Isso deve começar com ldap: / / (para não-criptado ou TLS) ou ldaps: / / (para SSL)',
    'ldap_server_cert'            => 'Validação certificado SSL LDAP',
    'ldap_server_cert_ignore'    => 'Permitir certificado SSL inválido',
    'ldap_server_cert_help'        => 'Seleccione esta opção se está a usar um certificado SSL auto-assinado e desejar aceitar um certificado SSL inválido.',
    'ldap_tls'                  => 'Usar TLS',
    'ldap_tls_help'             => 'Isto só deve ser escolhido se estiver a correr STARTTLS no seu servidor LDAP. ',
    'ldap_uname'                => 'Utilizador bind LDAP',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'Password bind LDAP',
    'ldap_basedn'               => 'Base bind DN',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'Sincronização de password LDAP',
    'ldap_pw_sync_help'         => 'Desmarque esta caixa se não deseja guardar as passwords LDAP com passwords locais. Ao desativar esta opção quer dizer que os utilizadores poderão não conseguir fazer login se o seu servidor LDAP não estiver disponível por alguma rasão.',
    'ldap_username_field'       => 'Campo nome de utilizador',
    'ldap_lname_field'          => 'Campo Último nome',
    'ldap_fname_field'          => 'Campo Primeiro nome',
    'ldap_auth_filter_query'    => 'Query de autenticação LDAP',
    'ldap_version'              => 'Versão de LDAP',
    'ldap_active_flag'          => 'Opção LDAP Activo',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'Número funcionário LDAP',
    'ldap_email'                => 'Email LDAP',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Licença de software',
    'load_remote_text'          => 'Scripts Remotos',
    'load_remote_help_text'        => 'Esta instalação do Snipe-IT pode carregar scripts do mundo exterior.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Login Note',
    'login_note_help'           => 'Opcionalmente, inclua algumas frases na tela de login, por exemplo, para ajudar as pessoas que encontraram um dispositivo perdido ou roubado. Este campo aceita <a href="https://help.github.com/articles/github-flavored-markdown/">Gitão com sabor marcado</a>',
    'login_remote_user_text'    => 'Opções de login remoto de utilizadores',
    'login_remote_user_enabled_text' => 'Ativar login com cabeçalho de utilizador remoto',
    'login_remote_user_enabled_help' => 'Esta opção habilita a Autenticação via cabeçalho REMOTE_USER de acordo com a "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Desabilitar outros mecanismos de autenticação',
    'login_common_disabled_help' => 'Esta opção desativa outros mecanismos de autenticação. Ative apenas esta opção caso tenha a certeza de que seu REMOTE_USER já se encontra a funcionar',
    'login_remote_user_custom_logout_url_text' => 'URL de logout personalizado',
    'login_remote_user_custom_logout_url_help' => 'Se preenchido, os utilizadores serão redirecionados para este URL depois de fecharem a sessão no SnipeIT. É particularmente útil para fechar corretamente a sessão do utilizador do fornecedor de autenticação.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                        => 'Logo',
    'logo_print_assets'         => 'Usar na impressão',
    'logo_print_assets_help'    => 'Usar a marca na impressão de lista de ativos ',
    'full_multiple_companies_support_help_text' => 'Restringir utilizadores (incluindo admins) associados a empresas ao ativos da empresa.',
    'full_multiple_companies_support_text' => 'Suporte multi-empresa completo',
    'show_in_model_list'   => 'Mostrar modelos em menu de cascata',
    'optional'                    => 'opcional',
    'per_page'                  => 'Resultados por página',
    'php'                       => 'Versão do PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Deve instalar a extensão php-gd para mostrar códigos QR, veja as instruções de instalação.',
    'php_gd_warning'            => 'O Processamento de Imagem PHP e o plugin GD não estão instalados.',
    'pwd_secure_complexity'     => 'Complexidade da palavra-passe',
    'pwd_secure_complexity_help' => 'Selecione as regras de complexidade de palavra-passe que você deseja aplicar.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Palavra-passe mínima',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Prevenir palavras-passe comuns',
    'pwd_secure_uncommon_help'  => 'Isso impedirá os utilizadores de usar palavras-passe comuns das 10 palavras-passe superiores registradas em brechas.',
    'qr_help'                   => 'Ative os códigos QR antes da configuração',
    'qr_text'                   => 'Texto do Código QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Default Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Configuração',
    'settings'                  => 'Configurações',
    'show_alerts_in_menu'       => 'Mostrar alertas no topo do menu',
    'show_archived_in_list'     => 'Artigos arquivados',
    'show_archived_in_list_text'     => 'Mostrar artigos arquivados na lista "todos os artigos"',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Mostrar imagens em e-mails',
    'show_images_in_email_help'   => 'Desmarque esta caixa se a sua instalação do Snipe-IT estiver a correr através de uma VPN ou rede fechada e utilizadores fora da rede não conseguirem carregar as imagens desta instalação nos seus e-mails.',
    'site_name'                 => 'Nome do site',
    'slack'                     => 'Slack',
    'slack_title'               => 'Update Slack Settings',
    'slack_help'                => 'Slack settings',
    'slack_botname'             => 'Botname Slack',
    'slack_channel'             => 'Canal Slack',
    'slack_endpoint'            => 'Endpoint Slack',
    'slack_integration'         => 'Definições Slack',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Uma vez gravadas as suas informações do Slack, aparecerá um botão de teste.',
    'slack_test_help'           => 'Teste se sua integração do Slack está configurada corretamente. DEVE PRIMEIRO GRAVAR AS SUAS CONFIGURAÇÕES ACTUALIZADAS.',
    'snipe_version'              => 'Versão Snipe-IT',
    'support_footer'            => 'Links de rodapé de suporte',
    'support_footer_help'       => 'Especifica quem vê os links de Suporte e Manual de utilizador do Snipe-IT',
    'version_footer'            => 'Versão no Rodapé ',
    'version_footer_help'       => 'Especifica quem vê o número de versão e compilação do Snipe-lT.',
    'system'                    => 'Informação de Sistema',
    'update'                    => 'Atualizar Configurações',
    'value'                     => 'Valor',
    'brand'                     => 'Branding',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Sobre as Configurações',
    'about_settings_text'       => 'Estas configurações permitem-lhe customizar determinados aspetos da sua instalação.',
    'labels_per_page'           => 'Etiquetas por página',
    'label_dimensions'          => 'Dimensões das etiquetas (inches)',
    'next_auto_tag_base'        => 'Próximo incremento automático',
    'page_padding'              => 'Margens da pagina (inches)',
    'privacy_policy_link'       => 'Link para a Política de Privacidade',
    'privacy_policy'            => 'Política de Privacidade',
    'privacy_policy_link_help'  => 'Se um URL for incluído aqui, um link para as suas políticas de privacidade será incluído no rodapé da aplicação e em todos os emails que o sistema enviar, em conformidade com o GDPR. ',
    'purge'                     => 'Remover registos apagados',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Margem inferior da etiqueta',
    'labels_display_sgutter'    => 'Margem lateral da Etiqueta',
    'labels_fontsize'           => 'Tamanho do texto da etiqueta',
    'labels_pagewidth'          => 'Largura da folha de etiquetas',
    'labels_pageheight'         => 'Altura da folha de etiquetas',
    'label_gutters'        => 'Espaçamento entre etiquetas (inches)',
    'page_dimensions'        => 'Dimensões da pagina (inches)',
    'label_fields'          => 'Campos visiveis nas etiquetas',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link para Snipe-IT em E-mails',
    'show_url_in_emails_help_text'      => 'Desmarque esta caixa se não deseja vincular novamente a sua instalação Snipe-IT em seus rodapés de e-mail. Útil se a maioria de seus utilizadores nunca se registar.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Altura máxima da miniatura',
    'thumbnail_max_h_help'   => 'Altura máxima em pixels que as miniaturas podem exibir na visualização de listagem. Min 25, max 500.',
    'two_factor'        => 'Autenticação em dois passos',
    'two_factor_secret'        => 'Código de autenticação em dois passos',
    'two_factor_enrollment'        => 'Ativação de autenticação em dois passos',
    'two_factor_enabled_text'        => 'Ativar autenticação em dois passos',
    'two_factor_reset'        => 'Redefinir password autenticação de pois passos',
    'two_factor_reset_help'        => 'Isto irá forçar o utilizador a registar o seu dispositivo com Google Authenticator novamente. Isso pode ser útil se seu dispositivo actualmente registado for perdido ou roubado. ',
    'two_factor_reset_success'          => 'Dispositivo de autenticação de dois passos foi redefinido com sucesso',
    'two_factor_reset_error'          => 'Reset do dispositivo de autenticação de dois passos falhou',
    'two_factor_enabled_warning'        => 'Ao activar a autenticação de dois passos se não estiver já ativado, irá forçar-te a autenticar com o Google Auth com um dispositivo registado.',
    'two_factor_enabled_help'        => 'Isso irá activar a autenticação de dois passos usando Google Authenticator.',
    'two_factor_optional'        => 'Selectivo (os utilizadores podem activar ou desactivar se permitido)',
    'two_factor_required'        => 'Obrigatório para todos os utilizadores',
    'two_factor_disabled'        => 'Desactivado',
    'two_factor_enter_code'    => 'Digite o código de autenticação de pois passos',
    'two_factor_config_complete'    => 'Enviar codigo',
    'two_factor_enabled_edit_not_allowed' => 'O teu administrador não permite editar esta opção.',
    'two_factor_enrollment_text'    => "A autenticação de dois passos é obrigatória, mas se o teu dispositivo ainda não foi registado, abre o Google Authenticator e lê o QR Code para registar o teu dispositivo. Uma vez registado, introduz o código abaixo",
    'require_accept_signature'      => 'Requer assinatura',
    'require_accept_signature_help_text'      => 'Habilitar este recurso vai exigir que os utilizadores assinar fisicamente aceitando o artigo.',
    'left'        => 'esquerda',
    'right'        => 'direita',
    'top'        => 'topo',
    'bottom'        => 'fundo',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'unique_serial'                => 'Números de série únicos',
    'unique_serial_help_text'                => 'Marcar esta caixa para garantir que os números de série são únicos',
    'zerofill_count'        => 'Comprimento de tags de artigos, incluindo zerofill',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email alerts, audit settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge' => 'Purge',
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Purge Deleted Records',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Employee Number',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
];
