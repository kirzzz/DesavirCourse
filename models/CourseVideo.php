<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "CourseVideo".
 *
 * @property int $id
 * @property int|null $courseId
 * @property string|null $name
 * @property string|null $description
 * @property string|null $url
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class CourseVideo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CourseVideo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['courseId', 'created_at', 'updated_at'], 'integer'],
            [['name', 'description', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'courseId' => 'Course ID',
            'name' => 'Name',
            'description' => 'Description',
            'url' => 'Url',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getCourseServiceAccess(): ActiveQuery
    {
        return $this->hasOne(CourseServiceAccess::class, ['videoId' => 'id']);
    }

    public function getCourse(): ActiveQuery
    {
        return $this->hasOne(Course::class, ['id' => 'courseId']);
    }
}
