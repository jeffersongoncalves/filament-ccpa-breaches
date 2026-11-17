<?php

return [
    'resource' => [
        'label' => 'Violação de dados',
        'plural_label' => 'Violações de dados',
    ],

    'fields' => [
        'title' => 'Título',
        'status' => 'Situação',
        'discovered_at' => 'Descoberta em',
        'occurred_at' => 'Ocorrido em',
        'due_at' => 'Prazo-alvo do aviso',
        'what_happened' => 'O que aconteceu',
        'data_categories' => 'Quais informações foram afetadas',
        'affected_residents' => 'Residentes da Califórnia afetados',
        'encrypted' => 'Criptografados, chave não obtida',
        'notification_required' => 'Aviso obrigatório',
        'assessment' => 'Avaliação',
        'what_we_are_doing' => 'O que estamos fazendo',
        'what_you_can_do' => 'O que você pode fazer',
        'law_enforcement_delay' => 'Adiamento a pedido das autoridades policiais',
        'residents_notified_at' => 'Residentes notificados em',
        'substitute_notice' => 'Aviso substituto',
        'attorney_general_notified_at' => 'Procurador-Geral notificado em',
        'attorney_general_reference' => 'Referência do Procurador-Geral',
        'notified_at' => 'Comunicado em',
        'closed_at' => 'Encerrado em',
        'residents' => 'Residentes',
        'attorney_general' => 'Procurador-Geral',
    ],

    'help' => [
        'discovered_at' => 'O prazo-alvo do aviso é contado a partir desta data. Notifique no menor tempo possível e sem demora injustificada (Cal. Civ. Code §1798.82(a)).',
        'data_categories' => 'Nome, número do Seguro Social, carteira de motorista, contas e códigos de acesso, dados médicos, plano de saúde, dados biométricos, credenciais de login... (§1798.82(h)).',
        'encrypted' => 'Dados criptografados só exigem aviso quando a chave ou as credenciais também foram obtidas.',
        'substitute_notice' => 'E-mail, aviso no seu site e na mídia de todo o estado, quando o custo do aviso passa de US$ 250.000, mais de 500.000 pessoas são afetadas ou você não tem os contatos (§1798.82(j)).',
    ],

    'notification' => [
        'pending' => 'Não avaliada',
        'required' => 'Obrigatório',
        'not_required' => 'Não obrigatório',
    ],

    'status' => [
        'open' => 'Aberto',
        'pending' => 'Aviso pendente',
        'overdue' => 'Vencido',
        'closed' => 'Encerrado',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Avaliar',
            'description' => 'Os residentes devem ser notificados quando suas informações pessoais não criptografadas, ou dados criptografados com a respectiva chave, foram ou se acredita razoavelmente que foram obtidos por pessoa não autorizada.',
            'success' => 'Avaliação salva.',
        ],
        'law_enforcement_delay' => [
            'label' => 'Adiar a pedido das autoridades policiais',
            'description' => 'Somente quando uma autoridade policial determinar que o aviso prejudicaria uma investigação criminal. Notifique assim que deixar de prejudicar (§1798.82(c)).',
            'success' => 'Adiamento registrado.',
        ],
        'notify_residents' => [
            'label' => 'Notificar residentes',
            'success' => 'Aviso aos residentes registrado.',
        ],
        'notify_attorney_general' => [
            'label' => 'Notificar o Procurador-Geral',
            'description' => 'Mais de 500 residentes da Califórnia foram notificados: envie uma cópia de exemplo do aviso, sem informações pessoais, ao Procurador-Geral (§1798.82(f)).',
            'success' => 'Aviso ao Procurador-Geral registrado.',
        ],
        'close' => [
            'label' => 'Encerrar',
            'success' => 'Violação encerrada.',
        ],
    ],
];
