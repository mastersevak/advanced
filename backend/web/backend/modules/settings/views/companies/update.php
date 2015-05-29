<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\settings\models\Companies */

$this->title = Yii::t('companies', 'Update {modelClass}: ', [
    'modelClass' => 'Companies',
]) . ' ' . $model->company_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('companies', 'Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->company_id, 'url' => ['view', 'id' => $model->company_id]];
$this->params['breadcrumbs'][] = Yii::t('companies', 'Update');
?>
<div class="companies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
