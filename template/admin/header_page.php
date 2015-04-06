<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enrico
 * Date: 19/12/14
 * Time: 19.25
 * To change this template use File | Settings | File Templates.
 */

global $response;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
?>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="icon" type="image/png" href="<?php echo $url;?>../images/favicon.ico">