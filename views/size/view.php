<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbSize */

$this->title = $model->size_id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Sizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-size-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'size_id' => $model->size_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'size_id' => $model->size_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'size_id',
            'size_name',
            'size_desc',
            //'createddate',
            //'updateddate',
        ],
    ]) ?>

</div>
