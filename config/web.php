<?php
/**
 * Created by PhpStorm.
 * User: Roma Volkov
 * E-mail: Drakyla60@gmail.com
 * Date: 28.11.2018
 * Time: 17:57
 */

return [
    'id' => 'test',
    'basePath' => realpath(__DIR__ . '/../'),
    'components' => [
         'urlManager' => [
             'enablePrettyUrl' => true,
             'showScriptName' => false
         ]
    ],
];