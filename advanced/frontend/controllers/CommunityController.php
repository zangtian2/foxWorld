<?php

namespace frontend\controllers;
//use common\models\NavLeft;
use Yii;
use common\models\PostSearch;
use yii\web\NotFoundHttpException;


use common\models\LearnContent;

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
    
    public function actionTopics()
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

        return $this->render('topics', [
           'searchModel' => $searchModel,
           'dataProvider' => $dataProvider,
        ]);
        
       
    }    
    
        public function actionView()
    {
            $this->layout = 'mainnoleft';
             $data = LearnContent::find()->select(['content'])->where(['menu_id' => 2])->one();
        $result = $this->mergeText($data->content);
        return $this->render('article', [
            'viewPage' => $result,
        ]);
    }
    
    private function mergeText($text) {
        $tag_start = "<div id=\"wordsView\"><textarea style=\"display:block;\"   name=\"editormd-markdown-doc\" >";
        $tag_end = "</textarea></div>";
        return $tag_start . $text . $tag_end;
    }
    
        protected function findModel($id)
    {
        if (($model = PostSearch::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
   
}
