<?php

namespace frontend\controllers;
use common\models\NavLeft;
class CommunityController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
        $rnames = NavLeft::getRnames('learn');
        $cnames = NavLeft::getCnames('learn');
        $this->view->params['nav_left_title'] = '学 习 指 导 目 录';
        $this->view->params['nav_left_root'] = $rnames;
        $this->view->params['nav_left_children'] = $cnames;
        return $this->render('index');
    }

}
