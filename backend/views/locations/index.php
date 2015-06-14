<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LocationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('locations', 'Locations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="locations-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a(Yii::t('locations', 'Create Locations'), ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'location_id',
			'zip_code',
			'city',
			'province',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
