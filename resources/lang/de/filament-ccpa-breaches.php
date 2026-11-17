<?php

return [
    'resource' => [
        'label' => 'Datenpanne',
        'plural_label' => 'Datenpannen',
    ],

    'fields' => [
        'title' => 'Titel',
        'status' => 'Status',
        'discovered_at' => 'Entdeckt am',
        'occurred_at' => 'Eingetreten am',
        'due_at' => 'Zieltermin für die Benachrichtigung',
        'what_happened' => 'Was ist passiert',
        'data_categories' => 'Welche Informationen betroffen waren',
        'affected_residents' => 'Betroffene Einwohner Kaliforniens',
        'encrypted' => 'Verschlüsselt, Schlüssel nicht erlangt',
        'notification_required' => 'Benachrichtigung erforderlich',
        'assessment' => 'Bewertung',
        'what_we_are_doing' => 'Was wir unternehmen',
        'what_you_can_do' => 'Was Sie tun können',
        'law_enforcement_delay' => 'Aufschub auf Ersuchen der Strafverfolgung',
        'residents_notified_at' => 'Einwohner benachrichtigt am',
        'substitute_notice' => 'Ersatzbenachrichtigung',
        'attorney_general_notified_at' => 'Generalstaatsanwalt benachrichtigt am',
        'attorney_general_reference' => 'Aktenzeichen des Generalstaatsanwalts',
        'notified_at' => 'Gemeldet am',
        'closed_at' => 'Abgeschlossen am',
        'residents' => 'Einwohner',
        'attorney_general' => 'Generalstaatsanwalt',
    ],

    'help' => [
        'discovered_at' => 'Der Zieltermin wird ab diesem Datum berechnet. Benachrichtigen Sie so schnell wie möglich und ohne unangemessene Verzögerung (Cal. Civ. Code §1798.82(a)).',
        'data_categories' => 'Name, Sozialversicherungsnummer, Führerschein, Konten und Zugangscodes, medizinische Daten, Krankenversicherung, biometrische Daten, Anmeldedaten ... (§1798.82(h)).',
        'encrypted' => 'Verschlüsselte Daten erfordern nur dann eine Benachrichtigung, wenn auch der Schlüssel oder die Zugangsdaten erlangt wurden.',
        'substitute_notice' => 'E-Mail, ein Hinweis auf Ihrer Website und landesweite Medien, wenn die Benachrichtigung mehr als 250.000 $ kostet, mehr als 500.000 Personen betroffen sind oder Ihnen Kontaktdaten fehlen (§1798.82(j)).',
    ],

    'notification' => [
        'pending' => 'Nicht bewertet',
        'required' => 'Erforderlich',
        'not_required' => 'Nicht erforderlich',
    ],

    'status' => [
        'open' => 'Offen',
        'pending' => 'Benachrichtigung ausstehend',
        'overdue' => 'Überfällig',
        'closed' => 'Abgeschlossen',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Bewerten',
            'description' => 'Einwohner müssen benachrichtigt werden, wenn ihre unverschlüsselten personenbezogenen Informationen oder verschlüsselte Daten samt Schlüssel von einer unbefugten Person erlangt wurden oder dies vernünftigerweise anzunehmen ist.',
            'success' => 'Bewertung gespeichert.',
        ],
        'law_enforcement_delay' => [
            'label' => 'Für die Strafverfolgung aufschieben',
            'description' => 'Nur wenn eine Strafverfolgungsbehörde feststellt, dass die Benachrichtigung strafrechtliche Ermittlungen behindern würde. Benachrichtigen Sie, sobald das nicht mehr der Fall ist (§1798.82(c)).',
            'success' => 'Aufschub erfasst.',
        ],
        'notify_residents' => [
            'label' => 'Einwohner benachrichtigen',
            'success' => 'Benachrichtigung der Einwohner erfasst.',
        ],
        'notify_attorney_general' => [
            'label' => 'Generalstaatsanwalt benachrichtigen',
            'description' => 'Mehr als 500 Einwohner Kaliforniens wurden benachrichtigt: Reichen Sie ein Muster der Benachrichtigung ohne personenbezogene Informationen beim Generalstaatsanwalt ein (§1798.82(f)).',
            'success' => 'Benachrichtigung des Generalstaatsanwalts erfasst.',
        ],
        'close' => [
            'label' => 'Abschließen',
            'success' => 'Verletzung abgeschlossen.',
        ],
    ],
];
