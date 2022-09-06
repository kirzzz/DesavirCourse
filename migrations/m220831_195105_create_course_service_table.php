<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%CourseService}}`.
 */
class m220831_195105_create_course_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%CourseService}}', [
            'id'            => $this->primaryKey(),
            'courseId'      => $this->integer(),
            'groupId'       => $this->integer(),
            'parentId'      => $this->integer(),
            'name'          => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%CourseService}}');
    }
}
