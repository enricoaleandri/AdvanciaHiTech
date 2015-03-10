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
    <title>Contatti</title>

    <?php
        initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>

    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;ver=1.0'></script>

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
                    <li><a href="" class="websymbols">F</a></li>
                    <li><a href="" class="websymbols">t</a></li>
                    <li><a href="" class="websymbols">g</a></li>
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
<div class="inner_content">
    <!--Inner Content-->
    <div class="sub_header col_04 w_space">
        <!--Sub Header-->
        <h3 class="bold_typo uppercase page_title">Contact</h3>
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
                        zoom: 8,
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
                <h5>Location</h5>
                <p><?php echo $settings['office_address'];?>
                </p>
            </div>
            <div class="contact_info">
                <h5>Info Contatti</h5>
                <p class="mobile"><strong>Mobile</strong> <?php $settings['comunication_number'];?></p>
                <p class="mobile"><strong>Fax</strong> 00377 44 111 222</p>
            </div>
        </div>
    </div>
    <div class="contact_form_field col_02">
        <div class="contact_title">
            <h1>Contact Form</h1>
        </div>
        <div class="contact_form">
            <form action="#" method="post"  class="um_form">
                <div class="person_info">
                    <p>
                        <label for="name">Nome</label>
                        <input data-required="1" data-fieldtype="Text" type="text" name="umbheadfld_Name" id="umbheadfld_Name" placeholder="John">
                    </p>
                    <p>
                        <label for="name">Cognome</label>
                        <input data-required="1" data-fieldtype="Text" type="text" name="umbheadfld_Surname" id="umbheadfld_Surname" placeholder="Smith">
                    </p>
                    <p>
                        <label for="name">E-mail</label>
                        <input data-required="" data-fieldtype="Email" type="text" name="umbheadfld_E-mail" id="umbheadfld_E-mail" placeholder="johnsmith@email.com">
                    </p>
                </div>
                <div class="person_info">
                    <p>
                        <label for="name">Telefono</label>
                        <input data-required="1" data-fieldtype="Text" type="text" name="umbheadfld_phone" id="umbheadfld_phone" placeholder="02 54 5845 85">
                    </p>
                    <p>
                        <label for="name">Società di appartenenza</label>
                        <input data-required="1" data-fieldtype="Text" type="text" name="umbheadfld_company" id="umbheadfld_company" placeholder="Facebook inc">
                    </p>
                    <p>
                        <label for="name">Fax</label>
                        <input data-required="" data-fieldtype="Email" type="text" name="umbheadfld_Fax" id="umbheadfld_Fax-mail" placeholder="02 5485 698">
                    </p>
                </div>
                <div class="person_info">
                    <p>
                        <label for="name">Indirizzo</label>
                        <input data-required="1" data-fieldtype="Text" type="text" name="umbheadfld_Address" id="umbheadfld_Address" placeholder="Via dell'aria 2">
                    </p>
                    <p>
                        <label for="name">Cap</label>
                        <input data-required="1" data-fieldtype="Text" type="text" name="umbheadfld_Cap" id="umbheadfld_Cap-mail" placeholder="20139">
                    </p>
                    <p>
                        <label for="name">Citta</label>
                        <input data-required="" data-fieldtype="Text" type="text" name="umbheadfld_City" id="umbheadfld_City" placeholder="Milano">
                    </p>
                </div>
                <div class="message_box">
                    <label for="message">Message</label>
                    <textarea data-required="1" name="umbheadfld_Message" id="umbheadfld_Message" placeholder="your message goes here..."></textarea>
                </div>
                <div class="buttons">
                    <input type="submit"  value="Send Message"/>
                    <input type="reset" value="Reset">
                </div>
            </form>
            <div class="message_sent" style="display: none">Il tuo messaggio è stato inviato correttamente</div>
        </div>

        <style>
            .error {
                border: 1px solid #E72259 !important;
            }
        </style>
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

