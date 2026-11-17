<?php

return [
    'resource' => [
        'label' => 'Violazione dei dati',
        'plural_label' => 'Violazioni dei dati',
    ],

    'fields' => [
        'title' => 'Titolo',
        'status' => 'Stato',
        'discovered_at' => 'Scoperta il',
        'occurred_at' => 'Avvenuto il',
        'due_at' => 'Scadenza obiettivo dell\'avviso',
        'what_happened' => 'Cosa è successo',
        'data_categories' => 'Quali informazioni sono coinvolte',
        'affected_residents' => 'Residenti in California coinvolti',
        'encrypted' => 'Cifrate, chiave non acquisita',
        'notification_required' => 'Avviso obbligatorio',
        'assessment' => 'Valutazione',
        'what_we_are_doing' => 'Cosa stiamo facendo',
        'what_you_can_do' => 'Cosa puoi fare',
        'law_enforcement_delay' => 'Rinvio su richiesta delle forze dell\'ordine',
        'residents_notified_at' => 'Residenti avvisati il',
        'substitute_notice' => 'Avviso sostitutivo',
        'attorney_general_notified_at' => 'Procuratore generale avvisato il',
        'attorney_general_reference' => 'Riferimento del procuratore generale',
        'notified_at' => 'Notificato il',
        'closed_at' => 'Chiuso il',
        'residents' => 'Residenti',
        'attorney_general' => 'Procuratore generale',
    ],

    'help' => [
        'discovered_at' => 'La scadenza obiettivo si calcola da questa data. Avvisa il prima possibile e senza ritardi ingiustificati (Cal. Civ. Code §1798.82(a)).',
        'data_categories' => 'Nome, numero di previdenza sociale, patente di guida, conti e codici di accesso, dati medici, assicurazione sanitaria, dati biometrici, credenziali di accesso... (§1798.82(h)).',
        'encrypted' => 'I dati cifrati richiedono un avviso solo se sono state acquisite anche la chiave o le credenziali.',
        'substitute_notice' => 'Email, un avviso sul tuo sito e media a livello statale, quando il costo dell\'avviso supera 250.000 $, sono coinvolte più di 500.000 persone o mancano i recapiti (§1798.82(j)).',
    ],

    'notification' => [
        'pending' => 'Non valutata',
        'required' => 'Obbligatorio',
        'not_required' => 'Non obbligatorio',
    ],

    'status' => [
        'open' => 'Aperto',
        'pending' => 'Avviso in sospeso',
        'overdue' => 'Scaduto',
        'closed' => 'Chiuso',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Valuta',
            'description' => 'I residenti vanno avvisati quando le loro informazioni personali non cifrate, o dati cifrati insieme alla chiave, sono stati acquisiti, o si ritiene ragionevolmente che lo siano stati, da una persona non autorizzata.',
            'success' => 'Valutazione salvata.',
        ],
        'law_enforcement_delay' => [
            'label' => 'Rinvia su richiesta delle forze dell\'ordine',
            'description' => 'Solo quando un\'autorità di polizia stabilisce che l\'avviso ostacolerebbe un\'indagine penale. Avvisa non appena non lo farebbe più (§1798.82(c)).',
            'success' => 'Rinvio registrato.',
        ],
        'notify_residents' => [
            'label' => 'Avvisa i residenti',
            'success' => 'Avviso ai residenti registrato.',
        ],
        'notify_attorney_general' => [
            'label' => 'Avvisa il procuratore generale',
            'description' => 'Sono stati avvisati più di 500 residenti in California: trasmetti una copia di esempio dell\'avviso, senza informazioni personali, al procuratore generale (§1798.82(f)).',
            'success' => 'Avviso al procuratore generale registrato.',
        ],
        'close' => [
            'label' => 'Chiudi',
            'success' => 'Violazione chiusa.',
        ],
    ],
];
