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
    'bootstrap' => [
        'debug'
    ],
    'components' => [
         'urlManager' => [
             'enablePrettyUrl' => true,
             'showScriptName' => false
         ],
        'request' => [
            'cookieValidationKey' => 'sd.jklhtfn;svmkjsdmkjlggh,dsoigh,'
        ],
        'db' => require (__DIR__ . '/db.php'),
    ],
    'modules' => [
        'debug' => 'yii\debug\Module'
    ]
];