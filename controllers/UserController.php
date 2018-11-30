<?php
/**
 * Created by PhpStorm.
 * User: Roma Volkov
 * E-mail: Drakyla60@gmail.com
 * Date: 29.11.2018
 * Time: 20:37
 */

namespace app\controllers;


use app\models\UserIdentity;
use app\models\UserJoinForm;
use app\models\UserRecord;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionJoin()
    {
//        $userRecord = new UserRecord();
//        $userRecord->setTestUser();
//        $userRecord->save();
        $userJoinForm = new UserJoinForm();

        return $this->render('join', [
            'userJoinForm' => $userJoinForm
        ]);
    }

    public function actionLogin()
    {
        $uid = UserIdentity::findIdentity(1);
        Yii::$app->user->login($uid);
        return $this->render('login');
    }
}