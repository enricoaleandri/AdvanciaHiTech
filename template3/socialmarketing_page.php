<?php
global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$activePage = "social";

?>
<!DOCTYPE html>
<html lang="it-IT">
<head>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("header");
    ?>
    <title>Social Marketing - Advancia</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>
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
            <h1>Social Marketing</h1>
            <div style="display:inline-block">
                <span style="float: left;width: 83%;">
                <p>Negli ultimi anni si è assistito ad una crescente diffusione di mezzi di comunicazione che raggruppano gli utenti in base ai loro interessi, alle loro passioni o culture, i così detti "Social Network".
                Accanto e successivo allo sviluppo dei Social Network, si è generato il Social Marketing, termine col quale si identifica la possibilità di utilizzare i nuovi mezzi di comunicazione come piattaforma marketing per raggiungere il maggior numero possibile di utenti interessati direttamente alle offerte e/o prodotti di una azienda.
                <a class="company" href="<?php echo $host;?>/public/about/">Advancia Technology</a> si propone come Web Marketing Agency per raggiungere una comunicazione più diretta e partecipativa con l'utente finale: non solo realizzazione di pagine e profili, ma promozione delle imprese sui maggiori Social Network del momento (Twitter, Facebook ecc...) e quindi crescita del business grazie ad un servizio di promoting di prodotti/servizi del tutto nuovo e accattivante.
                </p>
                </span>
                <span style="float: right;"><img src="http://www.advancia.it/it/css/images/omino_social.png" alt="Social Marketing" /></span>
            </div>
            <div>
            <p>Se sei interessato al servizio non devi fare altro che scriverci tramite la nostra pagina dei
                <a target="_blank" style="color: #C00000; font-weight: bold;" href="<?php echo $host;?>/public/contact/">contatti</a> per avere maggiori informazioni oppure scaricare la <a target="_blank" style="color: #C00000; font-weight: bold;" href="<?php echo $url;?>data/brochure_social.pdf">nostra brochure</a> scrivendo il tuo indirizzo email.</p>
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