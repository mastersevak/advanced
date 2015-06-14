<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Locations */

$this->title = $model->location_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('locations', 'Locations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="locations-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a(Yii::t('locations', 'Update'), ['update', 'id' => $model->location_id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a(Yii::t('locations', 'Delete'), ['delete', 'id' => $model->location_id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => Yii::t('locations', 'Are you sure you want to delete this item?'),
				'method' => 'post',
			],
		]) ?>
	</p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'location_id',
			'zip_code',
			'city',
			'province',
		],
	]) ?>

</div>
