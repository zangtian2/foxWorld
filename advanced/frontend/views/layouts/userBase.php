<?php

use yii\helpers\Url;
use frontend\assets\AppAsset;
use common\models\NavLeft;

AppAsset::register($this);
$this->registerJs(
        'var $ = layui.jquery;'
);
AppAsset::addScript($this, "@web" . "/js/userCenter.js");

$nav_left_children = NavLeft::getCnames('user');
$nav_left_root = NavLeft::getRnames('user');
$nav_left_title = '个人管理中心';
$nav_left_current = isset($this->params['nav_left_current']) ? $this->params['nav_left_current'] : null;
?>


<div  class="feng-nav" >
    <div class="feng-nav-left-top">
        <header class="feng-nav-header">
            <h2 class="feng-nav-title"><?= $nav_left_title ?></h2>
        </header>
        <div class="feng-nav-category">
            <ul class="my-nav-side">
                <?php foreach ($nav_left_root as $key => $value): ?>
                    <?php
                    switch ($key) {
                        case 0:
                            echo '<li class="feng-nav-item u-category-windows">';
                            break;
                        case 1:
                            echo '<li class="feng-nav-item u-category-menu">';
                            break;
                        case 2:
                            echo '<li class="feng-nav-item u-category-native-ui">';
                            break;
                        case 3:
                            echo '<li class="feng-nav-item u-category-communication">';
                            break;
                        case 4:
                            echo '<li class="feng-nav-item u-category-system">';
                            break;
                        case 5:
                            echo '<li class="feng-nav-item u-category-windows">';
                            break;
                        default:
                            echo '<li class="feng-nav-item u-category-media">';
                            break;
                    }
                    ?>


                    <a href="javascript:;" class="feng-drop-a">
                        <i class="icon ion-bookmark"></i>
                        <span class="nav-text"><?= $value['name'] ?><i class="layui-icon">&#xe602;</i>  </span>
                    </a> 
                    <ul class="drop-list" style="display:block">

                        <?php
                        foreach ($nav_left_children as $k => $v) :
                            if ($value['id'] == $v['parentId']):
                                switch ($v['id']) {
                                    case 47:
                                        $url = Url::toRoute(Yii::$app->controller->id . '/messages');
                                        break;
                                    case 48:
                                        $url = Url::toRoute(Yii::$app->controller->id . '/comments');
                                        break;
                                    case 49:
                                        $url = Url::toRoute(Yii::$app->controller->id . '/follow');
                                        break;
                                    case 56:
                                        $url = Url::toRoute(Yii::$app->controller->id . '/articles');
                                        break;
                                    case 57:
                                        $url = Url::toRoute(Yii::$app->controller->id . '/collections');
                                        break;                

                                    case 50:
                                        $url = Url::toRoute(Yii::$app->controller->id . '/person-basic');
                                        break;
                                    case 51:
                                        $url = Url::toRoute(Yii::$app->controller->id . '/person-details');
                                        break;      
                                    case 52:
                                        $url = Url::toRoute(Yii::$app->controller->id . '/person-manage');
                                        break;
                               
                                    default:
                                        $url = Url::toRoute(Yii::$app->controller->id . '/index');
                                        break;
                                }
                                ?>
                                <li> <button  class="feng-nav-button <?= $v['id'] == $nav_left_current ? 'is-selected' : null ?>"
                                              onclick="dataReload('<?= $url ?>',<?= $v['id'] ?>);"><?= $v['name'] ?></button></li>

                                <?php
                            endif;
                        endforeach;
                        ?> 

                    </ul>
                <?php endforeach; ?> 
            </ul>
        </div>
    </div>

    <div class="feng-nav-left-bottom ">
        <div style="padding: 0px 1.5em;
             margin-left: 5px;">
            <button id="minus" class="self-nav-footer-button" onclick="hideLeftNav()">
                <i class="icon ion-ios-minus"></i>
            </button>

            <button class="self-nav-footer-button">
                <i  class="icon ion-ios-help"></i>
            </button>

            <button class="self-nav-footer-button" onclick="btnSearch()">
                <i  class="icon ion-android-search"></i>
            </button>

            <button  class="self-nav-footer-button" onclick="btnSetScreen()">
                <i class="icon ion-android-expand"></i>
            </button>
            <!--            <button  id="refresh" name="refresh" class="self-nav-footer-button">
                            <i class="icon ion-refresh"></i>
                        </button>-->
            <button style="font-size: 14px;
                    padding: 5px 0px;
                    /*font-weight: bold;*/
                    color: cadetblue;"  id="dataEcon" class="self-nav-footer-button" onclick="dataEcon('<?= Url::toRoute("learn/test") ?>')">
                财经日历
            </button>

        </div>
    </div>

</div>