<?php
global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$activePage = "social";

?>
<!DOCTYPE html>
<html lang="it-IT">
<head>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("header");
    ?>
    <title>Team - Advancia</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>


    <style>
        .member{
            background-color: #FFF;
        }

    </style>
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
        <div class="team gen_box col_04">
            <h1>Team</h1>
            <p>

            </p>
        </div>
        <div class="team">
            <a class="service_prev" href="#" style="display: none;"></a>
            <a class="service_next" href="#" style="display: none;"></a>
            <div class="content_slide_box">
                <div class="content_slide_holder">
                    <div class="member col_01">
                        <div>
                            <span class="member_photo"><img style="width: 167px;"  src="<?php echo $url;?>images/avatar1.png"></span>
                            <span class="member_info">
                                <ul style="float: none;">
                                    <li>J2EE</li>
                                    <li>Tomcat</li>
                                    <li>Hibernate</li>
                                    <li>Javascript</li>
                                    <li>Jquery</li>
                                    <li>AJAX</li>
                                    <li>HTML5</li>
                                    <li>CSS3</li>
                                </ul>
                            </span>
                        </div>
                        <div class="member_project">
                            <h1>9 progetti (10 anni)</h1>
                        </div>
                    </div>
                    <div class="member col_01">
                        <div>
                            <span class="member_photo"><img style="width: 167px;"  src="<?php echo $url;?>images/avatar2.png"></span>
                            <span class="member_info">
                                 <ul style="float: none;">
                                     <li>Oracle</li>
                                     <li>Business Intelligence</li>
                                     <li>BO</li>
                                     <li>PostgreSQL</li>
                                     <li>MongoDB</li>
                                 </ul>
                            </span>
                        </div>
                        <div class="member_project">
                            <h1>5 progetti (3 anni)</h1>
                        </div>
                    </div>
                    <div class="member col_01">
                        <div>
                            <span class="member_photo"><img style="width: 167px;" src="<?php echo $url;?>images/avatar3.png"></span>
                            <span class="member_info">
                                 <ul style="float: none;">
                                     <li>AngularJS</li>
                                     <li>Polymer</li>
                                     <li>Android</li>
                                     <li>Jquery</li>
                                     <li>Mootools</li>
                                     <li>HTML5</li>
                                     <li>CSS3</li>
                                 </ul>
                            </span>
                        </div>
                        <div class="member_project">
                            <h1>3 progetti (2 anni)</h1>
                        </div>
                    </div>

                    <div class="member col_01">
                        <div>
                            <span class="member_photo"><img style="width: 167px;" src="<?php echo $url;?>images/avatar2.png"></span>
                            <span class="member_info">
                                 <ul style="float: none;">
                                     <li>PHP5</li>
                                     <li>MySQL</li>
                                     <li>AngularJS</li>
                                     <li>Jquery</li>
                                     <li>HTML5</li>
                                     <li>CSS3</li>
                                 </ul>
                            </span>
                        </div>
                        <div class="member_project">
                            <font>8 progetti(5 anni)</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comp_stats">
            <a class="comp_prev" href="#" style="display: none;"></a>
            <a class="comp_next" href="#" style="display: none;"></a>
            <div class="comp_slide_box">
                <div class="comp_slide_holder">
                    <div class="stat col_footer_02">
                        <img src="<?php echo $url;?>images/f2.png">
                        <h1>30</h1>
                        <p>Progetti atttivi</p>
                    </div>
                    <div class="stat col_footer_02">
                        <img src="<?php echo $url;?>images/f1.png">
                        <h1>86</h1>
                        <p>Softwares developed</p>
                    </div>
                    <div class="stat col_footer_02">
                        <img src="<?php echo $url;?>images/f3.png">
                        <h1>1215</h1>
                        <p>Caffe bevuti in una settimana</p>
                    </div>
                </div>
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


