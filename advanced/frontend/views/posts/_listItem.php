<?php 
use yii\helpers\Html;

?>


<li class="have-img">
    <a class="wrap-img" href="/p/8573d993585d" target="_blank">
      <img class="img-blur-done" src="//upload-images.jianshu.io/upload_images/3459828-9b8e590c1c5cef7b.jpg?imageMogr2/auto-orient/strip|imageView2/1/w/375/h/300" alt="120">
    </a>
    <div class="content" style="margin-right: auto;">
    <div class="author">
      <a class="avatar" target="_blank" href="/u/7fc17f3b3a61">
        <img src="images/avatar/default.png" alt="96">
</a>      <div class="name">
        <a class="blue-link" target="_blank" href="/u/7fc17f3b3a61"><?= Html::encode($model->author->email);?></a>
        <span class="time" data-shared-at="2017-05-25T09:25:15+08:00"><?= date('Y-m-d H:i:s',$model->create_time);?></span>
      </div>
    </div>
    <a class="title" target="_blank" href="<?=$model->url?>"><?=Html::encode($model->title)?></a>
    <p class="abstract">
      <?=Html::encode($model->beginning);?>
    </p>
    <div class="meta">
        <?= implode("", $model->tagLinks)?>
      <a target="_blank" href="/p/8573d993585d">
        <i class="iconfont ion-ios-eye"></i> 1381
</a>        <a target="_blank" href="/p/8573d993585d#comments">
          <i class="iconfont ion-android-textsms"></i> 59
</a>      <span><i class="iconfont ion-heart"></i> 71</span>
    </div>
  </div>
</li>

 


    
