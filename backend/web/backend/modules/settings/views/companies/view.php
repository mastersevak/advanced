<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\settings\models\Companies */

$this->title = $model->company_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('companies', 'Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('companies', 'Update'), ['update', 'id' => $model->company_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('companies', 'Delete'), ['delete', 'id' => $model->company_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('companies', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'company_id',
            'company_naem',
            'company_email:email',
            'company_addres',
            'company_creates_date',
            'company_status',
            'company_start_date',
        ],
    ]) ?>

</div>
