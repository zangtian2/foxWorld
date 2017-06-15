<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use frontend\assets\AppAsset;

//AppAsset::register($this);
//AppAsset::addCss($this, "@web" . "/css/zidingyi/timeLine.css");
//$this->registerJs(
//        'var $ = layui.jquery;'
//);
//AppAsset::addScript($this, "@web" . "/js/timeLine.js");
//
AppAsset::register($this);
$this->registerJs(
        'var $ = layui.jquery;'
);
AppAsset::addScript($this, "@web" . "/js/communityCenter.js");
?>
<style>
    .detail-box {
        margin: 15px;
        border: 1px solid rgb(192, 200, 212);
        box-shadow: 0px 3px 5px rgb(170, 178, 189);
        margin-top: 13px;
        padding: 0;  
    }    

    .showback {
        margin: 15px 5px;margin-top: 20px;padding-bottom: 30px;        
    }    

    .showback  {
/*        width: 90%;*/
        margin: 0 auto;
        margin-left: auto!important;
        margin-right: auto!important;
    }
    .navin {
        /*line-height: 55px !important;*/
    }
    .navout .layui-this{
        font-weight: bold;
        color: black;
        font-size: 16px;
        transition: ease 0.3s;
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
        top:57px !important;
        height: 3px !important;
    }

    .navout {
        border-bottom: 1px solid rgb(238, 238, 238);
        background-color: rgb(255, 255, 255);
        /*border-radius: 0px;margin-bottom: 0px;*/
        padding:0px;
        margin-bottom: 0px;  -webkit-flex: 1;
        flex: 1;
        text-align: center;


    }


    .datePick {
        padding: 0 20px;
        display: -webkit-flex;
        display:         flex;
        -webkit-align-items: center;
        align-items: center;
        -webkit-justify-content: center;
        justify-content: center;
    }
</style>
<div class="fly-panel detail-box" style="min-width:768px;">    
    <div class="showback " >        


        <br>

        <div class="row">
            <div class="col-lg-9">
                 <div style="
                        margin: 20px 20px 20px;
                        height: 100px;
                        background: rgb(36, 135, 222) none repeat scroll 0% 0%;"></div>

        <div id="tab">
            <div class="tab_title datePick">
                <a class="vleft" href="#" style="flex: initial;min-width: 30px;">
                    <i  class="ionfont ion-android-arrow-dropleft-circle" style="font-size: 30px; color: #1E9FFF;vertical-align: middle;">
                    </i>
                </a>     
                <div class="u">
                    <ul class="scrol layui-nav navout"  lay-filter="tttt" >
                        <?php
                        $midtime2 = strtotime('2017-06-05');
                        $begin2 = date("Y-m-d", strtotime("-10 day", $midtime2));
                        $end2 = date("Y-m-d", strtotime("+20 day", $midtime2));
                        $begintime2 = strtotime($begin2);
                        $endtime2 = strtotime($end2);
                        for ($start = $begintime2; $start <= $endtime2; $start += 24 * 3600) {
                            if (date("Y-m-d", $start) == date('Y-m-d', $midtime2)) {
                                echo '<li class="layui-nav-item layui-this navin">' . date("m-d", $start) . '</li>';
                            } else {
                                echo '<li class="layui-nav-item navin">' . date("m-d", $start) . '</li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
                <a class="vright" href="#" style="flex: initial;
                   min-width: 30px;">
                    <i  class="ionfont ion-android-arrow-dropright-circle" style="font-size: 30px; color: #1E9FFF;vertical-align: middle;"></i></a>
            </div>
        </div>

    <div class="" style="padding: 0 60px">
        <div class="tab-content">
            <div >
                <ul>
                    <li style="
                        margin: 20px 0px ;
                        height: 100px;
                            background: orange none repeat scroll 0% 0%;margin-left: 0px;"></li>
                    <li style="
                        margin: 20px 0px ;
                        height: 100px;
                            background: firebrick none repeat scroll 0% 0%;margin-left: 0px;"></li>
                    <li style="
                        margin: 20px 0px ;
                        height: 100px;
                            background: thistle none repeat scroll 0% 0%;margin-left: 0px;"></li>
                    <li style="
                        margin: 20px 0px ;
                        height: 100px;
                            background: skyblue none repeat scroll 0% 0%;margin-left: 0px;"></li>
                    
                </ul>
            </div>
        </div>
    </div>
        
        
        </div>
            <div class="col-lg-3">
            <div style="
                        margin: 20px 20px 20px;
                        height: 300px;
                        background: green none repeat scroll 0% 0%;margin-left: 0px;"></div>
                        
                        </div>
        </div>
        
    <style type="text/css">

        #tab{ margin:20px auto; overflow:hidden;}
        #tab .tab_title{ clear:both; overflow:hidden; position:relative;height: 100px;}
        #tab .tab_title .u{ width:100%; overflow:hidden; position:relative;padding: 16px 0;height: 100%}
        #tab .tab_title ul{  position:absolute; float:left; width:-moz-max-content;}
        #tab .tab_title li{ float:left; width:90px; cursor:pointer;}

    </style>
    
        </div>