<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%CourseFinancialOperation}}`.
 */
class m220831_204321_create_course_finacial_operation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%CourseFinancialOperation}}', [
            'id' => $this->primaryKey(),
            'courseId' => $this->integer()->notNull(),
            'sessionId' => $this->integer()->notNull(),
            'TerminalKey' => $this->integer()->notNull(),
            'Amount' => $this->integer()->notNull(),
            'OrderId' => $this->integer()->notNull(),
            'Token' => $this->integer(),
            'IP' => $this->integer(),
            'Description' => $this->integer(),
            'Currency' => $this->integer(),
            'CustomerKey' => $this->integer()->notNull(),
            'Recurrent' => $this->string(),
            'PayType' => $this->string(),
            'Language' => $this->string(),
            'NotificationURL' => $this->string(),
            'SuccessURL' => $this->string(),
            'FailURL' => $this->string(),
            'RedirectDueDate' => $this->string(),
            'DATA' => $this->string(),
            'Receipt' => $this->string(),
            'Shops' => $this->string(),
            'Receipts' => $this->string(),
            'Descriptor' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%CourseFinancialOperation}}');
    }
}
