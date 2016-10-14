<?php
/**
 * Created by PhpStorm.
 * User: luhuajun
 * Date: 2016/10/11
 * Time: 13:23
 */
return [
    'driver' => env('MAIL_DRIVER', 'smtp'),

    'host' => env('MAIL_HOST', 'smtp.163.com'),

    'port' => env('MAIL_PORT', 25),

    'from' => [
        'address' => '',
        'name' => null
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    'username' => env('MAIL_USERNAME',''),

    'password' => env('MAIL_PASSWORD',''),

    'sendmail' => '/usr/sbin/sendmail -bs',

    'pretend' => false,
];
