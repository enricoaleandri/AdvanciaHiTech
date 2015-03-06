<?php
/**
 * Created by PhpStorm.
 * User: Enrico
 * Date: 10/02/15
 * Time: 1.22
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
    <title>Software Solution - Advancia</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>
    <style>
        .icona_accanto_testo {
            float: left;
            font-size: 80px;
            color: #fff;
            margin-top: -30px;
        }
        .testo_accanto_icona {
             float: left;
             width: 350px;
             padding-left: 20px;
             padding-top: 10px;
         }
         .span6 {
              display: inline-block;
              margin-top: 30px;
              /* margin-bottom: 30px; */
          }
        .fascia2_solsoft .span6 {
            margin-top: 10px!important;
        }
        .row-fluid {
            margin: 20px auto !important;
            width: 987px !important;
        }
        .icona_accanto_testo {
             float: left;
             /* font-size: 80px; */
             color: #fff;
             margin-top: -30px;
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
        <div class="who_we_are col_04">
            <h1>Software Solutions</h1>
            <p class="testo_assertivo">
                La complessità dei processi e le moli di dati che devono
                gestire le aziende al giorno d’oggi richiedono l’utilizzo
                di<span class="rossiccio">
                                                applicazioni che permettano di operare efficientemente
                                            </span>, reagendo rapidamente agli stimoli esterni ed
                anticipando le tendenze del mercato e la concorrenza.
            </p>
        </div>

        <div class="services_field">
            <div class="column_02">
                <div class="service_container">
                    <div class="service type_01">
                        <div class="sercive_content">
                            <div class="icons_s">
                                <div class="service_icon center_parent">
                                    <img class="center_element" src="<?php echo $url;?>images/!!!.png" width="40"  alt="Researching"/>
                                </div>
                            </div>
                            <div class="service_cont">
                                <h2>SOLUZIONI</h2>
                                <p>
                                    Le nostre soluzioni sono state individuate fra le più mature, innovative,
                                    diffuse e premiate a livello internazionale. Tutte le piattaforme sono
                                    supportate da organizzazioni di significativo spessore, che ne definiscono le
                                    linee guida e ne guidano l’evoluzione, e da una importante rete di partner,
                                    in grado di collaborare con la casa madre allo sviluppo dei prodotti e di
                                    fornire il supporto indispensabile ai clienti finali.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Half Width-->
            <div class="column_01">
                <div class="service_container">
                    <div class="service type_01">
                        <div class="sercive_content">
                            <div class="icons_s">
                                <div class="service_icon center_parent">
                                    <img class="center_element" src="<?php echo $url;?>images/offerta.png" width="40" alt="Consultings"/>
                                </div>
                            </div>
                            <div class="service_cont">
                                <h2>OFFERTE</h2>
                                <p>
                                    Le soluzioni offerte da Advancia Technology sono pensate per rendere più fluido il passaggio
                                    delle informazioni relative ai diversi processi aziendali fra i vari nodi
                                    dell’organizzazione. Sono tutte integrabili fra loro ed uniscono la facilità di
                                    installazione, di configurazione e d’uso con la rapidità di personalizzazione e
                                    la ricchezza di funzionalità per ottenere un elevato grado di efficienza a
                                    costi contenuti.
                                </p>
                            </div>
                        </div>
                    </div>
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
