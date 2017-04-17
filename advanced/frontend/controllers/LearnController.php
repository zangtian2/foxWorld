<?php

namespace frontend\controllers;

class LearnController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "learnBase";
        return $this->render('index');
    }

        public function actionTest()
    {
        $this->layout = false;
        return $this->render('index');
    }
}
