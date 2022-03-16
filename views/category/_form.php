<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbCategory */
/* @var $form yii\widgets\ActiveForm */
?>
 <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                <div class="form theme-form projectcreate">
                    <div class="tb-category-form">

                        <?php $form = ActiveForm::begin(); ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($model, 'category_name')->textInput(['maxlength' => true]) ?>
                        
                                <?= $form->field($model, 'category_desc')->textInput(['maxlength' => true]) ?>
                                
                                <div class="form-group field-tbcategory-created_at required">
                                    <label class="control-label" for="tbcategory-created_at">Created At</label>
                                    <input type="datetime-local" id="tbcategory-created_at" class="form-control" name="TbCategory[created_at]" >
                                    <div class="help-block"></div>
                                </div>

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
