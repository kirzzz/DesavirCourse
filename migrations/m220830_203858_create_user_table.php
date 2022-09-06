<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%User}}`.
 */
class m220830_203858_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%User}}', [
            'id' => $this->primaryKey(),
            'username'=> $this->string(50)->notNull()->unique(),
            'tel' => $this->string(20)->unique(),
            'email' => $this->string(100)->notNull()->unique(),
            'name' => $this->string(50),
            'role' => $this->string(20)->notNull(),
            'authKey' => $this->string(32)->notNull(),
            'passwordHash' => $this->string()->notNull(),
            'passwordResetToken' => $this->string()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0),
            'ipLast' => $this->string(),
            'ipCreate' => $this->string(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%User}}');
    }
}
