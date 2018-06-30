<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pagamento */
/* @var $form yii\widgets\ActiveForm */
?>



<!--================Search Area =================-->
<section class="search_area">
    <div class="search_inner">
        <input type="text" placeholder="Enter Your Search...">
        <i class="ti-close"></i>
    </div>
</section>
<!--================End Search Area =================-->

<!--================Header Menu Area =================-->
<header class="main_menu_area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><b><h1 style="color: #fff;">TecTime</h1></b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a style=" font-size: 20px;" class="nav-link" href="index.html">Inicio</a></li>
                
                <li class="nav-item dropdown">
                  <a style=" font-size: 20px;" href="#" class="dropdown-toggle" data-toggle="dropdown">        
                    Serviços
                </a>
                <ul style="width: 200px; text-align: center;" class="dropdown-menu">
                    <li style="height: 20px; margin-top:0px;" ><a style=" font-size: 20px;" href="#">Áreas</a></li>
                    <li style="height: 20px;  margin-top:0px;" ><a style=" font-size: 20px;" href="#">Pedidos</a></li>
                    <li style="height: 20px;  margin-top:0px;" ><a style=" font-size: 20px;" href="#">Faturas</a></li>            
                    <li style="height: 20px;  margin-top:0px;" ><a style=" font-size: 20px;" href="#">Pedidos concluidos</a></li>

                </ul>
            </li>

            <li class="nav-item"><a style=" font-size: 20px;" href="static.html">Pessoas</a></li>
            <li class="nav-item"><a style=" font-size: 20px;" href="static.html">Pagamento</a></li>
            <li class="nav-item"><a style=" font-size: 20px;" href="static.html">Galeria</a></li>
            <li class="nav-item dropdown">
              <a style=" font-size: 20px;" href="#" class="dropdown-toggle" data-toggle="dropdown">        
                Perfil
            </a>
            <ul style="width: 200px; text-align: center;" class="dropdown-menu">
                <li style="height: 20px;" ><a style=" font-size: 20px;" href="#">Minha Conta</a></li>
                <li style="height: 20px;" ><a style=" font-size: 20px;" href="#">Amigos</a></li>
                <li style="height: 20px;" ><a style=" font-size: 20px;" href="#">Editar Perfil</a></li>            
                <li style="height: 20px;" ><a style=" font-size: 20px;" href="#">Sair</a></li>

            </ul>
        </li>
    </ul>
    <ul class="navbar-nav justify-content-end">
        <li><a href="#"><i class="icon_search"></i></a></li>
        <li><a href="#"><i class="icon_bag_alt"></i></a></li>
    </ul>
</div>
</nav>
</header>
<!--================End Header Menu Area =================-->

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_text_inner">
            <h4>Pegar por um serviço</h4>
                    <!--ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Archive</a></li>
                        <li><a href="static.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Static Page</a></li>
                    </ul-->
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Static Area =================-->
        <section class="static_area">
            <div class="container">
                <h1>Prencha o formulario a seguir</h1>
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'hora_inicio')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'hora_fim')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'assinatura')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'ordem')->textInput() ?>

                <?= $form->field($model, 'servico')->textInput() ?>

                <?= $form->field($model, 'classificacao')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Pagar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </section>
            <!--================End Static Area =================-->

            <!--================Footer Area =================-->
            <footer class="footer_area">
                <div class="footer_widgets_area">
                    <div class="container">
                        <div class="f_widgets_inner row">
                            <div class="col-lg-3 col-md-6">
                                <aside class="f_widget subscribe_widget">
                                    <div class="f_w_title">
                                        <h3>Our Newsletter</h3>
                                    </div>
                                    <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                        </span>
                                    </div>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <aside class="f_widget twitter_widget">
                                    <div class="f_w_title">
                                        <h3>Twitter Feed</h3>
                                    </div>
                                    <div class="tweets_feed"></div>
                                </aside>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <aside class="f_widget categories_widget">
                                    <div class="f_w_title">
                                        <h3>Link Categories</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Agency</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Studio</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Studio</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Blogs</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Shop</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Home</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Services</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Work</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Privacy</a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <aside class="f_widget contact_widget">
                                    <div class="f_w_title">
                                        <h3>Contact Us</h3>
                                    </div>
                                    <a href="#">1 (800) 686-6688</a>
                                    <a href="#">info.deercreative@gmail.com</a>
                                    <p>40 Baria Sreet 133/2 <br />NewYork City, US</p>
                                    <h6>Open hours: 8.00-18.00 Mon-Fri</h6>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copy_right_area">
                    <div class="container">
                        <div class="float-md-left">
                            <h5>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></h5>
                        </div>
                        <div class="float-md-right">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Disclaimer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Privacy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Advertisement</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!--================End Footer Area =================-->
