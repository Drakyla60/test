<?php
/**
 * Created by PhpStorm.
 * User: Roma Volkov
 * E-mail: Drakyla60@gmail.com
 * Date: 30.11.2018
 * Time: 16:13
 */

namespace app\models;
use Faker\Factory;
use yii\db\ActiveRecord;

/**
 * Class UserRecord
 * @property string name
 * @property string email
 * @property string passhash
 * @property int status
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
        $faker = Factory::create();
        $this->name = $faker->name;
        $this->email = $faker->email;
        $this->passhash = $faker->password;
    }

    public static function existsEmail($email)
    {
        return 0 < static::find()->where(['email' => $email])->count();
    }

    public function setUserJoinForm(UserJoinForm $userJoinForm)
    {
        $this->name = $userJoinForm->name;
        $this->email =  $userJoinForm->email;
        $this->passhash = $userJoinForm->password;
        $this->status = 2;
    }
}