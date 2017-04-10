<?php
/* @var $this yii\web\View */
$this->beginContent('@app/views/layouts/main.php');

use frontend\assets\AppAsset;

AppAsset::register($this);
AppAsset::addCss($this, "@web" . "/css/zidingyi.css");
AppAsset::addCss($this, "@web" . "/css/zidingyi/icon/ionicons.css");
AppAsset::addCss($this, "@web" . "/css/variables.css");
AppAsset::addCss($this, "@web" . "/css/feng-left-nav.css");
AppAsset::addCss($this, "@web" . "/css/navFox.css");
AppAsset::addScript($this, "@web" . "/js/learnCenter.js");
?>



<div  class="feng-nav" > 

    <!-- <nav class=""> -->
    <div class="feng-nav-left-top">
    <header class="feng-nav-header">
        <h2 class="feng-nav-title" style="letter-spacing: 3px;font-size: 16px;
line-height: 20px;"> Spiritual Warfare</h2>
    </header>
        <div class="feng-nav-category">
        <ul class="layui-nav  my-nav-side"  style="background-color: transparent;">
            <!-- 侧边导航: <ul class="layui-nav layui-nav-tree layui-nav-side"> -->
            <li class=" drop-show feng-nav-item u-category-windows sub-menu">
                <a href="javascript:;" >
                    <i class="icon ion-monitor"></i>
                    <span class="nav-text">窗体<i class="layui-icon">&#xe602;</i>  </span>

                </a>
                <ul class="sub drop-list" style="display:block">
                    <li>      <button type="button" id="button-windows" data-section="windows" class="feng-nav-button is-selected">创建并管理 <em>窗体</em></button></li>
                    <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button">处理窗体 <em>崩溃和挂起</em></button></li>
                </ul>
            </li>

            <li class="drop-show feng-nav-item u-category-menu sub-menu">
                <a href="javascript:;" >
                    <i class="icon ion-monitor"></i>
                    <span class="nav-text">菜单<i class="layui-icon">&#xe602;</i></span>

                </a>
                <ul class="sub drop-list">
                    <li><button type="button" id="button-menus" data-section="menus" class="feng-nav-button">自定义 <em>菜单</em> </button></li>
                    <li><button type="button" id="button-shortcuts" data-section="shortcuts" class="feng-nav-button">注册键盘 <em>快捷键</em></button></li>

                </ul>
            </li>



            <li class="drop-show feng-nav-item u-category-native-ui sub-menu">
                <a href="javascript:;" >
                    <i class="icon ion-monitor"></i>
                    <span class="nav-text">本地用户界面<i class="layui-icon">&#xe602;</i></span>

                </a>
                <ul class="sub drop-list">
                    <li><button type="button" id="button-ex-links-file-manager" data-section="ex-links-file-manager" class="feng-nav-button">打开 <em>外部链接</em> 或 系统 <em>文件管理器</em></button></li>
                    <li><button type="button" id="button-dialogs" data-section="dialogs" class="feng-nav-button">使用系统 <em>对话框</em></button></li>
                    <li><button type="button" id="button-tray" data-section="tray" class="feng-nav-button">将应用程序放入 <em>托盘</em></button></li>

                </ul>
            </li>

            <li class="drop-show feng-nav-item u-category-windows sub-menu">
                <a href="javascript:;" >
                    <i class="icon ion-monitor"></i>
                    <span class="nav-text">窗体<i class="layui-icon">&#xe602;</i></span>

                </a>
                <ul class="sub drop-list">
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
<?= $content ?>
</div>
<?php $this->endContent(); ?>