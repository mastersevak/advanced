<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Emails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="emails-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'id')->textInput() ?>

	<?= $form->field($model, 'recever_name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'recever_email')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'attachment')->textInput(['maxlength' => true]) ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? Yii::t('email', 'Create') : Yii::t('email', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
