<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%CourseWorks}}`.
 */
class m220831_203612_create_course_works_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%CourseWorks}}', [
            'id'                => $this->primaryKey(),
            'courseId'          => $this->integer(),
            'serviceId'         => $this->integer(),
            'description'       => $this->string(256),
            'url'               => $this->string(512),
            'type'              => $this->smallInteger(),
            'status'            => $this->smallInteger(),
            'created_at'        => $this->integer(),
            'updated_at'        => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%CourseWorks}}');
    }
}
