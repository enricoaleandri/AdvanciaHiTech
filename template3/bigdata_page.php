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
                <h4><strong><?php echo initConfig::getInstance()->getLang() -> getValue("bigdata.servizi"); ?></strong></h4>
            </div>
        </div><!--End Sub Header-->
        <div class="bigdata who_we_are col_04">
            <h1><?php echo initConfig::getInstance()->getLang() -> getValue("bigdata.bigdata"); ?></h1>
            <p class="imp_paragraph">
                <?php echo initConfig::getInstance()->getLang() -> getValue("bigdata.testo"); ?>
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
                            <h3 class="tab_title"><?php echo initConfig::getInstance()->getLang() -> getValue("bigdata.varieta"); ?></h3>
                            <p>
                                <?php echo initConfig::getInstance()->getLang() -> getValue("bigdata.testo1"); ?>
                            </p>
                        </div>
                        <div class="tab_box" style="display: none;">
                            <h3 class="tab_title"><?php echo initConfig::getInstance()->getLang() -> getValue("bigdata.volume"); ?></h3>
                            <p>
                                <?php echo initConfig::getInstance()->getLang() -> getValue("bigdata.testo2"); ?>
                            </p>
                        </div>
                        <div class="tab_box" style="display: none;">
                            <h3 class="tab_title"><?php echo initConfig::getInstance()->getLang() -> getValue("bigdata.valore"); ?></h3>
                            <p>
                                <?php echo initConfig::getInstance()->getLang() -> getValue("bigdata.testo3"); ?>
                            </p>
                        </div>
                        <div class="tab_box" style="display: none;">
                            <h3 class="tab_title"><?php echo initConfig::getInstance()->getLang() -> getValue("bigdata.velocita"); ?></h3>
                            <p>
                                <?php echo initConfig::getInstance()->getLang() -> getValue("bigdata.testo4"); ?>
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