<?php

return [
    'resource' => [
        'label' => 'Data breach',
        'plural_label' => 'Data breaches',
    ],

    'fields' => [
        'title' => 'Title',
        'status' => 'Status',
        'discovered_at' => 'Discovered at',
        'occurred_at' => 'Occurred at',
        'due_at' => 'Notice target',
        'what_happened' => 'What happened',
        'data_categories' => 'What information was involved',
        'affected_residents' => 'California residents affected',
        'encrypted' => 'Encrypted, key not acquired',
        'notification_required' => 'Notice required',
        'assessment' => 'Assessment',
        'what_we_are_doing' => 'What we are doing',
        'what_you_can_do' => 'What you can do',
        'law_enforcement_delay' => 'Law enforcement delay',
        'residents_notified_at' => 'Residents notified at',
        'substitute_notice' => 'Substitute notice',
        'attorney_general_notified_at' => 'Attorney General notified at',
        'attorney_general_reference' => 'Attorney General reference',
        'notified_at' => 'Notified at',
        'closed_at' => 'Closed at',
        'residents' => 'Residents',
        'attorney_general' => 'Attorney General',
    ],

    'help' => [
        'discovered_at' => 'The notice target is counted from this date. Notify in the most expedient time possible and without unreasonable delay (Cal. Civ. Code §1798.82(a)).',
        'data_categories' => 'Name, Social Security number, driver\'s license, account and access codes, medical, health insurance, biometric data, login credentials... (§1798.82(h)).',
        'encrypted' => 'Encrypted data only needs a notice when the key or credentials were also acquired.',
        'substitute_notice' => 'Email, a notice on your website and statewide media, when the cost of notice exceeds $250,000, more than 500,000 people are affected, or you lack contact details (§1798.82(j)).',
    ],

    'notification' => [
        'pending' => 'Not assessed',
        'required' => 'Required',
        'not_required' => 'Not required',
    ],

    'status' => [
        'open' => 'Open',
        'pending' => 'Notice pending',
        'overdue' => 'Overdue',
        'closed' => 'Closed',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Assess',
            'description' => 'Residents must be notified when their unencrypted personal information, or encrypted data with its key, was or is reasonably believed to have been acquired by an unauthorized person.',
            'success' => 'Assessment saved.',
        ],
        'law_enforcement_delay' => [
            'label' => 'Delay for law enforcement',
            'description' => 'Only when a law enforcement agency determines the notice would impede a criminal investigation. Notify as soon as it no longer would (§1798.82(c)).',
            'success' => 'Delay recorded.',
        ],
        'notify_residents' => [
            'label' => 'Notify residents',
            'success' => 'Resident notice recorded.',
        ],
        'notify_attorney_general' => [
            'label' => 'Notify the Attorney General',
            'description' => 'More than 500 California residents were notified: submit a sample copy of the notice, without personal information, to the Attorney General (§1798.82(f)).',
            'success' => 'Attorney General notice recorded.',
        ],
        'close' => [
            'label' => 'Close',
            'success' => 'Breach closed.',
        ],
    ],
];
