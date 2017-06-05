<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\NavLeft */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '左侧菜单', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nav-left-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定删除菜单吗，如果删除的是主菜单，则它的子菜单也会被删除?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            ['attribute' => 'parentId',
                 'value' => $model->parentName,
            ],
            'serial',
            'area',
        ],
    ]) ?>

</div>
