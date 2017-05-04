<?php
use yii\helpers\Url;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
                        <span class="nav-text">入门 <?=$model?><i class="layui-icon">&#xe602;</i>  </span>
                    </a>
                    <ul class="drop-list" style="display:block">
                        <li>      <button type="button" id="button-windows" data-section="windows" class="feng-nav-button is-selected" onclick="dataReload('<?= Url::toRoute("learn/article") ?>');">外汇 <em>介绍</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button">基础知识 <em>介绍</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button">名词 <em>介绍</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button">货币 <em>介绍</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button">第一笔 <em>交易</em></button></li>
                        
                    </ul>
                </li>
                <li class="feng-nav-item u-category-menu">
                    <a href="javascript:;" class="feng-drop-a" >
                        <i class="icon ion-monitor"></i>
                        <span class="nav-text">进阶<i class="layui-icon">&#xe602;</i></span>
                    </a>
                    <ul class="drop-list">
                        <li><button type="button" id="button-menus" data-section="menus" class="feng-nav-button">交易 <em>理念</em> </button></li>
                        <li><button type="button" id="button-shortcuts" data-section="shortcuts" class="feng-nav-button">基本面 <em>分析</em></button></li>
                        <li><button type="button" id="button-shortcuts" data-section="shortcuts" class="feng-nav-button">技术 <em>分析</em></button></li>
                        <li><button type="button" id="button-shortcuts" data-section="shortcuts" class="feng-nav-button">交易 <em>策略</em></button></li>
                        <li><button type="button" id="button-shortcuts" data-section="shortcuts" class="feng-nav-button">交易 <em>心理</em></button></li>
                        <li><button type="button" id="button-shortcuts" data-section="shortcuts" class="feng-nav-button">交易 <em>纪律</em></button></li>                                                                        
                    </ul>
                </li>
                <li class="feng-nav-item u-category-native-ui">
                    <a href="javascript:;" class="feng-drop-a" >
                        <i class="icon ion-monitor"></i>
                        <span class="nav-text">突破<i class="layui-icon">&#xe602;</i></span>
                    </a>
                    <ul class="drop-list">
                        <li><button type="button" id="button-ex-links-file-manager" data-section="ex-links-file-manager" class="feng-nav-button">打开 <em>外部链接</em> 或 系统 <em>文件管理器</em></button></li>
                        <li><button type="button" id="button-tray" data-section="tray" class="feng-nav-button">将应用程序放入 <em>托盘</em></button></li>
                    </ul>
                </li>
                   <li class="feng-nav-item u-category-windows" >
                    <a href="javascript:;" class="feng-drop-a">
                        <i class="icon ion-monitor"></i>
                        <span class="nav-text">沉淀<i class="layui-icon">&#xe602;</i></span>
                    </a>
                    <ul class="drop-list">
                        <li>      <button type="button" id="button-windows" data-section="windows" class="feng-nav-button">创建并管理 <em>窗体</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button">处理窗体 <em>崩溃和挂起</em></button></li>
                    </ul>
                </li>
                <li class="feng-nav-item u-category-windows">
                    <a href="javascript:;" class="feng-drop-a" >
                        <i class="icon ion-monitor"></i>
                        <span class="nav-text">工具<i class="layui-icon">&#xe602;</i></span>
                    </a>
                    <ul class="drop-list">
                        <li>      <button type="button" id="button-windows" data-section="windows" class="feng-nav-button">MT4 <em>使用说明</em></button></li>
                        <li>      <button type="button" id="button-crash-hang" data-section="crash-hang" class="feng-nav-button">量化交易 <em>开发</em></button></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <div class="feng-nav-left-bottom ">
        <div style="padding: 0px 1.5em;
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
<!--            <button  id="refresh" name="refresh" class="self-nav-footer-button">
                <i class="icon ion-refresh"></i>
            </button>-->
            <button  id="dataEcon" name="refresh" class="self-nav-footer-button" onclick="dataEcon('<?= Url::toRoute("learn/test") ?>')">
                   | <a style="font-size:14px" >财经日历</a>
            </button>

        </div>
    </div>
    
</div>

