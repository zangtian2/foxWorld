<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\NavLeft */
if(Yii::$app->controller->action->id=='root')
{
    $this->title = '创建主菜单';
}else{
    $this->title = '创建子菜单';
}

$this->params['breadcrumbs'][] = ['label' => '左侧菜单', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nav-left-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
