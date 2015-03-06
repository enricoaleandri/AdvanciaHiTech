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
?>
<div class="navbar-header page-scroll">
    <a class="navbar-brand" href="#page-top"> <img id="backtothetop" src="<?php echo $url;?>images/back-to-top.png" alt="back to the top"/></a>
</div>
    <!-- jQuery -->
<script type="text/javascript" src="<?php echo $url;?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $url;?>js/jquery-appear.js"></script>

<!-- Bootstrap Core JavaScript -->
<script type="text/javascript" src="<?php echo $url;?>js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>js/classie.js"></script>
<script type="text/javascript" src="<?php echo $url;?>js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script type="text/javascript" src="<?php echo $url;?>js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="<?php echo $url;?>js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script type="text/javascript" src="<?php echo $url;?>js/freelancer.js"></script>
<script type="text/javascript" src="<?php echo $url;?>js/script-menu.js"></script>