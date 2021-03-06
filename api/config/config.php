<?php

return [
    'API' => [
        //'fcm_server_key' => 'AAAA6Q9iKbk:APA91bGNGZcQJn-MLJaHVkFni0Q0E2NMMdSJAUAmKap4cNOdNcx40Z5UXiUtGqeRYQJJ8ynhWbnfgUHuCFPvCRI9D6x91sVfK4WlLKGllHQEkNZYZ1bfs7IBSlmkZCzqYxHZbNV-8__i',
        //'fcm_server_key_android' => 'AAAA8Od2IfU:APA91bEqvi-JKugs7MKIptHWuAAbo3LdF66qoVuF9ncKXig__IKWoSQkwgLt0FRxVEAGGbUe1vhA8aX_gfQ49Clwjn6QAQXdWXaA_j8Kx0qjtZH1ic-V0Xdfv0wCNZmLHp2n3gfW7yp0',
        'fcm_server_key' => 'AAAA3swrDnM:APA91bHviV08xk-m_Zs00sxdFK1yNREdwebd6EAeQ_yMixsIPUDNzXMGsngSWiDdkq5W27QvvNSg4C_bQTSB89-YPtvKg06BZB7fh9lJ7Y_uxtTMIgeeGh57pj1ntonFeAtYEM9BKWHG',
        'fcm_server_key_android' => 'AAAA3swrDnM:APA91bHviV08xk-m_Zs00sxdFK1yNREdwebd6EAeQ_yMixsIPUDNzXMGsngSWiDdkq5W27QvvNSg4C_bQTSB89-YPtvKg06BZB7fh9lJ7Y_uxtTMIgeeGh57pj1ntonFeAtYEM9BKWHG',
        'salt_key' => 'BLC-PCM-2018',
        'jwt_key' => 'PCM-BLC-2018',
        'template_response' => [
            'status' => false,
            'error_code' => 0,
            'error_message' => '',
            'data' => null
        ],
        'error_code' => [
            100 => 'Bad request',
            101 => 'Invalid params',
            102 => 'System error',
            201 => 'Authentication failed',
            202 => 'Authentication expired',
            203 => 'Checksum failed',
            204 => 'Login failed',
            205 => 'Account was blocked',
            206 => 'This device already had an account',
            207 => 'This account exited group',
            208 => 'Invite code not available',
            209 => 'Not enough coin',
            301 => 'Already sent cash-out',
            302 => "The round is not over",
            404 => 'Not found',
            600 => 'DBCommand failed',
            800 => 'Email exist',
            801 => 'Old password wrong',
            802 => 'Date format invalid',
            803 => 'Image invalid',
            804 => 'Nickname already exist',
        ],
        'mongo_db' => 'miracle_chat_db',
    ],
    'COMMON' => [
        "timezone" => "Asia/Tokyo"
    ]
];