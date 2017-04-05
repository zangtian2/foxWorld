<?php
/* @var $this yii\web\View */
use frontend\assets\AppAsset;

AppAsset::register($this);
//$this->registerJsFile('js/ware/detail.js', ['depends' => ['frontend\assets\AppAsset'],);
$this->registerJsFile('@web/assets/myassets/layui.all.js');  
$this->registerJsFile('@web/assets/myassets/learnCenter.js');  
//<script src="assets/myassets/learnCenter.js"></script>
?>
<link rel="stylesheet" href="assets/zidingyi.css">
<link rel="stylesheet" href="assets/zidingyi/icon/ionicons.css">
<link rel="stylesheet" href="assets/nav.css">
<link rel="stylesheet" href="assets/variables.css">


<div id="sidebar__"  class="sider-bar  el-nav is-shown"> 

    <!-- <nav class=""> -->
    <header class="el-nav-header">
        <h2 class="el-nav-title" style="letter-spacing: 3px;"> Spiritual Warfare</h2>
    </header>
    <div>
        <ul class="layui-nav  my-nav-side"  style="background-color: transparent;width:auto;padding-right: 0px">
            <!-- 侧边导航: <ul class="layui-nav layui-nav-tree layui-nav-side"> -->
            <li class=" drop-show el-nav-item u-category-windows sub-menu">
                <a href="javascript:;" >
                    <i class="icon ion-monitor"></i>
                    <span class="nav-text">窗体<i class="layui-icon">&#xe602;</i>  </span>

                </a>
                <ul class="sub drop-list" style="display:block">
                    <li>      <button type="button" id="button-windows" data-section="windows" class="el-nav-button is-selected">创建并管理 <em>窗体</em></button></li>
                    <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="el-nav-button">处理窗体 <em>崩溃和挂起</em></button></li>
                </ul>
            </li>

            <li class="drop-show el-nav-item u-category-menu sub-menu">
                <a href="javascript:;" >
                    <i class="icon ion-monitor"></i>
                    <span class="nav-text">菜单<i class="layui-icon">&#xe602;</i></span>

                </a>
                <ul class="sub drop-list">
                    <li><button type="button" id="button-menus" data-section="menus" class="el-nav-button">自定义 <em>菜单</em> </button></li>
                    <li><button type="button" id="button-shortcuts" data-section="shortcuts" class="el-nav-button">注册键盘 <em>快捷键</em></button></li>

                </ul>
            </li>



            <li class="drop-show el-nav-item u-category-native-ui sub-menu">
                <a href="javascript:;" >
                    <i class="icon ion-monitor"></i>
                    <span class="nav-text">本地用户界面<i class="layui-icon">&#xe602;</i></span>

                </a>
                <ul class="sub drop-list">
                    <li><button type="button" id="button-ex-links-file-manager" data-section="ex-links-file-manager" class="el-nav-button">打开 <em>外部链接</em> 或 系统 <em>文件管理器</em></button></li>
                    <li><button type="button" id="button-dialogs" data-section="dialogs" class="el-nav-button">使用系统 <em>对话框</em></button></li>
                    <li><button type="button" id="button-tray" data-section="tray" class="el-nav-button">将应用程序放入 <em>托盘</em></button></li>

                </ul>
            </li>

            <li class="drop-show el-nav-item u-category-windows sub-menu">
                <a href="javascript:;" >
                    <i class="icon ion-monitor"></i>
                    <span class="nav-text">窗体<i class="layui-icon">&#xe602;</i></span>

                </a>
                <ul class="sub drop-list">
                    <li>      <button type="button" id="button-windows" data-section="windows" class="el-nav-button">创建并管理 <em>窗体</em></button></li>
                    <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="el-nav-button">处理窗体 <em>崩溃和挂起</em></button></li>
                </ul>
            </li>
        </ul>
        <footer class="self-nav-footer" style="position:fixed;width:270px">
            <div style="padding: 0px 1.7em;">
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

        </footer>
    </div>
</div>

