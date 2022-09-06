<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "CourseServiceAccess".
 *
 * @property int $id
 * @property int|null $serviceId
 * @property int|null $videoId
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class CourseServiceAccess extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CourseServiceAccess';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serviceId', 'videoId', 'created_at', 'updated_at'], 'integer'],
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
            'videoId' => 'Video ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getCourseService(): ActiveQuery
    {
        return $this->hasOne(CourseService::class, ['id' => 'serviceId']);
    }

    public function getCourseVideo(): ActiveQuery
    {
        return $this->hasOne(CourseVideo::class, ['id' => 'videoId']);
    }
}
