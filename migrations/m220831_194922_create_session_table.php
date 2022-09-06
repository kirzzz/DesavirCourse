<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Session}}`.
 */
class m220831_194922_create_session_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Session}}', [
            'id'            => $this->primaryKey(),
            'sessionId'    => $this->string()->notNull(),
            'ip'            => $this->string(32)->notNull(),
            'page'          => $this->string(32),
            'isGuest'      => $this->boolean(),
            'userId'       => $this->integer()->null(),
            'browser'       => $this->string()->null(),
            'device'        => $this->string()->null(),
            'created_at'    => $this->integer(),
            'end_at'        => $this->integer(),
            'updated_at'    => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Session}}');
    }
}
