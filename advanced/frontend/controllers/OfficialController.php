<?php

namespace frontend\controllers;
use Yii;
use common\models\LoginForm;
use common\models\RegeisterForm;

class OfficialController extends \yii\web\Controller {


    
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            Yii::$app->user->logout();
//            return $this->redirect('index');
        }
        $rmodel = new RegeisterForm();
        $model = new LoginForm();  //前端表单验证+数据库验证        
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            Yii::$app->getSession()->setFlash('welcomeback', "欢迎回来!");  
            return $this->redirect('index');
        } 
//        $this->layout = 'mainnoleft';
        return $this->render('login', [
                    'model' => $model,
            'rmodel' =>$rmodel,
        ]);
    }

    public function actionTui() {
        Yii::$app->user->logout();
        return $this->redirect('login');
    }
    
    public function actionRegeister() {
        $model = new RegeisterForm();  //前端表单验证+数据库验证        
        //表单提交操作，基本上不需要做改动
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {  
                if(Yii::$app->getUser()->login($user)) {                    
                    Yii::$app->getSession()->setFlash('welcomeback', "欢迎加入这个大家庭!");  
                    return $this->redirect(['index']);
                }            
             }
                else
                {
                    Yii::$app->getSession()->setFlash('loginerror', "请登录");                      
                   return $this->redirect(['login']);
                }
        }
        Yii::$app->getSession()->setFlash('loginerror', "注册失败，请重新注册");  
        return $this->redirect(['login']);
    }

    public function actionValidateRegeisterForm () {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $model = new RegeisterForm();   //这里要替换成自己的模型类
            $model->load(Yii::$app->request->post());  
            return \yii\widgets\ActiveForm::validate($model);  
        }
}
