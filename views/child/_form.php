<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\AuthItem;
use app\models\Users;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\AuthItemChild */
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
                            <div class="col-sm-6">
                                <?php 
                                    echo $form->field($model, 'parent')->widget(Select2::classname(), [
                                        'data' => ArrayHelper::map(AuthItem::find()->where(['type'=>'2'])->all(), 'name', 'name'),
                                        'options' => ['placeholder' => 'Select a Sub Category ...'],
                                        'pluginOptions' => [
                                            'allowClear' => true
                                        ],
                                        'pluginEvents' => [
                                            "select2:select" => "function() { 
                                                $.get('subpermission?id="."'+$(this).val(), function(data){
                                                    $('select#authitemchild-child').html(data);
                                                });
                                            }",
                                        ]
                                    ]);
                                ?>
                            </div>
                        </div>    
                        <div class="row">    
                            <div class="col-sm-6  product-details" id="child_id">
                                <?php 
                                    echo $form->field($model, 'child')->widget(Select2::classname(), [
                                        'data' => ArrayHelper::map(AuthItem::find()->where(['type'=>'1'])->all(), 'name', 'name'),
                                        'options' => ['placeholder' => 'Select a Sub Category ...'],
                                        'pluginOptions' => [
                                            'allowClear' => true
                                        ],
                                    ]);
                                ?>

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
</div>
