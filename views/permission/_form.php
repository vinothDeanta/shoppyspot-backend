<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\SwitchInput;

/* @var $this yii\web\View */
/* @var $model app\models\TbTemplatePermission */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .control-label {
        display: inline-block;
        width: 200px;
        font-size: 17px;
    }
    .btn-success{
        font-size: 16px;
    }
    .switch-button{
        display: inline-block;
        padding-left: 10px;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="form theme-form projectcreate">
                        <div class="tb-template-permission-form">

                            <?php $form = ActiveForm::begin(); ?>
                            <div class="row">   
                                <div class="col-sm-6">
                                    <?= $form->field($model, 'template_name')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'category_id')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'product_name')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'product_desc')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'product_image')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'brand_name')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'model_number')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'model_name')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'sub_category_id')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'color_id')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'size')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'product_fit')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'material_ratio')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'department')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'generic_name')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'country_of_Orgin')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'age_of_use')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'skillset')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'ideal_for')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'occasion')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'primary_product_type_color')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'secondary_product_type_color')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'pattern')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'product_type')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'machine_washable')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'thread_count')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'maximum_wattage')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'Adjustable')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'project_shape')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'body_material')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'product_inner_material')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'handle_with_care')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'mechanism')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'GSM')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'leak_resistance')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'connector')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'connectivity_technology')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'compatible_devices')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'hardware_platform')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'display_technologies')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'special_feature')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'resolution')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'refresh_rate')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'battery_type')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'rechargeable')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'no_of_battery')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'warrently_summary')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'warrently_year')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'discount')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'product_instock')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'product_quantity')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                    <?= $form->field($model, 'product_price')->widget(SwitchInput::classname(), ['containerOptions' => ['class' => 'switch-button']]); ?>

                                   
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