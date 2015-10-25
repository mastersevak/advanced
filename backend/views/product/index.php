<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Product */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('product', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a(Yii::t('product', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'id_category',
			'id_brand',
			'viewed',
			'article',
			// 'name',
			// 'min_price',
			// 'price_old',
			// 'price',
			// 'status',
			// 'has_photo',
			// 'delivery',
			// 'description',
			// 'created',
			// 'id_creator',
			// 'changed',
			// 'id_changer',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
