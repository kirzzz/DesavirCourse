<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "Course".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $dateStart
 * @property string|null $dateEnd
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'Course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['dateStart', 'dateEnd'], 'safe'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'dateStart' => 'Date Start',
            'dateEnd' => 'Date End',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getCourseServices(): ActiveQuery
    {
        return $this->hasMany(CourseService::class, ['courseId' => 'id']);
    }

    public function getCourseVideos(): ActiveQuery
    {
        return $this->hasMany(CourseVideo::class, ['courseId' => 'id']);
    }

    public function getCourseSessions(): ActiveQuery
    {
        return $this->hasMany(CourseSession::class, ['courseId' => 'id']);
    }

    public function getCourseWorks(): ActiveQuery
    {
        return $this->hasMany(CourseWorks::class, ['courseId' => 'id']);
    }
}
