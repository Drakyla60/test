<?php
/**
 * Created by PhpStorm.
 * User: Roma Volkov
 * E-mail: Drakyla60@gmail.com
 * Date: 28.11.2018
 * Time: 17:48
 */

    define ('YII_DEBUG', true);

    require __DIR__ . "/../vendor/yiisoft/yii2/Yii.php";
    $config = require __DIR__ . "/../config/web.php";
    (new yii\web\Application($config))->run();