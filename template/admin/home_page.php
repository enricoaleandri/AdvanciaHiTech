<?php
global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$settings = initConfig::getInstance()->getSettings();

?>
<!DOCTYPE html>
<html lang="it-IT">
<head>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("admin_header");
    ?>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("admin_scripts");
    ?>

    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;ver=1.0'></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=<?php echo strtolower(initConfig::getInstance()-> getLang() -> getLang()) ?>' ></script>


    <title>Admin - News</title>
</head>
<body class="home page page-id-8 page-template page-template-template-home page-template-template-home-php regular_typo">
<script>
    jQuery("body").addClass("regular_typo");
    jQuery("body").addClass("");
</script>
<div class="wrapper">
    <!--Wrapper-->
    <div class="header col_04">
        <!--Header-->
        <div class="header_content center_parent_v">

            <?php
            initConfig::getInstance() -> getIncluder() -> includePage("admin_menu");
            ?>
        </div>
    </div>
    <!--End Header-->
    <div class="inner_content">
        <div class="sub_header col_04 w_space">
            <div class="sub_header_content">
                <h4><strong>News</strong></h4>
            </div>
        </div>




    </div>
    <!--End Inner Content-->

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("admin_footer");
    ?>

    <div style="clear: both;"></div>
</div>
<!--End Wrapper-->
<?php
initConfig::getInstance() -> getIncluder() -> includePage("admin_scripts_post");
?>
</body>
</html>

