<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

	<?= $form->field($model, 'customer_id') ?>

	<?= $form->field($model, 'customer_name') ?>

	<?= $form->field($model, 'zip_code') ?>

	<?= $form->field($model, 'city') ?>

	<?= $form->field($model, 'province') ?>

	<div class="form-group">
		<?= Html::submitButton(Yii::t('customers', 'Search'), ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton(Yii::t('customers', 'Reset'), ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
