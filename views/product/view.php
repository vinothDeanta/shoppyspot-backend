<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbProducts */

$this->title = $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'product_id' => $model->product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'product_id' => $model->product_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'product_id',
            'category_id',
            'product_name',
            'product_desc',
            'product_image',
            'created_at',
            'updated_at',
            'brand_name',
            'model_number',
            'model_name',
            'sub_category_id',
            'color_id',
            'size',
            'product_fit',
            'material_ratio',
            'department',
            'generic_name',
            'country_of_Orgin',
            'age_of_use',
            'skillset',
            'ideal_for',
            'occasion',
            'primary_product_type_color',
            'secondary_product_type_color',
            'pattern',
            'product_type',
            'machine_washable',
            'thread_count',
            'maximum_wattage',
            'Adjustable',
            'project_shape',
            'body_material',
            'product_inner_material',
            'handle_with_care',
            'mechanism',
            'GSM',
            'leak_resistance',
            'connector',
            'connectivity_technology',
            'compatible_devices',
            'hardware_platform',
            'display_technologies',
            'special_feature',
            'resolution',
            'refresh_rate',
            'battery_type',
            'rechargeable',
            'no_of_battery',
            'warrently_summary',
            'warrently_year',
        ],
    ]) ?>

</div>
