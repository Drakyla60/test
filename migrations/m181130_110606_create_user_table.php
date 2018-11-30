<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m181130_110606_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string()->unique()->notNull(),
            'passhash' => $this->string()->notNull(),
            'status' => $this->integer()->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
