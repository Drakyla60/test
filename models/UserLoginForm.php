<?php
/**
 * Created by PhpStorm.
 * User: Roma Volkov
 * E-mail: Drakyla60@gmail.com
 * Date: 01.12.2018
 * Time: 20:49
 */

namespace app\models;


use yii\base\Model;

class UserLoginForm extends Model
{
    public $email;
    public $password;

    public function rules()
    {
        return [
            ['email', 'required'],
            ['password', 'required'],
            ['email', 'email'],
            ['email', 'errorIfEmailNotFound'],
            ['password', 'errorIfPasswordWrong']
        ];
    }

    public function errorIfEmailNotFound()
    {
        $userRecord = UserRecord::findUserByEmail($this->email);
        if ($userRecord->email != $this->email)
            $this->addError('email',
                'This e-mail does not registered');
    }

    public function errorIfPasswordWrong()
    {
        if ($this->hasErrors())
            return;
        $userRecord = UserRecord::findUserByEmail($this->email);
        if ($userRecord->passhash != $this->password)
            $this->addError('password', 'Wrong password');
    }

    public function login()
    {
        if ($this->hasErrors())
            return;
        $userRecord = UserRecord::findUserByEmail($this->email);
        $userIdentity = UserIdentity::findIdentity($userRecord);
        \Yii::$app->user->login($userIdentity);
    }
}