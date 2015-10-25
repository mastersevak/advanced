<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

	<?= $form->field($model, 'id') ?>

	<?= $form->field($model, 'id_category') ?>

	<?= $form->field($model, 'id_brand') ?>

	<?= $form->field($model, 'viewed') ?>

	<?= $form->field($model, 'article') ?>

	<?php // echo $form->field($model, 'name') ?>

	<?php // echo $form->field($model, 'min_price') ?>

	<?php // echo $form->field($model, 'price_old') ?>

	<?php // echo $form->field($model, 'price') ?>

	<?php // echo $form->field($model, 'status') ?>

	<?php // echo $form->field($model, 'has_photo') ?>

	<?php // echo $form->field($model, 'delivery') ?>

	<?php // echo $form->field($model, 'description') ?>

	<?php // echo $form->field($model, 'created') ?>

	<?php // echo $form->field($model, 'id_creator') ?>

	<?php // echo $form->field($model, 'changed') ?>

	<?php // echo $form->field($model, 'id_changer') ?>

	<div class="form-group">
		<?= Html::submitButton(Yii::t('product', 'Search'), ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton(Yii::t('product', 'Reset'), ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
