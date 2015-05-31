<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DepartmentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departments-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

	<?= $form->field($model, 'department_id') ?>

	<?= $form->field($model, 'branches_branch_id') ?>

	<?= $form->field($model, 'department_name') ?>

	<?= $form->field($model, 'companies_company_id') ?>

	<?= $form->field($model, 'department_created_date') ?>

	<?= $form->field($model, 'department_status')->dropDownList(['active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

	<div class="form-group">
		<?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>