<?php

namespace frontend\controllers;

class CommunityController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
                $this->layout = "communityBase";
        return $this->render('index');
    }

}
