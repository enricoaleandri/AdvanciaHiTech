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
                <h4><strong><?php echo initConfig::getInstance()->getLang() -> getValue("software.servizi"); ?></strong></h4>
            </div>
        </div><!--End Sub Header-->
        <div class="who_we_are col_04">
            <h1><?php echo initConfig::getInstance()->getLang() -> getValue("software.software"); ?></h1>
            <p class="testo_assertivo">
                <?php echo initConfig::getInstance()->getLang() -> getValue("software.testo"); ?>
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
                                <h2><?php echo initConfig::getInstance()->getLang() -> getValue("software.soluzioni"); ?></h2>
                                <p>
                                    <?php echo initConfig::getInstance()->getLang() -> getValue("software.testo1"); ?>
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
                                <h2><?php echo initConfig::getInstance()->getLang() -> getValue("software.offerte"); ?></h2>
                                <p>
                                    <?php echo initConfig::getInstance()->getLang() -> getValue("software.testo2"); ?>
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
