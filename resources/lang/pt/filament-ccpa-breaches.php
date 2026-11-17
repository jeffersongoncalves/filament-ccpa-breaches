<?php

return [
    'resource' => [
        'label' => 'Violação de dados',
        'plural_label' => 'Violações de dados',
    ],

    'fields' => [
        'title' => 'Título',
        'status' => 'Estado',
        'discovered_at' => 'Descoberta em',
        'occurred_at' => 'Ocorrido em',
        'due_at' => 'Prazo-alvo da notificação',
        'what_happened' => 'O que aconteceu',
        'data_categories' => 'Que informações estiveram envolvidas',
        'affected_residents' => 'Residentes da Califórnia afetados',
        'encrypted' => 'Cifradas, chave não obtida',
        'notification_required' => 'Notificação obrigatória',
        'assessment' => 'Avaliação',
        'what_we_are_doing' => 'O que estamos a fazer',
        'what_you_can_do' => 'O que pode fazer',
        'law_enforcement_delay' => 'Adiamento a pedido das autoridades policiais',
        'residents_notified_at' => 'Residentes notificados em',
        'substitute_notice' => 'Notificação substituta',
        'attorney_general_notified_at' => 'Procurador-Geral notificado em',
        'attorney_general_reference' => 'Referência do Procurador-Geral',
        'notified_at' => 'Comunicado em',
        'closed_at' => 'Encerrado em',
        'residents' => 'Residentes',
        'attorney_general' => 'Procurador-Geral',
    ],

    'help' => [
        'discovered_at' => 'O prazo-alvo da notificação conta a partir desta data. Notifique o mais rapidamente possível e sem demora injustificada (Cal. Civ. Code §1798.82(a)).',
        'data_categories' => 'Nome, número da Segurança Social, carta de condução, contas e códigos de acesso, dados médicos, seguro de saúde, dados biométricos, credenciais de acesso... (§1798.82(h)).',
        'encrypted' => 'Os dados cifrados só exigem notificação quando a chave ou as credenciais também foram obtidas.',
        'substitute_notice' => 'E-mail, aviso no seu site e nos meios de comunicação de todo o estado, quando o custo da notificação ultrapassa 250 000 USD, são afetadas mais de 500 000 pessoas ou não tem os contactos (§1798.82(j)).',
    ],

    'notification' => [
        'pending' => 'Não avaliada',
        'required' => 'Obrigatória',
        'not_required' => 'Não obrigatória',
    ],

    'status' => [
        'open' => 'Aberto',
        'pending' => 'Notificação pendente',
        'overdue' => 'Em atraso',
        'closed' => 'Encerrado',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Avaliar',
            'description' => 'Os residentes têm de ser notificados quando as suas informações pessoais não cifradas, ou dados cifrados com a respetiva chave, foram ou se presume razoavelmente que foram obtidos por uma pessoa não autorizada.',
            'success' => 'Avaliação guardada.',
        ],
        'law_enforcement_delay' => [
            'label' => 'Adiar a pedido das autoridades policiais',
            'description' => 'Apenas quando uma autoridade policial determinar que a notificação prejudicaria uma investigação criminal. Notifique logo que deixe de prejudicar (§1798.82(c)).',
            'success' => 'Adiamento registado.',
        ],
        'notify_residents' => [
            'label' => 'Notificar residentes',
            'success' => 'Notificação aos residentes registada.',
        ],
        'notify_attorney_general' => [
            'label' => 'Notificar o Procurador-Geral',
            'description' => 'Foram notificados mais de 500 residentes da Califórnia: envie ao Procurador-Geral uma cópia de exemplo da notificação, sem informações pessoais (§1798.82(f)).',
            'success' => 'Notificação ao Procurador-Geral registada.',
        ],
        'close' => [
            'label' => 'Encerrar',
            'success' => 'Violação encerrada.',
        ],
    ],
];
