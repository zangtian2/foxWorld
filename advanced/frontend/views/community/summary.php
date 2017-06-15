<?php

use yii\helpers\Html;
use yii\widgets\ListView;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="fly-panel detail-box" style="min-width:768px;">    
    <div class="showback "  style="padding:5px 20px">        
    
        

        <div class="row">
            <div class="col-md-8" style="min-height: 799px;">
                        <div class="jumbotron" style="margin: 20px;
margin-top: 40px;
padding: 20px;
height: 240px">
 
</div>
                                <div style="padding: 20px;
                        margin: 40px 20px 20px;
                        height: 60px;
                        background: rgb(36, 135, 222) none repeat scroll 0% 0%;"></div>
                <div class="" style="padding: 20px">

                        
                        <div >
                                    <ul class="note-list" infinite-scroll-url="/c/dqfRwQ?order_by=commented_at">
                                        <?=
                                        ListView::widget([
                                            'id' => 'postList',
                                            'dataProvider' => $dataProvider,
                                            'itemOptions' => ['class' => 'item'],
                                            'itemView' => '_listItem', //子视图，显示一篇文章的标题等内容
                                            'layout' => '{items}{pager}',
                                            'pager' => ['class' => \kop\y2sp\ScrollPager::className(),
                                                'overflowContainer'=>'.feng-right',
                                                'noneLeftText'=>'没有了，你可以看看别的',
                                                'triggerOffset'=>10000000,    
                //                                'enabledExtensions' => ['EXTENSION_HISTORY' => false],  
                                                ]
                                        ])
                                        ?>                       
                                    </ul>
                                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div style="padding: 20px;
                        margin: 40px 20px 20px;
                        height: 100px;
                        background: rgb(36, 135, 222) none repeat scroll 0% 0%;"></div>
                        <div style="margin: 40px 20px 20px;
padding: 20px;
height: 350px;
background: rgb(102, 164, 44) none repeat scroll 0% 0%;"></div>
<div style="padding: 20px;
margin: 40px 20px 20px;
height: 100px;
background: rgb(234, 35, 112) none repeat scroll 0% 0%;"></div>
            </div>
        </div>
    </div>
</div>




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

    .navin {
        line-height: 45px !important;
    }
    .navout .layui-this a {
        font-weight: bold;
        color: black;
    }

    .navout .layui-this::after {
        height:3px !important;
    }

    .navin a {
        font-weight: bold;
    }
    .navin a:hover {
        color:black !important;
        text-decoration: none;
    }
    .navin a:focus {
        text-decoration: none;
    }

    .list-group-item {
        border:0px
    }
    .navout .layui-nav-bar {
        top:42px !important;
        height: 3px !important;
    }

    .navout {
        border-bottom: 1px solid rgb(238, 238, 238);
        background-color: rgb(255, 255, 255);
        border-radius: 0px;margin-bottom: 0px;
        padding:0px
    }
</style>

<style>
    /*搜索框*/
    .d7:after {content:""; clear:both; display:table}
    .d7 form {
        width: auto;
        float: right;
        margin-right: 30px;
    }
    .d7 input {
        color: rgb(66, 38, 32);
        width: 190px;
        padding-left: 15px;
        border: 0px;
        outline: none;
        position: relative;
        transition: .2s linear;
        height: 43px;
        border-bottom: 2px solid transparent;
    }
    .d7 input:focus {
        width: 250px;
        border-bottom: 2px solid #CC1C9E;
    }
    .d7 button {
        width: 45px;
        height: 45px;
        border: none;
        position: absolute;
        right: 0;
        color: grey;
        background: transparent;
    }

    .d7 button:hover {
        color: blueviolet;
        background: transparent;
    }
    /*搜索框*/
</style>
<style>
    .note-list .have-img .wrap-img img {
        width: 100%;
        height: 100%;
        border-radius: 4px;
        border: 1px solid #f0f0f0;
    }

    .note-list .meta {
        padding-right: 0!important;
        font-size: 12px;
        font-weight: 400;
        line-height: 20px;
    }
    .note-list .meta a {
        margin-right: 10px;
        color: #b4b4b4;
    }
    .note-list .meta a, .note-list .meta a:hover {
        transition: .1s ease-in;
        -webkit-transition: .1s ease-in;
        -moz-transition: .1s ease-in;
        -o-transition: .1s ease-in;
        -ms-transition: .1s ease-in;
    }
    .note-list .collection-tag {
        padding: 2px 6px;
        color: #ea6f5a!important;
        border: 1px solid rgba(236,97,73,.7);
        border-radius: 3px;
    }

    .note-list .meta span {
        margin-right: 10px;
        color: #b4b4b4;
    }
    .note-list .abstract {
        margin: 0 0 8px;
        font-size: 13px;
        line-height: 24px;
    }
    .note-list .title {
        margin: -7px 0 4px;
        display: inherit;
        font-size: 18px;
        font-weight: 700;
        line-height: 1.5;
    }

    .note-list li {
        position: relative;
        width: 100%;
        margin: 0 0 17px;
        padding: 0 2px 17px 0;
        border-bottom: 1px solid #f0f0f0;
        word-wrap: break-word;
    }


    .note-list .have-img>div {
        padding-right: 160px;
    }

    .note-list .have-img .wrap-img {
        position: absolute;
        top: 50%;
        margin-top: -68px;
        right: 0;
        width: 150px;
        height: 120px;
    }

    .note-list li.have-img {
        min-height: 140px;
    }

    .note-list {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .note-list .author .avatar, .note-list .author .name {
        display: inline-block;
        vertical-align: middle;
    }
    .note-list .author .avatar, .note-list .author .name {
        display: inline-block;
        vertical-align: middle;
    }

    .note-list .author .name span {
        display: inline-block;
        padding-left: 3px;
        color: #969696;
    }

    .avatar img {
        width: 100%;
        height: 100%;
        border: 1px solid #ddd;
        border-radius: 50%;
    }

    .note-list .author {
        margin-bottom: 14px;
        font-size: 13px;
    }

    .avatar {
        width: 32px;
        height: 32px;
        display: block;
        cursor: pointer;
    }
</style>