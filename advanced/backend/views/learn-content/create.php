<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LearnContent */

$this->title = '创建学习文章';
$this->params['breadcrumbs'][] = ['label' => '学习文章', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="learn-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
