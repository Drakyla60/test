<?php
/**
 * Created by PhpStorm.
 * User: Roma Volkov
 * E-mail: Drakyla60@gmail.com
 * Date: 29.11.2018
 * Time: 20:37
 */

namespace app\controllers;


use yii\web\Controller;

class UserController extends Controller
{
    public function actionJoin()
    {
        return $this->render('join');
    }

    public function actionLogin()
    {
        return $this->render('login');
    }
}