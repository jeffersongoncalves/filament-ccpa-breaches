<?php

return [
    'resource' => [
        'label' => 'Maʼlumotlar sizib chiqishi',
        'plural_label' => 'Maʼlumotlar sizib chiqishlari',
    ],

    'fields' => [
        'title' => 'Sarlavha',
        'status' => 'Holat',
        'discovered_at' => 'Aniqlangan vaqt',
        'occurred_at' => 'Sodir bo\'lgan vaqt',
        'due_at' => 'Xabarnoma uchun maqsadli muddat',
        'what_happened' => 'Nima sodir boʻldi',
        'data_categories' => 'Qaysi maʼlumotlar daxldor',
        'affected_residents' => 'Taʼsirlangan Kaliforniya aholisi',
        'encrypted' => 'Shifrlangan, kalit qoʻlga kiritilmagan',
        'notification_required' => 'Xabarnoma talab qilinadi',
        'assessment' => 'Baholash',
        'what_we_are_doing' => 'Biz nima qilyapmiz',
        'what_you_can_do' => 'Siz nima qila olasiz',
        'law_enforcement_delay' => 'Huquqni muhofaza qilish organlari soʻrovi bilan kechiktirish',
        'residents_notified_at' => 'Aholiga xabar berilgan vaqt',
        'substitute_notice' => 'Muqobil xabarnoma',
        'attorney_general_notified_at' => 'Bosh prokurorga xabar berilgan vaqt',
        'attorney_general_reference' => 'Bosh prokuratura maʼlumotnomasi',
        'notified_at' => 'Xabar berilgan',
        'closed_at' => 'Yopilgan',
        'residents' => 'Aholi',
        'attorney_general' => 'Bosh prokuror',
    ],

    'help' => [
        'discovered_at' => 'Xabarnoma uchun maqsadli muddat shu sanadan hisoblanadi. Imkon qadar tez va asossiz kechiktirmasdan xabar bering (Cal. Civ. Code §1798.82(a)).',
        'data_categories' => 'Ism, ijtimoiy sugʻurta raqami, haydovchilik guvohnomasi, hisoblar va kirish kodlari, tibbiy maʼlumotlar, tibbiy sugʻurta, biometrik maʼlumotlar, kirish maʼlumotlari... (§1798.82(h)).',
        'encrypted' => 'Shifrlangan maʼlumotlar uchun xabarnoma faqat kalit yoki kirish maʼlumotlari ham qoʻlga kiritilganda kerak.',
        'substitute_notice' => 'Xabarnoma narxi 250 000 dollardan oshsa, 500 000 dan ortiq kishi taʼsirlansa yoki aloqa maʼlumotlari boʻlmasa — elektron pochta, saytingizdagi eʼlon va shtat boʻylab ommaviy axborot vositalari (§1798.82(j)).',
    ],

    'notification' => [
        'pending' => 'Baholanmagan',
        'required' => 'Talab qilinadi',
        'not_required' => 'Talab qilinmaydi',
    ],

    'status' => [
        'open' => 'Ochiq',
        'pending' => 'Xabarnoma kutilmoqda',
        'overdue' => 'Muddati o\'tgan',
        'closed' => 'Yopilgan',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Baholash',
            'description' => 'Aholining shifrlanmagan shaxsiy maʼlumotlari yoki kaliti bilan birga shifrlangan maʼlumotlari ruxsatsiz shaxs tomonidan qoʻlga kiritilgan yoki shunday deb asosli taxmin qilinsa, ularga xabar berilishi kerak.',
            'success' => 'Baholash saqlandi.',
        ],
        'law_enforcement_delay' => [
            'label' => 'Huquqni muhofaza qilish organlari soʻrovi bilan kechiktirish',
            'description' => 'Faqat huquqni muhofaza qilish organi xabarnoma jinoiy tergovga toʻsqinlik qiladi deb topganda. Toʻsqinlik qilmay qolishi bilanoq xabar bering (§1798.82(c)).',
            'success' => 'Kechiktirish qayd etildi.',
        ],
        'notify_residents' => [
            'label' => 'Aholiga xabar berish',
            'success' => 'Aholiga xabarnoma qayd etildi.',
        ],
        'notify_attorney_general' => [
            'label' => 'Bosh prokurorga xabar berish',
            'description' => '500 dan ortiq Kaliforniya aholisiga xabar berildi: shaxsiy maʼlumotlarsiz xabarnoma namunasini Bosh prokurorga yuboring (§1798.82(f)).',
            'success' => 'Bosh prokurorga xabarnoma qayd etildi.',
        ],
        'close' => [
            'label' => 'Yopish',
            'success' => 'Buzilish yopildi.',
        ],
    ],
];
