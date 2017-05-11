<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use common\models\Post;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = '文章';
//$this->params['breadcrumbs'][] = $this->title;
//use frontend\assets\AppAsset;
//
//AppAsset::register($this);
//
//AppAsset::addScript($this,"http://cdn.bootcss.com/vue/2.3.0/vue.js");
?>
<style>
    .detail-box {
        margin: 15px;
        border: 1px solid rgb(192, 200, 212);
        box-shadow: 0px 3px 5px rgb(170, 178, 189);
        margin-top: 13px;
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
</style>

<div class="fly-panel detail-box" >    
    <div class="showback" >        
        
<div class="">

    <div class="row">

        <div class="col-md-12">

            <div class="main layui-clear">
                <div class="wrap">
                    <div class="">
                        <div class="fly-tab fly-tab-index" id="example">
                            <span>
                                <a href="jie/index.html">全部</a>
                                <a href="jie/index.html">最新</a>
                                <a href="jie/index.html">优质</a>
                                <a href="user/index.html">关注</a>
                            </span>
                            <form action="http://cn.bing.com/search" class="fly-search">
                                <i class="iconfont icon-sousuo"></i>
                                <input class="layui-input"  autocomplete="off" placeholder="搜索内容，回车跳转" type="text" name="q">
                            </form>
                            <a href="jie/add.html" class="layui-btn jie-add">发布问题</a>
                        </div>

                        
                        <div >
<!--                    </div><button v-on:click="nameSearch()">查询</button>-->
                        <ul class="fly-list" id="postList">
                            <div id='layTest'></div>
<!--                            <li class="fly-list-li" v-for="line in lines" style="height:auto">
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
                                  </li>-->
                        </ul>
                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<!--        <div class="col-md-3">
            <div class="searchbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden='true'></span>查找文章
                    </li>
                    <li class="list-group-item">
                        <div class="form-group">                     
                            <input type="text" class="form-control" name="title"  placeholder="按标题">                                
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </li>
                </ul>
            </div>

            <div class="tagcloudbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden='true'></span>标签云
                    </li>
                    <li class="list-group-item">搜索框</li>
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
            
        </div>-->

    </div>         

</div>

       
        </div>
    </div>

<script id="demo" type="text/html">

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
{{#  } }} 
</script>
<?php $this->beginBlock('test') ?>  
            

var laytpl = layui.laytpl;

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
index = layer.load(1);
var data = get_List();
               
var getTpl = demo.innerHTML;
laytpl(getTpl).render(data, function(html){
    layTest.innerHTML = html;
  });
layer.close(index);



<?php $this->endBlock() ?>  
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>  

<!--$(function(){
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
                      }
               });                       
         }

    });
})-->