<?php

global $response;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");

?>
<link rel="stylesheet" id="main-css" href="<?php echo $url;?>../css/global.css" type="text/css" media="all">
<div id="text-2" class="widgets widgets_footer col_01 widget_text" style="background-color:white;margin-left: 40%;margin-top:8%;">
    <h3 style="text-align:center;">AREA AMMINISTRATIVA</h3>
    <div style="margin-left:3%;-margin-right:3%;" >
        <div class="contact_form_field col_02" style="width:270px;height: auto;">
            <div class="contact_form" style="padding: 0px;text-align:center;">
                <form action="<?php echo $host;?>/amministrazione/login" method="post" >
                    <div class="person_info" style="margin-bottom: 0px;">
                        <p>
                            <!--<label style="text-align:left;">Username</label>-->
                            <input id="login-input2" type="text" alt="username" required="required" name="username" size="43" placeholder="USERNAME"/>
                            <br><br>
                            <!--<label style="text-align:left;">Password</label>-->
                            <input id="login-input" type="password" alt="password"  required="required" value="" name="password" size="43" placeholder="PASSWORD" /></td>
                        </p>
                    </div>
                    <div class="buttons" style="text-align:center;">
                        <input type="submit" value="Accedi" style="width: 100%;"/>
                    </div>
                </form>
                <div class="message_sent" style="display: none"><?php echo initConfig::getInstance()->getLang() -> getValue("footer.regcompl"); ?> </div>
            </div>
        </div>
    </div>
</div>


<!--
<div  id="loginDiv">
    <center><a class="titoli_login"> AREA AMMINISTRATIVA</a></center>
    <br />
    <div id="logoapp">
    </div>
    <center>
        <form action="<?php echo $host;?>/amministrazione/login"  method="POST">

            <table class="loginTable">
                <tr>
                    <td>
                        <?php

                        echo "<div class='errorMessage'><b>".$response -> getError("error_login")."</b></div>";


                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="testoadmin"> Username :</a>
                        <input id="login-input2" type="text" alt="username" required="required" name="username" size="43" /></td>
                </tr>
                <tr>
                    <td>
                        <a class="testoadmin"> Password  :</a>
                        <input id="login-input" type="password" alt="password"  required="required" value="" name="password" size="43" /></td>
                </tr>
                <tr>
                    <td>

                        <button type=”submit” id="button-login">
                            LOGIN
                        </button>

                    </td>
                </tr>
            </table>
        </form>
    </center>
</div>
<br/><br/>
-->