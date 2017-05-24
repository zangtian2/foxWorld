<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\NavLeft;
/* @var $this yii\web\View */
/* @var $model common\models\LearnContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="learn-content-form">

    <?php $form = ActiveForm::begin(); ?>      

    
    <?= $form->field($model, 'menu_id')-> dropDownList(NavLeft::find()->select(['name', 'id'])                        
                ->where(['!=', 'parentId', 0])
                        ->indexBy('id')
                        ->column(), ['prompt' => '对应菜单']) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 10]) ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
