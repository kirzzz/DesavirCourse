<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "CourseTariff".
 *
 * @property int $id
 * @property int|null $serviceId
 * @property float|null $price
 * @property float|null $priceNew
 * @property string|null $dateFrom
 * @property string|null $dateTo
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class CourseTariff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CourseTariff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['serviceId', 'created_at', 'updated_at'], 'integer'],
            [['price', 'priceNew'], 'number'],
            [['dateFrom', 'dateTo'], 'safe'],
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
            'price' => 'Price',
            'priceNew' => 'Price New',
            'dateFrom' => 'Date From',
            'dateTo' => 'Date To',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getCourseService(): ActiveQuery
    {
        return $this->hasOne(CourseService::class, ['id' => 'serviceId']);
    }
}
