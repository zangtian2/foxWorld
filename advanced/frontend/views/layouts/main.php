<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;


$controllerID = Yii::$app->controller->id;
$actionID = Yii::$app->controller->action->id;
$action = $controllerID . '/' . $actionID;

//AppAsset::register($this);

raoul2000\bootswatch\BootswatchAsset::$theme = 'paper';
AppAsset::register($this);


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
        <style type="text/css">
          
            #nav{ position:relative; width:832px; _width:835px; margin:100px auto 0 auto;}
            #nav .nav-menu{ height:50px;list-style: none;}
            #nav .fw-nav-a{ display:block; float:left; height:50px; padding:0 40px; line-height:50px; color:#666; font-size:16px; text-decoration:none; }
            #nav .fw-nav-li{ display:block; float:left;}
            #nav .nav-current{ position:absolute; bottom:-2px; height:0px; overflow:hidden; background:#80b600;}

	
/* Display Dropdowns on Hover */


	


        </style>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <nav >
            <div id="nav">
            <ul class="nav-menu">
                <li class="fw-nav-li"><a href="#" class="fw-nav-a">学习区</a></li>
                <li class="fw-nav-li"><a href="#" class="fw-nav-a">书籍区</a></li>
                <li class="fw-nav-li dropdown" style="position: relative;"><a  class="fw-nav-a dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">交流区<span class="caret"></span></a>
<!--                    <ul style="border:2px solid #777;position:relative">
                    <li>移动模块</li>
                    <li>后台模版</li>
                    <li>电商平台</li>-->
<!--                  
                </ul>-->
<div></div>
          <ul class="dropdown-menu" id="fw-nav-dm" style="float: none;
margin-left: 20px;
position: absolute;">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>

                  
               <li class="fw-nav-li"> <a href="#" class="fw-nav-a">平台区</a></li>
            </<ul>
            <div class="nav-current"></div>
        </div>
     <ul class="nav navbar-nav navbar-right">
        <li><a href="#">登入</a></li>
        <li><a href="#">注册</a></li>

      </ul>
</nav> 
        
<!--        <div class="header">
            <div class="main">
                <a class="logo this " href="/" title="Fly" >Fox社区</a>
                <div class="nav">
                    <ul class="nav" lay-filter="">
                        <li class="nav-item nav-change <?= $action == "learn/index" ? 'this' : null ?>"><a href="<?= Url::toRoute('learn/index') ?>">学习区</a></li>
                        <li class="nav-item nav-change"><a href="">书籍区</a></li>
                        <li class="nav-item nav-change <?= $action == "community/index" ? 'this' : null ?>">
                            <a href="<?= Url::toRoute('community/index') ?>">交流区</a>
                            <dl class="nav-child my-nav-child">  二级菜单 
                                <dd><a href="">移动模块</a></dd>
                                <dd><a href="">后台模版</a></dd>
                                <dd><a href="">电商平台</a></dd>
                            </dl>
                        </li>
                        <li class="nav-item nav-change" ><a href="">平台区</a></li>
                    </ul>
                           <a class="nav-this" href="jie/index.html">
                            <i class="iconfont icon-wenda"></i>问答
                          </a>
                          <a href="http://www.layui.com/" target="_blank">
                            <i class="iconfont icon-ui"></i>框架
                          </a> 
                </div>

                <div class="nav-user">
                     未登入状态 
                    <a class="unlogin" href="user/login.html"><i class="iconfont icon-touxiang"></i></a>
                    <span><a href="user/login.html">登入</a><a href="user/reg.html">注册</a></span>
                     <p class="out-login">
                      <a href="" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-qq" title="QQ登入"></a>
                      <a href="" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-weibo" title="微博登入"></a>
                    </p>   
                    
                     登入后的状态 
                     
                    <a class="avatar" href="user/index.html">
                      <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0">
                      <cite>贤心</cite>
                      <i>VIP2</i>
                    </a>
                    <div class="nav">
                      <a href="/user/set/"><i class="iconfont icon-shezhi"></i>设置</a>
                      <a href="/user/logout/"><i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;"></i>退了</a>
                    </div> 

                </div>
            </div>
        </div>-->

        <div class="container">
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>   <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
            $(function () {
                
                (function () {
                    var $navcur = $(".nav-current");
                    var $nav = $("#nav");
                    var leftW = 0;
                    var index = 0;
                    var currentW = 0;
                    //添加默认下划线
                    //hover事件
                    $nav.find(".fw-nav-li").hover(function () {
                            index = $(this).index();//获取滑过元素索引值
                            leftW = $(this).position().left;//获取滑过元素Left值                                                
                            currentW = $nav.find(".fw-nav-li").eq(index).innerWidth();//获取滑过元素Width值    
                            if ($navcur.width()===0){
                                $navcur.stop().css({'height': '3px',width: 0, left: leftW + 20});
                            }else{                                                                                    
                                $navcur.stop().css('height', '3px');
                            }
                            $navcur.stop().animate({
                                left: leftW + 20,
                                width: currentW - 40                                
                            }, 150);
                            
                        });
                    $nav.hover(function () {                    
                    }, function () {
                        $navcur.stop().animate({
                            left: leftW + currentW / 2,
                            width: '0',
                            right: leftW + currentW
                        }, 200);

                    })

                })();

            });
            
            

$(".dropdown").hover(function(){
//    $("#fw-nav-dm").slideDown();
    $(this).addClass('open');
},function(){
//    $("#fw-nav-dm").delay(200).slideUp();
   setTimeout(function(){
       $(".dropdown").removeClass('open');
   }, 400 );
});
        </script>
</html>
<?php $this->endPage() ?>
