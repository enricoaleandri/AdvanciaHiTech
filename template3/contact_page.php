<?php
    global $response,$activePage;
    $url =  $response -> getProperty("url");
    $host =  $response -> getProperty("host");
    $settings = initConfig::getInstance()->getSettings();

?>
<!DOCTYPE html>
<html lang="it-IT">
<head>

    <?php
        initConfig::getInstance() -> getIncluder() -> includePage("header");
    ?>

    <?php
        initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>

    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;ver=1.0'></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=<?php echo strtolower(initConfig::getInstance()-> getLang() -> getLang()) ?>'></script>
    <title><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.contatti"); ?></title>
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

            <?php
            initConfig::getInstance() -> getIncluder() -> includePage("social_button");
            ?>
        </div>
        <!--End Header Tools-->
    </div>
</div>
<!--End Header-->
<div class="inner_content">
    <!--Inner Content-->
    <div class="sub_header col_04 w_space">
        <!--Sub Header-->
        <h4 ><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.contatti"); ?></h4>
    </div>
    <!--End Sub Header-->
    <div class="map_filed col_02">
        <div id="map">
            <script>
                /* Google Map */

                var map;

                function addMarker(location) {
                    marker = new google.maps.Marker({
                        position: location,
                        map: map
                    });
                }

                function initialize() {

                    var stylez = [
                        {
                            featureType: "all",
                            elementType: "all",
                            stylers: [
                                { saturation: -100 }
                            ]
                        }
                    ];

                    var myLatlng = new google.maps.LatLng(45.45147, 9.173879999999999);
                    var mapOptions = {
                        zoom: 12,
                        center: myLatlng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        mapTypeControl: false,
                        mapTypeControlOptions: {
                            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'grey']
                        },
                        zoomControl: true,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.SMALL
                        }
                    };

                    map = new google.maps.Map(document.getElementById('map'), mapOptions);
                    var mapType = new google.maps.StyledMapType(stylez, { name: "Grayscale" });
                    map.mapTypes.set('grey', mapType);
                    map.setMapTypeId('grey');

                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        title:"<?php echo $settings['office_address'];?>"
                    });

                };

                google.maps.event.addDomListener(window, 'load', initialize);

                /* Google Map */

            </script>
        </div>
        <div class="map_info">
            <div class="location">
                <h5><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.location"); ?></h5>
                <p><?php echo $settings['office_address'];?>
                </p>
            </div>
            <div class="contact_info">
                <h5><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.info"); ?></h5>
                <p class="mobile"><strong>Mobile:</strong> <?php echo $settings['comunication_number'];?></p>
                <p class="mobile"><strong>Email:</strong> <a href="mailto:<?php echo $settings['comunication_mail']; ?>"><?php echo $settings['comunication_mail']; ?></a></p>
            </div>
        </div>
    </div>
    <div class="contact_form_field col_02">
        <div class="contact_title">
            <h1><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.contattaci"); ?></h1>
        </div>
        <p style="color: #8e8e8e;font-size: 13px;margin-left: 30px;" >* Campi obbligatori</p>
        <div class="contact_form" >
            <form action="<?php echo $host;?>/ajax/contactus/" method="post" id="contact_form" class="um_form">
                <div class="person_info">
                    <p>
                        <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.nome"); ?></label>
                       <input maxlength="50" data-required="1" data-fieldtype="Text"  required data-validation="custom" data-validation-regexp="^[a-zA-Zàèéòùì' \-]+$" data-validation-error-msg="<?php echo initConfig::getInstance()->getLang() -> getValue('contatti.errorname'); ?>"   type="text" name="umbheadfld_Name" id="umbheadfld_Name" placeholder="John">
                    </p>
                    <p>
                        <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.cognome"); ?></label>
                        <input maxlength="50" data-required="1" data-fieldtype="Text" required data-validation="custom" data-validation-regexp="^[a-zA-Zàèéòùì' \-]+$" data-validation-error-msg="<?php echo initConfig::getInstance()->getLang() -> getValue('contatti.errorsurname'); ?>"  type="text" name="umbheadfld_Surname" id="umbheadfld_Surname" placeholder="Smith">
                    </p>
                    <p>
                        <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.mail"); ?></label>
                        <input maxlength="150" data-required="" data-fieldtype="Email" required data-validation="email" data-validation-error-msg="<?php echo initConfig::getInstance()->getLang() -> getValue('contatti.errormail'); ?>"  type="text" name="umbheadfld_E-mail" id="umbheadfld_E-mail" placeholder="johnsmith@email.com">
                    </p>
                </div>
                <div class="person_info">
                    <p>
                        <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.telefono"); ?></label>
                        <input maxlength="13" data-required="1" data-fieldtype="Text"  type="text" data-validation-error-msg="<?php echo initConfig::getInstance()->getLang() -> getValue('contatti.errorphone'); ?>" data-validation="custom" data-validation-regexp="^(\+?[0-9]{0,13})$" name="umbheadfld_phone" id="umbheadfld_phone" placeholder="02 54 5845 85">
                    </p>
                    <p>
                        <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.societa"); ?></label>
                        <input maxlength="200" data-required="1" data-fieldtype="Text" required type="text" data-validation-error-msg=" " data-validation="required"  name="umbheadfld_company" id="umbheadfld_company" placeholder="Facebook inc">
                    </p>
                    <p>
                        <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.fax"); ?></label>
                        <input maxlength="13" data-required="1" data-fieldtype="Email" data-validation-error-msg="<?php echo initConfig::getInstance()->getLang() -> getValue('contatti.errorfax'); ?>" data-validation="custom" data-validation-regexp="^(\+?[0-9]{0,13})$" type="text" name="umbheadfld_Fax" id="umbheadfld_Fax-mail" placeholder="02 5485 698">
                    </p>
                </div>
                <div class="person_info">
                    <p>
                        <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.indirizzo"); ?></label>
                        <input maxlength="500" data-required="1" data-fieldtype="Text" required data-validation-error-msg=" "  type="text" data-validation="required" name="umbheadfld_Address" id="umbheadfld_Address" placeholder="Via dell'aria 2">
                    </p>
                    <p>
                        <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.cap"); ?></label>
                        <input data-required="1" data-fieldtype="Text" required data-validation-error-msg="<?php echo initConfig::getInstance()->getLang() -> getValue('contatti.errorcap'); ?>"  type="text" maxlength="5" data-validation="custom" data-validation-regexp="^([0-9]{5})$" name="umbheadfld_Cap" id="umbheadfld_Cap-mail" placeholder="20139">
                    </p>
                    <p>
                        <label for="name"><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.citta"); ?></label>
                        <input maxlength="60" data-required="1" data-fieldtype="Text" required data-validation-error-msg="<?php echo initConfig::getInstance()->getLang() -> getValue('contatti.errorcity'); ?>"  data-validation="custom" data-validation-regexp="^[a-zA-Zàèéòùì' ]+$" type="text" name="umbheadfld_City" id="umbheadfld_City" placeholder="Milano">
                    </p>
                </div>
                <div class="message_box">
                    <label for="message"><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.messaggio"); ?></label>
                    <textarea maxlength="1500" id="txtarea" data-required="1" name="umbheadfld_Message" id="umbheadfld_Message" placeholder="your message goes here..."></textarea>
                </div>
                <div class="buttons">
                    <input type="submit" onclick="checkCaptcha()" value="<?php echo initConfig::getInstance()->getLang() -> getValue("contatti.invia"); ?>"/>
                    <input id="reset" onclick="resetAll()" type="reset" value="<?php echo initConfig::getInstance()->getLang() -> getValue("contatti.reset"); ?>">
                </div>
                <br>
                <div style="float: right;">
                    <input id="robot" value="" value="valid" data-validation="required" data-validation-error-msg=" " hidden/>
                    <p id="errorfilecapctha" hidden style="color:red; font-size: 13px;"><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.spuntare"); ?></p>
                </div>
                <br><br>
                <div id="captcha" style="float: right;"  class="g-recaptcha" data-sitekey="6LdYlQMTAAAAAE3vq6JKhrOnx4mzHshf18DNbVZO"></div>
            </form>
            <div class="message_sent" id="message_sent" hidden ><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.messaggioinvio"); ?></div>
            <div class="message_sent_error" id="message_sent_error" hidden ><?php echo initConfig::getInstance()->getLang() -> getValue("contatti.messaggioerrore"); ?></div>
        </div>

       <style>
            .error {
                border: 1px solid #E72259 !important;
            }
        </style>

        <!--script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script-->
        <script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>
        <script type='text/javascript' src="<?php echo $url;?>js/form-validator/jquery.form-validator.min.js"></script>
        <script type="text/javascript" src="<?php echo $url;?>js/contact_script.js"></script>

        <script>
            $=jQuery;
            function checkCaptcha(){
                if($('#g-recaptcha-response').val()){
                    $("#robot").val("valid");
                }else{
                    $("#robot").val("");
                }
            };
            function resetAll(){
                $("#errorfilecapctha").hide();
                grecaptcha.reset();
            };
        </script>

    </div>
</div>
<!--End Inner Content-->

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

