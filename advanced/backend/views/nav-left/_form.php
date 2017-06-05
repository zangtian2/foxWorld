<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\NavLeft;

/* @var $this yii\web\View */
/* @var $model common\models\NavLeft */
/* @var $form yii\widgets\ActiveForm */
$actionID = Yii::$app->controller->action->id;
?>

<div class="nav-left-form">

    <?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


    <?php
    if ($actionID == 'root' || $model->parentId==0 && $actionID!='child') 
        {
        echo $form->field($model, 'area')->textInput(['maxlength' => true]);
        echo $form->field($model, 'parentId')->hiddenInput(['value'=>0])->label(false);
        } 
    else 
        {
        echo $form->field($model, 'parentId')->
                dropDownList(NavLeft::find()->select(['name', 'id'])
                        ->where(['parentId' => 0])
                        ->indexBy('id')
                        ->column(), ['prompt' => '请选择父级菜单']);
        }
    ?>


<?= $form->field($model, 'serial')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? '创建' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
