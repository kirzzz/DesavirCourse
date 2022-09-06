<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%CourseServiceAccess}}`.
 */
class m220831_202949_create_course_service_access_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%CourseServiceAccess}}', [
            'id'                => $this->primaryKey(),
            'serviceId'         => $this->integer(),
            'videoId'           => $this->integer(),
            'created_at'        => $this->integer(),
            'updated_at'        => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%CourseServiceAccess}}');
    }
}
