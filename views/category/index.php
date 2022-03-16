<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\TbCategory;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
            <h3>Category List</h3>
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

    <div class="tb-category-index">

        <p>
            <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'category_id',
                'category_name',
                'category_desc',
                //'created_at',
                //'updated_at',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, TbCategory $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'category_id' => $model->category_id]);
                    }
                ],
            ],
        ]); ?>


    </div>
</div>