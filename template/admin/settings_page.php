<?php
global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$settings = initConfig::getInstance()->getSettings();
$base_path = $response -> getProperty("base_path");
$admins = $response -> getProperty("admins");

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

    <title>Admin - Settings</title>
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
            <!--End Header Tools-->
            <div class="header_tools">
                <!--Header Tools-->
                <?php
                initConfig::getInstance() -> getIncluder() -> includePage("admin_button");
                ?>

            </div>
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
                       <a href="#" data-template="configuration"   class="linkTemplate" >Configurazione</a>
                   </li>
                   <li>
                       <a href="#" data-template="account"   class="linkTemplate" >Account</a>
                   </li>
               </ul>
           </div>
        </div>
        <div class="content_settings" >
            <div id="settings_template" class="settings_cont">
                <!-- Dynamic -->
            </div>
        </div>
        <script>
            $ = jQuery;
            jQuery(document).ready(function () {
                $("#settings_template").load(host+"/settings/configuration/");
                $(".linkTemplate").on("click", function(){
                    var template = $(this).attr("data-template");
                    changeTemplate(template);
                });
                function changeTemplate(template){
                    $("#settings_template").load(host+"/settings/"+template);
                };
            });

        </script>
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
initConfig::getInstance() -> getIncluder() -> includePage("scripts_post");
?>
</body>
</html>

