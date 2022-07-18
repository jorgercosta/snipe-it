<?php

return array(

    'accepted'                  => 'Aceitou este artigo com sucesso.',
    'declined'                  => 'Recusou este artigo com sucesso.',
    'bulk_manager_warn'            => 'Os seus utilizadores foram atualizados com sucesso, no entanto, sua entrada de gerente não foi salva porque o gerente que você selecionou também estava na lista de utilizadores para ser editada e os utilizadores podem não ser seu próprio gerente. Selecione os seus utilizadores novamente, excluindo o gerente.',
    'user_exists'               => 'Utilizador já existe!',
    'user_not_found'            => 'Utilizador [:id] não existe.',
    'user_login_required'       => 'O atributo login é obrigatório',
    'user_password_required'    => 'A password é obrigatória.',
    'insufficient_permissions'  => 'Permissões insuficientes.',
    'user_deleted_warning'      => 'Este utilizador foi removido. Terá que restaurar este utilizador para os editar ou alocar-lhe novos artigos.',
    'ldap_not_configured'        => 'A integração com LDAP não foi configurada para este instalação.',
    'password_resets_sent'      => 'Os utilizadores selecionados que são ativados e têm um endereço de e-mail válido receberam um link de reposição da palavra-passe.',
    'password_reset_sent'       => 'A password reset link has been sent to :email!',


    'success' => array(
        'create'    => 'Utilizador criado com sucesso.',
        'update'    => 'Utilizador atualizado com sucesso.',
        'update_bulk'    => 'Os utilizadores foram atualizados com sucesso!',
        'delete'    => 'Utilizador removido com sucesso.',
        'ban'       => 'Utilizador desabilitado com sucesso.',
        'unban'     => 'Utilizador reabilitado com sucesso.',
        'suspend'   => 'Utilizador foi suspenso com sucesso.',
        'unsuspend' => 'A suspensão do Utilizador foi removida com sucesso.',
        'restored'  => 'Utilizador restaurado com sucesso.',
        'import'    => 'Utilizadores importados com sucesso.',
    ),

    'error' => array(
        'create' => 'Ocorreu um problema ao criar o utilizador. Por favor, tente novamente.',
        'update' => 'Ocorreu um problema ao atualizar o utilizador. Por favor, tente novamente.',
        'delete' => 'Ocorreu um problema ao remover o utilizador. Por favor, tente novamente.',
        'delete_has_assets' => 'Este utilizador tem itens atribuídos e não pôde ser excluído.',
        'unsuspend' => 'Ocorreu um problema ao retirar a suspensão ao utilizador. Por favor, tente novamente.',
        'import'    => 'Ocorreu um problema ao importar os utilizadores. Por favor, tente novamente.',
        'asset_already_accepted' => 'Este artigo já foi aceite.',
        'accept_or_decline' => 'Tem que aceitar ou recusar este artigo.',
        'incorrect_user_accepted' => 'O ativo que tentou aceitar não foi solicitado por si.',
        'ldap_could_not_connect' => 'Não foi possível estabelecer uma ligação ao servidor LDAP. Por favor, verifique a configuração de servidor no ficheiro de configuração. <br>Error do Servidor LDAP:',
        'ldap_could_not_bind' => 'Não foi possível estabelecer uma vinculação com o servidor LDAP. Por favor, verifique a configuração de servidor no ficheiro de configuração. <br>Error do Servidor LDAP: ',
        'ldap_could_not_search' => 'Não foi possível pesquisar no servidor LDAP. Por favor, verifique a configuração de servidor no ficheiro de configuração. <br>Error do Servidor LDAP:',
        'ldap_could_not_get_entries' => 'Não foi possível obter registos do servidor LDAP. Por favor, verifique a configuração de servidor no ficheiro de configuração. <br>Error do Servidor LDAP:',
        'password_ldap' => 'A palavra-passe desta conta é gerenciada pelo LDAP / Active Directory. Entre em contato com seu departamento de TI para alterar a sua palavra-passe.',
    ),

    'deletefile' => array(
        'error'   => 'Ficheiro não removido. Por favor, tente novamente.',
        'success' => 'Ficheiro removido com sucesso.',
    ),

    'upload' => array(
        'error'   => 'Ficheiro(s) não submetidos. Por favor, tente novamente.',
        'success' => 'Ficheiro(s) submetidos com sucesso.',
        'nofiles' => 'Não selecionou nenhum ficheiro para submissão',
        'invalidfiles' => 'Um ou mais ficheiros são demasiado grandes ou trata-se de um tipo de ficheiro não permitido. Os tipos de ficheiro permitidos são png, gif, jpg, jpeg, doc, docx, pdf e txt.',
    ),

);
