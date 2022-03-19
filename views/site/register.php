<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form ActiveForm */
$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .form-group{
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        width: 100%;
        font-family: "Roboto",sans-serif;
        color: #1e2f65;
        font-size: 14px;
    }

    
    .login-form h4 {
        text-transform: capitalize;
        font-weight: 600;
        margin-bottom: 5px;
        font-size: 22px;
        font-family: "Roboto",sans-serif;
        color: #1e2f65;
    }
    </style>
<div class="container-fluid p-0"> 
    <div class="row m-0">
        <div class="col-12 p-0">    
            <div class="login-card">
                <div class="site-register">
                        <?php $form = ActiveForm::begin([
                            'options' => [
                                'class' => 'theme-form login-form'
                            ],
                        ]); ?>
                        <h4>Create your account</h4>
                        <h6>Enter your personal details to create account</h6>


                        <?= $form->field($model, 'user_email')->textInput() ?>
                        <?= $form->field($model, 'username')->textInput() ?>
                        <?= $form->field($model, 'last_name')->textInput() ?>
                        <?= $form->field($model, 'password')->passwordInput() ?>
                        <?= $form->field($model, 'city')->textInput() ?>    
                        <div class="form-group">
                            <?= Html::submitButton('CREATE ACCOUNT', ['class' => 'btn btn-primary']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>

                </div><!-- site-register -->
            </div>
        </div>
    </div>
</div>
