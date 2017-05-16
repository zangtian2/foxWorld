<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use yii\helpers\Html;



use frontend\assets\AppAsset;

AppAsset::register($this);

AppAsset::addCss($this, "@web" . "/plugin/editor.md/css/editormd.css");
$this->registerJs(
        'var $ = layui.jquery;'
);
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/marked.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/prettify.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/raphael.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/underscore.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/sequence-diagram.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/flowchart.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/jquery.flowchart.min.js");
AppAsset::addScript($this, "@web" . "/plugin/editor.md/editormd.js");
AppAsset::addScript($this, "@web" . "/js/postView.js");


/* @var $this yii\web\View */
/* @var $model common\models\Post */

//$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fly-panel detail-box" >    
    <div class="showback" >        
        
                <div style=""><ul class="layui-nav navout " lay-filter="more" style="">
             <li class="layui-nav-item navin">
                        <?= Html::a('&nbsp;&nbsp;&nbsp;全 部&nbsp;&nbsp;&nbsp;', '#', [
                            'id' =>'button-about',
                                'class' => '',                                                                
                                ]) 
        ?></li>
                
                    <li class="layui-nav-item navin">
                        <?= Html::a('&nbsp;&nbsp;&nbsp;更 多&nbsp;&nbsp;&nbsp;', '#', [
                            'id' =>'button-about',
                                'class' => '',
                                'data-toggle' => 'modal', 
                                'data-target' => '#about-modal'    //此处对应Modal组件中设置的id
                                ]) 
        ?></li>
                <li class="layui-nav-item navin"><a href="">USD/JAP</a></li>
                <li class="layui-nav-item layui-this navin"><a href="">USD/AUD</a></li>
                <li class="layui-nav-item navin"><a href="">USD/EUR</a></li>
                <li class="layui-nav-item navin">
                  <a href="javascript:;">USD/NZD</a>
                </li>
                <li class="layui-nav-item navin"><a href="">GOLD</a></li>
                <li class="layui-nav-item navin"><a href="">BMW</a></li>
                <li style="position: absolute;
display: inline-block;
*display: inline;
*zoom: 1;
vertical-align: middle;
right:0px;
line-height: 45px">
                    <form class="d7">
                        <input type="text" placeholder="搜索从这里开始...">
                        <button type="submit"><span class="ion-checkmark"></span></button>
                      </form>  
                
                </li>
              </ul>
                         
        </div>
        
            <div class="row">
        <div class="col-md-3 ">
            <div style="padding:15px;padding-right:0px"></div>
        </div>
                <div class="col-md-9 test" style="min-height:768px">                           
                    <div class="post-view">

                        <h1 style="text-align: center">文章测试</h1>

                        <?=$viewPage?>

                    </div>
                
                
            </div>
                
    </div>
        
</div>
    </div>    
<style>
    .detail-box {
        margin: 15px;
        border: 1px solid rgb(192, 200, 212);
        box-shadow: 0px 3px 5px rgb(170, 178, 189);
        margin-top: 13px;
        padding: 0;  
    }    

    .showback  {
        /*width: 90%;*/
        margin: 0 auto;
        margin-left: auto!important;
        margin-right: auto!important;
    }
    
    .test {
    height: 100%;
    border-left: 1px solid #eee;
}
.navin {
    line-height: 45px !important;
}
.navout .layui-this a {
    font-weight: bold;
    color: black;
}

.navout .layui-this::after {
    height:3px !important;
}

.navin a {
    font-weight: bold;
}
.navin a:hover {
    color:black !important;
    text-decoration: none;
}
.navin a:focus {
    text-decoration: none;
}

.list-group-item {
    border:0px
}
.navout .layui-nav-bar {
    top:42px !important;
    height: 3px !important;
}

.navout {
    border-bottom: 1px solid rgb(238, 238, 238);
background-color: rgb(255, 255, 255);
border-radius: 0px;margin-bottom: 0px;
padding:0px
}
</style>

<style>
/*搜索框*/
.d7:after {content:""; clear:both; display:table}
.d7 form {
  width: auto;
  float: right;
  margin-right: 30px;
}
.d7 input {
  color: rgb(66, 38, 32);
  width: 190px;
  padding-left: 15px;
  border: 0px;
  outline: none;
  position: relative;
  transition: .2s linear;
  height: 43px;
  border-bottom: 2px solid transparent;
}
.d7 input:focus {
  width: 250px;
  border-bottom: 2px solid #CC1C9E;
}
.d7 button {
  width: 45px;
  height: 45px;
  border: none;
  position: absolute;
  right: 0;
  color: grey;
background: transparent;
}

.d7 button:hover {
  color: blueviolet;
background: transparent;
}
/*搜索框*/
</style>
