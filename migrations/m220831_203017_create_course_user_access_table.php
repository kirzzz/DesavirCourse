<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%CourseUserAccess}}`.
 */
class m220831_203017_create_course_user_access_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%CourseUserAccess}}', [
            'id'                => $this->primaryKey(),
            'serviceId'         => $this->integer(),
            'userId'            => $this->integer(),
            'created_at'        => $this->integer(),
            'updated_at'        => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%CourseUserAccess}}');
    }
}
