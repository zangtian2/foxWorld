<?php
/* @var $this yii\web\View */
$this->beginContent('@app/views/layouts/main.php');
use frontend\assets\AppAsset;
AppAsset::register($this);

AppAsset::addCss($this, "@web" . "/css/zidingyi.css");
AppAsset::addCss($this, "@web" . "/css/zidingyi/icon/ionicons.css");
AppAsset::addCss($this, "@web" . "/css/variables.css");
AppAsset::addCss($this, "@web" . "/css/feng-left-nav.css");
AppAsset::addScript($this, "@web" . "/js/learnCenter.js");
?>

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
                        <span class="nav-text">窗体<i class="layui-icon">&#xe602;</i>  </span>
                    </a>
                    <ul class="drop-list" style="display:block">
                        <li>      <button type="button" id="button-windows" data-section="windows" class="feng-nav-button is-selected" onclick="alert(1);">创建并管理 <em>窗体</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button">处理窗体 <em>崩溃和挂起</em></button></li>
                    </ul>
                </li>
                <li class="feng-nav-item u-category-menu">
                    <a href="javascript:;" class="feng-drop-a" >
                        <i class="icon ion-monitor"></i>
                        <span class="nav-text">菜单<i class="layui-icon">&#xe602;</i></span>
                    </a>
                    <ul class="drop-list">
                        <li><button type="button" id="button-menus" data-section="menus" class="feng-nav-button">自定义 <em>菜单</em> </button></li>
                        <li><button type="button" id="button-shortcuts" data-section="shortcuts" class="feng-nav-button">注册键盘 <em>快捷键</em></button></li>
                    </ul>
                </li>
                <li class="feng-nav-item u-category-native-ui">
                    <a href="javascript:;" class="feng-drop-a" >
                        <i class="icon ion-monitor"></i>
                        <span class="nav-text">本地用户界面<i class="layui-icon">&#xe602;</i></span>
                    </a>
                    <ul class="drop-list">
                        <li><button type="button" id="button-ex-links-file-manager" data-section="ex-links-file-manager" class="feng-nav-button">打开 <em>外部链接</em> 或 系统 <em>文件管理器</em></button></li>
                        <li><button type="button" id="button-dialogs" data-section="dialogs" class="feng-nav-button">使用系统 <em>对话框</em></button></li>
                        <li><button type="button" id="button-tray" data-section="tray" class="feng-nav-button">将应用程序放入 <em>托盘</em></button></li>
                    </ul>
                </li>
                <li class="feng-nav-item u-category-windows">
                    <a href="javascript:;" class="feng-drop-a" >
                        <i class="icon ion-monitor"></i>
                        <span class="nav-text">窗体<i class="layui-icon">&#xe602;</i></span>
                    </a>
                    <ul class="drop-list">
                        <li>      <button type="button" id="button-windows" data-section="windows" class="feng-nav-button">创建并管理 <em>窗体</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button">处理窗体 <em>崩溃和挂起</em></button></li>
                    </ul>
                </li>
                <li class="feng-nav-item u-category-windows" >
                    <a href="javascript:;" class="feng-drop-a">
                        <i class="icon ion-monitor"></i>
                        <span class="nav-text">窗体<i class="layui-icon">&#xe602;</i></span>
                    </a>
                    <ul class="drop-list">
                        <li>      <button type="button" id="button-windows" data-section="windows" class="feng-nav-button">创建并管理 <em>窗体</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button">处理窗体 <em>崩溃和挂起</em></button></li>
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