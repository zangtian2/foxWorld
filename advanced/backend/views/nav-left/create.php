<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\NavLeft */

$this->title = 'Create Nav Left';
$this->params['breadcrumbs'][] = ['label' => 'Nav Lefts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nav-left-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
