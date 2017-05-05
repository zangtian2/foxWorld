<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LearnContent */

$this->title = 'Create Learn Content';
$this->params['breadcrumbs'][] = ['label' => 'Learn Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="learn-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
