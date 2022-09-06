<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "CourseServiceInfo".
 *
 * @property int $id
 * @property int|null $serviceId
 * @property string|null $name
 */
class CourseServiceInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CourseServiceInfo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serviceId'], 'integer'],
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
            'serviceId' => 'Service ID',
            'name' => 'Name',
        ];
    }

    public function getCourseService(): ActiveQuery
    {
        return $this->hasOne(CourseService::class, ['id' => 'serviceId']);
    }
}
