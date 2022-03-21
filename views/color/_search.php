<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbColorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-color-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'color_id') ?>

    <?= $form->field($model, 'color_name') ?>

    <?= $form->field($model, 'color_desc') ?>

    <?= $form->field($model, 'color_code') ?>

    <?= $form->field($model, 'createddate') ?>

    <?php // echo $form->field($model, 'updateddate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
