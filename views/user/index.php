<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Users;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
            <h3>User List</h3>
            </div>
            <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <?= Html::a('<i data-feather="home"></i>', ['site/index'], ['class' => '"home-item']) ?>    
                <li class="breadcrumb-item active">User List</li>
            </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid ecommerce-dash">
    <div class="users-index">

        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'user_email:email',
                'username',
                'last_name',
                'phone_no',
                //'city',
                //'authKey',
                //'accessToken',
                //'password',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Users $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>


    </div>
</div>
