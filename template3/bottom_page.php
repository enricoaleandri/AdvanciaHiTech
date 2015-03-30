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
<script type="text/javascript" src="<?php echo $url;?>js/change_language.js"></script>

<span style="float: right;padding: 6px;font-size: 13px;color:grey;">
  <a href="mailto:<?php echo $settings['comunication_mail']; ?>" style="color: rgb(192,0,0)" ><?php echo $settings['comunication_mail']; ?> </a>|
    <a href="" style="text-decoration: none;color:grey;" data-language="IT"   class="linkLanguage" > ITA </a> -
    <a href="" style="text-decoration: none;color:grey;" data-language="EN"   class="linkLanguage" > ENG </a>
</span>