<?php
/* @var $this yii\web\View */

use yii\widgets\ListView;
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);

AppAsset::addCss($this, "@web" . "/css/about.css");
AppAsset::addCss($this, "@web" . "/css/userindex.css");
AppAsset::addCss($this, "@web" . "/css/userindex_more.css");

$this->registerJs(
        'var $ = layui.jquery;'
);
//AppAsset::addScript($this, "@web" . "/js/userCenter.js");
?>



<style>
    .detail-box {
        margin: 15px;
        border: 1px solid rgb(192, 200, 212);
        box-shadow: 0px 3px 5px rgb(170, 178, 189);
        margin-top: 13px;
        padding: 0;  
    }    

    .showback  {
        /*width: 90%;*/
        margin: 0 auto;
        margin-left: auto!important;
        margin-right: auto!important;
    }    

</style>


<div class="fly-panel detail-box" >    
    <div class="showback container-index person" >        


<!--        <div class="row">
            <div class="col-md-3 " >
                <div style="padding:15px;padding-right:0px;">

                </div>
            </div>

            <div class="col-md-9" style="min-height:768px;border-left: 1px solid #ddd">

                <div class="main layui-clear">
                    <div class="wrap">
                        <div class="" style="padding:20px">
                            <br>
                            <hr>
                            <div >
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>         -->


<div class="row">
    <div class="col-xs-16 main-index">
      <div class="main-top">
  <a class="avatar" href="/u/d823f9a84fad">
    <img src="//upload.jianshu.io/users/upload_avatars/2550383/e7841fc86b58.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/240/h/240" alt="240">
</a>

  <div class="title">
    <a class="name" href="/u/d823f9a84fad">PreFU</a>
  </div>
  <div class="info">
    <ul>
      <li>
        <div class="meta-block">
          <a href="/users/d823f9a84fad/following">
            <p>4</p>
            关注 <i class="iconfont ic-arrow"></i>
</a>        </div>
      </li>
      <li>
        <div class="meta-block">
          <a href="/users/d823f9a84fad/followers">
            <p>6</p>
            粉丝 <i class="iconfont ic-arrow"></i>
</a>        </div>
      </li>
      <li>
        <div class="meta-block">
          <a href="/u/d823f9a84fad">
            <p>18</p>
            文章 <i class="iconfont ic-arrow"></i>
</a>        </div>
      </li>
      <li>
        <div class="meta-block">
          <p>4451</p>
          <div>字数</div>
        </div>
      </li>
      <li>
        <div class="meta-block">
          <p>2</p>
          <div>收获喜欢</div>
        </div>
      </li>
    </ul>
  </div>
</div>

      <ul class="trigger-menu" data-pjax-container="#list-container"><li class="active"><a href="/u/d823f9a84fad?order_by=shared_at"><i class="iconfont ic-articles"></i> 文章</a></li><li class=""><a href="/users/d823f9a84fad/timeline"><i class="iconfont ic-feed"></i> 动态</a></li><li class=""><a href="/u/d823f9a84fad?order_by=commented_at"><i class="iconfont ic-latestcomments"></i> 最新评论</a></li><li class=""><a href="/u/d823f9a84fad?order_by=top"><i class="iconfont ic-hot"></i> 热门</a></li></ul>

      <div id="list-container">
        <!-- 文章列表模块 -->
<ul class="note-list" infinite-scroll-url="/u/d823f9a84fad?order_by=shared_at">
    
<li id="note-10097542" data-note-id="10097542" class="">
  <div class="content">
    <div class="author">
      <a class="avatar" target="_blank" href="/u/d823f9a84fad">
        <img src="//upload.jianshu.io/users/upload_avatars/2550383/e7841fc86b58.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96" alt="96">
</a>      <div class="name">
        <a class="blue-link" target="_blank" href="/u/d823f9a84fad">PreFU</a>
        <span class="time" data-shared-at="2017-04-10T18:37:48+08:00">04.10 18:37</span>
      </div>
    </div>
    <a class="title" target="_blank" href="/p/22fcfb1da6d5">Websocket-stf</a>
    <p class="abstract">
      
    </p>
    <div class="meta">
      <a target="_blank" href="/p/22fcfb1da6d5">
        <i class="iconfont ic-list-read"></i> 32
</a>        <a target="_blank" href="/p/22fcfb1da6d5#comments">
          <i class="iconfont ic-list-comments"></i> 0
</a>      <span><i class="iconfont ic-list-like"></i> 0</span>
    </div>
  </div>
</li>

    
<li id="note-10390327" data-note-id="10390327" class="">
  <div class="content">
    <div class="author">
      <a class="avatar" target="_blank" href="/u/d823f9a84fad">
        <img src="//upload.jianshu.io/users/upload_avatars/2550383/e7841fc86b58.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96" alt="96">
</a>      <div class="name">
        <a class="blue-link" target="_blank" href="/u/d823f9a84fad">PreFU</a>
        <span class="time" data-shared-at="2017-04-10T18:37:03+08:00">04.10 18:37</span>
      </div>
    </div>
    <a class="title" target="_blank" href="/p/7f0c120df84f">远程操作路由器</a>
    <p class="abstract">
      当前适用于旧式路由器，高安全性的和智能路由器可通过phantomjs实现TP-Link#-*-coding:utf-8-*-
    </p>
    <div class="meta">
      <a target="_blank" href="/p/7f0c120df84f">
        <i class="iconfont ic-list-read"></i> 2
</a>        <a target="_blank" href="/p/7f0c120df84f#comments">
          <i class="iconfont ic-list-comments"></i> 0
</a>      <span><i class="iconfont ic-list-like"></i> 0</span>
    </div>
  </div>
</li>

    
<li id="note-8429479" data-note-id="8429479" class="">
  <div class="content">
    <div class="author">
      <a class="avatar" target="_blank" href="/u/d823f9a84fad">
        <img src="//upload.jianshu.io/users/upload_avatars/2550383/e7841fc86b58.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96" alt="96">
</a>      <div class="name">
        <a class="blue-link" target="_blank" href="/u/d823f9a84fad">PreFU</a>
        <span class="time" data-shared-at="2017-01-18T08:51:51+08:00">01.18 08:51</span>
      </div>
    </div>
    <a class="title" target="_blank" href="/p/9f3b8e3be770">Minicap数据解析（PHP-Client）</a>
    <p class="abstract">
      &lt;?php
    </p>
    <div class="meta">
      <a target="_blank" href="/p/9f3b8e3be770">
        <i class="iconfont ic-list-read"></i> 14
</a>        <a target="_blank" href="/p/9f3b8e3be770#comments">
          <i class="iconfont ic-list-comments"></i> 0
</a>      <span><i class="iconfont ic-list-like"></i> 0</span>
    </div>
  </div>
</li>

    
<li id="note-8429465" data-note-id="8429465" class="">
  <div class="content">
    <div class="author">
      <a class="avatar" target="_blank" href="/u/d823f9a84fad">
        <img src="//upload.jianshu.io/users/upload_avatars/2550383/e7841fc86b58.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96" alt="96">
</a>      <div class="name">
        <a class="blue-link" target="_blank" href="/u/d823f9a84fad">PreFU</a>
        <span class="time" data-shared-at="2017-01-18T08:51:45+08:00">01.18 08:51</span>
      </div>
    </div>
    <a class="title" target="_blank" href="/p/f323ede8db75">Minicap数据解析（PHP-Websocket）</a>
    <p class="abstract">
      &lt;?php    namespace console\controllers;    use yii\console\Controller;    use console\c...
    </p>
    <div class="meta">
      <a target="_blank" href="/p/f323ede8db75">
        <i class="iconfont ic-list-read"></i> 25
</a>        <a target="_blank" href="/p/f323ede8db75#comments">
          <i class="iconfont ic-list-comments"></i> 0
</a>      <span><i class="iconfont ic-list-like"></i> 0</span>
    </div>
  </div>
</li>

    
<li id="note-8429421" data-note-id="8429421" class="">
  <div class="content">
    <div class="author">
      <a class="avatar" target="_blank" href="/u/d823f9a84fad">
        <img src="//upload.jianshu.io/users/upload_avatars/2550383/e7841fc86b58.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96" alt="96">
</a>      <div class="name">
        <a class="blue-link" target="_blank" href="/u/d823f9a84fad">PreFU</a>
        <span class="time" data-shared-at="2017-01-18T08:51:39+08:00">01.18 08:51</span>
      </div>
    </div>
    <a class="title" target="_blank" href="/p/982fe94adcd5">Minicap数据解析（PHP-MiniStream）</a>
    <p class="abstract">
      &lt;?php
    </p>
    <div class="meta">
      <a target="_blank" href="/p/982fe94adcd5">
        <i class="iconfont ic-list-read"></i> 14
</a>        <a target="_blank" href="/p/982fe94adcd5#comments">
          <i class="iconfont ic-list-comments"></i> 0
</a>      <span><i class="iconfont ic-list-like"></i> 0</span>
    </div>
  </div>
</li>

    
<li id="note-8364284" data-note-id="8364284" class="">
  <div class="content">
    <div class="author">
      <a class="avatar" target="_blank" href="/u/d823f9a84fad">
        <img src="//upload.jianshu.io/users/upload_avatars/2550383/e7841fc86b58.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96" alt="96">
</a>      <div class="name">
        <a class="blue-link" target="_blank" href="/u/d823f9a84fad">PreFU</a>
        <span class="time" data-shared-at="2017-01-18T08:51:25+08:00">01.18 08:51</span>
      </div>
    </div>
    <a class="title" target="_blank" href="/p/f8b8123cd062">Minicap数据解析（python）</a>
    <p class="abstract">
      Banner.py Main.py pyqt.py
    </p>
    <div class="meta">
      <a target="_blank" href="/p/f8b8123cd062">
        <i class="iconfont ic-list-read"></i> 236
</a>        <a target="_blank" href="/p/f8b8123cd062#comments">
          <i class="iconfont ic-list-comments"></i> 0
</a>      <span><i class="iconfont ic-list-like"></i> 0</span>
    </div>
  </div>
</li>

    
<li id="note-6873560" data-note-id="6873560" class="">
  <div class="content">
    <div class="author">
      <a class="avatar" target="_blank" href="/u/d823f9a84fad">
        <img src="//upload.jianshu.io/users/upload_avatars/2550383/e7841fc86b58.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96" alt="96">
</a>      <div class="name">
        <a class="blue-link" target="_blank" href="/u/d823f9a84fad">PreFU</a>
        <span class="time" data-shared-at="2016-11-17T09:12:56+08:00">2016.11.17 09:12</span>
      </div>
    </div>
    <a class="title" target="_blank" href="/p/b01ae1d29b44">STF介绍</a>
    <p class="abstract">
      介绍 用于Web端设备远程管理 功能 系统支持支持Android版本2.3.3 (SDK10) 到7.1 (SDK25)）支持Wear 5.1 无需rootWeb浏览器管理设...
    </p>
    <div class="meta">
      <a target="_blank" href="/p/b01ae1d29b44">
        <i class="iconfont ic-list-read"></i> 128
</a>        <a target="_blank" href="/p/b01ae1d29b44#comments">
          <i class="iconfont ic-list-comments"></i> 0
</a>      <span><i class="iconfont ic-list-like"></i> 1</span>
    </div>
  </div>
</li>

    
<li id="note-6893313" data-note-id="6893313" class="">
  <div class="content">
    <div class="author">
      <a class="avatar" target="_blank" href="/u/d823f9a84fad">
        <img src="//upload.jianshu.io/users/upload_avatars/2550383/e7841fc86b58.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96" alt="96">
</a>      <div class="name">
        <a class="blue-link" target="_blank" href="/u/d823f9a84fad">PreFU</a>
        <span class="time" data-shared-at="2016-11-11T14:23:06+08:00">2016.11.11 14:23</span>
      </div>
    </div>
    <a class="title" target="_blank" href="/p/8632c728325e">STF安装</a>
    <p class="abstract">
      linux：14.04权限：root镜像：registry.npm.taobao.org(淘宝镜像)注意：本文汇总安装方式，内容核心非本人原作。 安装请查看以下链接 WEB ...
    </p>
    <div class="meta">
      <a target="_blank" href="/p/8632c728325e">
        <i class="iconfont ic-list-read"></i> 368
</a>        <a target="_blank" href="/p/8632c728325e#comments">
          <i class="iconfont ic-list-comments"></i> 1
</a>      <span><i class="iconfont ic-list-like"></i> 0</span>
    </div>
  </div>
</li>

    
<li id="note-6892938" data-note-id="6892938" class="">
  <div class="content">
    <div class="author">
      <a class="avatar" target="_blank" href="/u/d823f9a84fad">
        <img src="//upload.jianshu.io/users/upload_avatars/2550383/e7841fc86b58.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/96/h/96" alt="96">
</a>      <div class="name">
        <a class="blue-link" target="_blank" href="/u/d823f9a84fad">PreFU</a>
        <span class="time" data-shared-at="2016-11-11T13:51:01+08:00">2016.11.11 13:51</span>
      </div>
    </div>
    <a class="title" target="_blank" href="/p/56b5d79fc393">STF部分坑</a>
    <p class="abstract">
      无法进入Control界面 问题描述：连接好设备，并且网页正常打开，显示设备正常。但是点击设备，无法进入控制界面，出现设备断连，异常跳转回/devices界面。并且刷新仍设备...
    </p>
    <div class="meta">
      <a target="_blank" href="/p/56b5d79fc393">
        <i class="iconfont ic-list-read"></i> 54
</a>        <a target="_blank" href="/p/56b5d79fc393#comments">
          <i class="iconfont ic-list-comments"></i> 0
</a>      <span><i class="iconfont ic-list-like"></i> 0</span>
    </div>
  </div>
</li>

</ul>

      </div>
    </div>
    
<div class="col-xs-7 col-xs-offset-1 aside">
    <div class="title">个人介绍</div>
    <a class="function-btn" data-action="start-edit-intro" href="javascript:void(0)"><i class="iconfont ic-edit-s"></i>编辑</a>
    <form class="profile-edit js-intro-form" data-type="json" id="edit_user_2550383" action="/users/d823f9a84fad" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch">
      <textarea name="user[intro]" id="user_intro">九流程序员</textarea>
      <input type="submit" name="commit" value="保存" class="btn btn-hollow" data-action="save-edit-intro">
      <a data-action="cancel-edit-intro" href="javascript:void(null);">取消</a>
</form>  <div class="description">
    <div class="js-intro">九流程序员</div>
    
    
  </div>
  <ul class="list user-dynamic">
    <li>
      <a href="/users/d823f9a84fad/subscriptions">
        <i class="iconfont ic-collection"></i> <span>我关注的专题/文集</span>
</a>    </li>
    <li>
      <a href="/users/d823f9a84fad/liked_notes">
        <i class="iconfont ic-like"></i> <span>我喜欢的文章</span>
</a>    </li>
  </ul>
  <!-- 专题和文集 -->
  <div><div><!----> <div class="title">我创建的专题</div> <div class="new-collection-block"><a href="/collections/new" class="new-collection-btn"><i class="iconfont ic-follow"></i><span>创建一个新专题</span></a></div></div> <!----> <div><div class="title">
    我的文集
  </div> <ul class="list"><li><a href="/nb/5272640" target="_blank"><i class="iconfont ic-search-notebook"></i></a> <a href="/nb/5272640" target="_blank" class="name">学习React Native日记</a></li><li><a href="/nb/7703655" target="_blank"><i class="iconfont ic-search-notebook"></i></a> <a href="/nb/7703655" target="_blank" class="name">STF</a></li><li><a href="/nb/11018021" target="_blank"><i class="iconfont ic-search-notebook"></i></a> <a href="/nb/11018021" target="_blank" class="name">Python</a></li><li><a href="/nb/10774498" target="_blank"><i class="iconfont ic-search-notebook"></i></a> <a href="/nb/10774498" target="_blank" class="name">改造STF</a></li><li><a href="/nb/8990022" target="_blank"><i class="iconfont ic-search-notebook"></i></a> <a href="/nb/8990022" target="_blank" class="name">Linux</a></li><li><a href="/nb/5269877" target="_blank"><i class="iconfont ic-search-notebook"></i></a> <a href="/nb/5269877" target="_blank" class="name">日记本</a></li> <li><!----> <!----></li></ul></div></div>
</div>

  </div>

    </div>
</div>



