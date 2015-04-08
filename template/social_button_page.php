<?php
/**
 * Created by PhpStorm.
 * User: Enrico
 * Date: 27/03/15
 * Time: 12.45
 */

global $response;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$settings = initConfig::getInstance()->getSettings();

?>

<div class="social_links">
    <ul>
        <li><a href="<?php echo $settings["fb_link_page"];?>"  target="_blank" class="websymbols">F</a></li>
        <li><a href="<?php echo $settings["twitter_link_page"];?>" target="_blank" class="websymbols">t</a></li>
        <li><a href="#" target="_blank" class="websymbols">g</a></li>
    </ul>
</div>
<!-- just TODO -->
<!--div class="search">
    <form method="get" action="#">
        <input type="text" name="s" id="s" placeholder="Search here...">
        <input type="submit" id="search_button" value="">
    </form>
</div-->