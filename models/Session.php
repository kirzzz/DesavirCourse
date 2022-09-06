<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "Session".
 *
 * @property int $id
 * @property string $sessionId
 * @property string $ip
 * @property string|null $page
 * @property int|null $isGuest
 * @property int|null $userId
 * @property string|null $browser
 * @property string|null $device
 * @property int|null $created_at
 * @property int|null $end_at
 * @property int|null $updated_at
 */
class Session extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Session';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sessionId', 'ip'], 'required'],
            [['isGuest', 'userId', 'created_at', 'end_at', 'updated_at'], 'integer'],
            [['sessionId', 'browser', 'device'], 'string', 'max' => 255],
            [['ip', 'page'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sessionId' => 'Session ID',
            'ip' => 'Ip',
            'page' => 'Page',
            'isGuest' => 'Is Guest',
            'userId' => 'User ID',
            'browser' => 'Browser',
            'device' => 'Device',
            'created_at' => 'Created At',
            'end_at' => 'End At',
            'updated_at' => 'Updated At',
        ];
    }


    public function getCourseSession(): ActiveQuery
    {
        return $this->hasOne(CourseSession::class, ['sessionId' => 'id']);
    }

    public function getCourseVideoSession(): ActiveQuery
    {
        return $this->hasOne(CourseVideoSession::class, ['sessionId' => 'id']);
    }

    public function getFeedback(): ActiveQuery
    {
        return $this->hasOne(Feedback::class, ['sessionId' => 'id']);
    }

    public function getUser(): ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'userId']);
    }
}
