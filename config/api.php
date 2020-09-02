<?php

return [
    // 接口频率限制
    'rate_limits' => [
        // 访问频率限制，次/分钟
        'access' => env('RATE_LIMITS','60,1'),
        // 登陆相关，次/分钟
        'sign' => env('SIGN_RATE_LIMITS','60,1'),
    ],
];
