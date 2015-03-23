<?php
global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$activePage = "home";

?>
<!DOCTYPE html>
<html lang="it-IT">
<head>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("header");
    ?>
    <title>Lavora con noi - Advancia</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="home page page-id-8 page-template page-template-template-home page-template-template-home-php regular_typo">
<script>
    jQuery("body").addClass("regular_typo");
    jQuery("body").addClass("");
</script>
<div class="wrapper">
    <!--Wrapper-->
    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("bottom");
    ?>
    <div class="header col_04">
        <!--Header-->
        <div class="header_content center_parent_v">


            <?php
            initConfig::getInstance() -> getIncluder() -> includePage("menu");
            ?>
            <div class="header_tools">
                <!--Header Tools-->
                <div class="social_links">
                    <ul>
                        <li><a href="#" class="websymbols">F</a></li>
                        <li><a href="#" class="websymbols">t</a></li>
                        <li><a href="#" class="websymbols">g</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form method="get" action="#">
                        <input type="text" name="s" id="s" placeholder="Search here...">
                        <input type="submit" id="search_button" value="">
                    </form>
                </div>
            </div>
            <!--End Header Tools-->
        </div>
    </div>
    <!--End Header-->

    <div class="inner_content"><!--Inner Content-->
        <div class="sub_header col_04 w_space"><!--Sub Header-->
            <div class="sub_header_content">
                <h4><strong><?php echo initConfig::getInstance()->getLang() -> getValue("work.azienda"); ?></strong></h4>
            </div>
        </div><!--End Sub Header-->
        <div class=" col_04">
            <div class="contact_form_field">
                <div class="contact_title">
                    <h1><?php echo initConfig::getInstance()->getLang() -> getValue("work.lavora"); ?></h1>
                    <p>
                        <?php echo initConfig::getInstance()->getLang() -> getValue("work.candidatura"); ?>
                    </p>
                </div>
                <div class="contact_form">
                    <form action="<?php echo $host;?>/ajax/workwithus/" enctype="multipart/form-data" method="post" id="workwithus_form" class="um_form">
                        <div class="person_info">
                            <p>
                                <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("work.nome"); ?></label>
                                <input data-required="1" value="ciao" data-fieldtype="Text"required data-validation="required" data-validation-error-msg=" " type="text" name="umbheadfld_Name" id="umbheadfld_Name" placeholder="John">
                            </p>
                            <p>
                                <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("work.cognome"); ?></label>
                                <input data-required="1" value="ciao" data-fieldtype="Text" required data-validation="required" data-validation-error-msg=" " type="text" name="umbheadfld_Surname" id="umbheadfld_Surname" placeholder="Smith">
                            </p>
                            <p>
                                <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("work.mail"); ?></label>
                                <input data-required="" value="ciao.ciao@ciao.com" data-fieldtype="Email" required data-validation="email" data-validation-error-msg="Inserire una mail valida" type="text" name="umbheadfld_E-mail" id="umbheadfld_E-mail" placeholder="johnsmith@email.com">
                            </p>
                        </div>
                        <div class="person_info">
                            <p>
                                <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("work.telefono"); ?></label>
                                <input data-required="1" data-fieldtype="Text" data-validation-error-msg="Inserire un recapito telefonico valido" data-validation="custom" data-validation-regexp="^(\+?[0-9]{0,12})$" data-validation-error-msg=" " type="text" name="umbheadfld_phone" id="umbheadfld_phone" placeholder="02 54 5845 85">
                            </p>
                            <p>
                                <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("work.titolo"); ?></label>
                                <input data-required="1" value="titolo" data-fieldtype="Text" required data-validation="required" data-validation-error-msg=" " type="text" name="umbheadfld_title" id="umbheadfld_title" placeholder="Facebook inc">
                            </p>
                        </div>
                        <div class="message_box">
                            <label for="message"><?php echo initConfig::getInstance()->getLang() -> getValue("work.messaggio"); ?></label>
                            <textarea id="txtarea"  data-required="1" name="umbheadfld_Message" required data-validation="required" data-validation-error-msg=" " id="umbheadfld_Message" placeholder="your message goes here..."></textarea>
                        </div>
                        <div class="upload-button">
                            <input  accept=".pdf,.doc,.docx"  id="fileupload" name="umbheadfld_File"  value="CV" type="file" />
                            <div id="file" class="files"></div>
                        </div>
                        <br>
                        <!-- The global progress bar - start -->
                        <div id="progress" class="progress">
                            <div class="progress-bar progress-bar-success"  ></div>
                        </div>
                        <!-- The global progress bar - end -->
                        <div class="buttons">
                            <input type="submit"  value="<?php echo initConfig::getInstance()->getLang() -> getValue("work.inviobottone"); ?>"/>
                            <input type="reset" value="Reset">
                        </div>
                        <br>
                        <div id="captcha" name="captcha" style="float: right;"  class="g-recaptcha" data-sitekey="6LdYlQMTAAAAAE3vq6JKhrOnx4mzHshf18DNbVZO"></div>
                    </form>
                    <div class="message_sent" id="message_sent" hidden ><?php echo initConfig::getInstance()->getLang() -> getValue("work.invio"); ?></div>
                    <div class="message_sent_error" id="message_sent_error" hidden ><?php echo initConfig::getInstance()->getLang() -> getValue("work.errore"); ?></div>
                </div>

                <style>
                    .error {
                        border: 1px solid #E72259 !important;
                    }

                    .progress {
                        height: 20px;
                        margin-bottom: 20px;
                        overflow: hidden;
                        background-color: #f5f5f5;
                        border-radius: 4px;
                        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
                        box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
                    }

                    .progress-bar-success {
                        background-color: #5cb85c;
                    }
                    .progress-bar {
                        float: left;
                        width: 0;
                        height: 100%;
                        font-size: 12px;
                        line-height: 20px;
                        color: #fff;
                        text-align: center;
                        background-color: rgb(192, 0, 0);
                        -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
                        box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
                        -webkit-transition: width .6s ease;
                        -o-transition: width .6s ease;
                        transition: width .6s ease;
                    }
                </style>

                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
                <script src="<?php echo $url;?>/js/file-upload/vendor/jquery.ui.widget.js"></script>
                <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
                <script src="<?php echo $url;?>/js/file-upload/jquery.iframe-transport.js"></script>
                <!-- The basic File Upload plugin -->
                <script src="<?php echo $url;?>/js/file-upload/jquery.fileupload.js"></script>
                <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
                <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

                <script>
                    $=jQuery;
                    $(function () {
                        'use strict';
                        $('#fileupload').fileupload({
                            url: host+"/ajax/uploadcv",
                            dataType: 'json',
                            done: function (e, data) {
                                alert("ciao");
                            },
                            progressall: function (e, data) {
                                var progress = parseInt(data.loaded / data.total * 100, 10);
                                $('#progress .progress-bar').css(
                                    'width',
                                    progress + '%'
                                );
                            }
                        });
                    });
                </script>

            </div>
        </div>

    </div>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("footer");
    ?>
    <div style="clear: both;"></div>
</div>
<!--End Wrapper-->

<?php
initConfig::getInstance() -> getIncluder() -> includePage("scripts_post");
?>
</body>
</html>