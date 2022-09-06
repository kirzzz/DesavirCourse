<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%CourseSession}}`.
 */
class m220831_195223_create_course_session_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%CourseSession}}', [
            'id'        => $this->primaryKey(),
            'courseId'  => $this->integer(),
            'sessionId' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%CourseSession}}');
    }
}
