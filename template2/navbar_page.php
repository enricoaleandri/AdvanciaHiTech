<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enrico
 * Date: 19/12/14
 * Time: 19.49
 * To change this template use File | Settings | File Templates.
 */

global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");

?>


<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#cssmenu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top"><img src="<?php echo $url; ?>images/header.png" style=" height: 50px; " /> </a>
        </div>

        <div >
            <div class="collapse navbar-collapse" id="cssmenu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="<?php echo $activePage == "home" ? "active" : "";?>"><a href='#'><span>Home</span></a>
                        <ul>
                            <li class="page-scroll"><a href='#lavoraconnoi'><span>Lavora con Noi</span></a></li>
                            <li class="page-scroll"><a href='#chisiamo'><span>Chi siamo</span></a></li>
                            <li class="page-scroll"><a href='#contattaci'><span>Contattaci</span></a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $activePage == "servizi" ? "active" : "";?>"><a href='#'><span>Servizi</span></a>
                        <ul>
                            <li class="page-scroll"><a href='#'><span>Teamwork</span></a></li>
                            <li class="page-scroll"><a href='#'><span>Social Marketing</span></a></li>
                            <li class="page-scroll"><a href='#'><span>Android</span></a></li>
                        </ul>
                    </li>
                    <li class="last <?php echo $activePage == "formazione" ? "active" : "";?>"><a href='#'><span>Formazione</span></a>
                        <ul>
                            <li class="page-scroll"><a href='#'><span>Corsi Formativi</span></a></li>
                            <li class="page-scroll"><a href='#'><span>Offerta Formativa</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#offerte">Offerte</a>
                </li>
                <li class="page-scroll">
                    <a href="#Subscribe">Subscribe</a>
                </li>
                <li class="page-scroll">
                    <a href="#about">About</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contattaci</a>
                </li>
            </ul>
        </div-->
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>