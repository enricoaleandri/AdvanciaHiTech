<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enrico
 * Date: 19/12/14
 * Time: 19.20
 * To change this template use File | Settings | File Templates.
 */


global $response;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");

$settings = initConfig::getInstance()->getSettings();

?>


