<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Course}}`.
 */
class m220831_195015_create_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Course}}', [
            'id'            => $this->primaryKey(),
            'name'          => $this->string()->notNull(),
            'description'   => $this->text()->null(),
            'dateStart'    => $this->dateTime()->null(),
            'dateEnd'      => $this->dateTime()->null(),
            'status'        => $this->integer()->null(),
            'created_at'    => $this->integer(),
            'updated_at'    => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Course}}');
    }
}
