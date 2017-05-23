<?php

namespace frontend\controllers;

class OfficialController extends \yii\web\Controller
{
    public function actionIndex()
    {        
        return $this->render('index');
    }
    
    public function actionLogin()
    {
        $this->layout = 'mainnoleft';
        return $this->render('login');
    }

}
