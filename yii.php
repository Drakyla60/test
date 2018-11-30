<?php
/**
 * Created by PhpStorm.
 * User: Roma Volkov
 * E-mail: Drakyla60@gmail.com
 * Date: 28.11.2018
 * Time: 17:48
 */
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . "/vendor/yiisoft/yii2/Yii.php";
$config = require __DIR__ . "/config/console.php";
(new yii\console\Application($config))->run();
