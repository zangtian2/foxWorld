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
        width: 90%;
        margin: 0 auto;
        margin-left: auto!important;
        margin-right: auto!important;
    }    
</style>

<div class="fly-panel detail-box" >    
    <div class="showback" >        


     <div style="min-height:768px;margin-top: 25px">
         <h3 style="font-weight:bold">详细资料</h3>
         <hr>
         <ul>
                                    <li style="background-color: #aaa;height:170px;margin :17px"></li>
                                    <li style="background-color: #aaa;height:170px;margin: 17px"></li>
                                    <li style="background-color: #aaa;height:170px;margin:17px"></li>
                                </ul>
     </div>

    </div>
</div>



