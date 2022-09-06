<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "CourseVideoSession".
 *
 * @property int $id
 * @property int|null $videoId
 * @property string|null $timeStart
 * @property string|null $timeEnd
 * @property int|null $sessionId
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class CourseVideoSession extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CourseVideoSession';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['videoId', 'sessionId', 'created_at', 'updated_at'], 'integer'],
            [['timeStart', 'timeEnd'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'videoId' => 'Video ID',
            'timeStart' => 'Time Start',
            'timeEnd' => 'Time End',
            'sessionId' => 'Session ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getSession(): ActiveQuery
    {
        return $this->hasOne(Session::class, ['id' => 'sessionId']);
    }

    public function getCourseVideo(): ActiveQuery
    {
        return $this->hasOne(CourseVideo::class, ['id' => 'videoId']);
    }
}
