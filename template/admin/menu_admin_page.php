<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enrico
 * Date: 19/12/14
 * Time: 19.49
 * To change this template use File | Settings | File Templates.
 */

global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");

?>
<div class="logo" style="margin-top: -31px;">
    <!--Logo-->
    <a href="<?php echo $host;?>/public/home/"><img src="<?php echo $url;?>images/logo.png" style="width: 160px;margin-top: 20px;margin-left: 0px;" alt="Advancia Technology srl"/></a>
</div>
<!--End Logo-->

<div >
    <!--Header Main Menu-->
        <span class="main_menu">
            <ul>
                <li>
                    <a href="<?php echo $host;?>/news/home/" class="">Home </a>
                </li>
                <li>
                    <a href="<?php echo $host;?>/news/settings/" class="">Settings </a>
                </li>
            </ul>
        </span>
</div>
<!--End Header Main Menu-->