<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Locations */

$this->title = Yii::t('locations', 'Update {modelClass}: ', [
	'modelClass' => 'Locations',
]) . ' ' . $model->location_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('locations', 'Locations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->location_id, 'url' => ['view', 'id' => $model->location_id]];
$this->params['breadcrumbs'][] = Yii::t('locations', 'Update');
?>
<div class="locations-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
