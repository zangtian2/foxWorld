<?php

namespace frontend\controllers;

class PlatformController extends \yii\web\Controller
{
    public function actionIndex()
    {
                $this->layout = "docBase";
        
        return $this->render('index');
    }

}
