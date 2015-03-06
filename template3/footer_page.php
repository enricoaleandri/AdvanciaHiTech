<?php
/**
 * Created by PhpStorm.
 * User: Enrico
 * Date: 02/02/15
 * Time: 0.29
 */

global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$settings = initConfig::getInstance()->getSettings();


?>

<div class="footer col_04 clear_fix">
    <!--Footer-->
    <div class="footer_top">
        <div id="umbrella_find_us-3" class="widgets widgets_footer col_01 ">
            <div class="about_info f_widget">
                <h3><a href="<?php echo $host;?>/public/contact/"><strong>Find Us</strong></a></h3>
                <p class="f_street"><?php echo $settings['office_address'];?>
                <p class="f_phone"><strong>Phone </strong><?php echo $settings['comunication_number'];?></p>
                <p class="f_email"><strong>Email </strong><?php echo $settings['comunication_mail'];?></p>
            </div>
        </div>
        <div id="text-2" class="widgets widgets_footer col_01 widget_text">
            <h3>Newsletter</h3>
            <div class="textwidget">
                <div class="contact_form_field col_02" style="width:270px;height: auto;">
                    <div class="contact_form" style="padding: 0px;">
                        <form action="#" method="post" class="um_form">
                            <div class="person_info" style="margin-bottom: 0px;">
                                <p>
                                    <input data-required="" data-fieldtype="Email" type="text" name="newsl-e-mail" id="newsl-e-mail" placeholder="johnsmith@email.com">
                                </p>
                            </div>
                            <div class="buttons" style="margin-top: 10px;">
                                <input type="submit" value="Iscriviti" style="width: 100%;"/>
                            </div>
                        </form>
                        <div class="message_sent" style="display: none">Registrazione completata.</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="umbrella_twitterfeed_widget-3" class="widgets widgets_footer col_01 widget_umbrella_twitterfeed_widget">
            <div class="twitter_feed">
                <h3 class="w_title"><a target="_blank" href="">Facebook</a></h3>
                <div class="tweet" style="display: none;">
                    <p class="tweet"><strong>@advancia </strong>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <div class="tweet" style="display: none;">
                    <p class="tweet"><strong>@advancia </strong>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  </p>
                </div>
                <div class="tweet" style="display: none;">
                    <p class="tweet"><strong>@advancia </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <!--Close Twitter Feed-->
            <script> jQuery("div.twitter_feed").twitterfeed(); </script>
        </div>
        <div id="text-2" class="widgets widgets_footer col_01 widget_text">
            <h3>News</h3>
            <div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
        </div>
        

    </div>
    <div class="footer_bottom clear_fix">
        <p class="copyright">All rights reserved © Copyright 2000-<?php echo date("Y"); ?>&nbsp;<strong><?php echo $settings['comunication_name'];?></strong></p>
        <p class="footer_menu" style="float: right;">
            <a href="<?php echo $host;?>/public/home/">Home</a> |
            <a href="<?php echo $host;?>/public/contact/">Contatti</a> |
            <a href="<?php echo $host;?>/public/bigdata/">Big Data</a> |
            <a href="<?php echo $host;?>/public/systemint/">System Integrator</a> |
            <a href="<?php echo $host;?>/public/bi/">Business Intelligence</a> |
            <a href="<?php echo $host;?>/public/solutions/">Software Solutions</a> |
            <a href="<?php echo $host;?>/public/social/">Social Marketing</a> |
            <a href="<?php echo $host;?>/public/android/">Android</a> |
            <a href="<?php echo $host;?>/public/workwithus/">Lavora con noi</a>
        </p>
    </div>
</div>
<!--End Footer-->