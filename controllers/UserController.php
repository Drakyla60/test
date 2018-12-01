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
use app\models\UserLoginForm;
use app\models\UserRecord;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionJoin()
    {
        if (Yii::$app->request->isPost)
            return $this->actionJoinPost();
        $userJoinForm = new UserJoinForm();

        $userRecord = new UserRecord();
        $userRecord->setTestUser();
        $userJoinForm->setUserRecord($userRecord);
        return $this->render('join', [
            'userJoinForm' => $userJoinForm
        ]);
    }

    public function actionJoinPost()
    {
        $userJoinForm = new UserJoinForm();
        if($userJoinForm->load(Yii::$app->request->post()))
            if($userJoinForm->validate()) {
                $userRecord = new UserRecord();
                $userRecord->setUserJoinForm($userJoinForm);
                $userRecord->save();
            }


        return $this->render('join', [
            'userJoinForm' => $userJoinForm
        ]);
    }

    public function actionLogin()
    {
    $userLoginForm = new UserLoginForm();
        return $this->render('login', [
            'userLoginForm' => $userLoginForm
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect("/");
    }


}