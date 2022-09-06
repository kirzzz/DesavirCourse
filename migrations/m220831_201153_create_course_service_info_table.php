<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%CourseServiceInfo}}`.
 */
class m220831_201153_create_course_service_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%CourseServiceInfo}}', [
            'id'                => $this->primaryKey(),
            'serviceId'         => $this->integer(),
            'name'              => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%CourseServiceInfo}}');
    }
}
