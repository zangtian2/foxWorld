<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LearnContent */

$this->title = '修改学习文章: ' . $model->menuName;
$this->params['breadcrumbs'][] = ['label' => '学习文章', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->menuName, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="learn-content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
