<?php

namespace frontend\controllers;

class A  
{
    
/*
 *  ID
 *  contents :目录名
 *  name :菜单名 
 *  sort_num :排序值
 *  create_time :创建时间
 *  status :状态-发布-未发布
 *  
 */
    
 /*
  *  ID
  *  menu_id :对应的菜单id
  *  content :内容
  *  create_time :创建时间
  */
  
public $name = "host";  
public  $id = "2";  

      
};  

class LearnController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "learnBase";
        return $this->render('index');
    }

        public function actionTest()
    {
//        $this->layout = false;            
            $nav_data = new A;
            
          $this->view->params['customParam'] = $nav_data->name;
        return $this->render('index');
    }
    
    public function actionArticle(){
        //content 从learn表中获取
        $content = 'AVCUEJDJS'
                . '123123'
                . '12412312'
                . '45545'
                . 'asdasd'
                . 'af'
                . 'ass'
                . 'da'
                . 'aaaa';
        return $content;
    }
}
