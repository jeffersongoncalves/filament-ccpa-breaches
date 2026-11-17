<?php

return [
    'resource' => [
        'label' => 'Violation de données',
        'plural_label' => 'Violations de données',
    ],

    'fields' => [
        'title' => 'Titre',
        'status' => 'Statut',
        'discovered_at' => 'Découverte le',
        'occurred_at' => 'Survenu le',
        'due_at' => 'Échéance cible de notification',
        'what_happened' => 'Ce qui s\'est passé',
        'data_categories' => 'Quelles informations sont concernées',
        'affected_residents' => 'Résidents de Californie concernés',
        'encrypted' => 'Chiffrées, clé non obtenue',
        'notification_required' => 'Notification requise',
        'assessment' => 'Évaluation',
        'what_we_are_doing' => 'Ce que nous faisons',
        'what_you_can_do' => 'Ce que vous pouvez faire',
        'law_enforcement_delay' => 'Report demandé par les forces de l\'ordre',
        'residents_notified_at' => 'Résidents notifiés le',
        'substitute_notice' => 'Notification de substitution',
        'attorney_general_notified_at' => 'Procureur général notifié le',
        'attorney_general_reference' => 'Référence du procureur général',
        'notified_at' => 'Notifié le',
        'closed_at' => 'Clôturé le',
        'residents' => 'Résidents',
        'attorney_general' => 'Procureur général',
    ],

    'help' => [
        'discovered_at' => 'L\'échéance cible est calculée à partir de cette date. Notifiez dans les meilleurs délais et sans retard injustifié (Cal. Civ. Code §1798.82(a)).',
        'data_categories' => 'Nom, numéro de sécurité sociale, permis de conduire, comptes et codes d\'accès, données médicales, assurance santé, données biométriques, identifiants de connexion... (§1798.82(h)).',
        'encrypted' => 'Les données chiffrées ne nécessitent une notification que si la clé ou les identifiants ont aussi été obtenus.',
        'substitute_notice' => 'E-mail, avis sur votre site et médias à l\'échelle de l\'État, lorsque le coût de la notification dépasse 250 000 $, que plus de 500 000 personnes sont concernées ou que vous n\'avez pas leurs coordonnées (§1798.82(j)).',
    ],

    'notification' => [
        'pending' => 'Non évaluée',
        'required' => 'Requise',
        'not_required' => 'Non requise',
    ],

    'status' => [
        'open' => 'Ouvert',
        'pending' => 'Notification en attente',
        'overdue' => 'En retard',
        'closed' => 'Clôturé',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Évaluer',
            'description' => 'Les résidents doivent être notifiés lorsque leurs informations personnelles non chiffrées, ou des données chiffrées avec leur clé, ont été obtenues, ou sont raisonnablement présumées l\'avoir été, par une personne non autorisée.',
            'success' => 'Évaluation enregistrée.',
        ],
        'law_enforcement_delay' => [
            'label' => 'Reporter à la demande des forces de l\'ordre',
            'description' => 'Uniquement lorsqu\'un service des forces de l\'ordre estime que la notification entraverait une enquête pénale. Notifiez dès que ce n\'est plus le cas (§1798.82(c)).',
            'success' => 'Report enregistré.',
        ],
        'notify_residents' => [
            'label' => 'Notifier les résidents',
            'success' => 'Notification des résidents enregistrée.',
        ],
        'notify_attorney_general' => [
            'label' => 'Notifier le procureur général',
            'description' => 'Plus de 500 résidents de Californie ont été notifiés : transmettez un exemplaire de la notification, sans informations personnelles, au procureur général (§1798.82(f)).',
            'success' => 'Notification du procureur général enregistrée.',
        ],
        'close' => [
            'label' => 'Clôturer',
            'success' => 'Violation clôturée.',
        ],
    ],
];
