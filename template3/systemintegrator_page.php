<?php
/**
 * Created by PhpStorm.
 * User: Enrico
 * Date: 04/02/15
 * Time: 2.09
 */

global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");

?>
<!DOCTYPE html>
<html lang="it-IT">
<head>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("header");
    ?>
    <title>System Integrator - Advancia</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>
    <style>
        .si ul
        {
            list-style-type: circle;
            margin: 0;
            padding: 10px 0px 10px 20px;;
            font-size: 12px;
            color: #606060;
            line-height: 18px;
        }
        .si p
        {
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
    <!--Wrapper-->
        <?php
            initConfig::getInstance() -> getIncluder() -> includePage("bottom");
        ?>
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
                <h4><strong>Servizi</strong></h4>
            </div>
        </div><!--End Sub Header-->
        <div class="si who_we_are col_04">
            <h1>System Integrator</h1>
            <div style="display:inline-block">
                <span style="float: left;width: 70%;">
                    <p>
                        Il tema della System Integration negli ultimi anni ha acquistato una forte centralit&aacute; nel panorama
                        IT, non ostante la normale stratificazione di tecnologie e sistemi che accomuna un gran numero di aziende.

                        Dal punto di vista tecnologico, le soluzioni basate sull’orchestrazione dei flussi informativi attraverso
                        un middleware sono ormai convergenti rispetto a una visione SOA dei sistemi. Questo tipo di soluzioni,
                        in corso di progressiva standardizzazione, non possono però essere realizzate senza partire da una visione
                        centralizzata dei processi, attraverso la mappatura e la modellazione del business, dove i concetti “core”
                        dell’azienda, devono essere adeguatamente compresi, mappati e condivisi.

                        In questo modo è possibile rendere l’integrazione un fatto concreto ottenendo economie di scala e di
                        scopo che sono il reale obiettivo della creazione di un linguaggio comune tra i sistemi. L’offerta di
                        <a class="company" href="<?php echo $host;?>/public/about/">Advancia Technology</a>
                        quindi si focalizza su una funzione di "Orchestrazione" dei processi, funzionale alla realizzazione
                        di un’infrastruttura IT efficace e non ridondata.

                        L’esperienza maturata si è tradotta in interventi specifici che hanno visto RC attore nella analisi
                        dei processi ed esigenze di business e nelle relative declinazioni nei diversi aspetti di
                        business intelligence, attraverso:
                        <ul>
                            <li>
                                disegno e realizzazione di soluzioni di data warehouse
                            </li>
                            <li>
                                realizzazione di soluzioni di e-business intelligence mediante lo impiego
                                delle tecnologie fornite dall’IT del Cliente
                            </li>
                            <li>
                                realizzazione di progetti mirati all’integrazione di sorgenti di dati eterogenee
                            </li>
                            <li>
                                soluzioni di Web Application orientate alla razionalizzazione e integrazione di sistemi
                                eterogenei in un’unica piattaforma distribuita e facilmente fruibile
                            </li>
                        </ul>
                    </p>
                </span>
                <span style="float: right;"><img src="<?php echo $url;?>images/slider04.png" style="min-width: 316px;" alt="Social Marketing" /></span>
            </div>
            <div>
                <p>Se sei interessato al servizio non devi fare altro che scriverci tramite la nostra pagina dei
                    <a target="_blank" style="color: #C00000; font-weight: bold;" href="<?php echo $host;?>/public/contact/">contatti</a>.</p>
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

