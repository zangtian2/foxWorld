<?php

namespace frontend\controllers;
use common\models\NavLeft;
class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->view->params['nav_left_title'] = '个人管理中心';
        $this->view->params['nav_left_root'] = NavLeft::getRnames('user');
        $this->view->params['nav_left_children'] = NavLeft::getCnames('user');
        return $this->render('index');
    }

}
