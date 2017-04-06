<?php

namespace frontend\controllers;

class LearnController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "docBase";
        return $this->render('index');
    }

}
