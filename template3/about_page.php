<?php
global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$activePage = "about";

?>
<!DOCTYPE html>
<html lang="it-IT">
<head>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("header");
    ?>
    <title>About - Advancia</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>
    <style>
        .project_content_in ul
        {
            list-style-type: circle;
            margin: 0;
            padding: 10px 0px 10px 20px;;
            font-size: 12px;
            color: #606060;
            line-height: 18px;
        }

    </style>
</head>
<body class="home page page-id-8 page-template page-template-template-home page-template-template-home-php regular_typo">
<script>
    jQuery("body").addClass("regular_typo");
    jQuery("body").addClass("");
</script>
<div class="wrapper">
        <?php
            initConfig::getInstance() -> getIncluder() -> includePage("bottom");
        ?>
    <!--Wrapper-->
    <div class="header col_04">
        <!--Header-->
        <div class="header_content center_parent_v">


            <?php
            initConfig::getInstance() -> getIncluder() -> includePage("menu");
            ?>
            <div class="header_tools">
                <!--Header Tools-->
                <div class="social_links">
                    <ul>
                        <li><a href="#" class="websymbols">F</a></li>
                        <li><a href="#" class="websymbols">t</a></li>
                        <li><a href="#" class="websymbols">g</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form method="get" action="#">
                        <input type="text" name="s" id="s" placeholder="Search here...">
                        <input type="submit" id="search_button" value="">
                    </form>
                </div>
            </div>
            <!--End Header Tools-->
        </div>
    </div>
    <!--End Header-->
    <div class="inner_content"><!--Inner Content-->
            <div class="sub_header col_04 w_space"><!--Sub Header-->
                <div class="sub_header_content">
                    <h4><strong>Azienda</strong></h4>
                </div>
            </div><!--End Sub Header-->
        <div class="project_post col_04">
            <div class="project_content">
                <div class="project_content_box">
                    <div class="project_title"><h1>Chi siamo</h1></div>
                    <div class="project_content_in">
                        <p>
                            Nel 2000 un gruppo di professionisti provenienti dal mondo della consulenza,
                            da sempre impegnati nel disegno di modelli di soluzioni e nella loro implementazione
                            attraverso tecnologie di produttività individuale, incontrano il mondo della Business Intelligence e del System Integration
                            Advancia Technology, una società creata con la missione di agevolare i manager e gli imprenditori
                            nel portare avanti lo sviluppo delle loro idee in maniera efficace.<br/>
                            Caratteristiche distintive di <a class="company" href="#">Advancia Technology</a> sono:
                            <ul>
                                <li>
                                    Una struttura flessibile, in grado di anticipare le evoluzioni del mercato,
                                    i nuovi modelli organizzativi e l'innovazione tecnologica
                                </li>
                                <li>
                                    Un management di grande esperienza e fortemente orientato a generare profitto
                                </li>
                                <li>
                                    Un team di professionisti che, utilizzando una metodologia di progetto solida e specializzata, lavorano insieme per ottenere risultati rapidi ed eccellenti
                                </li>
                                <li>
                                    Una metodologia di delivery di provato successo e scalabilità
                                </li>
                                <li>
                                    Capacità di instaurare relazioni di lungo termine con grandi aziende industriali e bancarie
                                </li>
                                <li>
                                    Partnership consolidate con i principali attori mondiali nel settore ICT
                                </li>
                            </ul>
                        </p>
                        <p>
                            <a class="company" href="#">Advancia Technology</a> è un'azienda in forte espansione specializzata nell'ambito dell'Information Technology
                            in grado di fornire supporto e consulenza su progetti nell'ambito di applicazioni:

                            <ul>
                                <li>Data Warehousing - Business Intelligence</li>
                                <li>Oracle - Business Objetcs XI - Cognos</li>
                                <li>Software Development - J2EE - .NET</li>
                                <li>Enterprise Applications</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="image_slider">
                    <div class="slider_nav">
                        <a href="#" data-dir="prev"></a>
                        <a href="#" data-dir="next"></a>
                    </div>
                    <ul id="slides">
                        <li style="display: list-item;"><img src="<?php echo $url;?>images/slider1.jpg" style="width: 620px; margin-left: 0px; margin-top: -1.5px;"></li>
                        <li style="display: list-item;"><img src="http://www.greenbiz.it/images/GooglePlay_00.jpg" style="width: 620px; margin-left: 0px; margin-top: -1.5px;"></li>
                        <li style="display: list-item;"><img src="http://blog.neweb.co/wp-content/uploads/2013/02/stripe-hard-at-work-1.jpg" style="width: 620px; margin-left: 0px; margin-top: -1.5px;"></li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("footer");
    ?>
    <div style="clear: both;"></div>
</div>
<!--End Wrapper-->

<?php
initConfig::getInstance() -> getIncluder() -> includePage("scripts_post");
?>
</body>
</html>