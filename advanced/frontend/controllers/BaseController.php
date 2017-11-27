<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use yii\web\Controller;

use Yii;
/**
 * Description of BaseController
 *
 * @author Administrator
 */
class BaseController extends Controller {
    
       public function init(){
                $this->enableCsrfValidation = false;
        }

        public function beforeAction($action) {
                if (!parent::beforeAction($action)) {
                    return false;
                }
                if(Yii::$app->user->isGuest){
                    return $this->redirect(['/official/login'])->send();
                }
                return true;
        }

}
