<?php

namespace app\\controllers\;

class FeedbackController extends \yii\\rest\\ActiveController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
