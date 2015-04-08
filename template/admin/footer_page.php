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
    <div class="footer_bottom clear_fix" style="margin-right: 3%;">
        <p class="copyright">All rights reserved © Copyright 2000-2015 Advancia Technology srl </strong></p>
        <p class="footer_menu" style="float: right;">
            <a href="<?php echo $host;?>/news/home/">News</a> |
            <a href="<?php echo $host;?>/mail/home/">Mail</a> |
            <a href="<?php echo $host;?>/settings/home/">Settings</a>
        </p>
    </div>
</div>
<!--End Footer-->