<?php
/**
 * Created by PhpStorm.
 * User: Roma Volkov
 * E-mail: Drakyla60@gmail.com
 * Date: 01.12.2018
 * Time: 20:49
 */

namespace app\models;


use Yii;
use yii\base\Model;

class UserLoginForm extends Model
{
    public $email;
    public $password;
    public $_userRecord;

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

    /**
     *
     */
    public function errorIfEmailNotFound()
    {
        $this->_userRecord = UserRecord::findUserByEmail($this->email);
        if ($this->_userRecord == null)
            $this->addError('email',
                'This e-mail does not registered');
    }

    /**
     *
     */
    public function errorIfPasswordWrong()
    {
        if ($this->hasErrors())
            return;
        if (!$this->_userRecord->validatePassword($this->password))
            $this->addError('password', 'Wrong password');
    }

    public function login()
    {
        if ($this->hasErrors())
            return;
        $userIdentity = UserIdentity::findIdentity($this->_userRecord->id);
        Yii::$app->user->login($userIdentity);
    }
}