<?php
/**
 * Created by PhpStorm.
 * User: Enrico
 * Date: 19/02/15
 * Time: 1.42
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
    <title>Outsourcing - Advancia</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>


    <style>
        .outsourcing ul
        {
            list-style-type: circle;
            margin: 0;
            padding: 10px 0px 10px 20px;;
            font-size: 12px;
            color: #606060;
            line-height: 18px;
        }
        .outsourcing p
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
                <h4><strong><?php echo initConfig::getInstance()->getLang() -> getValue("out.servizi"); ?></strong></h4>
            </div>
        </div><!--End Sub Header-->
        <div class="outsourcing who_we_are  col_04">
            <h1><?php echo initConfig::getInstance()->getLang() -> getValue("out.outsourcing"); ?></h1>
            <div style="display:inline-block">
                <span style="float: left;width: 60%;">
                    <p>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("out.testo"); ?>
                    </p>
                    <?php echo initConfig::getInstance()->getLang() -> getValue("out.testo1"); ?>
                    <p>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("out.testo2"); ?>
                    </p>
                    <?php echo initConfig::getInstance()->getLang() -> getValue("out.testo3"); ?>
                    <p>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("out.testo4"); ?>
                       </p>
                <p>
                    <?php echo initConfig::getInstance()->getLang() -> getValue("out.testo5"); ?>
                    </p>
                    <?php echo initConfig::getInstance()->getLang() -> getValue("out.testo6"); ?>
                <p>
                    <?php echo initConfig::getInstance()->getLang() -> getValue("out.testo7"); ?>
                </p>
                </span>
                <span style="float: right;"><img style="width: 400px;" src="<?php echo $url;?>images/outsourcing-300x193.jpg" alt="OutSourcing"/></span>
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


