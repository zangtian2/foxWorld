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
            <?php 
            
            for ($x=0; $x<=11; $x++) {?>
            <div class="col-lg-4" style="padding:40px;padding-bottom: 0px">
                            <a href="#" class="ui card">
                                <div class="content">
                                  <div class="secheader">Cute Dog</div>
                                  <div class="meta">
                                    <span class="category">Animals</span>
                                  </div>
                                  <div class="description">
                                    <img src="http://www.semantic-ui.cn/examples/assets/images/wireframe/paragraph.png" class="ui wireframe image">
                                  </div>
                                </div>
                                <div class="extra content">
                                  <div class="right floated author">
                                    <img src="images/avatar/7.jpg" class="ui avatar image"> Username
                                  </div>
                                </div>
                              </a>
            </div>
            <?php } ?>

        </div>
    </div>
</div>


<style>
.ui.four.cards    .card {
    width: calc( 25% - 1.5em );
    margin-left: 0.75em;
    margin-right: 0.75em;
}

.ui.cards a.card, .ui.link.cards .card, a.ui.card, .ui.link.card {
    -webkit-transform: none;
    transform: none;
}
.ui.cards    .card {
    font-size: 1em;
}
.ui.cards    .card {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin: 0.875em 0.5em;
    float: none;
}
.ui.cards    .card, .ui.card {
    max-width: 100%;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 290px;
    min-height: 0px;
    background: #FFFFFF;
    padding: 0em;
    border: none;
    border-radius: 0.28571429rem;
    box-shadow: 0px 1px 3px 0px #D4D4D5, 0px 0px 0px 1px #D4D4D5;
    -webkit-transition: box-shadow 0.1s ease, -webkit-transform 0.1s ease;
    transition: box-shadow 0.1s ease, -webkit-transform 0.1s ease;
    transition: box-shadow 0.1s ease, transform 0.1s ease;
    transition: box-shadow 0.1s ease, transform 0.1s ease, -webkit-transform 0.1s ease;
    z-index: '';
}
.ui.card {
    margin: 1em 0em;
}

.ui.cards    .card    .content:after, .ui.card    .content:after {
    display: block;
    content: ' ';
    height: 0px;
    clear: both;
    overflow: hidden;
    visibility: hidden;
}
a {
    color: #4183C4;
    text-decoration: none !important;
}
a {
    background: transparent;
}

.ui.cards    .card    .content, .ui.card    .content {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, 0.1);
    background: none;
    margin: 0em;
    padding: 1em 1em;
    box-shadow: none;
    font-size: 1em;
    border-radius: 0em;
}
.ui.cards    .card    :first-child, .ui.card    :first-child {
    border-radius: 0.28571429rem 0.28571429rem 0em 0em !important;
    border-top: none !important;
}

.ui.cards    .card    .content    .secheader:not(.ui), .ui.card    .content    .secheader:not(.ui) {
    font-weight: bold;
    font-size: 1.28571429em;
    margin-top: -0.21425em;
    line-height: 1.2857em;
}
.ui.cards    .card    .content    .secheader, .ui.card    .content    .secheader {
    display: block;
    margin: '';
    font-family: 'Lato', 'Helvetica Neue', Arial, Helvetica, sans-serif;
    color: rgba(0, 0, 0, 0.85);
}
.ui.cards    .card .meta, .ui.card .meta {
    font-size: 1em;
    color: rgba(0, 0, 0, 0.4);
}
.ui.cards    .card    .content    .meta + .description, .ui.cards    .card    .content    .secheader + .description, .ui.card    .content    .meta + .description, .ui.card    .content    .secheader + .description {
    margin-top: 0.5em;
}
.ui.cards    .card    .content    .description, .ui.card    .content    .description {
    clear: both;
    color: rgba(0, 0, 0, 0.68);
}
.ui.cards    .card .meta :last-child, .ui.card .meta :last-child {
    margin-right: 0em;
}
.ui.cards    .card .content img, .ui.card .content img {
    display: inline-block;
    vertical-align: middle;
    width: '';
}
img.ui.image {
    display: block;
}
.ui.image {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    max-width: 100%;
    background-color: transparent;
}
img {
    border: 0;
}

.ui.cards    .card    .extra, .ui.card    .extra {
    max-width: 100%;
    min-height: 0em !important;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.05) !important;
    position: static;
    background: none;
    width: auto;
    margin: 0em 0em;
    padding: 0.75em 1em;
    top: 0em;
    left: 0em;
    color: rgba(0, 0, 0, 0.4);
    box-shadow: none;
    -webkit-transition: color 0.1s ease;
    transition: color 0.1s ease;
}

.ui.cards    .card [class*="right floated"], .ui.card [class*="right floated"] {
    float: right;
}

.ui.cards a.card:hover, .ui.link.cards .card:hover, a.ui.card:hover, .ui.link.card:hover {
    cursor: pointer;
    z-index: 5;
    background: #FFFFFF;
    border: none;
    box-shadow: 0px 1px 3px 0px #BCBDBD, 0px 0px 0px 1px #D4D4D5;
    -webkit-transform: translateY(-3px);
    transform: translateY(-3px);
}

.ui.cards   .card img.avatar, .ui.cards   .card .avatar img, .ui.card img.avatar, .ui.card .avatar img {
    width: 2em;
    height: 2em;
    border-radius: 500rem !important;
}
 </style>
