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
}