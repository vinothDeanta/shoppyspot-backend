<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\SubCategory;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sub Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sub_category_id',
            'category_id',
            'sub_category_name',
            'sub_category_description',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SubCategory $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'sub_category_id' => $model->sub_category_id]);
                 }
            ],
        ],
    ]); ?>


</div>
