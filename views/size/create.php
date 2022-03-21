<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbSize */

$this->title = 'Create Tb Size';
$this->params['breadcrumbs'][] = ['label' => 'Tb Sizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
            <h3>Create Size</h3>
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
        <div class="tb-size-create">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>
</div>
