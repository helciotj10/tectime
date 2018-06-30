<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UsersSeach */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
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
                <li class="nav-item"><a class="nav-link" href="index.html">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Serviços</a></li>
                <li class="nav-item"><a  href="static.html">Pessoas</a></li>
                <li class="nav-item"><a  href="static.html">Pagamento</a></li>
                <li class="nav-item"><a  href="static.html">Galeria</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?r=users%2Fview&id=3">Perfil</a></li>
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
            <h4><?= Html::encode($this->title) ?></h4>
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
                <p>
                    <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'username',
                        'auth_key',
                        'password_hash',
                        'password_reset_token',
            // 'email:email',
            // 'status',
            // 'created_at',
            // 'updated_at',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                    ]); ?>
                </div>
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

      
