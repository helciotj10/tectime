<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="limiter">
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="row">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                </div>
                <div style="width: 150px;" ></div>
                <div>
                    <form class="login100-form validate-form">
                        <span class="login100-form-title">
                            Entrar
                        </span>

                        <div class="wrap-input100">
                            <input class="input100" type="text" placeholder="Username" id="loginform-username" name="LoginForm[username]">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" placeholder="Password" id="loginform-password" name="LoginForm[password]">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                           <?= Html::submitButton('Login', ['class' => 'login100-form-btn', 'name' => 'login-button']) ?>
                       </div>

                       <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Username / Password?
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="index.php?r=site%2Fsignup">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
</div>
