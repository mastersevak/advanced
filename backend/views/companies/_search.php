<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CompaniesSearch */
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

	<?= $form->field($model, 'company_status')->dropDownList(['active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

	<div class="form-group">
		<?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
