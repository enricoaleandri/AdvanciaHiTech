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
                <h4><strong>Azienda</strong></h4>
            </div>
        </div><!--End Sub Header-->
        <div class=" col_04">
            <div class="contact_form_field">
                <div class="contact_title">
                    <h1>Lavora con noi</h1>
                    <p>
                        Mandaci la tua candidatura spontanea. Ti ricontatteremo noi!
                    </p>
                </div>
                <div class="contact_form">
                    <form action="#" method="post" class="um_form">
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
                                <label for="name">Titolo di studio</label>
                                <input data-required="1" data-fieldtype="Text" type="text" name="umbheadfld_company" id="umbheadfld_company" placeholder="Facebook inc">
                            </p>
                        </div>
                        <div class="message_box">
                            <label for="message">Message</label>
                            <textarea data-required="1" name="umbheadfld_Message" id="umbheadfld_Message" placeholder="your message goes here..."></textarea>
                        </div>
                        <div class="buttons">
                            <input type="submit" value="CV" style="width: 100%;height: 70px;"/>
                        </div>
                        <div class="buttons">
                            <input type="submit" value="Send Curriculum"/>
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