<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use backend\models\Branches;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BranchesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Branches');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="branches-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a(Yii::t('app', 'Create Branches'), ['create'], ['class' => 'btn btn-success']) ?>
	</p>
	<? Pjax::begin(); // for GridView ajax search in index page ?>
		<?= GridView::widget([
			'dataProvider' => $dataProvider,
			'filterModel' => $searchModel,
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],
				[
					'attribute'	=> 'companies_company_id',
					'value'		=> 'companiesCompany.company_naem',
				],
				'branch_name',
				'branch_address',
				'branch_created_date',
				[	// status filter dropDownList['active', 'inactive']
					'attribute'	=> 'branch_status',
					'filter'	=>	ArrayHelper::map(Branches::find()->all(), 'branch_status', 'branch_status'),
				],

				['class' => 'yii\grid\ActionColumn'],
			],
		]); ?>

	<? Pjax::end(); ?>

</div>
