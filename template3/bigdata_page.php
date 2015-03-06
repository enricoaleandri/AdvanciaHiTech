<?php
global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$activePage = "bigdata";

?>
<!DOCTYPE html>
<html lang="it-IT">
<head>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("header");
    ?>
    <title>BigData - Advancia</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>
    <style>
        .bigdata ul
        {
            list-style-type: circle;
            margin: 0;
            padding: 10px 0px 10px 20px;;
            font-size: 12px;
            color: #606060;
            line-height: 18px;
        }
        .bigdata p
        {
            font-size: 12px;
            color: #606060;
            line-height: 18px;
        }
        .bigdata .leftSpan
        {
            width: 35%;
            display: inline-block;
        }
        .bigdata .rightSpan
        {
            width: 64%;
            display: inline-block;
            float: right;
        }

        @media screen and (max-width: 960px) {

            .bigdata .leftSpan
            {
                width: 100%;
                display: inline-block;
            }
            .bigdata .rightSpan
            {
                width: 100%;
                display: inline-block;
            }
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
        <div class="bigdata who_we_are col_04">
            <h1>Big Data</h1>
            <p class="imp_paragraph">
                I BigData hanno catturato l'attenzione dell'it negli ultimi anni, con un
                eco paragonabile a quello avuto da internet 10 anni prima. Una delle
                ragioni per cui questo fenomeno è cosi importante è perche le architetture
                che stanno emergendo con esso consentono di gestire, in modo efficace i dati di
                diversi formati e struttura superando i vincoli posti dai sistemi e dai database
                tradizionali.
                <br/><br/>
                L'aumento del volume, velocità e varietà dei dati spesso supera la reale capacità
                delle aziende di gestirli ed elaborarli con efficacia nei tempi utili. Una complessità che
                rende difficile far fronte alle sempre più urgenti e crescenti esigenze del business.
                Il paradigma delle 4V riassume l'impatto dei big data sulle aziende:
            </p>
            <br/>
            <span class="leftSpan">
                <img src="<?php echo $url;?>images/big-data-600x387.png"  style="width:100%;" alt="Big Data" />
            </span>
            <span class="rightSpan">
                <div class="tabs tab_shortcode">
                    <div class="tabs_buttons">
                    </div>
                    <div class="tabs_boxes">
                        <div class="tab_box" style="display: block;">
                            <h3 class="tab_title">Varietà</h3>
                            <p>
                                La tipologia di dati non è più uniforme e legata solo ai sistemi legacy.
                                Ci troviamo di fronte a dati in formato testuale, audio, video, in streaming, provenienti da blog, web e social network.
                            </p>
                        </div>
                        <div class="tab_box" style="display: none;">
                            <h3 class="tab_title">Volume</h3>
                            <p>
                                La mole di dati, spesso destrutturati, aumenta in maniera esponenziale.
                                Diventa sempre più difficile individuare per tempo quelli a maggior valore per il business.
                            </p>
                        </div>
                        <div class="tab_box" style="display: none;">
                            <h3 class="tab_title">Valore</h3>
                            <p>
                                I modelli analitici sono sempre più complessi e impongono capacità elaborative fino a poco
                                tempo fa impensabili. Diventa determinante sapere individuare i dati a valore rispetto agli altri.
                            </p>
                        </div>
                        <div class="tab_box" style="display: none;">
                            <h3 class="tab_title">Velocità</h3>
                            <p>
                                I dati vengono prodotti con una velocità e frequenza sempre maggiore.
                                Il "time to decision" richiesto all'IT si sta riducendo sempre di più. La sfida
                                è quella di riuscire a gestire ed elaborare informazioni in tempi sempre più rapidi.
                            </p>
                        </div>
                    </div>
                </div>
            </span>
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