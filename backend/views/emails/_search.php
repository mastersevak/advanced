<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emails-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

	<?= $form->field($model, 'id') ?>

	<?= $form->field($model, 'recever_name') ?>

	<?= $form->field($model, 'recever_email') ?>

	<?= $form->field($model, 'subject') ?>

	<?= $form->field($model, 'content') ?>

	<?php // echo $form->field($model, 'attachment') ?>

	<div class="form-group">
		<?= Html::submitButton(Yii::t('email', 'Search'), ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton(Yii::t('email', 'Reset'), ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
