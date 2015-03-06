<?php
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
    <title>Business Intelligence - Advancia</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>

    <style>
        .bi ul
        {
            list-style-type: circle;
            margin: 0;
            padding: 10px 0px 10px 20px;;
            font-size: 12px;
            color: #606060;
            line-height: 18px;
        }
        .bi p
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
    <div class="bi who_we_are col_04">
        <h1>Business Intelligence</h1>
        <p class="imp_paragraph">
            Negli ultimi anni le organizzazioni si sono dotate di sistemi informatici sempre
            più pervasivi, per il miglioramento dei loro processi di business. Questa
            tendenza ha portato una crescita esponenziale delle quantità di dati, spesso
            dislocati nei vari sistemi gestionali interni ed anche esterni all’azienda. 
            <b>La possibilità di organizzare, comprendere e analizzare questi dati importanti
            è un fattore chiave per la conquista del vantaggio competitivo da parte delle
            aziende.</b>
            <br/><br/>
            Il team di Advanica Technology si occupa di Business Intelligence (BI) da oltre
            15 anni; il nostro obiettivo primario è quello di lavorare in simbiosi con le
            vostre esigenze, studiando in profondità il vostro business per analizzare,
            proporre e condividere con voi le migliori soluzioni.
            <br/><br/>

            L'integrazione di dati provenienti da svariate sorgenti, in formati eterogenei,
            in uno strumento flessibile che permetta alle aziende una migliore gestione
            dell'informazione: questo è ciò che l'accoppiata formata da Data Warehouse e
            Business Intelligence si prepone come obiettivo.
            <br/><br/>

            Advancia Technology è in grado di soddisfare queste esigenze avvalendosi
            dell'ottima conoscenza ed esperienza sui vari prodotti presenti sul mercato ed
            in particolare degli strumenti della suite
        </p>
        <br/>
        <div style="padding: 3px;margin: 25px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;background: #C00000;position: relative; width: 96%;display: table;"></div>
        <span style="width: 35%;display: inline-block;">
            <img src="<?php echo $url;?>images/bi.png" alt="Business Intelligence" />
        </span>
        <span style="width: 64%;display: inline-block;">
            <div class="tabs tab_shortcode">
                <div class="tabs_buttons">
                </div>
                <div class="tabs_boxes">
                    <div class="tab_box" style="display: block;">
                        <h3 class="tab_title">Software</h3>
                        <p>
                            I sistemi di <b>Business Intelligence</b> e <b>Business Analytics</b> razionalizzano ed aggregano i dati presenti
                            nelle organizzazioni per facilitarne l'analisi e la comprensione, ottenendo preziose
                            estrazioni relative all’andamento delle proprie attività:
                            <ul>
                                <li>
                                    Misurando lo stato dei processi
                                </li>
                                <li>
                                    Misurando le prestazioni del capitale umano
                                </li>
                                <li>
                                    Comprendendo le dinamiche di richiesta dei fattori di rischio
                                </li>
                                <li>
                                    Individuando gli elementi portanti su cui poter basare l'aumento del vantaggio competitivo
                                    rispetto alle organizzazioni di concorrenza
                                </li>
                                <li>
                                    Individuando gli elementdi di criticità su cui poter intervenire con le adeguate
                                    correzzioni
                                </li>
                            </ul>
                        </p>
                    </div>
                    <div class="tab_box" style="display: none;">
                        <h3 class="tab_title">La nostra proposta</h3>
                        <p>
                            La proposta di <a class="company" href="<?php echo $host;?>/public/about/">Advancia Technology</a>è basata
                            sullo sviluppo di soluzioni <b>Buiness Intelligence </b>  che soddisfano le necessità del cliente,
                            partendo dalla fase di analisi dei requisiti  fino all'implementazione di tutti gli step.
                            Le nostre competenze spaziano tra le più diffuse soluzioni di <b>Business Intelligence</b> presenti sul mercato
                            come <font size="4">BLA BLA, BLA BLA, BLA BLA.</font>
                            I settori su cui possiamo vantare un'elevata competenza e capacità sono quelli del:
                            <ul>
                                <li>Data Warehousing</li>
                                <li>Data Mining</li>
                                <li>GeoAnalysis</li>
                                <li>Big Data</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </span>
        <br/><br/>
        <div style="padding: 3px;margin: 25px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;background: #C00000;position: relative; width: 96%;display: table;"></div>
        <br/><br/>
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
