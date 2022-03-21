<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbColor */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="form theme-form projectcreate">
                        <div class="tb-color-form">

                            <?php $form = ActiveForm::begin(); ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'color_name')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'color_desc')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'color_code')->textInput(['maxlength' => true]) ?>

                                    <div class="form-group">
                                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                                    </div>
                                </div>
                            </div>
                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
