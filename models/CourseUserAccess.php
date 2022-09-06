<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "CourseUserAccess".
 *
 * @property int $id
 * @property int|null $serviceId
 * @property int|null $userId
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class CourseUserAccess extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CourseUserAccess';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serviceId', 'userId', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'serviceId' => 'Service ID',
            'userId' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getCourseService(): ActiveQuery
    {
        return $this->hasOne(CourseService::class, ['id' => 'serviceId']);
    }

    public function getUser(): ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'userId']);
    }
}
