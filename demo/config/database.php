<?php
/**
 * Created by PhpStorm.
 * User: akaqin
 * Date: 2019-01-22
 * Time: 11:39
 */

return [
    'db' => [
        'dsn'	=> 'mysql:host=116.62.132.116;dbname=mfashion',
        'hostname' => '116.62.132.116',
        'username' => 'mfashion',
        'password' => 'Mfashion888',
        'database' => 'mfashion',
        'dbdriver' => 'pdo',
        'dbprefix' => '',
        'pconnect' => FALSE,
        'db_debug' => (env('APP_ENV') !== 'production'),
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8mb4',
        'dbcollat' => 'utf8mb4_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
    ]
];


