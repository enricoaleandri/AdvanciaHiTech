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
                <h4><strong><?php echo initConfig::getInstance()->getLang() -> getValue("system.servizi"); ?></strong></h4>
            </div>
        </div><!--End Sub Header-->
        <div class="si who_we_are col_04">
            <h1><?php echo initConfig::getInstance()->getLang() -> getValue("system.system"); ?></h1>
            <div style="display:inline-block">
                <span style="float: left;width: 70%;text-align: justify">
                    <p>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("system.testo"); ?>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("system.testo1"); ?>
                    </p>
                </span>
                <span style="float: right;"><img src="<?php echo $url;?>images/slider04.png" style="min-width: 316px;" alt="Social Marketing" /></span>
            </div>
            <div>
                <p>
                    <?php echo initConfig::getInstance()->getLang() -> getValue("system.testo2"); ?>
                    <a target="_blank" style="color: #C00000; font-weight: bold;" href="<?php echo $host;?>/public/contact/"><?php echo initConfig::getInstance()->getLang() -> getValue("system.contatti"); ?></a>.
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

