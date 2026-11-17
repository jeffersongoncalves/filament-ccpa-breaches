<?php

return [
    'resource' => [
        'label' => 'Naruszenie danych',
        'plural_label' => 'Naruszenia danych',
    ],

    'fields' => [
        'title' => 'Tytuł',
        'status' => 'Status',
        'discovered_at' => 'Wykryto',
        'occurred_at' => 'Wystąpił',
        'due_at' => 'Docelowy termin powiadomienia',
        'what_happened' => 'Co się stało',
        'data_categories' => 'Jakich informacji to dotyczyło',
        'affected_residents' => 'Poszkodowani mieszkańcy Kalifornii',
        'encrypted' => 'Zaszyfrowane, klucz nie został pozyskany',
        'notification_required' => 'Wymagane powiadomienie',
        'assessment' => 'Ocena',
        'what_we_are_doing' => 'Co robimy',
        'what_you_can_do' => 'Co możesz zrobić',
        'law_enforcement_delay' => 'Odroczenie na wniosek organów ścigania',
        'residents_notified_at' => 'Mieszkańców powiadomiono',
        'substitute_notice' => 'Powiadomienie zastępcze',
        'attorney_general_notified_at' => 'Prokuratora Generalnego powiadomiono',
        'attorney_general_reference' => 'Sygnatura Prokuratora Generalnego',
        'notified_at' => 'Powiadomiono',
        'closed_at' => 'Zamknięto',
        'residents' => 'Mieszkańcy',
        'attorney_general' => 'Prokurator Generalny',
    ],

    'help' => [
        'discovered_at' => 'Docelowy termin liczy się od tej daty. Powiadom jak najszybciej i bez nieuzasadnionej zwłoki (Cal. Civ. Code §1798.82(a)).',
        'data_categories' => 'Imię i nazwisko, numer Social Security, prawo jazdy, konta i kody dostępu, dane medyczne, ubezpieczenie zdrowotne, dane biometryczne, dane logowania... (§1798.82(h)).',
        'encrypted' => 'Zaszyfrowane dane wymagają powiadomienia tylko wtedy, gdy pozyskano również klucz lub dane uwierzytelniające.',
        'substitute_notice' => 'E-mail, informacja na Twojej stronie i w mediach w całym stanie, gdy koszt powiadomienia przekracza 250 000 USD, dotyczy to ponad 500 000 osób lub brakuje danych kontaktowych (§1798.82(j)).',
    ],

    'notification' => [
        'pending' => 'Nieoceniono',
        'required' => 'Wymagane',
        'not_required' => 'Niewymagane',
    ],

    'status' => [
        'open' => 'Otwarty',
        'pending' => 'Powiadomienie oczekuje',
        'overdue' => 'Po terminie',
        'closed' => 'Zamknięty',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Oceń',
            'description' => 'Mieszkańców trzeba powiadomić, gdy ich niezaszyfrowane dane osobowe lub zaszyfrowane dane wraz z kluczem zostały pozyskane, lub istnieje uzasadnione przekonanie, że zostały pozyskane, przez osobę nieuprawnioną.',
            'success' => 'Zapisano ocenę.',
        ],
        'law_enforcement_delay' => [
            'label' => 'Odrocz na wniosek organów ścigania',
            'description' => 'Tylko gdy organ ścigania uzna, że powiadomienie utrudniłoby dochodzenie karne. Powiadom, gdy tylko przestanie to być przeszkodą (§1798.82(c)).',
            'success' => 'Zapisano odroczenie.',
        ],
        'notify_residents' => [
            'label' => 'Powiadom mieszkańców',
            'success' => 'Zapisano powiadomienie mieszkańców.',
        ],
        'notify_attorney_general' => [
            'label' => 'Powiadom Prokuratora Generalnego',
            'description' => 'Powiadomiono ponad 500 mieszkańców Kalifornii: prześlij Prokuratorowi Generalnemu wzór powiadomienia bez danych osobowych (§1798.82(f)).',
            'success' => 'Zapisano powiadomienie Prokuratora Generalnego.',
        ],
        'close' => [
            'label' => 'Zamknij',
            'success' => 'Naruszenie zamknięte.',
        ],
    ],
];
