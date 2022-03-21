<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbColor */

$this->title = 'Update Tb Color: ' . $model->color_id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Colors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->color_id, 'url' => ['view', 'color_id' => $model->color_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
            <h3>Update Color</h3>
            </div>
            <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <?= Html::a('<i class="fa fa-chevron-left" aria-hidden="true"></i> BACK', ['size/index']) ?>    
            </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid ecommerce-dash">
    <div class="tb-color-update">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
