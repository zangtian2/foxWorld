<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NavLeftSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nav Lefts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nav-left-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nav Left', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'parentId',
            'serial',
            'area',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
