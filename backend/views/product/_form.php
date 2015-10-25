<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'id_category')->textInput() ?>

	<?= $form->field($model, 'id_brand')->textInput() ?>

	<?= $form->field($model, 'viewed')->textInput() ?>

	<?= $form->field($model, 'article')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'min_price')->textInput() ?>

	<?= $form->field($model, 'price_old')->textInput() ?>

	<?= $form->field($model, 'price')->textInput() ?>

	<?= $form->field($model, 'status')->textInput() ?>

	<?= $form->field($model, 'has_photo')->textInput() ?>

	<?= $form->field($model, 'delivery')->textInput() ?>

	<?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'created')->textInput() ?>

	<?= $form->field($model, 'id_creator')->textInput() ?>

	<?= $form->field($model, 'changed')->textInput() ?>

	<?= $form->field($model, 'id_changer')->textInput() ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? Yii::t('product', 'Create') : Yii::t('product', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
