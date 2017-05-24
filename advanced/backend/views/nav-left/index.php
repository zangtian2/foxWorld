<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\NavLeft;
/* @var $this yii\web\View */
/* @var $searchModel common\models\NavLeftSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '左侧菜单';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nav-left-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建主菜单', ['root'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('创建子菜单', ['child'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['style'=>'text-align:center'],
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
             ['attribute' => 'id',
                'contentOptions' => ['width' => '30px'],
                 'headerOptions'=>['style'=>'text-align:center'],
            ],
             ['attribute' => 'name',
                'contentOptions' => function($model) {
                    return ($model->parentId == 0) ? ['class' => 'bg-primary','width' => '550px'] : ['width' => '550px'];
                },
                 'headerOptions'=>['style'=>'text-align:center'],
            ],
             ['attribute' => 'parentId',
                 'value' => 'parentName.name',
                 'filter' =>NavLeft::find()
                        ->select(["name", 'id'])
                        ->where(['parentId'=>0])
                        ->indexBy('id')->column(),
                'contentOptions' => ['width' => '250px'],
                 'headerOptions'=>['style'=>'text-align:center'],
            ],
             ['attribute' => 'serial',
                'contentOptions' => ['width' => '50px'],
                 'headerOptions'=>['style'=>'text-align:center'],
            ],
             ['attribute' => 'area',
                'contentOptions' => ['width' => '100px'],
                 'headerOptions'=>['style'=>'text-align:center'],
            ],
            ['class' => 'yii\grid\ActionColumn'],
            
        ],
    ]); ?>
</div>
