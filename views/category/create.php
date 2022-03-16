<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbCategory */

$this->title = 'Create Tb Category';
$this->params['breadcrumbs'][] = ['label' => 'Tb Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
