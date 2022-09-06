<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "CourseWorks".
 *
 * @property int $id
 * @property int|null $courseId
 * @property int|null $serviceId
 * @property string|null $description
 * @property string|null $url
 * @property int|null $type
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class CourseWorks extends \yii\db\ActiveRecord
{

    public const STATUS_DELETE      = 0;
    public const STATUS_MODERATE    = 1;
    public const STATUS_CONFIRM     = 2;

    public const STATUS_ALL = [
        self::STATUS_DELETE,
        self::STATUS_MODERATE,
        self::STATUS_CONFIRM,
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CourseWorks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['courseId', 'serviceId', 'type', 'status', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string', 'max' => 256],
            [['url'], 'string', 'max' => 512],
            [['status'],'in','range' => self::STATUS_ALL],
            [['status'],'default','value' => self::STATUS_MODERATE]
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
            'serviceId' => 'Service ID',
            'description' => 'Description',
            'url' => 'Url',
            'type' => 'Type',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getCourse(): ActiveQuery
    {
        return $this->hasOne(Course::class, ['id' => 'courseId']);
    }

    public function getCourseService(): ActiveQuery
    {
        return $this->hasOne(CourseService::class, ['id' => 'serviceId']);
    }
}
