<?php
/**
 * Created by PhpStorm.
 * User: luhuajun
 * Date: 2016/10/11
 * Time: 13:23
 */
return [
    'driver' => env('MAIL_DRIVER', 'smtp'),

    'host' => env('MAIL_HOST', 'smtp.caissa.com.cn'),

    'port' => env('MAIL_PORT', 25),

    'from' => [
        'address' => 'luhuajun@caissa.com.cn',
        'name' => null
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    'username' => env('MAIL_USERNAME','caissa(luhuajun)'),

    'password' => env('MAIL_PASSWORD','jaylu123@.'),

    'sendmail' => '/usr/sbin/sendmail -bs',

    'pretend' => false,
];
