<?php

return [
    'app_name' => 'Central Serviços',
    'welcome' => "Você está logado!",
    'auth' => [
        'actions' => [
            'button_login' => 'Entrar',
            'button_register' => 'Registrar',
            'button_forgot_password' => 'Link de redefinição de senha',
            'button_reset_password' => 'Redefinir senha',
            'button_verify_email' => 'Reenviar email de verificação',
            'button_confirm_password' => 'Confirmar',
        ],
        'links' => [
            'login' => 'Já está registrado?',
            'logout' => 'Sair',
            'forgot_password' => 'Esqueceu a senha?',
            'reset_password' => 'Redefinir senha',
            'resend_verification' => 'Reenviar e-mail de verificação',
            'profile' => 'Perfil',
        ],
        'response' => [
            'verify_email_response' => 'Um novo link de verificação foi enviado para o endereço de e-mail que você forneceu durante o registro.'
        ],
        'text' => [
            'forgot_password_text' => 'Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e enviaremos por e-mail um link de redefinição de senha que permitirá que você escolha uma nova.',
            'verify_email_text' => 'Obrigado por inscrever-se! Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar para você? Se você não recebeu o e-mail, teremos prazer em lhe enviar outro.',
            'confirm_password_text' => 'Esta é uma área segura do aplicativo. Por favor, confirme sua senha antes de continuar.',
        ],
    ],
    'labels' => [
        'name' => 'Nome',
        'email' => 'E-mail',
        'password' => 'Senha',
        'password_confirmation' => 'Confirmação de senha',
        'current_password' => 'Senha atual',
        'new_password' => 'Nova senha',
        'new_password_confirmation' => 'Confirmação de nova senha',
        'remember' => 'Lembre-se de mim',
        'preferred_language' => 'Idioma preferido',
    ],
    'pages' => [
        'profile' => [
            'delete-user-form' => [
                'title' => 'Deletar Conta',
                'description' => 'Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente. Antes de excluir sua conta, baixe todos os dados ou informações que deseja reter.',
                'button' => 'Deletar Conta',
                'modal' => [
                    'title' => 'Tem certeza de que deseja excluir sua conta?',
                    'message' => 'Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente. Digite sua senha para confirmar que deseja excluir permanentemente sua conta.',
                    'button_cancel' => 'Cancelar',
                    'button_confirm' => 'Deletar Conta',
                ],
            ],
            'update-language-form' => [
                'title' => 'Mudar Idioma',
                'description' => 'Atualize as informações do seu idioma preferido.',
                'response' => [
                    'success' => 'Salvo.',
                ],
            ],
            'update-password-form' => [
                'title' => 'Atualizar Senha',
                'description' => 'Certifique-se de que sua conta esteja usando uma senha longa e aleatória para permanecer segura.',
                'button_confirm' => 'Salvar',
                'response' => [
                    'success' => 'Salvo.',
                ],
            ],
            'update-profile-information-form' => [
                'title' => 'Informação do Perfil',
                'description' => "Atualize as informações de perfil e endereço de e-mail da sua conta.",
                'button_confirm' => 'Salvar',
                'response' => [
                    'success' => [
                        'send_verification' => 'Um novo link de verificação foi enviado para seu endereço de e-mail.',
                        'saved' => 'Salvo.'
                    ],
                    'error' => [
                        'title' => 'Seu endereço de e-mail não foi verificado.',
                        'description' => 'Clique aqui para reenviar o e-mail de verificação',
                    ],
                ],
            ],
        ],
    ],
    'sidebar' => [
        'global_items' => [
            'register' => 'Registrar',
            'to_view' => 'Visualizar',
            'reports' => 'Relatórios',
            'search' => 'Pesquisar',
        ],
        'courses' => [
            'name' => 'Cursos',
            'items' => [
                'curricular_structure' => 'Estrutura Curricular'
            ],
        ],
        'classes' => [
            'name' => 'Turmas',
            'items' => [
                'presence' => 'Presença',
                'grades' => 'Notas',
                'warnings' => 'Avisos',
            ],
        ],
        'people' => [
            'name' => 'Pessoas',
            'items' => [
                'coordinator' => [
                    'name' => 'Coordenador',
                    'items' => [
                        'courses' => 'Cursos',
                    ],
                ],
                'students' => [
                    'name' => 'Estudantes',
                    'items' => [
                        'documents' => 'Documentos',
                        'historic' => 'Histórico',
                    ],
                ],
                'teachers' => [
                    'name' => 'Professores',
                    'items' => [
                        'classes' => 'Turmas',
                    ],
                ],
            ],
        ],
        'administrative' => [
            'name' => 'Administrativo',
            'items' => [
                'schedule' => 'Agenda',
                'leads' => 'Leads',
                'reports' => [
                    'name' => 'Relatórios',
                    'items' => [
                        'courses' => 'Cursos',
                        'students' => 'Estudantes',
                        'teachers' => 'Professores',
                        'coordinators' => 'Coordenadores',
                        'classes' => 'Turmas',
                        'financial' => 'Financeiro',
                    ],
                ],
                'announcements' => 'Anúncios',
                'documents' => [
                    'name' => 'Documentos',
                    'items' => [
                        'declaration' => 'Declaração',
                        'historic' => 'Histórico',
                        'certificates' => 'Certificados',
                    ],
                ],
            ],
        ],
        'financial' => [
            'name' => 'Financeiro',
            'items' => [
                'bills' => 'Contas a receber',
                'defaulters' => 'Inadimplentes',
                'nfse' => 'Emissão de NFSe',
                'bank_accounts' => 'Contas bancárias',
                'negotiation' => 'Negociação',
            ],
        ],
    ],
];
