<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>



<div style="background-color: #999999;">
    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-59">
                        Sign Up
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100">Nome Completo</span>
                        <input class="input100" type="text" name="name" placeholder="Name...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text"  id="signupform-email" name="SignupForm[email]" placeholder="email...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text"  id="signupform-username" name="SignupForm[username]" placeholder="Username...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" id="signupform-password" name="SignupForm[password]" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
                        <span class="label-input100">Repetir Password</span>
                        <input class="input100" type="password" name="repeat-pass" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-m w-full p-b-33">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                <span class="txt1">
                                    Eu concordo com os
                                    <a href="#" class="txt2 hov1">
                                        Termos de Uso
                                    </a>
                                </span>
                            </label>
                        </div>

                        
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                             <?= Html::submitButton('Signup', ['class' => 'login100-form-btn', 'name' => 'signup-button']) ?>
                        </div>

                        <a href="index.php?r=site%2Flogin" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Login
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
       <?php ActiveForm::end(); ?>
</div>