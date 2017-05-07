<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use common\models\Post;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = '文章';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <div class="row">

        <div class="col-md-9">

            <div class="main layui-clear">
                <div class="wrap">
                    <div class="">
                        <div class="fly-tab fly-tab-index">
                            <span>
                                <a href="jie/index.html">全部</a>
                                <a href="jie/index.html">未结帖</a>
                                <a href="jie/index.html">已采纳</a>
                                <a href="jie/index.html">精帖</a>
                                <a href="user/index.html">我的帖</a>
                            </span>
                            <form action="http://cn.bing.com/search" class="fly-search">
                                <i class="iconfont icon-sousuo"></i>
                                <input class="layui-input" autocomplete="off" placeholder="搜索内容，回车跳转" type="text" name="q">
                            </form>
                            <a href="jie/add.html" class="layui-btn jie-add">发布问题</a>
                        </div>

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
        </div>
    </div>         

</div>

