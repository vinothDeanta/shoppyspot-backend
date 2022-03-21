<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbSizeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-size-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'size_id') ?>

    <?= $form->field($model, 'size_name') ?>

    <?= $form->field($model, 'size_desc') ?>

    <?= $form->field($model, 'createddate') ?>

    <?= $form->field($model, 'updateddate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
