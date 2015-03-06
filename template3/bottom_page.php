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
<span style="float: right;margin-right: 20px;padding: 6px;font-weight: bold;"> 

  <?php echo $settings['comunication_number']; ?> - <?php echo $settings['comunication_mail'];?>
</span>