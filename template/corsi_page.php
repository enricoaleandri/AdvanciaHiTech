<?php
/**
 * Created by PhpStorm.
 * User: Enrico
 * Date: 10/02/15
 * Time: 0.46
 */
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
    <title>Home</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>
    <style>
        b
        {
            font-weight: bolder;
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
                <h4><strong><?php echo initConfig::getInstance()->getLang() -> getValue("corsi.servizi"); ?></strong></h4>
            </div>
        </div><!--End Sub Header-->
        <div class="who_we_are col_04">
            <div>
                   <span >
                    <img src="http://www.advancia.it/it/css/images/java_logo.png" style="width: 150px;height:200px;float:right;"  alt="" class="right">
                </span>
                <span style="display: inline-block; width: 70%;text-align: justify;">
                    <p class="imp_paragraph">
                        <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo"); ?>
                    <p>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo1"); ?>
                    </p>
                    <br/>
                    <b><?php echo initConfig::getInstance()->getLang() -> getValue("corsi.destinatari"); ?></b>
                    <p>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo2"); ?>
                    </p>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo3"); ?>
                    <p>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo4"); ?>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo5"); ?>
                        <a  target="_blank" style="color: #C00000; font-weight: bold;"  href="<?php echo $host;?>/public/workwithus"><?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo6"); ?></a>

                    </p>
                </span>

            </div>
            <br/><br/><br/>
            <div>
                  <span>
                    <img src="http://www.advancia.it/it/css/images/oracle_logo.png" alt="" style="width: 200px;float:right;" class="right">
                </span>
                <span style="display: inline-block; width: 70%;text-align: justify;">
                    <p class="imp_paragraph">
                        <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo7"); ?>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo8"); ?>
                        <p>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo9"); ?>
                        </p>
                        <br/>
                        <b><?php echo initConfig::getInstance()->getLang() -> getValue("corsi.destinatari"); ?></b>
                        <p>
                            <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo2"); ?>
                        </p>
                            <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo3"); ?>
                        <p>
                            <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo4"); ?>
                            <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo5"); ?>
                            <a  target="_blank" style="color: #C00000; font-weight: bold;"  href="<?php echo $host;?>/public/workwithus"><?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo6"); ?></a>

                            </p>
                    </p>
                </span>
            </div>
            <p>
                <?php echo initConfig::getInstance()->getLang() -> getValue("corsi.testo10"); ?>
                <a  target="_blank" style="color: #C00000; font-weight: bold;"  href="<?php echo $host;?>/public/contact"><?php echo initConfig::getInstance()->getLang() -> getValue("corsi.contatto"); ?></a>
                </p>
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
