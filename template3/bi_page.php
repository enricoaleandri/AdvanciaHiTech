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
            <h4><strong><?php echo initConfig::getInstance()->getLang() -> getValue("bi.servizi"); ?></strong></h4>
        </div>
    </div><!--End Sub Header-->
    <div class="bi who_we_are col_04">
        <h1><?php echo initConfig::getInstance()->getLang() -> getValue("bi.bi"); ?></h1>
        <p class="imp_paragraph">
            <?php echo initConfig::getInstance()->getLang() -> getValue("bi.testo"); ?>

            <?php echo initConfig::getInstance()->getLang() -> getValue("bi.testo1"); ?>

            <?php echo initConfig::getInstance()->getLang() -> getValue("bi.testo2"); ?>
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
                        <h3 class="tab_title"><?php echo initConfig::getInstance()->getLang() -> getValue("bi.software"); ?></h3>
                        <p>
                            <?php echo initConfig::getInstance()->getLang() -> getValue("bi.testo3"); ?>
                        </p>
                    </div>
                    <div class="tab_box" style="display: none;">
                        <h3 class="tab_title"><?php echo initConfig::getInstance()->getLang() -> getValue("bi.proposta"); ?></h3>
                        <p>
                            <?php echo initConfig::getInstance()->getLang() -> getValue("bi.testo4"); ?>
                            <?php echo initConfig::getInstance()->getLang() -> getValue("bi.testo5"); ?>
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
