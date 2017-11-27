<?php

namespace frontend\controllers;
use Yii;
use common\models\Tag;
use common\models\Comment;

use common\models\PostsSearch;
use yii\web\NotFoundHttpException;
use common\models\Topics;
use common\models\LearnContent;

class CommunityController extends \yii\web\Controller {

    public function actionIndex() {

        $tags = Tag::findTagWeights();
        $recentComments = Comment::findRecentComments();

        $searchModel = new PostsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $this->view->params['nav_left_current'] = 32;
        return $this->render('summary', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'tags' => $tags,
                    'recentComments' => $recentComments,
        ]);
    }

    public function actionTopic() {
        $params = Yii::$app->request->queryParams;
        $topic_id = isset($params['PostsSearch']['topic_id']) ? $params['PostsSearch']['topic_id'] : null;

        $this->view->params['nav_left_current'] = $topic_id;
        $topicDetail = Topics::getTopicDetail($topic_id);

        $tags = Tag::findTagWeights();
        $recentComments = Comment::findRecentComments();

        $searchModel = new PostsSearch();
        $dataProvider = $searchModel->search($params);
        

        return $this->render('topics', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'tags' => $tags,
                    'recentComments' => $recentComments,
                    'topicDetail' => $topicDetail,
        ]);
    }

    public function actionAnalysis() {
        $params = Yii::$app->request->queryParams;
        $topic_id = isset($params['PostsSearch']['topic_id']) ? $params['PostsSearch']['topic_id'] : null;

        $this->view->params['nav_left_current'] = $topic_id;
        return $this->render('analysis');
    }

    public function actionSummary() {
        $params = Yii::$app->request->queryParams;
        $topic_id = isset($params['PostsSearch']['topic_id']) ? $params['PostsSearch']['topic_id'] : null;
        
        
        $searchModel = new PostsSearch();        
        $dataProvider = $searchModel->search($params,false);
        $this->view->params['nav_left_current'] = $topic_id;
        return $this->render('summary',[
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView() {
        $this->layout = 'mainnoleft';

        $tags = Tag::findTagWeights();
        $recentComments = Comment::findRecentComments();

        $data = LearnContent::find()->select(['content'])->where(['id' => 2])->one();
        $result = $this->mergeText($data->content);
        return $this->render('article', [
                    'viewPage' => $result,
                    'tags' => $tags,
                    'recentComments' => $recentComments,
        ]);
    }

    private function mergeText($text) {
        $tag_start = "<div id=\"wordsView\"><textarea style=\"display:block;\"   name=\"editormd-markdown-doc\" >";
        $tag_end = "</textarea></div>";
        return $tag_start . $text . $tag_end;
    }

    protected function findModel($id) {
        if (($model = PostsSearch::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
