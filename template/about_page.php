<?php
global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$activePage = "about";
?>
<!DOCTYPE html>
<html lang="it-IT">
<head>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("header");
    ?>
    <title>About - Advancia</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>
    <style>
        .project_content_in ul
        {
            list-style-type: circle;
            margin: 0;
            padding: 10px 0px 10px 20px;;
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
        <?php
            initConfig::getInstance() -> getIncluder() -> includePage("bottom");
        ?>
    <!--Wrapper-->
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
                    <h4><strong><?php echo initConfig::getInstance()->getLang() -> getValue("about.azienda"); ?></strong></h4>
                </div>
            </div><!--End Sub Header-->
        <div class="project_post col_04">
            <div class="project_content">
                <div class="project_content_box">
                    <div class="project_title"><h1><?php echo initConfig::getInstance()->getLang() -> getValue("about.chisiamo"); ?></h1></div>
                    <div class="project_content_in">
                        <p>
                            <?php echo initConfig::getInstance()->getLang() -> getValue("about.testo"); ?>
                        <ul>
                            <li>
                                <?php echo initConfig::getInstance()->getLang() -> getValue("about.testo1"); ?>
                            </li>
                            <li>
                                <?php echo initConfig::getInstance()->getLang() -> getValue("about.testo2"); ?>
                            </li>
                            <li>
                                <?php echo initConfig::getInstance()->getLang() -> getValue("about.testo3"); ?>
                            </li>
                            <li>
                                <?php echo initConfig::getInstance()->getLang() -> getValue("about.testo4"); ?>
                            </li>
                            <li>
                                <?php echo initConfig::getInstance()->getLang() -> getValue("about.testo5"); ?>
                            </li>
                            <li>
                                <?php echo initConfig::getInstance()->getLang() -> getValue("about.testo6"); ?>
                            </li>
                        </ul>
                        </p>
                        <p>
                            <?php echo initConfig::getInstance()->getLang() -> getValue("about.testo7"); ?>
                        </p>
                    </div>
                </div>
                <div class="image_slider">
                    <div class="slider_nav">
                        <a href="#" data-dir="prev"></a>
                        <a href="#" data-dir="next"></a>
                    </div>
                    <ul id="slides">
                        """<?php echo $response -> getProperty("page_path");?>""
                            <?php
                            if ($handle = opendir($response -> getProperty("page_path").'/images/slider_chisiamo')) {
                                while (false !== ($entry = readdir($handle))) {
                                    if ($entry != "." && $entry != ".." && !is_dir($response -> getProperty("page_path").'/images/slider_chisiamo/'.$entry)) {
                                        echo '<li><img src="'.$url.'/images/slider_chisiamo/'.$entry.'" width="100%" /></li>';
                                    }
                                }
                            }
                            ?>
                    </ul>

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