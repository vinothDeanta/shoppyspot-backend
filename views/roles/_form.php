<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AuthItem */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="form theme-form projectcreate">
                        <?php $form = ActiveForm::begin(); ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'type')->textInput() ?>

                                <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

                            </div>

                            <div class="form-group">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
