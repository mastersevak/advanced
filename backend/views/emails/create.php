<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Emails */

$this->title = Yii::t('email', 'Create Emails');
$this->params['breadcrumbs'][] = ['label' => Yii::t('email', 'Emails'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emails-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
