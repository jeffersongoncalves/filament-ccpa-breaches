<?php

return [
    'resource' => [
        'label' => 'データ侵害',
        'plural_label' => 'データ侵害',
    ],

    'fields' => [
        'title' => 'タイトル',
        'status' => 'ステータス',
        'discovered_at' => '発見日時',
        'occurred_at' => '発生日時',
        'due_at' => '通知の目標期日',
        'what_happened' => '発生した事象',
        'data_categories' => '対象となった情報',
        'affected_residents' => '影響を受けたカリフォルニア州居住者',
        'encrypted' => '暗号化済み・鍵は未取得',
        'notification_required' => '通知が必要',
        'assessment' => '評価',
        'what_we_are_doing' => '当社の対応',
        'what_you_can_do' => 'お客様にできること',
        'law_enforcement_delay' => '法執行機関による延期',
        'residents_notified_at' => '居住者への通知日時',
        'substitute_notice' => '代替通知',
        'attorney_general_notified_at' => '司法長官への通知日時',
        'attorney_general_reference' => '司法長官の参照番号',
        'notified_at' => '通知日時',
        'closed_at' => '完了日時',
        'residents' => '居住者',
        'attorney_general' => '司法長官',
    ],

    'help' => [
        'discovered_at' => '通知の目標期日はこの日から数えます。可能な限り速やかに、不当な遅延なく通知してください（Cal. Civ. Code §1798.82(a)）。',
        'data_categories' => '氏名、社会保障番号、運転免許証、口座とアクセスコード、医療情報、健康保険、生体データ、ログイン認証情報など（§1798.82(h)）。',
        'encrypted' => '暗号化されたデータは、鍵または認証情報も取得された場合にのみ通知が必要です。',
        'substitute_notice' => '通知費用が25万ドルを超える場合、影響を受ける人が50万人を超える場合、または連絡先がない場合は、メール、ウェブサイト上の告知、州全域のメディアで代替できます（§1798.82(j)）。',
    ],

    'notification' => [
        'pending' => '未評価',
        'required' => '必要',
        'not_required' => '不要',
    ],

    'status' => [
        'open' => '対応中',
        'pending' => '通知待ち',
        'overdue' => '期限切れ',
        'closed' => '完了',
    ],

    'actions' => [
        'assess' => [
            'label' => '評価する',
            'description' => '暗号化されていない個人情報、または鍵とともに暗号化データが、権限のない者に取得された、または取得されたと合理的に考えられる場合は、居住者に通知する必要があります。',
            'success' => '評価を保存しました。',
        ],
        'law_enforcement_delay' => [
            'label' => '法執行機関の要請で延期',
            'description' => '法執行機関が、通知が刑事捜査の妨げになると判断した場合に限ります。妨げにならなくなったら速やかに通知してください（§1798.82(c)）。',
            'success' => '延期を記録しました。',
        ],
        'notify_residents' => [
            'label' => '居住者に通知',
            'success' => '居住者への通知を記録しました。',
        ],
        'notify_attorney_general' => [
            'label' => '司法長官に通知',
            'description' => '500人を超えるカリフォルニア州居住者に通知しました。個人情報を含まない通知のサンプルを司法長官に提出してください（§1798.82(f)）。',
            'success' => '司法長官への通知を記録しました。',
        ],
        'close' => [
            'label' => '完了にする',
            'success' => '侵害をクローズしました。',
        ],
    ],
];
