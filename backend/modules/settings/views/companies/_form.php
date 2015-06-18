<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

// dosamigos\formhelpers\DatePicker
// use yii\jui\DatePicker;
// use yii\jui\DatePicker;
// use yii\amigos\dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Companies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="companies-form">

	<?php $form = ActiveForm::begin( ['enableAjaxValidation' => true] ); ?>

	<?= $form->field($model, 'company_naem', [
					'options'	=>	[
						'style'=>'float:left'
						]
					]
				)
		->textInput(['maxlength' => true, 'style' => 'width:222px']) ?>

	<?= $form->field($model, 'company_email', [
					'options'	=>	['style'=>'float:left; margin-left: 20px']
					]
				)
		->textInput(['maxlength' => true, 'style' => 'width:222px']) ?>

	<br clear="both">

	<?= $form->field($model, 'company_addres', [
					'options'	=>	['style'=>'float:left']
					]
				)
		->textInput(['maxlength' => true, 'style' => 'width:222px']) ?>

	<?//= $form->field($model, 'company_start_date')->widget(
		// // https://github.com/yiisoft/yii2-jui
		// yii\jui\DatePicker::className(),[
		// 	'clientOptions' => [
		// 		'defaultDate' => date('Y-m-d')
		// 	]
		// ])
	?>

	<? // = $form->field($model, 'company_start_date')->textInput(['maxlength' => true]) ?>
	<?=$form->field($model, 'company_start_date', [
					'options'	=>	['style'=>'float:left; margin-left: 20px']
				]
			)
		->widget(
			DatePicker::className(), [
				// 'options' => ['style'=>'width: 222px'],
				// inline too, not bad
				 // 'inline' => true,
				 // modify template for custom rendering
				// 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
				'containerOptions' => ['style'=>'width: 222px'],
				'clientOptions' => [
					'autoclose' => true,
					'format' => 'dd-M-yyyy',
					'style'	=>	'width:222px',
				]
			]
		);
	?>

	<br clear="both">

	<?= $form->field($model, 'company_status')->dropDownList([
		'active'   => 'Active',
		'inactive' => 'Inactive'
	],[
		'prompt' => 'status',
		'style'	 => 'width: 222px'
	])?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
