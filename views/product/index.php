<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\TbProducts;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
            <h3>Product List</h3>
            </div>
            <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <?= Html::a('<i data-feather="home"></i>', ['site/index'], ['class' => '"home-item']) ?>    
                <li class="breadcrumb-item active">Product List</li>
            </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid ecommerce-dash">
    <div class="tb-products-index">
        <p>
            <?= Html::a('Add Products', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute'=>'category_id',
                    'value'=>'category.category_name'
                ],
                [
                    'attribute'=>'sub_category_id',
                    'value'=>'subCategory.sub_category_name'
                ],

                //'product_id',
                // 'category_id',
                'product_name',
                'product_desc',
                'product_image',
                //'created_at',
                //'updated_at',
                //'brand_name',
                //'model_number',
                //'model_name',
                //'sub_category_id',
                //'color_id',
                //'size',
                //'product_fit',
                //'material_ratio',
                //'department',
                //'generic_name',
                //'country_of_Orgin',
                //'age_of_use',
                //'skillset',
                //'ideal_for',
                //'occasion',
                //'primary_product_type_color',
                //'secondary_product_type_color',
                //'pattern',
                //'product_type',
                //'machine_washable',
                //'thread_count',
                //'maximum_wattage',
                //'Adjustable',
                //'project_shape',
                //'body_material',
                //'product_inner_material',
                //'handle_with_care',
                //'mechanism',
                //'GSM',
                //'leak_resistance',
                //'connector',
                //'connectivity_technology',
                //'compatible_devices',
                //'hardware_platform',
                //'display_technologies',
                //'special_feature',
                //'resolution',
                //'refresh_rate',
                //'battery_type',
                //'rechargeable',
                //'no_of_battery',
                //'warrently_summary',
                //'warrently_year',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, TbProducts $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'product_id' => $model->product_id]);
                    }
                ],
            ],
        ]); ?>


    </div>
</div>
