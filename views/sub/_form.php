<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TbCategory;

/* @var $this yii\web\View */
/* @var $model app\models\SubCategory */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="form theme-form projectcreate">
                        <div class="sub-category-form">

                            <?php $form = ActiveForm::begin(); ?>

                            <div class="row">
                                <div class="col-sm-12">
                                    <?= $form->field($model, 'category_id')->dropDownList(
                                                    ArrayHelper::map(TbCategory::find()->all(), 'category_id', 'category_name'),
                                                    [
                                                        'prompt'=>'Select any category','id'=>'category_dropdown'
                                
                                                    ]);  ?>

                                    <?= $form->field($model, 'sub_category_name')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'sub_category_description')->textInput(['maxlength' => true]) ?>
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
