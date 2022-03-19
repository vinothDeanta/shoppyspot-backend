<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .login-form .form-group label {
        font-weight: 600;
        text-transform: capitalize;
        margin-bottom: 5px;
        font-family: "Roboto",sans-serif;
        color: #1e2f65;
    }

    .invalid-feedback{
        padding-left: 0px;
    }

</style>
<div class="row">
    <div class="col-12">
        <div class="login-card">
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'layout' => 'horizontal',
            'options' => [
                'class' => 'theme-form login-form'
            ],
            'fieldConfig' => [
                'template' => "{label}\n{input}\n{error}",
                'labelOptions' => ['class' => ''],
                'inputOptions' => ['class' => 'col-lg-3 form-control'],
                'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
            ],
        ]); ?>
            <h4>Login</h4>
              <h6>Welcome back! Log in to your account.</h6>
                <?php
                    $fieldOptions3 = [
                        'options' => ['class' => 'form-group'],
                        // 'inputTemplate' => "{input}<span class='input-group-text'><i class='fa fa-user' aria-hidden='true'></i></span>"
                    ];

                    $fieldrememberMe = [
                        'options' => ['class' => 'form-group field-loginform-rememberme']
                    ];

                ?>


                <?= $form->field($model, 'username', $fieldOptions3)->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password', $fieldOptions3)->passwordInput() ?>

                <?= $form->field($model, 'rememberMe', $fieldrememberMe)->checkbox([
                    'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ]) ?>

                <div class="form-group">
                    <div class="offset-lg-1 col-lg-11">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                </div>
                <p>Don't have account? <?= Html::a('Register', ['site/register'], ['data' => ['method' => 'post']]) ?></p>

        <?php ActiveForm::end(); ?>

        

        <!-- <form class="theme-form login-form" action="index.php?r=site/login" method="post">
            <h4>Login</h4>
            <h6>Welcome back! Log in to your account.</h6>
            <div class="form-group">
            <label>username</label>
            <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                <input class="form-control" type="text" id="loginform-username" name="LoginForm[username]" required="">
            </div>
            </div>
            <div class="form-group">
            <label>Password</label>
            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                <input class="form-control" type="password" name="LoginForm[password]" required="" placeholder="*********">
                <div class="show-hide"><span class="show">                         </span></div>
            </div>
            </div>
            <div class="form-group">
            <div class="checkbox">
                <input id="checkbox1" type="checkbox">
                <label for="checkbox1">Remember password</label>
            </div><a class="link" href="forget-password.html">Forgot password?</a>
            </div>
            <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
            </div>
            <div class="login-social-title">                
            <h5>Sign in with</h5>
            </div>
            <div class="form-group" style="display:none;">
            <ul class="login-social">
                <li><a href="https://www.linkedin.com/" target="_blank"><i data-feather="linkedin"></i></a></li>
                <li><a href="https://twitter.com/" target="_blank"><i data-feather="twitter"></i></a></li>
                <li><a href="https://www.facebook.com/" target="_blank"><i data-feather="facebook"></i></a></li>
                <li><a href="https://www.instagram.com/" target="_blank"><i data-feather="instagram">                  </i></a></li>
            </ul>
            </div>
            <p>Don't have account?<a class="ms-2" href="index.php?r=site/register">Create Account</a></p>
        </form> -->
        </div>
    </div>
</div>



