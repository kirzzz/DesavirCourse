<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%CourseVideo}}`.
 */
class m220831_195209_create_course_video_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%CourseVideo}}', [
            'id'            => $this->primaryKey(),
            'courseId'      => $this->integer(),
            'name'          => $this->string(),
            'description'   => $this->string(),
            'url'           => $this->string(),
            'created_at'    => $this->integer(),
            'updated_at'    => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%CourseVideo}}');
    }
}
