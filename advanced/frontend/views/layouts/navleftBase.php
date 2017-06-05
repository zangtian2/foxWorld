<?php

use yii\helpers\Url;


$nav_left_children = $this->params['nav_left_children'];
$nav_left_root = $this->params['nav_left_root'];
$nav_left_title = $this->params['nav_left_title'];
?>


<div  class="feng-nav" >
    <div class="feng-nav-left-top">
        <header class="feng-nav-header">
            <h2 class="feng-nav-title"><?=$nav_left_title?></h2>
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
                                ?>                                           
                                <?php if ($v['serial'] == 0 && $value['id'] == 1): ?> 
                                    <li>      <button  class="feng-nav-button is-selected" onclick="dataReload('<?=Url::toRoute("learn/article") ?>',<?=$v['id']?>);"><?= $v['name'] ?></button></li>
                                    <?php else: ?>
                                    <li>      <button  class="feng-nav-button" onclick="dataReload('<?= Url::toRoute("learn/article") ?>',<?=$v['id']?>);"><?= $v['name'] ?></button></li>
                                <?php endif; ?>

                            <?php endif;
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