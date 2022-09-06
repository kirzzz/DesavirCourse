<?php

namespace app\\controllers\;

class VideoController extends \yii\\rest\\ActiveController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
