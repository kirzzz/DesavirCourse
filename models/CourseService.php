<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "CourseService".
 *
 * @property int $id
 * @property int|null $courseId
 * @property int|null $groupId
 * @property int|null $parentId
 * @property string|null $name
 */
class CourseService extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CourseService';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['courseId', 'groupId', 'parentId'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'groupId' => 'Group ID',
            'parentId' => 'Parent ID',
            'name' => 'Name',
        ];
    }

    public function getCourse(): ActiveQuery
    {
        return $this->hasOne(Course::class, ['id' => 'courseId']);
    }

    public function getCourseService(): ActiveQuery
    {
        return $this->hasOne(CourseService::class, ['parentId' => 'id']);
    }

    public function getCourseServiceAccess(): ActiveQuery
    {
        return $this->hasMany(CourseServiceAccess::class, ['serviceId' => 'id']);
    }

    public function getCourseServiceInfo(): ActiveQuery
    {
        return $this->hasMany(CourseServiceInfo::class, ['serviceId' => 'id']);
    }

    public function getCourseTariff(): ActiveQuery
    {
        return $this->hasOne(CourseTariff::class, ['serviceId' => 'id']);
    }

    public function getCourseWorks(): ActiveQuery
    {
        return $this->hasMany(CourseWorks::class, ['serviceId' => 'id']);
    }

    public function getCourseUserAccesses(): ActiveQuery
    {
        return $this->hasMany(CourseUserAccess::class, ['serviceId' => 'id']);
    }
}
