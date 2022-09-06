<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Feedback}}`.
 */
class m220831_203339_create_feedback_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Feedback}}', [
            'id'        => $this->primaryKey(),
            'name'      => $this->string(),
            'email'     => $this->string(),
            'tel'       => $this->string(),
            'text'      => $this->string(512),
            'sessionId' => $this->integer(),
            'created_at'=> $this->integer(),
            'updated_at'=> $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Feedback}}');
    }
}
