<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\TbColor;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbColorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Colors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
            <h3>Color List</h3>
            </div>
            <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <?= Html::a('<i data-feather="home"></i>', ['site/index'], ['class' => '"home-item']) ?>    
                <li class="breadcrumb-item active">Color List</li>
            </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid ecommerce-dash">
    <div class="tb-color-index">
        <p>
            <?= Html::a('Create Color', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

               // 'color_id',
                'color_name',
                'color_desc',
                'color_code',
                //'createddate',
                //'updateddate',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, TbColor $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'color_id' => $model->color_id]);
                    }
                ],
            ],
        ]); ?>


    </div>
</div>