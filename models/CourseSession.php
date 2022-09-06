<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "CourseSession".
 *
 * @property int $id
 * @property int|null $courseId
 * @property int|null $sessionId
 */
class CourseSession extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CourseSession';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['courseId', 'sessionId'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'courseId' => 'Course ID',
            'sessionId' => 'Session ID',
        ];
    }

    public function getCourse(): ActiveQuery
    {
        return $this->hasOne(Course::class, ['id' => 'courseId']);
    }

    public function getSession(): ActiveQuery
    {
        return $this->hasOne(Session::class, ['id' => 'sessionId']);
    }
}
