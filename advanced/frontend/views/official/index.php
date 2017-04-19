<?php
/* @var $this yii\web\View */

use frontend\assets\AppAsset;

AppAsset::register($this);
AppAsset::addCss($this, "@web" . "/plugin/piccycle/css/reset.css");
AppAsset::addCss($this, "@web" . "/plugin/piccycle/css/style.css");
$this->registerJs(
        'var $ = layui.jquery;'
);
AppAsset::addScript($this, "@web" . "/plugin/piccycle/js/main.js");
?>

<div style="margin-top: 60px">
    <section class="cd-hero">
        <ul class="cd-hero-slider">
            <li class="selected">
                <div class="cd-full-width">

                    <h1 style="font-size: 63px;color: wheat;margin-bottom: 20px">欢迎来到外汇领域!</h1>
                            <br>
                            <br>
                            
                            <p class="lead">我们致力于外汇行业的未来与发展.</p>
                            <br>
                            <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">开始入门</a></p>
                </div> <!-- .cd-full-width -->
            </li>

            <li>
                <div class="cd-half-width">
                    <h2>Slide title here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                    <a href="#0" class="cd-btn">Start</a>
                    <a href="http://www.htmleaf.com/jQuery/Slideshow-Scroller/201504221718.html" class="cd-btn secondary">Learn More</a>
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

            <li class="cd-bg-video">
                <div class="cd-full-width">
                    <h2>Slide title here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
                    <a href="http://www.htmleaf.com/jQuery/Slideshow-Scroller/201504221718.html" class="cd-btn">Learn more</a>
                </div> <!-- .cd-full-width -->

                <div class="cd-bg-video-wrapper" data-video="plugin/piccycle/assets/video/video">
                    <!-- video element will be loaded using jQuery -->
                </div> <!-- .cd-bg-video-wrapper -->
            </li>

            <li>
                <div class="cd-full-width">
                    <h2>Slide title here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
                    <a href="#0" class="cd-btn">Start</a>
                    <a href="http://www.htmleaf.com/jQuery/Slideshow-Scroller/201504221718.html" class="cd-btn secondary">Learn More</a>
                </div> <!-- .cd-full-width -->
            </li>
        </ul> <!-- .cd-hero-slider -->

        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>

                <ul>
                    <li class="selected"><a href="#0">阅览</a></li>
                    <li><a href="#0">排行</a></li>
                    <li><a href="#0">文章</a></li>
                    <li><a href="#0">书籍</a></li>
                    <li><a href="#0">公告</a></li>
                </ul>
            </nav> 
        </div> <!-- .cd-slider-nav -->
    </section> <!-- .cd-hero -->
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
