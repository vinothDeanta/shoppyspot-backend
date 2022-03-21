<?php

use app\models\SubCategory;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TbCategory;
use kartik\widgets\FileInput;
use kartik\select2\Select2;
use app\models\TbTemplatePermission;

/* @var $this yii\web\View */
/* @var $model app\models\TbProducts */
/* @var $form yii\widgets\ActiveForm */

?>
<style>
    .product-details{
        display: none;
    }
</style>
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
                                <?php  
                                    echo $form->field($model, 'template_id')->widget(Select2::classname(), [
                                        'data' => ArrayHelper::map(TbTemplatePermission::find()->all(), 'template_id', 'template_name'),
                                        'options' => ['placeholder' => 'Select a Templates ...'],
                                        'pluginOptions' => [
                                            'allowClear' => true
                                        ],
                                        'pluginEvents' => [
                                            "select2:select" => "function() { 
                                                $.get('template?id="."'+$(this).val(), function(data){
                                                    $('.product-details').hide();
                                                    var array = $.map(data.result, function(value, index) {
                                                        $(value).show();
                                                    });
                                                    
                                                    
                                                });
                                            }",
                                        ]
                                    ]);
                                ?>
                                
                            </div>

                            <div class="row">
                                    <div class="col-sm-11  product-details" id="product_name">
                                        <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class="col-sm-11  product-details" id="product_desc">
                                        <?= $form->field($model, 'product_desc')->textarea(['rows' => '6']) ?>
                                    </div>

                                    <div class="col-sm-6  product-details" id="category_id">
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
                                                'pluginEvents' => [
                                                    "select2:select" => "function() { 
                                                        $.get('subcategorylist?id="."'+$(this).val(), function(data){
                                                            $('select#tbproducts-sub_category_id').html(data);
                                                        });
                                                    }",
                                                ]
                                            ]);
                                        ?>
                            

                                                        
                                    </div>
                                    <div class="col-sm-6  product-details" id="sub_category_id">
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
                               
                                    <div class="col-sm-11  product-details" id="product_image">
                                        <?= $form->field($model, 'files[]')->widget(FileInput::classname(), ['options' => ['multiple' => 'true'],]) ?>
                                    </div>
                            
                                    <div class="col-sm-11  product-details" id="discount">
                                        <?= $form->field($model, 'discount')->textInput() ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="product_instock">
                                        <?= $form->field($model, 'product_instock')->textInput() ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="product_quantity">
                                        <?= $form->field($model, 'product_quantity')->textInput() ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="product_price">
                                        <?= $form->field($model, 'product_price')->textInput() ?>
                                    </div>

                                            
                                    <div class="col-sm-11  product-details" id="created_at">
                                        <?= $form->field($model, 'created_at')->textInput() ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="updated_at">
                                        <?= $form->field($model, 'updated_at')->textInput() ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="brand_name">
                                        <?= $form->field($model, 'brand_name')->textInput(['maxlength' => true]) ?>
                                    </div>


                                    <div class="col-sm-11  product-details" id="model_number">
                                        <?= $form->field($model, 'model_number')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class="col-sm-11  product-details" id="model_name">
                                        <?= $form->field($model, 'model_name')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class="col-sm-11  product-details" id="color_id">
                                        <?= $form->field($model, 'color_id')->textInput() ?>
                                    </div>
                                    <div class="col-sm-11  product-details" id="size">
                                        <?= $form->field($model, 'size')->textInput() ?>
                                    </div>
                                    <div class="col-sm-11  product-details" id="product_fit">
                                    <?= $form->field($model, 'product_fit')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="material_ratio">
                                        <?= $form->field($model, 'material_ratio')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    
                                    <div class="col-sm-11  product-details" id="department">
                                        <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="generic_name">
                                        <?= $form->field($model, 'generic_name')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="country_of_Orgin">
                                        <?= $form->field($model, 'country_of_Orgin')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="age_of_use">
                                        <?= $form->field($model, 'age_of_use')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="skillset">
                                        <?= $form->field($model, 'skillset')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="ideal_for">
                                        <?= $form->field($model, 'ideal_for')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="occasion">
                                        <?= $form->field($model, 'occasion')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="primary_product_type_color">
                                        <?= $form->field($model, 'primary_product_type_color')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="secondary_product_type_color">
                                        <?= $form->field($model, 'secondary_product_type_color')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="pattern">
                                        <?= $form->field($model, 'pattern')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="product_type">
                                        <?= $form->field($model, 'product_type')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="machine_washable">
                                        <?= $form->field($model, 'machine_washable')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="thread_count">
                                        <?= $form->field($model, 'thread_count')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="maximum_wattage">
                                        <?= $form->field($model, 'maximum_wattage')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="Adjustable">
                                        <?= $form->field($model, 'Adjustable')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    
                                    <div class="col-sm-11  product-details" id="project_shape">
                                        <?= $form->field($model, 'project_shape')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="body_material">
                                        <?= $form->field($model, 'body_material')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="product_inner_material">
                                        <?= $form->field($model, 'product_inner_material')->textInput(['maxlength' => true]) ?>
                                    </div>


                                    <div class="col-sm-11  product-details" id="handle_with_care">
                                        <?= $form->field($model, 'handle_with_care')->textInput(['maxlength' => true]) ?>
                                    </div>


                                    <div class="col-sm-11  product-details" id="mechanism">
                                        <?= $form->field($model, 'mechanism')->textInput(['maxlength' => true]) ?>
                                    </div>


                                    <div class="col-sm-11  product-details" id="GSM">
                                        <?= $form->field($model, 'GSM')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="leak_resistance">
                                        <?= $form->field($model, 'leak_resistance')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="connector">
                                        <?= $form->field($model, 'connector')->textInput(['maxlength' => true]) ?>  
                                    </div>

                                    <div class="col-sm-11  product-details" id="connectivity_technology">
                                        <?= $form->field($model, 'connectivity_technology')->textInput(['maxlength' => true]) ?>
                                    </div>


                                    <div class="col-sm-11  product-details" id="compatible_devices">
                                        <?= $form->field($model, 'compatible_devices')->textInput(['maxlength' => true]) ?>
                                    </div>


                                    <div class="col-sm-11  product-details" id="hardware_platform">
                                        <?= $form->field($model, 'hardware_platform')->textInput(['maxlength' => true]) ?>
                                    </div>


                                    <div class="col-sm-11  product-details" id="display_technologies">
                                        <?= $form->field($model, 'display_technologies')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="special_feature">
                                        <?= $form->field($model, 'special_feature')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="resolution">
                                        <?= $form->field($model, 'resolution')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="refresh_rate">
                                        <?= $form->field($model, 'refresh_rate')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="battery_type">
                                        <?= $form->field($model, 'battery_type')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="rechargeable">
                                        <?= $form->field($model, 'rechargeable')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="no_of_battery">
                                        <?= $form->field($model, 'no_of_battery')->textInput() ?>
                                    </div>
                                    
                                    <div class="col-sm-11  product-details" id="warrently_summary">
                                        <?= $form->field($model, 'warrently_summary')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="col-sm-11  product-details" id="warrently_year">
                                        <?= $form->field($model, 'warrently_year')->textInput() ?>
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
</div>