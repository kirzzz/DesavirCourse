<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "Feedback".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $tel
 * @property string|null $text
 * @property int|null $sessionId
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sessionId', 'created_at', 'updated_at'], 'integer'],
            [['name', 'email', 'tel'], 'string', 'max' => 255],
            [['text'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'tel' => 'Tel',
            'text' => 'Text',
            'sessionId' => 'Session ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getSession(): ActiveQuery
    {
        return $this->hasOne(Session::class, ['id' => 'sessionId']);
    }
}
