<?php

namespace app\controllers;

use app\models\Course;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

class CourseController extends ActiveController
{
    public $modelClass = 'app\models\Course';

    public function actions(): array
    {
        $actions = parent::actions();
        $actions['index'] = [
            'class' => 'yii\rest\IndexAction',
            'modelClass' => $this->modelClass,
            'prepareDataProvider' => fn() => new ActiveDataProvider(
                [
                    'query' => $this->modelClass::find(),
                    'pagination' => false,
                ]
            ),
        ];

        return $actions;
    }
}
