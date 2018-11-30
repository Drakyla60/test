<?php
/**
 * Created by PhpStorm.
 * User: Roma Volkov
 * E-mail: Drakyla60@gmail.com
 * Date: 30.11.2018
 * Time: 16:13
 */

namespace app\models;
use yii\db\ActiveRecord;

/**
 * Class UserRecord
 * @property string name
 * @property string email
 * @property string passhash
 * @package app\models
 */
class UserRecord extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return "user";
    }


    /**
     *
     */
    public function setTestUser()
    {
        $this->name = "John";
        $this->email = "Drakyla@spaces.ru";
        $this->passhash = "qwerty";
    }
}