<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
$controllerID = Yii::$app->controller->id;
$actionID = Yii::$app->controller->action->id;
$action = $controllerID . '/' . $actionID;

AppAsset::addCss($this, "@web" . "/css/navFox.css");
AppAsset::addCss($this, "@web" . "/css/zidingyi.css");
AppAsset::addCss($this, "@web" . "/css/zidingyi/icon/ionicons.css");
AppAsset::addCss($this, "@web" . "/css/variables.css");
AppAsset::addCss($this, "@web" . "/css/feng-left-nav.css");
AppAsset::addCss($this, "@web" . "/plugin/toast/css/iziToast.min.css");
AppAsset::addScript($this, "@web" . "/js/main.js");
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" style="overflow-y: hidden">
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
        <?=Html::jsFile('@web/plugin/toast/js/iziToast.min.js')?>
        <div class="header">

            <div class="layui-clear">
                <a class="logo layui-this " href="<?= Url::toRoute('official/index') ?>" title="Fly" >Fox社区</a>
                <div class="nav">
                    <ul class="layui-nav" lay-filter="">
                        <li class="layui-nav-item nav-change <?= $action == "tutorials/index" ? 'layui-this' : null ?>"><a href="<?= Url::toRoute('tutorials/index') ?>">学习区</a></li>
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

                    <?php if (!Yii::$app->user->isGuest) { ?>
                <a class="avatar" href="user/index.html">
                      <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0">
                      <cite>贤心</cite>
                      <i>VIP2</i>
                    </a>
                    <a href="<?= Url::toRoute('official/tui') ?>"><i class="iconfont icon-shezhi"></i>退出</a>
                    <?php }else{?>
                    <div class="nav" style="top:10px">
                        <!--<a href="/user/logout/"><i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;"></i>数据区</a>-->
                        <a href="<?= Url::toRoute('official/login') ?>"><i class="iconfont icon-shezhi"></i>登录</a>
                    
                    </div> 
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="feng-body" style="overflow-y: auto;overflow-x: hidden">            
                    <?= $content ?>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
