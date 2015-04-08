<?php
global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$base_path = $response -> getProperty("base_path");

$settings = $response -> getProperty("settings");

?>
<!DOCTYPE html>
<!-- define angular app -->
<html ng-app="uiRouteApp" lang="it-IT">
<head>

    <?php
        initConfig::getInstance() -> getIncluder() -> includePage("admin_header");
    ?>

    <?php
         initConfig::getInstance() -> getIncluder() -> includePage("admin_scripts");
    ?>

    <script type="text/javascript" src="<?php echo $url;?>/js/routing/settingsRouting.js" ></script>
    <script type="text/javascript" src="<?php echo $url;?>/js/controller/accountController.js" ></script>
    <script type="text/javascript" src="<?php echo $url;?>/js/controller/configurationController.js" ></script>
    <script type="text/javascript" src="<?php echo $url;?>/js/controller/mainController.js" ></script>
    <script type="text/javascript" src="<?php echo $url;?>/js/controller/deleteAccountController.js" ></script>
    <script type="text/javascript" src="<?php echo $url;?>/js/controller/addAccountController.js" ></script>
    <script type="text/javascript" src="<?php echo $url;?>/js/controller/changepwdAccountController.js" ></script>
    <script type="text/javascript" src="<?php echo $url;?>/js/controller/updateConfigController.js" ></script>

    <title>Admin - Settings</title>
</head>
<body ng-controller="mainController" class="home page page-id-8 page-template page-template-template-home page-template-template-home-php regular_typo">
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
        <!--Inner Content -->
        <!--Sub Header-->
        <div class="sub_header col_04 w_space">
            <div class="sub_header_content">
                <h4><strong>Settings</strong></h4>
            </div>
        </div>
        <div class="content_menu" >
           <div class="menu_settings">
               <p style="padding-bottom: 10px;">Menu</p>
               <ul>
                   <li>
                       <a href="#configuration" class="linkTemplate" >Configurazione</a>
                   </li>
                   <li>
                       <a href="#account" class="linkTemplate" >Account</a>
                   </li>
               </ul>
           </div>
        </div>
        <div class="content_settings" >
            <div id="settings_template" class="settings_cont" ng-view >
                <!-- Dynamic -->
                <?php
                    initConfig::getInstance() -> getIncluder() -> includePage("admin_configuration");
                ?>
            </div>
        </div>
        <!--End Sub Header-->
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

