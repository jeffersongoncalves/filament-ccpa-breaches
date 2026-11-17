<?php

return [
    'resource' => [
        'label' => 'Brecha de datos',
        'plural_label' => 'Brechas de datos',
    ],

    'fields' => [
        'title' => 'Título',
        'status' => 'Estado',
        'discovered_at' => 'Descubierta el',
        'occurred_at' => 'Ocurrido el',
        'due_at' => 'Plazo objetivo del aviso',
        'what_happened' => 'Qué ocurrió',
        'data_categories' => 'Qué información se vio afectada',
        'affected_residents' => 'Residentes de California afectados',
        'encrypted' => 'Cifrada, clave no obtenida',
        'notification_required' => 'Aviso obligatorio',
        'assessment' => 'Evaluación',
        'what_we_are_doing' => 'Qué estamos haciendo',
        'what_you_can_do' => 'Qué puedes hacer',
        'law_enforcement_delay' => 'Aplazamiento por las fuerzas del orden',
        'residents_notified_at' => 'Residentes notificados el',
        'substitute_notice' => 'Aviso sustitutivo',
        'attorney_general_notified_at' => 'Fiscal General notificado el',
        'attorney_general_reference' => 'Referencia del Fiscal General',
        'notified_at' => 'Comunicado el',
        'closed_at' => 'Cerrado el',
        'residents' => 'Residentes',
        'attorney_general' => 'Fiscal General',
    ],

    'help' => [
        'discovered_at' => 'El plazo objetivo del aviso se cuenta desde esta fecha. Notifica lo antes posible y sin demoras injustificadas (Cal. Civ. Code §1798.82(a)).',
        'data_categories' => 'Nombre, número de la Seguridad Social, permiso de conducir, cuentas y códigos de acceso, datos médicos, seguro de salud, datos biométricos, credenciales de acceso... (§1798.82(h)).',
        'encrypted' => 'Los datos cifrados solo requieren aviso si también se obtuvo la clave o las credenciales.',
        'substitute_notice' => 'Correo electrónico, un aviso en tu sitio web y medios de todo el estado, cuando el coste del aviso supera los 250.000 $, hay más de 500.000 personas afectadas o no tienes los datos de contacto (§1798.82(j)).',
    ],

    'notification' => [
        'pending' => 'Sin evaluar',
        'required' => 'Obligatorio',
        'not_required' => 'No obligatorio',
    ],

    'status' => [
        'open' => 'Abierto',
        'pending' => 'Aviso pendiente',
        'overdue' => 'Vencido',
        'closed' => 'Cerrado',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Evaluar',
            'description' => 'Hay que notificar a los residentes cuando una persona no autorizada obtuvo, o se cree razonablemente que obtuvo, su información personal sin cifrar o datos cifrados junto con su clave.',
            'success' => 'Evaluación guardada.',
        ],
        'law_enforcement_delay' => [
            'label' => 'Aplazar por las fuerzas del orden',
            'description' => 'Solo cuando una agencia de las fuerzas del orden determine que el aviso obstaculizaría una investigación penal. Notifica en cuanto deje de hacerlo (§1798.82(c)).',
            'success' => 'Aplazamiento registrado.',
        ],
        'notify_residents' => [
            'label' => 'Notificar a los residentes',
            'success' => 'Aviso a los residentes registrado.',
        ],
        'notify_attorney_general' => [
            'label' => 'Notificar al Fiscal General',
            'description' => 'Se notificó a más de 500 residentes de California: envía una copia de muestra del aviso, sin información personal, al Fiscal General (§1798.82(f)).',
            'success' => 'Aviso al Fiscal General registrado.',
        ],
        'close' => [
            'label' => 'Cerrar',
            'success' => 'Brecha cerrada.',
        ],
    ],
];
