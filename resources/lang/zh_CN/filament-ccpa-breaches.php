<?php

return [
    'resource' => [
        'label' => '数据泄露',
        'plural_label' => '数据泄露',
    ],

    'fields' => [
        'title' => '标题',
        'status' => '状态',
        'discovered_at' => '发现时间',
        'occurred_at' => '发生时间',
        'due_at' => '通知目标期限',
        'what_happened' => '发生了什么',
        'data_categories' => '涉及哪些信息',
        'affected_residents' => '受影响的加州居民',
        'encrypted' => '已加密，密钥未被获取',
        'notification_required' => '需要通知',
        'assessment' => '评估',
        'what_we_are_doing' => '我们正在采取的措施',
        'what_you_can_do' => '你可以采取的措施',
        'law_enforcement_delay' => '应执法机关要求延迟',
        'residents_notified_at' => '通知居民时间',
        'substitute_notice' => '替代通知',
        'attorney_general_notified_at' => '通知总检察长时间',
        'attorney_general_reference' => '总检察长参考编号',
        'notified_at' => '通知时间',
        'closed_at' => '关闭时间',
        'residents' => '居民',
        'attorney_general' => '总检察长',
    ],

    'help' => [
        'discovered_at' => '通知目标期限从该日期起算。请以最快的速度通知，不得无故拖延（Cal. Civ. Code §1798.82(a)）。',
        'data_categories' => '姓名、社会安全号码、驾照、账户和访问代码、医疗信息、健康保险、生物识别数据、登录凭据……（§1798.82(h)）。',
        'encrypted' => '加密数据仅在密钥或凭据也被获取时才需要通知。',
        'substitute_notice' => '当通知费用超过 25 万美元、受影响人数超过 50 万人或缺少联系方式时，可通过电子邮件、网站公告和全州媒体进行通知（§1798.82(j)）。',
    ],

    'notification' => [
        'pending' => '未评估',
        'required' => '需要',
        'not_required' => '无需',
    ],

    'status' => [
        'open' => '处理中',
        'pending' => '待通知',
        'overdue' => '已逾期',
        'closed' => '已关闭',
    ],

    'actions' => [
        'assess' => [
            'label' => '评估',
            'description' => '当居民未加密的个人信息，或连同密钥的加密数据，已被或有合理理由认为已被未经授权的人获取时，必须通知居民。',
            'success' => '评估已保存。',
        ],
        'law_enforcement_delay' => [
            'label' => '应执法机关要求延迟',
            'description' => '仅当执法机关认定通知会妨碍刑事调查时适用。一旦不再妨碍，应立即通知（§1798.82(c)）。',
            'success' => '已记录延迟。',
        ],
        'notify_residents' => [
            'label' => '通知居民',
            'success' => '已记录居民通知。',
        ],
        'notify_attorney_general' => [
            'label' => '通知总检察长',
            'description' => '已通知超过 500 名加州居民：请向总检察长提交一份不含个人信息的通知样本（§1798.82(f)）。',
            'success' => '已记录总检察长通知。',
        ],
        'close' => [
            'label' => '关闭',
            'success' => '违规已关闭。',
        ],
    ],
];
