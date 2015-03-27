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

                <?php
                initConfig::getInstance() -> getIncluder() -> includePage("social_button");
                ?>
            </div>
            <!--End Header Tools-->
        </div>
    </div>
    <!--End Header-->

    <div class="inner_content"><!--Inner Content-->
        <div class="sub_header col_04 w_space"><!--Sub Header-->
            <div class="sub_header_content">
                <h4><strong><?php echo initConfig::getInstance()->getLang() -> getValue("social.servizi"); ?></strong></h4>
            </div>
        </div><!--End Sub Header-->
        <div class="who_we_are col_04">
            <h1><?php echo initConfig::getInstance()->getLang() -> getValue("social.social"); ?></h1>
            <div style="display:inline-block">
                <span style="float: left;width: 83%;">
                    <p>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("social.testo"); ?>
                    </p>
                </span>
                <span style="float: right;"><img src="http://www.advancia.it/it/css/images/omino_social.png" alt="Social Marketing" /></span>
            </div>
            <div>
            <p>
                <?php echo initConfig::getInstance()->getLang() -> getValue("social.testo1"); ?>
                <a target="_blank" style="color: #C00000; font-weight: bold;" href="<?php echo $host;?>/public/contact/">contatti</a>
                <?php echo initConfig::getInstance()->getLang() -> getValue("social.testo2"); ?>
                <a target="_blank" style="color: #C00000; font-weight: bold;" href="<?php echo $url;?>data/brochure_social.pdf">nostra brochure</a>
                <?php echo initConfig::getInstance()->getLang() -> getValue("social.testo3"); ?>
            </p>
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