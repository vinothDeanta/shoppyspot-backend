<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\AuthItem;
use app\models\Users;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\AuthAssignment */
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
                                        <?php 
                                                echo $form->field($model, 'user_id')->widget(Select2::classname(), [
                                                    'data' => ArrayHelper::map(Users::find()->all(), 'id', 'username'),
                                                    'options' => ['placeholder' => 'Select a Sub Category ...'],
                                                    'pluginOptions' => [
                                                        'allowClear' => true
                                                    ],
                                                ]);
                                        ?>

                                        <?php 
                                                echo $form->field($model, 'item_name')->widget(Select2::classname(), [
                                                    'data' => ArrayHelper::map(AuthItem::find()->where(['type'=>'2'])->all(), 'name', 'name'),
                                                    'options' => ['placeholder' => 'Select a Sub Category ...'],
                                                    'pluginOptions' => [
                                                        'allowClear' => true
                                                    ],
                                                ]);
                                        ?>

                                      
                                    </div>
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

