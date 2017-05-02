<?php
/* @var $this yii\web\View */
$this->beginContent('@app/views/layouts/main.php');
use frontend\assets\AppAsset;
AppAsset::register($this);
AppAsset::addCss($this, "@web" . "/css/zidingyi.css");
AppAsset::addCss($this, "@web" . "/css/zidingyi/icon/ionicons.css");
AppAsset::addCss($this, "@web" . "/css/variables.css");
AppAsset::addCss($this, "@web" . "/css/feng-left-nav.css");
$this->registerJs(  
   'var $ = layui.jquery;'  
);  
AppAsset::addScript($this, "@web" . "/js/communityCenter.js");


$controllerID = Yii::$app->controller->id;

?>


<?php
if ($controllerID=='communityBase'):
?>
<?php endif;?>
<div  class="feng-nav" >
    <div class="feng-nav-left-top">
        <header class="feng-nav-header">
            <h2 class="feng-nav-title">AT Field Index</h2>
        </header>
        <div class="feng-nav-category">
            <ul class="my-nav-side">
                <li class="feng-nav-item u-category-windows">
                    <a href="javascript:;" class="feng-drop-a">
                        <i class="icon ion-monitor"></i>
                        <span class="nav-text">文章<i class="layui-icon">&#xe602;</i>  </span>
                    </a>
                    <ul class="drop-list" style="display:block">
                        <li>      <button type="button" id="button-windows" data-section="windows" class="feng-nav-button is-selected" onclick="alert(1);"> <em>总览</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button"> <em>货币</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button"> <em>理念</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button"> <em>策略</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button"> <em>理论</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button"> <em>策略</em></button></li>
<!--                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button"><em>技术面</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button"><em>基本面</em></button></li>                                                                        -->
                    </ul>
                </li>
                <li class="feng-nav-item u-category-menu">
                    <a href="javascript:;" class="feng-drop-a" >
                        <i class="icon ion-monitor"></i>
                        <span class="nav-text">行情分析<i class="layui-icon">&#xe602;</i></span>
                    </a>
                    <ul class="drop-list">
                        <li><button type="button" id="button-menus" data-section="menus" class="feng-nav-button"><em>日内</em> 行情</button></li>
                        <li><button type="button" id="button-shortcuts" data-section="shortcuts" class="feng-nav-button"><em>短期</em> 行情</em></button></li>
                        <li><button type="button" id="button-shortcuts" data-section="shortcuts" class="feng-nav-button"><em>长期</em> 行情</em></button></li>                        
                    </ul>
                </li>
                <li class="feng-nav-item u-category-native-ui">
                    <a href="javascript:;" class="feng-drop-a" >
                        <i class="icon ion-monitor"></i>
                        <span class="nav-text">问答<i class="layui-icon">&#xe602;</i></span>
                    </a>
                    <ul class="drop-list">                        
                        <li><button type="button" id="button-dialogs" data-section="dialogs" class="feng-nav-button">自由 <em>问答</em></button></li>
                        <li><button type="button" id="button-tray" data-section="tray" class="feng-nav-button">招聘 <em>相关</em></button></li>
                    </ul>
                </li>
                <li class="feng-nav-item u-category-windows">
                    <a href="javascript:;" class="feng-drop-a" >
                        <i class="icon ion-monitor"></i>
                        <span class="nav-text">其他<i class="layui-icon">&#xe602;</i></span>
                    </a>
                    <ul class="drop-list">
                        <li>      <button type="button" id="button-windows" data-section="windows" class="feng-nav-button">意见 <em>相关</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button">板块 <em>申请</em></button></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="feng-nav-left-bottom ">
        <div style="padding: 0px 2.3em;
             margin-left: 5px;">
            <button class="self-nav-footer-button">
                <i data-modal="resure" class="icon ion-ios-close"></i>
            </button>
            <button id="minus" class="self-nav-footer-button">
                <i class="icon ion-ios-minus"></i>
            </button>
            <button class="self-nav-footer-button">
                <i data-modal="about" class="icon ion-ios-help"></i>
            </button>
            <button  id="window" name="fullScreen" class="self-nav-footer-button">
                <i class="icon ion-android-expand"></i>
            </button>
            <button  id="refresh" name="refresh" class="self-nav-footer-button">
                <i class="icon ion-refresh"></i>
            </button>
        </div>
    </div>
</div>

<div class="feng-right">
    <div class="detail" style="padding-top: 1px;">
    <div class="fly-panel detail-box" style="margin: 15px;
         border: 1px solid rgb(192, 200, 212);
         box-shadow: 0px 3px 5px rgb(170, 178, 189);
         margin-top: 13px;">
        <div class="showback"  style="margin: 15px 5px;margin-top: 20px;padding-bottom: 30px;">
    <?= $content ?>
        </div>
    </div>
    </div>
</div>

<?php $this->endContent(); ?>