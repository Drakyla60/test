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
            ['email', 'email']
        ];
    }
}