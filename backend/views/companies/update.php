<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Companies */

// update
$this->title = Yii::t('app', 'Update {modelClass}: ', ['modelClass' => 'Companies']) . ' ' . $model->company_id;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->company_id, 'url' => ['view', 'id' => $model->company_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="companies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
