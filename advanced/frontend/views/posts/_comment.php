<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php foreach ($comments as $comment):?>
<li class="list-group-item">
<div class="comment">
    <div class="row">
        <div class="col-md-12">
            <div class="comment_detail">
                <p class="">
                    <span class="glyphicon glyphicon-user"  aria-hidden="true"></span>
                    <em><?=Html::encode($comment->user->username);?></em>
                    <br>
                    <p class="" style="color:#777777;font-style:italic;">
                    <?=nl2br($comment->content);?>
                    </p>
                    <span class="icon ion-ios-time"  aria-hidden="true"></span>
                    <em><?= date('Y-m-d H:i:s',$comment->create_time);?></em>
                    <hr>
                </p>
            </div>
        </div>
    </div>
</div>
</li>
<?php endforeach; ?>

