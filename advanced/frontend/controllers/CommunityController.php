<?php

namespace frontend\controllers;
use common\models\NavLeft;
use common\models\Tag;
use common\models\Comment;
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
        
        $this->view->params['nav_left_title'] = '学 习 指 导 目 录';
        $this->view->params['nav_left_root'] = NavLeft::getRnames('learn');
        $this->view->params['nav_left_children'] = NavLeft::getCnames('learn');
        
//        $tags=Tag::findTagWeights();
//        $recentComments=Comment::findRecentComments();
        
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('topics', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
//                    'tags' => $tags,
//            'recentComments'=>$recentComments,
        ]);
        
       
    }    
    
        public function actionView()
    {
            $this->layout = 'mainnoleft';
            
        $tags=Tag::findTagWeights();
        $recentComments=Comment::findRecentComments();
            
             $data = LearnContent::find()->select(['content'])->where(['menu_id' => 2])->one();
        $result = $this->mergeText($data->content);
        return $this->render('article', [
            'viewPage' => $result,
                                'tags' => $tags,
            'recentComments'=>$recentComments,
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
