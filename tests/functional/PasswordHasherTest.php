<?php

use app\models\UserRecord;
use yii\base\Security;

class PasswordHasherTest extends \Codeception\Test\Unit
{
    /**
     * @var \FunctionalTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @throws \yii\base\Exception
     */
    public function testPasswordIsHash()
    {
        $my_password = "qwerty123";

        $userRecord_local = new UserRecord();
        $userRecord_local->setTestUser();

        $userRecord_local->setPassword($my_password);
        $userRecord_local->save();

        $userRecord_found = UserRecord::findOne($userRecord_local->id);
        $this->assertInstanceOf(get_class($userRecord_local), $userRecord_found);

        $security = new Security();
        $this->assertTrue($security->validatePassword(
            $my_password,
            $userRecord_found->passhash
        ));
    }

    public function testPasswordIsNotRehashed()
    {
        $my_password = "qwerty123";

        $userRecord_local = new UserRecord();
        $userRecord_local->setTestUser();

        $userRecord_local->setPassword($my_password);
        $userRecord_local->save();

        $first_hash = $userRecord_local->passhash;

        $userRecord_local->name .= mt_rand(1, 9);
        $userRecord_local->save();

        $this->assertEquals($first_hash, $userRecord_local->passhash);

        $userRecord_found = UserRecord::findOne($userRecord_local->id);
        $this->assertEquals($first_hash, $userRecord_found->passhash);
    }
}