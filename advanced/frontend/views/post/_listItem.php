<?php 
use yii\helpers\Html;

?>

      <ul class="fly-list">
        <li class="fly-list-li">
          <a href="user/home.html" class="fly-list-avatar">
            <img src="images/avatar/default.png" alt="">
          </a>
          <h2 class="fly-tip">
            <a href="<?=$model->url?>"><?=Html::encode($model->title)?></a>
          </h2>
          <p>
            <span class="glyphicon glyphicon-user" aria-hidden='true'></span><em><?= Html::encode($model->author->nickname);?></em>
            <span class="glyphicon glyphicon-time" aria-hidden='true'></span><em><?= date('Y-m-d H:i:s',$model->create_time);?></em>
            <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
                <?= implode(",", $model->tagLinks)?>
            <span class="fly-list-hint"> 
                <?= Html::a("评论 ({$model->commentCount})",$model->url.'#comments')?> | 最后修改于 <?= date('Y-m-d H:m:s',$model->update_time);?>
              <i class="iconfont" title="回答">&#xe60c;</i> 8
              <i class="iconfont" title="人气">&#xe60b;</i> 106
            </span>
          </p>
        </li>
      </ul>



    