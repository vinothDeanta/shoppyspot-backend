<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbCategory */

$this->title = 'Update Tb Category: ' . $model->category_id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->category_id, 'url' => ['view', 'category_id' => $model->category_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
