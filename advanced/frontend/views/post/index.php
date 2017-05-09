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
use frontend\assets\AppAsset;

AppAsset::register($this);

AppAsset::addScript($this,"http://cdn.bootcss.com/vue/2.3.0/vue.js");
?>
<div class="container">

    <div class="row">

        <div class="col-md-9">

            <div class="main layui-clear">
                <div class="wrap">
                    <div class="">
                        <div class="fly-tab fly-tab-index" id="example">
                            <span>
                                <a href="jie/index.html">全部</a>
                                <a href="jie/index.html">未结帖</a>
                                <a href="jie/index.html">已采纳</a>
                                <a href="jie/index.html">精帖</a>
                                <a href="user/index.html">我的帖</a>
                            </span>
                            <form action="http://cn.bing.com/search" class="fly-search">
                                <i class="iconfont icon-sousuo"></i>
                                <input class="layui-input"  autocomplete="off" placeholder="搜索内容，回车跳转" type="text" name="q">
                            </form>
                            <a href="jie/add.html" class="layui-btn jie-add">发布问题</a>
                        </div>

                        
                        <div id="postList">

                        <ul class="fly-list">
                                
                        </ul>
                            
                            <div id="pagelist"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="searchbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden='true'></span>查找文章
                    </li>
                    <li class="list-group-item">
                        <?= Html::beginForm('index.php?r=post/index', 'get', ['id' => 'w0', 'class' => 'form-inline']); ?>
                        <div class="form-group">                              
                            <input type="text" class="form-control" name="PostSearch[title]" id="w0input" placeholder="按标题">                                
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                        <?php echo Html::endForm(); ?>  
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
            
            <div id="app">
                    <li v-for="info in data">
                           {{ info }}
                    </li>
        </div>
        </div>
    </div>         

</div>



<div id="mybutton">点我弹出OK</div>  
  
<?php $this->beginBlock('test') ?>  
            

                            $(function(){
                    
                        $.ajax({
                    type:'get',
                    url:'?r=post/getlist',
                    dataType: 'json',
                    success: function(data){
                        if (data.success){
                          show(data);
                        }else{
                            alert("接口调用失败");
                        }
                    },
                    error: function(data){
                        alert(JSON.stringify(data));
                    }
                });
                })
                

<?php $this->endBlock() ?>  
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>  
                <!--getJson(url,pushDom);-->
                <!-- 
                            $(function(){
                    var url = "http://cnodejs.org/api/v1/topics";
                    
                    pushDom();
                });
                                
                function pushDom(){
                        var vm = new Vue({
                            el: '#app',
                            data: 
                        });
                }
                
                
                function getJson(url,func){
                $.ajax({
                    type:'get',
                    url:url,
                    dataType: 'json',
                    success: function(data){
                        if (data.success){
                            func(data);
                        }else{
                            alert("接口调用失败");
                        }
                    },
                    error: function(data){
                        alert(JSON.stringify(data));
                    }
                });
            }-->
                
                <script>
              function show(data)
              {
                  
                  $('#postList').append(
                          
                
                );
                  
              }
              
              
              
                
                </script>