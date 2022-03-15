<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'product_name') ?>

    <?= $form->field($model, 'product_desc') ?>

    <?= $form->field($model, 'product_image') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'brand_name') ?>

    <?php // echo $form->field($model, 'model_number') ?>

    <?php // echo $form->field($model, 'model_name') ?>

    <?php // echo $form->field($model, 'sub_category_id') ?>

    <?php // echo $form->field($model, 'color_id') ?>

    <?php // echo $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'product_fit') ?>

    <?php // echo $form->field($model, 'material_ratio') ?>

    <?php // echo $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'generic_name') ?>

    <?php // echo $form->field($model, 'country_of_Orgin') ?>

    <?php // echo $form->field($model, 'age_of_use') ?>

    <?php // echo $form->field($model, 'skillset') ?>

    <?php // echo $form->field($model, 'ideal_for') ?>

    <?php // echo $form->field($model, 'occasion') ?>

    <?php // echo $form->field($model, 'primary_product_type_color') ?>

    <?php // echo $form->field($model, 'secondary_product_type_color') ?>

    <?php // echo $form->field($model, 'pattern') ?>

    <?php // echo $form->field($model, 'product_type') ?>

    <?php // echo $form->field($model, 'machine_washable') ?>

    <?php // echo $form->field($model, 'thread_count') ?>

    <?php // echo $form->field($model, 'maximum_wattage') ?>

    <?php // echo $form->field($model, 'Adjustable') ?>

    <?php // echo $form->field($model, 'project_shape') ?>

    <?php // echo $form->field($model, 'body_material') ?>

    <?php // echo $form->field($model, 'product_inner_material') ?>

    <?php // echo $form->field($model, 'handle_with_care') ?>

    <?php // echo $form->field($model, 'mechanism') ?>

    <?php // echo $form->field($model, 'GSM') ?>

    <?php // echo $form->field($model, 'leak_resistance') ?>

    <?php // echo $form->field($model, 'connector') ?>

    <?php // echo $form->field($model, 'connectivity_technology') ?>

    <?php // echo $form->field($model, 'compatible_devices') ?>

    <?php // echo $form->field($model, 'hardware_platform') ?>

    <?php // echo $form->field($model, 'display_technologies') ?>

    <?php // echo $form->field($model, 'special_feature') ?>

    <?php // echo $form->field($model, 'resolution') ?>

    <?php // echo $form->field($model, 'refresh_rate') ?>

    <?php // echo $form->field($model, 'battery_type') ?>

    <?php // echo $form->field($model, 'rechargeable') ?>

    <?php // echo $form->field($model, 'no_of_battery') ?>

    <?php // echo $form->field($model, 'warrently_summary') ?>

    <?php // echo $form->field($model, 'warrently_year') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
