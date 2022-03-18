<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="form theme-form projectcreate">
                        <div class="users-form">

                            <?php $form = ActiveForm::begin(); ?>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <?= $form->field($model, 'user_email')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

                                        <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

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

