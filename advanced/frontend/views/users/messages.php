<?php
/* @var $this yii\web\View */

use yii\widgets\ListView;
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);

AppAsset::addCss($this, "@web" . "/css/about.css");
AppAsset::addCss($this, "@web" . "/css/demo.css");
AppAsset::addCss($this, "@web" . "/css/style7.css");

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
    <div class="showback" >        


        <div class="row">
            <div class="col-md-3 " style="padding:0px">
                <div style="border-bottom:1px solid #ddd;height: 46px;font-size: 16px;padding: 10px 20px;">
                    当前用户
                </div>
                <div style="padding:15px;">
                    <ul>
                        <li style="height: 50px;background-color: cadetblue;margin :3px;"></li>
                        <li style="height: 50px;background-color: yellowgreen;margin :3px"></li>
                        <li style="height: 50px;background-color: scrollbar;margin :3px"></li>
                        <li style="height: 50px;background-color: hotpink;margin :3px"></li>
                        <li style="height: 50px;background-color: orchid;margin :3px"></li>
                        <li style="height: 50px;background-color: cadetblue;margin :3px"></li>
                        <li style="height: 50px;background-color: yellowgreen;margin :3px"></li>
                        <li style="height: 50px;background-color: scrollbar;margin :3px"></li>
                        <li style="height: 50px;background-color: hotpink;margin :3px"></li>
                        <li style="height: 50px;background-color: orchid;margin :3px"></li>                        
                    </ul>
                </div>
            </div>

            <div class="col-md-9" style="min-height:768px;border-left: 1px solid #ddd">

                <div class="main layui-clear">
                    <div class="wrap">
                        <div class="" style="padding:20px">
                            <br>
                            <div >
                                <ul>
                                    <li style="background-color: #aaa;height:170px;margin :17px"></li>
                                    <li style="background-color: #aaa;height:170px;margin: 17px"></li>
                                    <li style="background-color: #aaa;height:170px;margin:17px"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>         

    </div>
</div>



