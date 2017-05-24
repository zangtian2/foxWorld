<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\NavLeft */

$this->title = '修改菜单: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '左侧菜单', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="nav-left-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=$this->render('_form', [
        'model' => $model
    ])?>

</div>
