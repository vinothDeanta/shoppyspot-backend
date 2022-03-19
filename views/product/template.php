<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TbTemplatePermission;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\TbProducts */

$this->title = 'Create Tb Products';
$this->params['breadcrumbs'][] = ['label' => 'Tb Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .page-header{
        margin-top: 0px !important;
    }
</style>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
            <h3>Create Product</h3>
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
    <div class="tb-products-create">

        
        <?php         
            $form = ActiveForm::begin([]); 
            echo $form->field($model, 'template_id')->widget(Select2::classname(), [
                'data' => ArrayHelper::map(TbTemplatePermission::find()->all(), 'template_id', 'template_name'),
                'options' => ['placeholder' => 'Select a Template ...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); 
            
        ?>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
