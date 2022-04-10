<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\AuthItemChild;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthItemChildSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Auth Item Children';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
            <h3>Roles Has Permisssion List</h3>
            </div>
            <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <?= Html::a('<i data-feather="home"></i>', ['site/index'], ['class' => '"home-item']) ?>    
                <li class="breadcrumb-item active">Roles Has Permisssion List</li>
            </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid ecommerce-dash">
    <div class="tb-products-index">
        <p>
            <?= Html::a('Create Roles Has Pemission', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'parent',
                'child',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, AuthItemChild $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'parent' => $model->parent, 'child' => $model->child]);
                    }
                ],
            ],
        ]); ?>
    </div>

</div>
