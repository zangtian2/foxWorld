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

        <div class="header">
            <div class="main">
                <div class="layui-clear">
                    <a class="logo layui-this " href="/" title="Fly" >Fox社区</a>
                    <div class="nav">
                        <ul class="layui-nav" lay-filter="">
                            <li class="layui-nav-item nav-change <?= $action == "learn/index" ? 'layui-this' : null ?>"><a href="<?= Url::toRoute('learn/index') ?>">学习区</a></li>
                            <li class="layui-nav-item nav-change"><a href="">书籍区</a></li>
                            <li class="layui-nav-item nav-change <?= $action == "community/index" ? 'layui-this' : null ?>">
                                <a href="<?= Url::toRoute('community/index') ?>">交流区</a>
                                <dl class="layui-nav-child" style=" font-size: 14px;"> <!-- 二级菜单 -->
                                    <dd style="line-height: 36px;"><a href="">移动模块</a></dd>
                                    <dd style="line-height: 36px;"><a href="">后台模版</a></dd>
                                    <dd style="line-height: 36px;"><a href="">电商平台</a></dd>
                                </dl>
                            </li>
                            <li class="layui-nav-item nav-change" ><a href="">平台区</a></li>
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
                        <a class="unlogin" href="user/login.html"><i class="iconfont icon-touxiang"></i></a>
                        <span><a href="user/login.html">登入</a><a href="user/reg.html">注册</a></span>
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
                        </a>
                        <div class="nav">
                          <a href="/user/set/"><i class="iconfont icon-shezhi"></i>设置</a>
                          <a href="/user/logout/"><i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;"></i>退了</a>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
        <div class="feng-body">
<?= $content ?>
        </div>
  
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
