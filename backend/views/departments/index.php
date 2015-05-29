<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use backend\models\Departments;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DepartmentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Departments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a(Yii::t('app', 'Create Departments'), ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],
			'companiesCompany.company_naem',
			'branchesBranch.branch_name',
			'department_name',
			'department_created_date',
			[	// status filter dropDownList['active', 'inactive']
				'attribute'	=> 'department_status',
				'filter'	=>	ArrayHelper::map(Departments::find()->all(), 'department_status', 'department_status'),
			],

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>

</div>
