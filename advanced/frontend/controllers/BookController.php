<?php

namespace frontend\controllers;

class BookController extends \yii\web\Controller
{
    public function actionIndex()
    {
             $this->layout = "docBase";
        return $this->render('index');
    }

}
