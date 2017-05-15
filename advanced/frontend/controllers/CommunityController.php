<?php

namespace frontend\controllers;
//use common\models\NavLeft;
use Yii;
use common\models\PostSearch;

class CommunityController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
//        $rnames = NavLeft::getRnames('learn');
//        $cnames = NavLeft::getCnames('learn');
//        $this->view->params['nav_left_title'] = '学 习 指 导 目 录';
//        $this->view->params['nav_left_root'] = $rnames;
//        $this->view->params['nav_left_children'] = $cnames;
//         return $this->render('index');
        $this->layout = 'mainnoleft';
        
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
           'searchModel' => $searchModel,
           'dataProvider' => $dataProvider,
        ]);
        
       
    }
   
}
