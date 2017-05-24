<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LearnContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '学习文章';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="learn-content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建学习文章', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
             [
                'attribute' => 'id',
                'contentOptions' => ['width' => '30px','style'=>'text-align:center'],
                'headerOptions'=>['style'=>'text-align:center'],
            ],
            [
                'attribute' => 'menu_id',
                'label' => '对应菜单',
                'value' => 'menuName',
                'contentOptions' => ['width' => '100px','style'=>'text-align:center'],
                'headerOptions'=>['style'=>'text-align:center'],
            ],  
            ['attribute' => 'content',
                'value' => 'beginning',
            ],
            [
                'attribute' => 'create_time',
                'format' => ['date', 'php:Y-m-d H:i:s'],
                'contentOptions' => ['width' => '120px','style'=>'text-align:center'],
                'headerOptions'=>['style'=>'text-align:center'],
            ],
            [
                'attribute' => 'create_time',
                'format' => ['date', 'php:Y-m-d H:i:s'],
                'contentOptions' => ['width' => '120px','style'=>'text-align:center'],
                'headerOptions'=>['style'=>'text-align:center'],                
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
