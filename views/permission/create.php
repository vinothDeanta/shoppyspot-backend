<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbTemplatePermission */

$this->title = 'Create Tb Template Permission';
$this->params['breadcrumbs'][] = ['label' => 'Tb Template Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .page-header{
        margin-top: 0px !important;
    }
</style>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
            <h3>Template Create</h3>
            </div>
            <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <?= Html::a('<i data-feather="home"></i>', ['site/index'], ['class' => '"home-item']) ?>    
                <li class="breadcrumb-item active">Tempalte Create</li>
            </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid ecommerce-dash">
    <div class="tb-template-permission-create">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>
