<?php

namespace frontend\controllers;

use Yii;
use common\models\Posts;
use common\models\AdminPost;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use common\models\NavLeft;
use common\models\PostsSearch;
use common\models\Tag;
use common\models\Comment;
use common\models\Users;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostsController extends Controller {

    public $added = 0; //0代表还没有新回复

    /**
     * @inheritdoc
     */

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex() {

        $this->view->params['nav_left_title'] = '学 习 指 导 目 录';
        $this->view->params['nav_left_root'] = NavLeft::getRnames('learn');
        $this->view->params['nav_left_children'] = NavLeft::getCnames('learn');

        $tags = Tag::findTagWeights();
        $recentComments = Comment::findRecentComments();

        $searchModel = new PostsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'tags' => $tags,
                    'recentComments' => $recentComments,
        ]);
    }

    public function actionGetlist() {
        $searchModel = new AdminPosts();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return Json::encode($dataProvider);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Posts();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Posts::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionDetail($id) {
        $this->layout = 'mainnoleft';
        //step1. 准备模型        
        $model = $this->findModel($id);
        $tags = Tag::findTagWeights();
        $recentComments = Comment::findRecentComments();
        $userMe = Users::findOne(1);  //$userMe  =Users::findOne(Yii::$app->user->id);
        $commentModel = new Comment();
        $commentModel->email = $userMe->email;
        $commentModel->userid = $userMe->id;

        //step2. 当评论提交时，处理评论
        if ($commentModel->load(Yii::$app->request->post())) {
            $commentModel->status = 1; //新评论默认状态为 pending
            $commentModel->post_id = $id;
            if ($commentModel->save()) {
                $this->added = 1;
            }
        }

        //step3. 传数据渲染视图        
        return $this->render('detail', [
                    'model' => $model,
                    'tags' => $tags,
                    'recentComments' => $recentComments,
                    'commentModel' => $commentModel,
                    'added' => $this->added,
        ]);
    }

}
