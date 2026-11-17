<?php

return [
    'resource' => [
        'label' => 'Veri ihlali',
        'plural_label' => 'Veri ihlalleri',
    ],

    'fields' => [
        'title' => 'Başlık',
        'status' => 'Durum',
        'discovered_at' => 'Fark edilme zamanı',
        'occurred_at' => 'Gerçekleşme',
        'due_at' => 'Bildirim hedef tarihi',
        'what_happened' => 'Ne oldu',
        'data_categories' => 'Hangi bilgiler etkilendi',
        'affected_residents' => 'Etkilenen Kaliforniya sakinleri',
        'encrypted' => 'Şifreli, anahtar ele geçirilmedi',
        'notification_required' => 'Bildirim gerekli',
        'assessment' => 'Değerlendirme',
        'what_we_are_doing' => 'Ne yapıyoruz',
        'what_you_can_do' => 'Neler yapabilirsiniz',
        'law_enforcement_delay' => 'Kolluk kuvvetleri nedeniyle erteleme',
        'residents_notified_at' => 'Sakinlere bildirim zamanı',
        'substitute_notice' => 'İkame bildirim',
        'attorney_general_notified_at' => 'Başsavcıya bildirim zamanı',
        'attorney_general_reference' => 'Başsavcılık referansı',
        'notified_at' => 'Bildirilme',
        'closed_at' => 'Kapanma',
        'residents' => 'Sakinler',
        'attorney_general' => 'Başsavcı',
    ],

    'help' => [
        'discovered_at' => 'Bildirim hedef tarihi bu tarihten itibaren hesaplanır. Mümkün olan en kısa sürede ve makul olmayan bir gecikme olmadan bildirin (Cal. Civ. Code §1798.82(a)).',
        'data_categories' => 'Ad, Sosyal Güvenlik numarası, ehliyet, hesaplar ve erişim kodları, tıbbi bilgiler, sağlık sigortası, biyometrik veriler, giriş bilgileri... (§1798.82(h)).',
        'encrypted' => 'Şifreli veriler yalnızca anahtar veya kimlik bilgileri de ele geçirildiyse bildirim gerektirir.',
        'substitute_notice' => 'Bildirim maliyeti 250.000 $\'ı aşarsa, 500.000\'den fazla kişi etkilenirse veya iletişim bilgileriniz yoksa e-posta, web sitenizde duyuru ve eyalet çapında medya (§1798.82(j)).',
    ],

    'notification' => [
        'pending' => 'Değerlendirilmedi',
        'required' => 'Gerekli',
        'not_required' => 'Gerekli değil',
    ],

    'status' => [
        'open' => 'Açık',
        'pending' => 'Bildirim bekliyor',
        'overdue' => 'Süresi geçmiş',
        'closed' => 'Kapalı',
    ],

    'actions' => [
        'assess' => [
            'label' => 'Değerlendir',
            'description' => 'Şifrelenmemiş kişisel bilgileri ya da anahtarıyla birlikte şifreli verileri yetkisiz bir kişi tarafından ele geçirildiğinde veya geçirildiğine makul olarak inanıldığında sakinlere bildirim yapılmalıdır.',
            'success' => 'Değerlendirme kaydedildi.',
        ],
        'law_enforcement_delay' => [
            'label' => 'Kolluk kuvvetleri için ertele',
            'description' => 'Yalnızca bir kolluk birimi bildirimin bir ceza soruşturmasını engelleyeceğine karar verdiğinde. Engel ortadan kalkar kalkmaz bildirin (§1798.82(c)).',
            'success' => 'Erteleme kaydedildi.',
        ],
        'notify_residents' => [
            'label' => 'Sakinlere bildir',
            'success' => 'Sakin bildirimi kaydedildi.',
        ],
        'notify_attorney_general' => [
            'label' => 'Başsavcıya bildir',
            'description' => '500\'den fazla Kaliforniya sakinine bildirim yapıldı: bildirimin kişisel bilgi içermeyen örnek bir kopyasını Başsavcıya gönderin (§1798.82(f)).',
            'success' => 'Başsavcı bildirimi kaydedildi.',
        ],
        'close' => [
            'label' => 'Kapat',
            'success' => 'İhlal kapatıldı.',
        ],
    ],
];
