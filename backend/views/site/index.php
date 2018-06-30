<?php

/* @var $this yii\web\View */

$this->title = 'TecTime';
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
                    <li style="height: 20px;  margin-top:0px;" ><a style=" font-size: 20px;" href="index.php?r=servicos%2Fcreate">Pedidos</a></li>
                    <li style="height: 20px;  margin-top:0px;" ><a style=" font-size: 20px;" href="#">Faturas</a></li>            
                    <li style="height: 20px;  margin-top:0px;" ><a style=" font-size: 20px;" href="#">Pedidos concluidos</a></li>

                </ul>
            </li>

            <li class="nav-item"><a style=" font-size: 20px;" href="#">Pessoas</a></li>
            <li class="nav-item"><a style=" font-size: 20px;" href="index.php?r=pagamento%2Fcreate">Pagamento</a></li>
            <li class="nav-item"><a style=" font-size: 20px;" href="#">Galeria</a></li>
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
            <h4></h4>
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
                <div class="static_inner">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="static_main_content">
                                <div class="static_social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="static_img">
                                    <img class="img-fluid" src="img/static-1.jpg" alt="">
                                </div>
                                <div class="static_text">
                                    <h3>Forma de operacionalização: </h3>
                                    <p>Qualquer pessoa que se reveja na proposta do Banco de Tempo e se disponibilize para dar e receber tempo, poderá tornar-se membro. Terá que fazer o cadastro através do preenchimento de um formulário no site. 
                                    Para se tornar membro a pessoa terá também que assinar um documento onde declara que tem conhecimento e aceita os objectivos, princípios e modo de funcionamento do Banco de Tempo e que se compromete a respeitar e cumprir os seus deveres enquanto membro. </p>
                                </div>
                                 <br>

                                <div class="static_text2">
                                    <h3>Como trocar?</h3>
                                    <p>Quando alguém precisa de um serviço, contacta atraves do site que vai procurar um membro que o possa realizar e, depois, coloca os membros em contacto. 
                                    Quando contactados pela administração para saber se podem prestar um serviço, os membros podem dizer que não estão disponíveis. Caso um membro se tenha comprometido a prestar um serviço e, por qualquer motivo, não possa prestá-lo, deverá informar o membro que está a contar consigo e/ou a agência.</p>
                                </div>
                                 <br>

                                <div class="static_text2">
                                    <h3>Como é feito o pagamento do serviço? </h3>
                                    <p>No fim da troca o pagamento do serviço é feito através do preenchimento , onde se regista a duração do serviço. A hora é divisível em meia hora, fazendo-se um arredondamento por excesso (mais que 15 minutos), ou por defeito (menos que 15 minutos).
                                    Quem recebeu o pagamento atraves do preenchimento de cheque online receberá automaticamente na sua conta a hora que ele prestou ao proximo. </p>
                                </div>
                                 <br>

                                <div class="static_text2">
                                    <h3>Há um limite de horas de débito ou crédito? </h3>
                                    <p>O limite máximo de diferença entre horas recebidas e oferecidas é de 20 horas. Portanto, quando um membro tem 20 horas de crédito, não pode continuar a dar o seu tempo antes de pedir um serviço a qualquer outro membro. Se, pelo contrário, o membro tem 20 horas de débito é altura da Agência do Banco de Tempo estimular a procura dos serviços disponibilizados por aquele membro para que possa continuar a trocar.</p>
                                </div>
                                 <br>

                                 <div class="static_text2">
                                    <h3>O que acontece em caso de faltas ou acidentes?  </h3>
                                    <p>O Tectime não se responsabiliza pelo incumprimento dos membros ou por acidentes que envolvam bens ou pessoas ocorridos durante a troca de serviços. </p>
                                </div>
                                <br>
                                <div class="static_text2">
                                    <h3>O que acontece no caso de incumprimento dos membros?  </h3>
                                    <p>As situações de incumprimento serão analisadas pela equipa coordenadora do sistema do banco de tempo, em conjunto com o membro em causa. Incidentes considerados graves poderão justificar a expulsão do membro. 
</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="right_sidebar_area">
                                <aside class="right_widget r_news_widget">
                                    <div class="r_w_title">
                                        <h3>Noticias Recentes</h3>
                                    </div>
                                    <div class="news_inner">
                                        <div class="news_item">
                                            <a href="#"><h4>Realizou-se no dia 30 de maio, na sede do Banco Popular, em Lisboa, uma sessão dedicada ao tema “Mais Tempo”, integrada na iniciativa “observamos mais”, resultante de uma parceria entre o Observador e o Banco Popular.</h4></a>
                                            <a href="#"><h6>junho 7, 2018</h6></a>
                                        </div>
                                        <div class="news_item">
                                            <a href="#"><h4>The way to get started is to quit talking and begin doing.</h4></a>
                                            <a href="#"><h6>October 7, 2017</h6></a>
                                        </div>
                                        <div class="news_item">
                                            <a href="#"><h4>In order to succeed, we must first believe that we can.</h4></a>
                                            <a href="#"><h6>October 7, 2017</h6></a>
                                        </div>
                                        <div class="news_item">
                                            <a href="#"><h4>The way to get started is to quit talking and begin doing.</h4></a>
                                            <a href="#"><h6>October 7, 2017</h6></a>
                                        </div>
                                    </div>
                                </aside>
                                <aside class="right_widget r_cat_widget">
                                    <div class="r_w_title">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">Branding</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Illustration</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Programming</a></li>
                                        <li><a href="#">Trending</a></li>
                                    </ul>
                                </aside>
                                <aside class="right_widget r_tag_widget">
                                    <div class="r_w_title">
                                        <h3>Popular Tags</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Unique</a></li>
                                        <li><a href="#">Photography</a></li>
                                        <li><a href="#">Music</a></li>
                                        <li><a href="#">Wordpress Template</a></li>
                                        <li><a href="#">Ideas</a></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
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
