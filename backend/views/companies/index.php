<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use backend\models\Companies;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CompaniesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Companies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companies-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a(Yii::t('app', 'Create Companies'), ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?= GridView::widget([
		'dataProvider'	=> $dataProvider,
		'filterModel'	=> $searchModel,
		// 'layout' => "{items}",
		'rowOptions'	=> function ($model){
			if($model->company_status == 'active')
				return ['class' => 'bg-green'];
			else return ['class' => 'bg-red'];
		},
		'columns'		=> [
			['class' => 'yii\grid\SerialColumn'],
			[
				'attribute'	=> 'company_naem',
				'format' => 'raw',
				'value'		=> function ($data){
					return Html::a('<i class="fa fa-arrows"></i>  ' . $data->company_naem, '#');
				}
			],
			'company_email:email',
			'company_addres',
			'company_creates_date',
			[   // status filter dropDownList['active', 'inactive']
				'attribute' => 'company_status',
				'filter'    =>  ['active'=>'active', 'inactive'=>'inactive'],//ArrayHelper::map(Companies::find()->all(), 'company_status', 'company_status'),
			],

			['class' => 'yii\grid\ActionColumn'],// view, edit, delete icons
		],
	]); ?>

</div>
