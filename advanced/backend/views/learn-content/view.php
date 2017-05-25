<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\LearnContent */

$this->title = $model->menuName;
$this->params['breadcrumbs'][] = ['label' => '学习文章', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="learn-content-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定要删除文章吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            ['attribute' => 'menu_id',
              'value'=>$model->menuName,
            ],
            'content:ntext',

            ['attribute' => 'create_time',
                'value' => date('Y-m-d H:i:s',$model->update_time),
            ],
            ['attribute' => 'update_time',
                'value' => date('Y-m-d H:i:s',$model->update_time),
            ],
        ],
         'template' => '<tr><th style="width:120px;">{label}</th><td>{value}</td></tr>',
          'options' => ['class'=>'table table-striped table-bordered detail-view'],
    ]) ?>

</div>
