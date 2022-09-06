<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%CourseVideoSession}}`.
 */
class m220831_202459_create_course_video_session_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%CourseVideoSession}}', [
            'id'            => $this->primaryKey(),
            'videoId'       => $this->integer(),
            'timeStart'     => $this->time(),
            'timeEnd'       => $this->time(),
            'sessionId'     => $this->integer(),
            'created_at'    => $this->integer(),
            'updated_at'    => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%CourseVideoSession}}');
    }
}
