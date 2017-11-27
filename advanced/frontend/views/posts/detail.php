<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use frontend\components\TagsCloudWidget;
use frontend\components\RecentReplyWidget;
use common\models\Comment;
use frontend\assets\AppAsset;

AppAsset::register($this);

AppAsset::addCss($this, "@web" . "/plugin/editor.md/css/editormd.css");
$this->registerJs(
        'var $ = layui.jquery;'
);
//AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/marked.min.js");
//AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/prettify.min.js");
//AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/raphael.min.js");
//AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/underscore.min.js");
//AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/sequence-diagram.min.js");
//AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/flowchart.min.js");
//AppAsset::addScript($this, "@web" . "/plugin/editor.md/lib/jquery.flowchart.min.js");
//AppAsset::addScript($this, "@web" . "/plugin/editor.md/editormd.js");
//AppAsset::addScript($this, "@web" . "/js/postView.js");


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
                    <?=
                    Html::a('&nbsp;&nbsp;&nbsp;更 多&nbsp;&nbsp;&nbsp;', '#', [
                        'id' => 'button-about',
                        'class' => '',
                        'data-toggle' => 'modal',
                        'data-target' => '#about-modal'    //此处对应Modal组件中设置的id
                    ])
                    ?></li>
                <li class="layui-nav-item navin"><a href="">外汇知识</a></li>
                <li class="layui-nav-item layui-this navin"><a href="">货币介绍</a></li>
                <li class="layui-nav-item navin"><a href="">交易理论</a></li>
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
                <div style="padding:15px;">

                    <div class="authorInfo">
                        <ul class="list-group" style="border-bottom: 1px solid #f0f0f0;">
                            <li class="list-group-item">
                                <p style="">作者</p>                                        
                                <div class="author">
                                    <a class="btn btn-danger" style="border-radius:0" target="_blank" href="/u/7fc17f3b3a61"><?= Html::encode($model->author->email); ?></a>
                                    <span class="time" data-shared-at="2017-05-25T09:25:15+08:00"><?= date('Y-m-d H:i:s', $model->created_time); ?></span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="tagcloudbox">
                        <ul class="list-group" style="border-bottom: 1px solid #f0f0f0;">
                            <li class="list-group-item">
                                <p style=" ">标签云</p>
                                <p><?php // implode(' ', $model->tagLinks); ?></p>
                            </li>
                        </ul>
                    </div>


                    <div class="commentbox">
                        <ul class="list-group" style="border-bottom: 1px solid #f0f0f0;">
                            <li class="list-group-item">
                                <p style="">最新回复</p>                                        
<?= Html::a("评论({$model->commentCount})", $model->url . "#comments"); ?>
                                最后修改于<?= date('Y-m-s H:i:s', $model->update_time); ?>
                            </li>
                        </ul>
                    </div>

                    <div class="commentboxs">
 

                <ul class="list-group" style="border-bottom: 1px solid #f0f0f0;">                  
                        <?php if ($added) { ?>
                    <li class="list-group-item">
                            <div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h5>谢谢你的回复，我们会尽快审核发布出来！</h5>
                                <p><?= nl2br($commentModel->content)?></p>
                                <span class="time"><?= date('Y-m-d H:i:s', $model->create_time); ?><em><?= date('Y-m-d H:i:s', $model->create_time); ?></em></span>
                                <span class="time" data-shared-at="2017-05-25T09:25:15+08:00"><em><?= Html::encode($model->author->nickname); ?></em></span>
                            </div>
                    </li>
                        <?php } ?>
                        <?php if ($model->commentCount >= 1): ?>
                    <li class="list-group-item">
                            <h5><?= $model->commentCount . '条评论'; ?></h5>
                    </li>
                            <?=
                            $this->render('_comment', [
                                'post' => $model,
                                'comments' => $model->activeComments,
                            ]);
                            ?>
                        <?php endif; ?>
                    <li class="list-group-item">
                        <h5>发表评论</h5>
                        <?php
                        $postComment = new Comment();
                        echo $this->render('_guestform', array(
                            'id' => $model->id,
                            'commentModel' => $commentModel,
                        ))
                        ?>
                    </li>
              
                </ul>


                    </div>

                </div>
            </div>
            <div class="col-md-9 test" style="min-height:768px;padding-top: 20px;">                           
                <div class="post-view" style="padding:0 8%">
                    <div class="post">
                        <div class="title">
                            <h1 style="text-align: center"><?= Html::encode($model->title) ?></h1>
                        </div>
                    </div>
                    <br>
                    <div class="" style="padding:20px 0px;">
<?= HtmlPurifier::process($model->content) ?>
                    </div>



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
    
 .collection-tag {
    padding: 2px 6px;
    color: #ea6f5a !important;
    border: 1px solid rgba(236,97,73,.7);
    border-radius: 3px;
}
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
