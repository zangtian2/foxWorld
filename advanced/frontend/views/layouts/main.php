<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

AppAsset::register($this);
$controllerID = Yii::$app->controller->id;
$actionID = Yii::$app->controller->action->id;
$action = $controllerID . '/' . $actionID;

AppAsset::addCss($this, "@web" . "/css/navFox.css");
AppAsset::addCss($this, "@web" . "/css/zidingyi.css");
AppAsset::addCss($this, "@web" . "/css/zidingyi/icon/ionicons.css");
AppAsset::addCss($this, "@web" . "/css/variables.css");
AppAsset::addCss($this, "@web" . "/css/feng-left-nav.css");

AppAsset::addCss($this, "@web" . "/css/search.css");

AppAsset::addScript($this, "@web" . "/js/main.js");
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <style>

            .feng-right {
                /* for the animation */
                transition: left 0.3s ease;
            }
            .feng-nav {
                /* for the animation */
                transition: margin 0.3s ease;
            }

            .collapsed {
                /* hide it for small displays*/
                display: none;
            }

            @media (min-width: 992px) {
                .collapsed {
                    display: block;
                    /* same width as sidebar */
                    margin-left: -25%;
                }
            }
            .feng-right-left {
                transition: left 0.3s ease;
                left: 0px;
            }

            .db {
                display: block !important;
            }

            .hb {
                display: none
            }

            .db button {
                transition: width 0.3s ease;
                width: 5px;
                height: 100px;
                position: fixed;
                z-index: 999;
                top: 75px;
                border-radius: 0px;
                padding: 0px;
            }
        </style>
        <div class="header" id="header">

            <div class="layui-clear">
                <a class="logo layui-this " href="<?= Url::toRoute('official/index') ?>" title="Fly" >Fox社区</a>
                <div class="nav">
                    <ul class="layui-nav" lay-filter="">
                        <li class="layui-nav-item nav-change <?= $action == "learn/index" ? 'layui-this' : null ?>"><a href="<?= Url::toRoute('learn/index') ?>">学习区</a></li>
                        <li class="layui-nav-item nav-change <?= $action == "community/index" ? 'layui-this' : null ?>"><a href="<?= Url::toRoute('community/index') ?>">交流区</a></li>
                        <li class="layui-nav-item nav-change <?= $action == "platform/index" ? 'layui-this' : null ?>" ><a href="<?= Url::toRoute('platform/index') ?>">平台区</a></li>
                        <li class="layui-nav-item nav-change <?= $action == "user/index" ? 'layui-this' : null ?>">
                            <a href="<?= Url::toRoute('user/index') ?>" >个人区</a>
                            <dl class="layui-nav-child my-nav-child"> <!-- 二级菜单 -->
                                <dd ><a href="">文章</a></dd>
                                <dd ><a href="">行请分析</a></dd>
                                <dd ><a href="">问答</a></dd>
                            </dl>
                        </li>

                    </ul>
                    <!--                           <a class="nav-this" href="jie/index.html">
                                                <i class="iconfont icon-wenda"></i>问答
                                              </a>
                                              <a href="http://www.layui.com/" target="_blank">
                                                <i class="iconfont icon-ui"></i>框架
                                              </a> -->
                </div>
                <div class="nav-user">
                    <!-- 未登入状态 -->
<!--                    <a class="unlogin" href="user/login.html"><i class="iconfont icon-touxiang"></i></a>
                    <span><a href="user/login.html">登入</a><a href="user/reg.html">注册</a></span>-->
              <!--       <p class="out-login">
                      <a href="" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-qq" title="QQ登入"></a>
                      <a href="" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-weibo" title="微博登入"></a>
                    </p>
                    -->
                    <!-- 登入后的状态 -->
                    <!--
                <a class="avatar" href="user/index.html">
                      <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0">
                      <cite>贤心</cite>
                      <i>VIP2</i>
                    </a>-->    
                    <div class="nav" style="top:10px">
                        <!--<a href="/user/logout/"><i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;"></i>数据区</a>-->
                        <a href="<?= Url::toRoute('official/login') ?>"><i class="iconfont icon-shezhi"></i>登录</a>

                    </div> 
                </div>
            </div>
        </div>

        <div class="feng-body">           


            <?php if ($controllerID !== 'official'): ?>
                <?= $this->render('navleftBase'); ?>
                <div class="feng-right" >
                    <div class="detail" style="padding-top: 1px;">                    
                        <?= $content ?>                 
                    </div>
                </div>
            <?php else: ?>
                <?= $content ?>
            <?php endif ?>

            <div class="hb"><button class="btn btn-primary" onclick="hideLeftNav()"></button></div>

        </div>
                   <nav class="st-menu">
                                    <div class="searchbox">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="glyphicon glyphicon-search" aria-hidden='true'></span>查找文章
                    </li>
                    <li class="list-group-item">
                        
                        <?php $form = ActiveForm::begin(
                                [
                                     'method' => 'get',
                                    'options' => ['class' => 'form-inline', 'id' => 'myForm','target'=>'_blank'],
                                    'action' => ['post/index'],
                                ]); ?>

                            <div class="form-group">
                              <input type="text" class="form-control" name="PostSearch[title]" id="w0input" placeholder="按标题">
                            </div>
                        <button type="submit" id="searchbtn" class="btn btn-default">搜索</button>
                    
                        <?php ActiveForm::end(); ?>
                        
                    </li>
                </ul>
            </div>
                        <div>
                            <button class="self-nav-footer-button" onclick="btnSearch()">
                                        <i  class="icon ion-ios-close"></i>
                                    </button>
                        </div>
                </nav>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

