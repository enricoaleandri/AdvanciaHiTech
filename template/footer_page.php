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
                <h3><a href="<?php echo $host;?>/public/contact/"><strong><?php echo initConfig::getInstance()->getLang() -> getValue("footer.findus"); ?> </strong></a></h3>
                <p class="f_street"><?php echo $settings['office_address'];?>
                <p class="f_email"><strong><?php echo initConfig::getInstance()->getLang() -> getValue("footer.email"); ?>: </strong><a href="mailto:<?php echo $settings['comunication_mail']; ?>" ><?php echo $settings['comunication_mail']; ?> </a></p>
            </div>
        </div>
        <div id="text-2" class="widgets widgets_footer col_01 widget_text">
            <h3><?php echo initConfig::getInstance()->getLang() -> getValue("footer.newsletter"); ?> </h3>
            <div class="textwidget">
                <div class="contact_form_field col_02" style="width:270px;height: auto;">
                    <div class="contact_form" style="padding: 0px;">
                        <form action="http://advancia.us10.list-manage.com/subscribe/post?u=6fcc2bf048babb6da37aa917c&amp;id=5498777418" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div class="person_info" style="margin-bottom: 0px;">
                                <p>

                                    <input data-required="" data-fieldtype="Email" type="text" name="EMAIL" id="newsl-e-mail" placeholder="info@advancia.it">
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                </p>
                            </div>
                            <div style="position: absolute; left: -5000px;"><input type="text" name="b_6fcc2bf048babb6da37aa917c_5498777418" tabindex="-1" value=""></div>
                            <div class="buttons" style="margin-top: 10px;">
                                <input type="submit" value="<?php echo initConfig::getInstance()->getLang() -> getValue("footer.iscriviti"); ?>" style="width: 100%;"/>

                            </div>
                        </form>
                        <div class="message_sent" style="display: none"><?php echo initConfig::getInstance()->getLang() -> getValue("footer.regcompl"); ?> </div>
                    </div>
                </div>
            </div>
        </div>
        <?php //TODO retrive info from social network, must be connecter ?>
        <!--div id="umbrella_twitterfeed_widget-3" class="widgets widgets_footer col_01 widget_umbrella_twitterfeed_widget">
            <div class="twitter_feed">
                <h3 class="w_title"><a target="_blank" href="">Facebook</a></h3>
                <div class="tweet" style="display: none;">
                    <p class="tweet"><strong>@Advancia Technology</strong></p>
                </div>
                <div class="tweet" style="display: none;">
                    <p class="tweet"><strong>@Advancia Technology</strong></p>
                </div>
                <div class="tweet" style="display: none;">
                    <p class="tweet"><strong>@Advancia Technology</strong> </p>
                </div>
            </div>
            <!--Close Twitter Feed-->
            <!--script> jQuery("div.twitter_feed").twitterfeed(); </script-->
        <!--/div-->
        <?php  // TODO  : to implement news area?>
        <!--div id="text-2" class="widgets widgets_footer col_01 widget_text">
            <h3><?php echo initConfig::getInstance()->getLang() -> getValue("footer.news"); ?>  </h3>
            <div class="textwidget">@Advancia Technology</div>
        </div-->
        

    </div>
    <div class="footer_bottom clear_fix">
        <p class="copyright"><?php echo initConfig::getInstance()->getLang() -> getValue("footer.copy"); ?><?php echo date("Y"); ?>&nbsp;<strong><?php echo $settings['comunication_name'];?></strong></p>
        <br><p>Codice Fiscale e Partita IVA: <?php echo $settings['p_iva'];?></p>
        <p class="footer_menu" style="float: right;">
            <a href="<?php echo $host;?>/public/home/"><?php echo initConfig::getInstance()->getLang() -> getValue("footer.home"); ?></a> |
            <a href="<?php echo $host;?>/public/contact/"><?php echo initConfig::getInstance()->getLang() -> getValue("footer.contatti"); ?></a> |
            <a href="<?php echo $host;?>/public/bigdata/"><?php echo initConfig::getInstance()->getLang() -> getValue("footer.bigdata"); ?></a> |
            <a href="<?php echo $host;?>/public/systemint/"><?php echo initConfig::getInstance()->getLang() -> getValue("footer.sysint"); ?></a> |
            <a href="<?php echo $host;?>/public/bi/"><?php echo initConfig::getInstance()->getLang() -> getValue("footer.bi"); ?></a> |
            <a href="<?php echo $host;?>/public/solutions/"><?php echo initConfig::getInstance()->getLang() -> getValue("footer.solutions"); ?></a> |
            <a href="<?php echo $host;?>/public/social/"><?php echo initConfig::getInstance()->getLang() -> getValue("footer.socmark"); ?></a> |
            <a href="<?php echo $host;?>/public/android/"><?php echo initConfig::getInstance()->getLang() -> getValue("footer.android"); ?></a> |
            <a href="<?php echo $host;?>/public/workwithus/"><?php echo initConfig::getInstance()->getLang() -> getValue("footer.workwithus"); ?></a>
        </p>
    </div>
</div>
<!--End Footer-->