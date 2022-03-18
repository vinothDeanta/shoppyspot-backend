<?php

use app\models\SubCategory;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TbCategory;
use kartik\widgets\FileInput;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\TbProducts */
/* @var $form yii\widgets\ActiveForm */
?>
 <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                <div class="form theme-form projectcreate">
                    <?php $form = ActiveForm::begin([
    'options'=>['enctype'=>'multipart/form-data'] // important
]); ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'product_desc')->textarea(['rows' => '6']) ?>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                 
                                    <?php /* $form->field($model, 'category_id')->dropDownList(
                                                    ArrayHelper::map(TbCategory::find()->all(), 'category_id', 'category_name'),
                                                    [
                                                        'prompt'=>'Select any category','id'=>'category_dropdown',
                                                        'Onchange' => '
                                                            $.get("index.php?r=product/subcategorylist&id='.'"+$(this).val(), function(data){
                                                                $("select#sub_category_dropdown").html(data);
                                                            });
                                                        '
                                                    ]); */ ?>

                                    <?php  
                                        echo $form->field($model, 'category_id')->widget(Select2::classname(), [
                                            'data' => ArrayHelper::map(TbCategory::find()->all(), 'category_id', 'category_name'),
                                            'options' => ['placeholder' => 'Select a Category ...'],
                                            'pluginOptions' => [
                                                'allowClear' => true
                                            ],
                                        ]);
                                    ?>
                        

                                                       
                                </div>
                                <div class="col-sm-6">
                                    <?php /* $form->field($model, 'sub_category_id')->dropDownList(
                                                    ArrayHelper::map(SubCategory::find()->all(), 'sub_category_id', 'sub_category_name'),
                                                    [
                                                        'prompt'=>'Select any sub-category','id'=>'sub_category_dropdown',
                                                    ]);  */?>
                                    <?php 
                                            echo $form->field($model, 'sub_category_id')->widget(Select2::classname(), [
                                                'data' => ArrayHelper::map(SubCategory::find()->all(), 'sub_category_id', 'sub_category_name'),
                                                'options' => ['placeholder' => 'Select a Sub Category ...'],
                                                'pluginOptions' => [
                                                    'allowClear' => true
                                                ],
                                            ]);
                                    ?>


                                </div>
                            </div>
                            <!-- <div class="row" style="display:none;">
                                <div class="col-sm-12">
                                   //$form->field($model, 'sddd[]')->fileInput(['multiple' => true, 'class' => 'btn btn-default '])->label("Upload Image");
                                </div>
                            </div> -->
                            <div class="row">   
                                <div class="col-sm-11">
                                    <?= $form->field($model, 'files[]')->widget(FileInput::classname(), ['options' => ['multiple' => 'true'],]) ?>
                                </div>
                            </div>
                                <?= $form->field($model, 'created_at')->textInput() ?>

                                <?= $form->field($model, 'updated_at')->textInput() ?>

                                <?= $form->field($model, 'brand_name')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'model_number')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'model_name')->textInput(['maxlength' => true]) ?>

                      

                                <?= $form->field($model, 'color_id')->textInput() ?>

                                <?= $form->field($model, 'size')->textInput() ?>

                                <?= $form->field($model, 'product_fit')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'material_ratio')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'generic_name')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'country_of_Orgin')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'age_of_use')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'skillset')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'ideal_for')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'occasion')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'primary_product_type_color')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'secondary_product_type_color')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'pattern')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'product_type')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'machine_washable')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'thread_count')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'maximum_wattage')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'Adjustable')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'project_shape')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'body_material')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'product_inner_material')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'handle_with_care')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'mechanism')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'GSM')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'leak_resistance')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'connector')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'connectivity_technology')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'compatible_devices')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'hardware_platform')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'display_technologies')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'special_feature')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'resolution')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'refresh_rate')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'battery_type')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'rechargeable')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'no_of_battery')->textInput() ?>

                                <?= $form->field($model, 'warrently_summary')->textInput(['maxlength' => true]) ?>

                                <?= $form->field($model, 'warrently_year')->textInput() ?>

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