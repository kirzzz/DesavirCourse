<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%CourseTariff}}`.
 */
class m220831_195344_create_course_tariff_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%CourseTariff}}', [
            'id'            => $this->primaryKey(),
            'serviceId'     => $this->integer(),
            'price'         => $this->decimal(8,2),
            'priceNew'      => $this->decimal(8,2),
            'dateFrom'      => $this->dateTime(),
            'dateTo'        => $this->dateTime(),
            'created_at'    => $this->integer(),
            'updated_at'    => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%CourseTariff}}');
    }
}
