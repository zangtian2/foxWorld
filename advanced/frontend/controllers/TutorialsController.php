<?php

namespace frontend\controllers;

use common\models\NavLeft;
use common\models\Tutorials;
use Yii;
use yii\web\Response;
/*
 *  内容遇到单双引号都有的情况，从数据库拉取数据是，用单引号在最外层，里面的单引号全部转义
 */

class TutorialsController extends \yii\web\Controller {

    public function actionIndex() {
//        $this->layout = "main";
        $this->view->params['nav_left_title'] = '学 习 指 导 目 录';
        $this->view->params['nav_left_root'] = NavLeft::getRnames('tutorials');
        $this->view->params['nav_left_children'] = NavLeft::getCnames('tutorials');
        
        $data = Tutorials::find()->select(['content'])->where(['id' => 2])->one();
        $result = $this->mergeText($data->content);
        
        return $this->render('index', ['content' => $result]);
    }

    public function actionArticle() {
        $tutorial_id = Yii::$app->request->get('tutorial_id');
        $data = Tutorials::find()->select(['content'])->where(['id' => $tutorial_id])->one();
        $result = $this->mergeText($data->content);
        Yii::$app->response->format = Response::FORMAT_JSON;
        return ['text' => $result];
    }

    private function mergeText($text) {
        $tag_start = "<div id=\"wordsView\"><textarea style=\"display:block;\"   name=\"editormd-markdown-doc\" >";
        $tag_end = "</textarea></div>";
        return $tag_start . $text . $tag_end;
    }

    public function actionCalendar() {
        $this->layout = false;                    
        return $this->render('calendar');
    }

}
