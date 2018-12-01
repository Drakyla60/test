<?php
namespace app\models;

use yii\base\Model;

/**
 * Created by PhpStorm.
 * User: Roma Volkov
 * E-mail: Drakyla60@gmail.com
 * Date: 30.11.2018
 * Time: 19:29
 */

class UserJoinForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $password2;

    public function rules()
    {
        return [
            ["name", "required"],
            ["email", "required"],
            ["password", "required"],
            ["password2", "required"],
            ['name', 'string', 'min' => 3, 'max' => 30],
            ['email', 'email'],
            ['password', 'string', 'min' => 6],
            ['password2', 'compare', 'compareAttribute' => 'password'],
            ['email' , 'errorIfEmailUsed']
        ];
    }

    public function setUserRecord(UserRecord $userRecord)
    {
        $this->name = $userRecord->name;
        $this->email = $userRecord->email;
        $this->password = $this->password2 = "qwerty";
    }

    public function errorIfEmailUsed()
    {
        if(UserRecord::existsEmail($this->email))
            $this->addError('email', 'This e-mail already exists');
    }
}
