<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\TbSize;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbSizeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Sizes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
            <h3>Size List</h3>
            </div>
            <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <?= Html::a('<i data-feather="home"></i>', ['site/index'], ['class' => '"home-item']) ?>    
                <li class="breadcrumb-item active">Size List</li>
            </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid ecommerce-dash">
    <div class="tb-size-index">

        <p>
            <?= Html::a('Create Size', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'size_id',
                'size_name',
                'size_desc',
                //'createddate',
                //'updateddate',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, TbSize $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'size_id' => $model->size_id]);
                    }
                ],
            ],
        ]); ?>


    </div>
</div>
