<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\settings\models\CompaniesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="companies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'company_naem') ?>

    <?= $form->field($model, 'company_email') ?>

    <?= $form->field($model, 'company_addres') ?>

    <?= $form->field($model, 'company_creates_date') ?>

    <?php // echo $form->field($model, 'company_status') ?>

    <?php // echo $form->field($model, 'company_start_date') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('companies', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('companies', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
