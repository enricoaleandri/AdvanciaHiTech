<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enrico
 * Date: 19/12/14
 * Time: 19.19
 * To change this template use File | Settings | File Templates.
 */

global $response;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
?>

<link rel="stylesheet" id="main-css" href="<?php echo $url;?>../css/global.css" type="text/css" media="all">
<link rel="stylesheet" id="responsive-css" href="<?php echo $url;?>../css/responsive.css" type="text/css" media="all">
<link rel="stylesheet" id="fonts-css" href="<?php echo $url;?>../css/stylesheet.css" type="text/css" media="all">
<link rel="stylesheet" id="patterns-css" href="<?php echo $url;?>../css/patterns.css" type="text/css" media="all">


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.angularjs.org/1.2.25/angular.min.js"></script>
<script src="https://code.angularjs.org/1.2.25/angular-route.js"></script>
<script src="https://code.angularjs.org/1.2.25/angular-sanitize.min.js"></script>

<script type="application/javascript" >
var host= "<?php echo $host;?>";
</script>

<script type="text/javascript" src="<?php echo $url;?>../js/jquery.js"></script>


