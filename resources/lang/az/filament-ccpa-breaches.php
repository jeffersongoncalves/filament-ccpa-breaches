<?php

return [
    'resource' => [
        'label' => 'Məlumat sızması',
        'plural_label' => 'Məlumat sızmaları',
    ],

    'fields' => [
        'title' => 'Başlıq',
        'status' => 'Status',
        'discovered_at' => 'Aşkar edilmə vaxtı',
        'occurred_at' => 'Baş verib',
        'due_at' => 'Bildiriş üçün hədəf tarix',
        'what_happened' => 'Nə baş verdi',
        'data_categories' => 'Hansı məlumatlar təsirləndi',
        'affected_residents' => 'Təsirlənmiş Kaliforniya sakinləri',
        'encrypted' => 'Şifrələnib, açar əldə edilməyib',
        'notification_required' => 'Bildiriş tələb olunur',
        'assessment' => 'Qiymətləndirmə',
        'what_we_are_doing' => 'Nə edirik',
        'what_you_can_do' => 'Siz nə edə bilərsiniz',
        'law_enforcement_delay' => 'Hüquq-mühafizə orqanlarının tələbi ilə gecikmə',
        'residents_notified_at' => 'Sakinlərə bildiriş vaxtı',
        'substitute_notice' => 'Alternativ bildiriş',
        'attorney_general_notified_at' => 'Baş prokurora bildiriş vaxtı',
        'attorney_general_reference' => 'Baş prokurorluq istinadı',
        'notified_at' => 'Bildirilib',
        'closed_at' => 'Bağlanıb',
        'residents' => 'Sakinlər',
        'attorney_general' => 'Baş prokuror',
    ],

    'help' => [
        'discovered_at' => 'Bildiriş üçün hədəf tarix bu tarixdən hesablanır. Mümkün qədər tez və əsassız gecikmə olmadan bildirin (Cal. Civ. Code §1798.82(a)).',
        'data_categories' => 'Ad, Sosial Təminat nömrəsi, sürücülük vəsiqəsi, hesablar və giriş kodları, tibbi məlumatlar, tibbi sığorta, biometrik məlumatlar, giriş məlumatları... (§1798.82(h)).',
        'encrypted' => 'Şifrələnmiş məlumatlar yalnız açar və ya giriş məlumatları da əldə edildikdə bildiriş tələb edir.',
        'substitute_notice' => 'E-poçt, saytınızda bildiriş və ştat miqyasında media — bildirişin dəyəri 250 000 dolları keçdikdə, 500 000-dən çox şəxs təsirləndikdə və ya əlaqə məlumatlarınız olmadıqda (§1798.82(j)).',
    ],

    'notification' => [
        'pending' => 'Qiymətləndirilməyib',
        'required' => 'Tələb olunur',
        'not_required' => 'Tələb olunmur',
    ],

    'status' => [
        'open' => 'Açıq',
        'pending' => 'Bildiriş gözlənilir',
        'overdue' => 'Gecikmiş',
        'closed' => 'Bağlı',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Qiymətləndirmək',
            'description' => 'Sakinlərin şifrələnməmiş şəxsi məlumatları və ya açarı ilə birlikdə şifrələnmiş məlumatları icazəsiz şəxs tərəfindən əldə edildikdə və ya əldə edildiyi əsaslı şəkildə güman edildikdə onlara bildiriş verilməlidir.',
            'success' => 'Qiymətləndirmə yadda saxlanıldı.',
        ],
        'law_enforcement_delay' => [
            'label' => 'Hüquq-mühafizə orqanlarının tələbi ilə təxirə salmaq',
            'description' => 'Yalnız hüquq-mühafizə orqanı bildirişin cinayət istintaqına mane olacağını müəyyən etdikdə. Artıq mane olmadıqda dərhal bildirin (§1798.82(c)).',
            'success' => 'Gecikmə qeydə alındı.',
        ],
        'notify_residents' => [
            'label' => 'Sakinlərə bildiriş göndərmək',
            'success' => 'Sakinlərə bildiriş qeydə alındı.',
        ],
        'notify_attorney_general' => [
            'label' => 'Baş prokurora bildiriş göndərmək',
            'description' => '500-dən çox Kaliforniya sakininə bildiriş göndərilib: bildirişin şəxsi məlumatlar olmadan nümunə nüsxəsini Baş prokurora təqdim edin (§1798.82(f)).',
            'success' => 'Baş prokurora bildiriş qeydə alındı.',
        ],
        'close' => [
            'label' => 'Bağla',
            'success' => 'Pozuntu bağlandı.',
        ],
    ],
];
