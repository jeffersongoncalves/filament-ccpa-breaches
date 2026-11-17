<?php

return [
    'resource' => [
        'label' => 'Datalek',
        'plural_label' => 'Datalekken',
    ],

    'fields' => [
        'title' => 'Titel',
        'status' => 'Status',
        'discovered_at' => 'Ontdekt op',
        'occurred_at' => 'Opgetreden op',
        'due_at' => 'Streefdatum melding',
        'what_happened' => 'Wat er is gebeurd',
        'data_categories' => 'Welke informatie betrokken was',
        'affected_residents' => 'Getroffen inwoners van Californië',
        'encrypted' => 'Versleuteld, sleutel niet verkregen',
        'notification_required' => 'Melding vereist',
        'assessment' => 'Beoordeling',
        'what_we_are_doing' => 'Wat wij doen',
        'what_you_can_do' => 'Wat u kunt doen',
        'law_enforcement_delay' => 'Uitstel op verzoek van opsporingsdiensten',
        'residents_notified_at' => 'Inwoners gemeld op',
        'substitute_notice' => 'Vervangende melding',
        'attorney_general_notified_at' => 'Procureur-generaal gemeld op',
        'attorney_general_reference' => 'Kenmerk procureur-generaal',
        'notified_at' => 'Gemeld op',
        'closed_at' => 'Afgesloten op',
        'residents' => 'Inwoners',
        'attorney_general' => 'Procureur-generaal',
    ],

    'help' => [
        'discovered_at' => 'De streefdatum wordt vanaf deze datum berekend. Meld zo snel mogelijk en zonder onredelijke vertraging (Cal. Civ. Code §1798.82(a)).',
        'data_categories' => 'Naam, Social Security-nummer, rijbewijs, rekeningen en toegangscodes, medische gegevens, zorgverzekering, biometrische gegevens, inloggegevens... (§1798.82(h)).',
        'encrypted' => 'Versleutelde gegevens vereisen alleen een melding als ook de sleutel of inloggegevens zijn verkregen.',
        'substitute_notice' => 'E-mail, een melding op je website en media in de hele staat, als de melding meer dan $ 250.000 kost, meer dan 500.000 mensen zijn getroffen of je geen contactgegevens hebt (§1798.82(j)).',
    ],

    'notification' => [
        'pending' => 'Niet beoordeeld',
        'required' => 'Vereist',
        'not_required' => 'Niet vereist',
    ],

    'status' => [
        'open' => 'Open',
        'pending' => 'Melding openstaand',
        'overdue' => 'Te laat',
        'closed' => 'Afgesloten',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Beoordelen',
            'description' => 'Inwoners moeten worden ingelicht als hun onversleutelde persoonsgegevens, of versleutelde gegevens met de sleutel, door een onbevoegde zijn verkregen of redelijkerwijs worden vermoed te zijn verkregen.',
            'success' => 'Beoordeling opgeslagen.',
        ],
        'law_enforcement_delay' => [
            'label' => 'Uitstellen voor opsporingsdiensten',
            'description' => 'Alleen als een opsporingsdienst bepaalt dat de melding een strafrechtelijk onderzoek zou belemmeren. Meld zodra dat niet meer zo is (§1798.82(c)).',
            'success' => 'Uitstel vastgelegd.',
        ],
        'notify_residents' => [
            'label' => 'Inwoners melden',
            'success' => 'Melding aan inwoners vastgelegd.',
        ],
        'notify_attorney_general' => [
            'label' => 'Procureur-generaal melden',
            'description' => 'Er zijn meer dan 500 inwoners van Californië ingelicht: dien een voorbeeld van de melding, zonder persoonsgegevens, in bij de procureur-generaal (§1798.82(f)).',
            'success' => 'Melding aan de procureur-generaal vastgelegd.',
        ],
        'close' => [
            'label' => 'Afsluiten',
            'success' => 'Inbreuk afgesloten.',
        ],
    ],
];
