<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Companies;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Branches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="branches-form">

	<?php $form = ActiveForm::begin(['id'=>$model->formName()]); ?>
	<?
	// = $form->field($model, 'companies_company_id')->dropDownList(
	// 		ArrayHelper::map(Companies::find()->all(), 'company_id', 'company_naem'),
	// 		['prompt'=> 'Select company']
	// 	);
	?>

	<?// Normal select with ActiveForm & model ?>
	<?=$form->field($model, 'companies_company_id')->widget(Select2::classname(), [
		'data' => ArrayHelper::map(Companies::find()->all(), 'company_id', 'company_naem'),
		'language' => 'en',
		'options' => ['placeholder' => 'Select a state ...'],
		'pluginOptions' => [
			'allowClear' => true
		],
	]); ?>

	<?= $form->field($model, 'branch_name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'branch_address')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'branch_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
<?php
$script = <<<JS

$('form#{$model->formName()}').on('beforeSubmit', function(e){
	var \$form = $(this);

	$.post(
		\$form.attr("action"), // serialize yii2 form
		\$form.serialize()
	)
	.done(function(result){

		if(result == 1){
			$(\$form).trigger('reset');

			$(document).find('#modal').modal('hide');

			$.pjax.reload({container: '#branchesGrid'})
		}
		else{
			$('#message').html(result.message);
		}
	})
	.fail(function(){
		console.log("server error");
	});

	return false;
});
JS;
$this->registerJs($script);
?>
