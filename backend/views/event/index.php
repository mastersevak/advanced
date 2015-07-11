<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
// http://fullcalendar.io/docs/event_data/Event_Object/

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?
	Modal::begin([
		'header'	=> '<h4>Modal Event</h4>',
		'id'		=> 'modal-event',
		'size'		=> 'modal-lg'
	]);

	echo '<div id="modalContent-event"></div>';

	Modal::end();
	?>

	<p>
		<?= Html::a('Create Event', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?= \yii2fullcalendar\yii2fullcalendar::widget(['events'=> $events]) ?>

</div>
