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
    <title>Android</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>


    <style>
        .android ul
        {
            list-style-type: circle;
            margin: 0;
            padding: 10px 0px 10px 20px;;
            font-size: 12px;
            color: #606060;
            line-height: 18px;
        }
        .android p
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
        <div class="android who_we_are  col_04">
            <h1>Android</h1>
            <div style="display:inline-block">
                <span style="float: left;width: 60%;">
                <p>

                    <a class="company" href="<?php echo $host;?>/public/about/">Advancia Technology</a>, come sempre dalla parte del cliente,
                    vuole proporre un altro canale per
                    la pubblicizzazione della propria azienda e/o vendita dei propri servizi. Infatti,
                    la grandissima diffusione dei nuovi dispositivi Mobile, ha portato le aziende ad
                    essere presenti su queste piattaforme. <a class="company" href="<?php echo $host;?>/public/about/">Advancia Technology</a> mette a disposizione dei
                    propri clienti l'esperienza dei propri sviluppatori per creare applicazioni Android ad-hoc.
                </p>
                <p>
                    Qui di seguito riportiamo alcuni esempi tra le applicazioni più richieste e di maggior interesse:
                </p>
                    <ul>
                        <li>applicazioni Android personalizzate</li>
                        <li>applicazioni Android di Gioco</li>
                        <li>applicazioni Android Multimediali</li>
                        <li>applicazioni Android per le aziende</li>
                    </ul>
                <p>
                    Il motivo per cui Advancia Technology ha deciso di investire nella tecnologia Android,
                    rova risposta nei dati resi noti da un'importante società di analisi di mercato che,
                    nel primo quadrimestre del 2011, ha rilevato una crescita del 19% dei dispositivi Mobile,
                    sopratutto smartphone, in cui Android si impone come sistema operativo di punta.
                </p>
                </span>
                <span style="float: right;"><img style="width: 400px;" src="http://core0.staticworld.net/images/article/2014/02/android-devil-malware-100247149-large.png" alt="Android" /></span>
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
