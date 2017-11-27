<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use common\models\Post;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use frontend\components\TagsCloudWidget;
use frontend\components\RecentReplyWidget;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
//$this->title = '文章';
//$this->params['breadcrumbs'][] = $this->title;
use frontend\assets\AppAsset;

//
AppAsset::register($this);
$this->registerJs(
        'var $ = layui.jquery;'
);
AppAsset::addScript($this, "@web" . "/js/communityCenter.js");
//AppAsset::addScript($this, "http://cdn.bootcss.com/vue/2.3.0/vue.js");

?>
<style>
    .detail-box {
        margin: 15px;
        border: 1px solid rgb(192, 200, 212);
        box-shadow: 0px 3px 5px rgb(170, 178, 189);
        margin-top: 13px;
        padding: 0;  
    }    

    .showback {
        margin: 15px 5px;margin-top: 20px;padding-bottom: 30px;        
    }    

    .showback  {
        /*width: 90%;*/
        margin: 0 auto;
        margin-left: auto!important;
        margin-right: auto!important;
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
        border-radius: 0px;margin-bottom: 0px
    }
</style>

<style>
    .note-list .have-img .wrap-img img {
        width: 100%;
        height: 100%;
        border-radius: 4px;
        border: 1px solid #f0f0f0;
    }

    .note-list .meta {
        padding-right: 0!important;
        font-size: 12px;
        font-weight: 400;
        line-height: 20px;
    }
    .note-list .meta a {
        margin-right: 10px;
        color: #b4b4b4;
    }
    .note-list .meta a, .note-list .meta a:hover {
        transition: .1s ease-in;
        -webkit-transition: .1s ease-in;
        -moz-transition: .1s ease-in;
        -o-transition: .1s ease-in;
        -ms-transition: .1s ease-in;
    }
    .note-list .collection-tag {
        padding: 2px 6px;
        color: #ea6f5a!important;
        border: 1px solid rgba(236,97,73,.7);
        border-radius: 3px;
    }

    .note-list .meta span {
        margin-right: 10px;
        color: #b4b4b4;
    }
    .note-list .abstract {
        margin: 0 0 8px;
        font-size: 13px;
        line-height: 24px;
    }
    .note-list .title {
        margin: -7px 0 4px;
        display: inherit;
        font-size: 18px;
        font-weight: 700;
        line-height: 1.5;
    }

    .note-list li {
        position: relative;
        width: 100%;
        margin: 0 0 17px;
        padding: 0 2px 17px 0;
        border-bottom: 1px solid #f0f0f0;
        word-wrap: break-word;
    }


    .note-list .have-img>div {
        padding-right: 160px;
    }

    .note-list .have-img .wrap-img {
        position: absolute;
        top: 50%;
        margin-top: -68px;
        right: 0;
        width: 150px;
        height: 120px;
    }

    .note-list li.have-img {
        min-height: 140px;
    }

    .note-list {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .note-list .author .avatar, .note-list .author .name {
        display: inline-block;
        vertical-align: middle;
    }
    .note-list .author .avatar, .note-list .author .name {
        display: inline-block;
        vertical-align: middle;
    }

    .note-list .author .name span {
        display: inline-block;
        padding-left: 3px;
        color: #969696;
    }

    .avatar img {
        width: 100%;
        height: 100%;
        border: 1px solid #ddd;
        border-radius: 50%;
    }

    .note-list .author {
        margin-bottom: 14px;
        font-size: 13px;
    }

    .avatar {
        width: 32px;
        height: 32px;
        display: block;
        cursor: pointer;
    }
</style>


<div class="fly-panel detail-box" style="min-width:768px;">    
    <div class="showback " >        

        <!--        <div style=""><ul class="layui-nav navout" lay-filter="" style="">
                        <li class="layui-nav-item navin"><a href="">USD/JAP</a></li>
                        <li class="layui-nav-item layui-this navin"><a href="">USD/AUD</a></li>
                        <li class="layui-nav-item navin"><a href="">USD/EUR</a></li>
                        <li class="layui-nav-item navin">
                          <a href="javascript:;">USD/NZD</a>
                        </li>
                        <li class="layui-nav-item navin"><a href="">GOLD</a></li>
                        <li class="layui-nav-item navin"><a href="">BMW</a></li>
                      </ul>
                </div>-->


        <div class="row" id="topics">

            <div class="col-md-8" style="min-height:768px">

                <div>
      
                        <div class="" style="padding: 40px 0px 40px 6%">
                            <div style="margin-bottom: 25px;overflow: auto;">
                                <a class="avatar-collection"  style="float: left;
                                   width: 80px;
                                   height: 80px;
                                   margin-top: 20px;" href="/c/MZp7Ey">
                                    <img style="width: 100%;
                                         height: 100%;
                                         border-radius: 10%;
                                         border: 1px solid rgb(221, 221, 221);" src="//upload.jianshu.io/collections/images/39/332293730045332541.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/240/h/240" alt="240">
                                </a>

                                <a href="javascript:btnSearch()"  class="layui-btn" style="float: right;margin-top: 40px;">关注</a>
                                <h2 style="padding-left: 100px;padding-top: 10px;">                                    
                                    <?php                                     
                                     $temp = strip_tags($topicDetail->nav->title);
                                    echo str_replace(' ', '', $temp);                                    
                                   ?></h2>
                                <p style="padding-left: 100px;">收录了7756篇文章 · 661260人关注</p>
                            </div>
                            <div class="fly-tab fly-tab-index" id="example" style="margin-bottom:30px">
                                <ul class="layui-nav navout " lay-filter="more" style="" >
                                    <li class="layui-nav-item navin" style="padding: 0 40px"><a href="">默认</a></li>
                                    <li class="layui-nav-item navin" style="padding: 0 40px"><a href="">最新</a></li>
                                    <li class="layui-nav-item navin" style="padding:  0 40px"><a href="">优质</a></li>
                                    <li class="layui-nav-item navin" style="padding: 0 40px"><a href="">关注</a></li>             
                                </ul>
                            </div>



                            <div >

                                <div >
                                    <ul class="note-list" infinite-scroll-url="/c/dqfRwQ?order_by=commented_at">
                                        <?=
                                        ListView::widget([
                                            'id' => 'postList',
                                            'dataProvider' => $dataProvider,
                                            'itemOptions' => ['class' => 'item'],
                                            'itemView' => '_listItem', //子视图，显示一篇文章的标题等内容
                                            'layout' => '{items}{pager}',
                                            'pager' => ['class' => \kop\y2sp\ScrollPager::className(),
                                                'overflowContainer'=>'.feng-right',
                                                'noneLeftText'=>'没有了，你可以看看别的',
                                                'triggerOffset'=>10000000,    
                //                                'enabledExtensions' => ['EXTENSION_HISTORY' => false],  
                                                ]
                                        ])
                                        ?>                       
                                    </ul>
                                </div>
                                <!--                    </div><button v-on:click="nameSearch()">查询</button>-->
                                <!--                        <ul class="fly-list" id="postList">
                                                            <div id='layTest'></div>
                                                            <li class="fly-list-li" v-for="line in lines" style="height:auto">
                                                                <a href="user/home.html" class="fly-list-avatar" style="top: 35px;">
                                                                      <img src="images/avatar/default.png" alt="">
                                                                    </a>
                                                                    <h2 class="fly-tip">
                                                                      <a v-bind:href="line.url">{{line.title}}</a>
                                                                    </h2>
                                                                    <p>
                                                                      <span class="glyphicon glyphicon-user" aria-hidden='true'></span><em>{{line.nickname}}</em>
                                                                      <span class="glyphicon glyphicon-time" aria-hidden='true'></span><em>{{line.create_time}}</em>
                                                                      <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
                                                                          {{line.tags}}
                                                                      <span class="fly-list-hint"> 
                                                                          <a v-bind:href="line.url+'#comments'">评论 {{line.commentCount}}</a> | 最后修改于
                                <?php // date('Y-m-d H:m:s','{{line.update_time}}') ?>
                                                                        <i class="iconfont" title="回答">&#xe60c;</i> 8
                                                                        <i class="iconfont" title="人气">&#xe60b;</i> 106
                                                                      </span>
                                                                    </p>
                                                                  </li>
                                                        </ul>-->
                                <!--<a href="#div-1" class="anchor-scroll" data-class-to="body" data-on-scroll="blur-effect">Test</a>-->

                            </div>
                        </div>
                
                </div>
            </div>

            <div class="col-md-4 ">
                <div style="padding:60px 6% 40px 2%;">
                    <div class="searchbox">
                        <ul class="list-group" style="border-bottom: 1px solid #f0f0f0;">
                            <li class="list-group-item">
                                <p style="    color: rgb(150, 150, 150);">专题公告</p>
                                <p>
                                    <?=$topicDetail->description?>
                            </li>
                        </ul>
                    </div>

                    <div class="tagcloudbox">
                        <ul class="list-group" style="border-bottom: 1px solid #f0f0f0;">
                            <li class="list-group-item">
                                <p style="    color: rgb(150, 150, 150);">标签云</p>
                                <p><?= TagsCloudWidget::widget(['tags'=>$tags]); ?></p>
                            </li>
                        </ul>
                    </div>

                    <div class="commentbox">
                        <ul class="list-group" style="border-bottom: 1px solid #f0f0f0;">
                            <li class="list-group-item">
                                <p style="    color: rgb(150, 150, 150);">管理员</p>                                        
                                <?php //  RecentReplyWidget::widget(['recentComments'=>$recentComments]); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="commentbox">
                        <ul class="list-group" style="border-bottom: 1px solid #f0f0f0;">
                            <li class="list-group-item">
                                <p style="    color: rgb(150, 150, 150);">关注的人</p>                                        
                                <?php //  RecentReplyWidget::widget(['recentComments'=>$recentComments]); ?>
                            </li>
                        </ul>
                    </div>                
                </div>
            </div>


        </div>         



    </div>
</div>

<!--<script id="demo" type="text/html">-->
<!--
{{#  layui.each(d.lines, function(index, item){ }}

<li class="fly-list-li"  style="height:auto">
    <a href="user/home.html" class="fly-list-avatar" style="top: 35px;">
          <img src="images/avatar/default.png" alt="">
        </a>
        <h2 class="fly-tip">
          <a href="line.url">{{ item.title }}</a>
        </h2>
        <p>
          <span class="glyphicon glyphicon-user" aria-hidden='true'></span><em>{{ item.nickname }}</em>
          <span class="glyphicon glyphicon-time" aria-hidden='true'></span><em>{{ item.create_time }}</em>
          <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
              {{ item.tags }}
          <span class="fly-list-hint"> 
              <a href="line.url+'#comments'">评论 {{ item.commentCount }}</a> | 最后修改于
                                                         {{ item.update_time }}
            <i class="iconfont" title="回答">&#xe60c;</i> 8
            <i class="iconfont" title="人气">&#xe60b;</i> 106
          </span>
        </p>
      </li>      
      
      {{#  }); }}
      {{#  if(d.lines.length === 0){ }}
  无数据
{{#  } }} -->
<!--</script>-->

<!--
$(function(){
index = layer.load(1,{offset: ['50%', '58%'],anim:4});
new Vue({
    el: '#postList',
        data: {
            lines: []
        },
        mounted:  function () {
            var self = this;
            $.ajax({
               type:"get",

               url:"?r=post/getlist",
               data:{limit:10,offset:0},
               success:function(data){
                        self.lines=JSON.parse(data);            
                        layer.close(index);
                      }
               });                       
         }

    });
})-->



<!--var laytpl = layui.laytpl;

function get_List(){           
    $.ajax({
            type:"get",
            url:"?r=post/getlist",
            data:{limit:10,offset:0},
            async: false,
            success:function(data){
                     things = {"lines":JSON.parse(data)};
                   }
            });          
    return things;
}
index = layer.load(1,{offset: ['50%', '58%'],anim:5});
var data = get_List();
               
var getTpl = demo.innerHTML;
laytpl(getTpl).render(data, function(html){
    layTest.innerHTML = html;
  });
layer.close(index);-->