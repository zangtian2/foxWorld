<?php
/* @var $this yii\web\View */

use frontend\assets\AppAsset;

AppAsset::register($this);
AppAsset::addCss($this, "@web" . "/plugin/piccycle/css/style.css");
$this->registerJs(
        'var $ = layui.jquery;'
);
AppAsset::addScript($this, "@web" . "/plugin/piccycle/js/main.js");
?>

<div style="height: 100%">
    <section class="cd-hero" style="position: absolute;top: 0;bottom:40px;right: 0;left: 0">
        <ul class="cd-hero-slider" style="height: 100%;">

            <li class="selected">
                <div class="cd-half-width" style="padding-top: 180px">
                    <h2 style="font-size: 48px;color: #db940f;margin-bottom: 20px">欢迎来到外汇领域!</h2>
                    <br>
                    <form class="form-horizontal" style="padding: 0 30%">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="手机号">
                        <br>
                        <input type="password" class="form-control" id="inputPassword3" placeholder="密码">
                        <br>
                        <a href="#0" class="cd-btn">登录</a>
                        <a href="http://www.htmleaf.com/jQuery/Slideshow-Scroller/201504221718.html" class="cd-btn secondary">忘记密码</a>

                    </form>



                </div> <!-- .cd-half-width -->

                <div class="cd-half-width cd-img-container">
                    <img src="plugin/piccycle/assets/tech-1.jpg" alt="tech 1">
                </div> <!-- .cd-half-width.cd-img-container -->
            </li>

            <li>
                <div class="cd-half-width cd-img-container">
                    <img src="plugin/piccycle/assets/tech-2.jpg" alt="tech 2">
                </div> <!-- .cd-half-width.cd-img-container -->

                <div class="cd-half-width">
                    <h2>Slide title here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                    <a href="#0" class="cd-btn">Start</a>
                    <a href="http://www.htmleaf.com/jQuery/Slideshow-Scroller/201504221718.html" class="cd-btn secondary">Learn More</a>
                </div> <!-- .cd-half-width -->

            </li>


        </ul> <!-- .cd-hero-slider -->

        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>

                <ul>
                    <li class="selected"><a href="#0">登录</a></li>
                    <li><a href="#0">注册</a></li>
                </ul>
            </nav> 
        </div> <!-- .cd-slider-nav -->

    </section> <!-- .cd-hero -->

    <div style="height: 35px;position: absolute;bottom: 0px;background-color: #2F4056;width: 100%;">
        <div style="height: 35px;
             padding: 5px;">

            <p style="
               font-size: 14px;
               text-align: center;
               color: rgb(219, 148, 15);
               font-weight: bold;
               letter-spacing: 1px;
               ">我们致力于外汇行业的未来与发展</p>
        </div>
    </div>

</div>

