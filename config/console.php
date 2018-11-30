<?php
/**
 * Created by PhpStorm.
 * User: Roma Volkov
 * E-mail: Drakyla60@gmail.com
 * Date: 30.11.2018
 * Time: 12:30
 */

return [
    'id' => 'test-console',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => require  (__DIR__ . '/db.php')
    ],
];