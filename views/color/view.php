<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbColor */

$this->title = $model->color_id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-color-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'color_id' => $model->color_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'color_id' => $model->color_id], [
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
            'color_id',
            'color_name',
            'color_desc',
            'color_code',
            'createddate',
            'updateddate',
        ],
    ]) ?>

</div>
