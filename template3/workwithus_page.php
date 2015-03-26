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
    <script src='https://www.google.com/recaptcha/api.js?hl=<?php echo strtolower(initConfig::getInstance()-> getLang() -> getLang()) ?>'></script>
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
                <p style="color: #8e8e8e;font-size: 13px;margin-left: 30px;" >* Campi obbligatori</p>
                <div class="contact_form">
                    <form action="<?php echo $host;?>/ajax/workwithus/" method="POST" id="workwithus_form" class="um_form">
                        <div class="person_info">
                            <p>
                                <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("work.nome"); ?> *</label>
                                <input maxlength="50" data-required="1"  data-fieldtype="Text"required data-validation="custom" data-validation-regexp="^[a-zA-Zàèéòùì' \-]+$" data-validation-error-msg="<?php echo initConfig::getInstance()->getLang() -> getValue('work.errorname'); ?>" type="text" name="umbheadfld_Name" id="umbheadfld_Name" placeholder="John">
                            </p>
                            <p>
                                <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("work.cognome"); ?> *</label>
                                <input maxlength="50" data-required="1"  data-fieldtype="Text" required data-validation="custom" data-validation-regexp="^[a-zA-Zàèéòùì' \-]+$" data-validation-error-msg="<?php echo initConfig::getInstance()->getLang() -> getValue('work.errorsurname'); ?>" type="text" name="umbheadfld_Surname" id="umbheadfld_Surname" placeholder="Smith">
                            </p>
                            <p>
                                <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("work.mail"); ?> *</label>
                                <input maxlength="150" data-required=""  data-fieldtype="Email" required data-validation="email" data-validation-error-msg="<?php echo initConfig::getInstance()->getLang() -> getValue('work.errormail'); ?>" type="text" name="umbheadfld_E-mail" id="umbheadfld_E-mail" placeholder="johnsmith@email.com">
                            </p>
                        </div>
                        <div class="person_info">
                            <p>
                                <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("work.telefono"); ?></label>
                                <input maxlength="13" data-required="1" data-fieldtype="Text" data-validation-error-msg="<?php echo initConfig::getInstance()->getLang() -> getValue('work.errorphone'); ?>" data-validation="custom" data-validation-regexp="^(\+?[0-9]{0,13})$" data-validation-error-msg=" " type="text" name="umbheadfld_phone" id="umbheadfld_phone" placeholder="02 54 5845 85">
                            </p>
                            <p>
                                <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("work.titolo"); ?> *</label>
                                <input maxlength="50" data-required="1" data-fieldtype="Text" required data-validation="required" data-validation-error-msg=" " type="text" name="umbheadfld_title" id="umbheadfld_title" placeholder="Diploma, laurea, dottorato">
                            </p>
                        </div>
                        <div class="message_box">
                            <label for="message"><?php echo initConfig::getInstance()->getLang() -> getValue("work.messaggio"); ?> *</label>
                            <textarea maxlength="1500" id="txtarea"  data-required="1" name="umbheadfld_Message" required data-validation="required" data-validation-error-msg=" " id="umbheadfld_Message" placeholder="your message goes here..."></textarea>
                        </div>
                        <div class="upload-button">
                            <label class="upload-button">
                                <input id="fileupload" accept=".pdf,.doc,.docx,.odt" name="files[]"  type="file" />
                                <div id="file" style="line-height: 40px;"><?php echo initConfig::getInstance()->getLang() -> getValue("work.allegacv"); ?> *</div>
                                <div id="filesecond" style="line-height: 40px;" hidden ><?php echo initConfig::getInstance()->getLang() -> getValue("work.allegacv"); ?> *</div>
                                <input id="filename" name="umbheadfld_Filename" value="" data-validation="required" data-validation-error-msg=" " hidden/>
                                <input id="fileurl" name="umbheadfld_File" value="" data-validation="required" data-validation-error-msg=" " hidden/>
                            </label>
                           </div>
                        <br>
                        <p id="errorfile" hidden style="color:red; font-size: 13px;"><?php echo initConfig::getInstance()->getLang() -> getValue("work.caricarecv"); ?></p>
                          <br>
                        <!-- The global progress bar - start -->
                        <div id="progress" class="progress">
                            <div class="progress-bar progress-bar-success"  ></div>
                        </div>
                        <!-- The global progress bar - end -->
                        <div class="buttons">
                            <input type="submit" onclick="checkCaptcha()" value="<?php echo initConfig::getInstance()->getLang() -> getValue("work.inviobottone"); ?>"/>
                            <input type="reset" onclick="resetAll()" value="Reset">
                        </div>
                        <br>
                        <div style="float: right;">
                            <input id="robot" value="" value="valid" data-validation="required" data-validation-error-msg=" " hidden/>
                            <p id="errorfilecapctha" hidden style="color:red; font-size: 13px;"><?php echo initConfig::getInstance()->getLang() -> getValue("work.spuntare"); ?></p>
                        </div>
                        <br><br>
                        <div id="captcha" name="captcha" style="float: right;"  class="g-recaptcha" data-sitekey="6LdYlQMTAAAAAE3vq6JKhrOnx4mzHshf18DNbVZO"></div>
                    </form>
                    <div class="message_sent" id="message_sent" hidden ><?php echo initConfig::getInstance()->getLang() -> getValue("work.invio"); ?></div>
                    <div class="message_sent_error" id="message_sent_error" hidden ><?php echo initConfig::getInstance()->getLang() -> getValue("work.errore"); ?></div>
                    <div class="message_sent_error" id="message_type_error" hidden ></div>
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

                    .upload-button{
                        position: relative;
                        overflow: hidden;
                        margin: 10px 0 0 0;
                        width: 100%;
                        display: block;
                        height: 61px;
                        background: rgb(192, 0, 0);
                        border: none;
                        font-size: 20px;
                        text-align: center;
                        vertical-align: middle;
                        color: #fff;
                        text-transform: uppercase;
                        cursor: pointer;
                    }
                    .upload-button input[type=file]{
                        position: absolute;
                        top: 0;
                        right: 0;
                        margin: 0;
                        padding: 0;
                        font-size: 20px;
                        cursor: pointer;
                        opacity: 0;
                        filter: alpha(opacity=0);
                    }
                </style>

                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script type='text/javascript' src="<?php echo $url;?>/js/file-upload/vendor/jquery.ui.widget.js"></script>
                <script type='text/javascript' src="<?php echo $url;?>/js/file-upload/jquery.iframe-transport.js"></script>
                <script type='text/javascript' src="<?php echo $url;?>/js/file-upload/jquery.fileupload.js"></script>
                <script type='text/javascript' src="<?php echo $url;?>js/form-validator/jquery.form-validator.min.js"></script>
                <script type="text/javascript" src="<?php echo $url;?>js/workwithus_script.js"></script>
                <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

                <script>
                    $=jQuery;
                    $(function () {
                        'use strict';
                        $('#fileupload').fileupload({
                            url: host+"/ajax/uploadcv",
                            dataType: 'json',
                            maxFileSize: 7000000,
                            acceptFileTypes: '/\.(odt|docx?|pdf)$/i',
                            done: function (e, data) {
                                if(data.result.files[0].error){
                                    $("#fileurl").val("");
                                    $("#filename").val("");
                                    $("#message_sent").hide();
                                    $("#message_sent_error").hide();
                                    $('#progress .progress-bar').css(
                                        'width', 0
                                    );
                                    $("#filesecond").hide();
                                    $("#file").show();
                                    $("#file").text("<?php echo initConfig::getInstance()->getLang() -> getValue("work.allegacv"); ?>");
                                    $("#message_type_error").show(800,  function(){
                                        $("#message_type_error").text(data.result.files[0].error)
                                    }
                                    );
                                }else{
                                    $("#errorfile").hide();
                                    $("#fileurl").val(data.result.files[0].url);
                                    $("#filename").val(data.result.files[0].name);
                                    $("#message_type_error").hide();
                                    $("#filesecond").hide();
                                    $("#file").show();
                                    $("#file").text("<?php echo initConfig::getInstance()->getLang() -> getValue("work.fileupload.success"); ?>");
                                }
                            },
                            progressall: function (e, data) {
                                var progress = parseInt(data.loaded / data.total * 100, 10);
                                $('#progress .progress-bar').css(
                                    'width',
                                    progress + '%'
                                );
                            }
                        }).prop('disabled', !$.support.fileInput)
                            .parent().addClass($.support.fileInput ? undefined : 'disabled');
                    });

                    function checkCaptcha(){
                        if($('#g-recaptcha-response').val()){
                            $("#robot").val("valid");
                        }else{
                            $("#robot").val("");
                        }
                    };

                    function resetAll(){
                        $("#file").show();
                        $("#file").text("<?php echo initConfig::getInstance()->getLang() -> getValue("work.allegacv"); ?>");
                        $('#progress .progress-bar').css(
                            'width', 0
                        );
                        $("#errorfilecapctha").hide();
                        $("#errorfile").hide();
                        grecaptcha.reset();
                    };
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