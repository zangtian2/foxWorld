<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use common\models\Post;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use frontend\components\TagsCloudWidget;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = '文章';
//$this->params['breadcrumbs'][] = $this->title;
use frontend\assets\AppAsset;
//
AppAsset::register($this);

AppAsset::addScript($this,"http://cdn.bootcss.com/vue/2.3.0/vue.js");

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




<div class="fly-panel detail-box" >    
    <div class="showback" >        
        
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
        
        
    <div class="row">

        <div class="col-md-9 test" style="min-height:768px">

            <div class="main layui-clear">
                <div class="wrap">
                    <div class="" style="padding:20px">
                                                <h2>交流中心</h2>
                        <a href="javascript:btnSearch()"  class="layui-btn">投稿</a>
                        <br>
                        <p>Java实现LayIM后端的核心代码</p>
                        <hr>
                        <div class="fly-tab fly-tab-index" id="example">
                            <span>
                                <a href="jie/index.html">全部</a>
                                <a href="jie/index.html">最新</a>
                                <a href="jie/index.html">优质</a>
                                <a href="user/index.html">关注</a>
                            </span>
                            <a href="jie/add.html" class="layui-btn jie-add">投稿</a>
                        </div>

                        
                        
                        <div >
                            
                             <div >
                                                    <?=
                        ListView::widget([
                            'id' => 'postList',
                            'dataProvider' => $dataProvider,
                            'itemView' => '_listItem', //子视图，显示一篇文章的标题等内容
                            'layout' => '{items}{pager}',
                            'pager' => [
                                'maxButtonCount' => 10,
                                'nextPageLabel' => Yii::t('app', '下一页'),
                                'prevPageLabel' => Yii::t('app', '前一页'),
                            ]
                        ])
                        ?>                                                                                
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
                                                                                     <?php // date('Y-m-d H:m:s','{{line.update_time}}')?>
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
        </div>
        
        <div class="col-md-3 ">
            <div style="padding:15px;padding-right:0px">
            <div class="searchbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden='true'></span>查找文章
                    </li>
                    <li class="list-group-item">
                        
                        <?php $form = ActiveForm::begin(
                                [
                                     'method' => 'get',
                                    'options' => ['class' => 'form-inline', 'id' => 'myForm'],
                                    'action' => ['post/index'],
                                ]); ?>

                            <div class="form-group">
                              <input type="text" class="form-control" name="PostSearch[title]" id="w0input" placeholder="按标题">
                            </div>
                            <button type="submit" class="btn btn-default">搜索</button>
                    
                        <?php ActiveForm::end(); ?>
                        
                    </li>
                </ul>
            </div>

            <div class="tagcloudbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden='true'></span>标签云
                    </li>
                    <li class="list-group-item">
                        <?= TagsCloudWidget::widget(['tags'=>$tags]);?>
                    </li>
                </ul>
            </div>

            <div class="commentbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden='true'></span>最新回复
                    </li>
                    <li class="list-group-item">搜索框</li>
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