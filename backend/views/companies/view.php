<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Companies */

$this->title = $model->company_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companies-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->company_id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->company_id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
				'method' => 'post',
			],
		]) ?>
	</p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			[

				'label'	 => 'Avatar',
				'format' => 'html',
				'value'  =>  Html::img(Yii::getAlias('@web').'/uploades/test.jpg', ['width' => '150px'])
			],
			'company_id',
			'company_naem',
			'company_email:email',
			'company_addres',
			'company_creates_date',
			'company_status',
		],
	]) ?>

</div>
