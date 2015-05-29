<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Companies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="companies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_naem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_addres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => 'status']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
