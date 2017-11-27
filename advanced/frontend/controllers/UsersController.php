<?php

namespace frontend\controllers;
use common\models\NavLeft;
class UsersController extends BaseController
{
    public function actionIndex()
    {
        $this->view->params['nav_left_current'] = 44;
        return $this->render('index');
    }
    
   public function actionFollow()
    {       
       $this->view->params['nav_left_current'] = 49;
        return $this->render('follow');
    }
    
   public function actionComments()
    {       
       $this->view->params['nav_left_current'] = 48;
        return $this->render('comments');
    }
    
   public function actionCollections()
    {
        $this->view->params['nav_left_current'] = 57;       
        return $this->render('collections');
    }    
    
   public function actionMessages()
    {       
       $this->view->params['nav_left_current'] = 47;
        return $this->render('messages');
    }        

   public function actionArticles()
    {       
       $this->view->params['nav_left_current'] = 56;
        return $this->render('articles');
    }        

   public function actionPersonBasic()
    {       
       $this->view->params['nav_left_current'] = 50;
        return $this->render('personBasic');
    }        

   public function actionPersonDetails()
    {       
       $this->view->params['nav_left_current'] = 51;
        return $this->render('personDetails');
    }        

   public function actionPersonManage()
    {       
       $this->view->params['nav_left_current'] = 52;
        return $this->render('personManage');
    }            

}
