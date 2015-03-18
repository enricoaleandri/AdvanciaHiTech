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
        <title>Advancia Technology</title>

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
        
        <?php
            initConfig::getInstance() -> getIncluder() -> includePage("bottom");
        ?>
        <!--Wrapper-->
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
        <div class="inner_content">
            <!--Inner Content-->
            <div class="sub_header col_04" style="padding: 20px;">
                <!--Sub Header-->
                <div class="sub_header_content">
                </div>
            </div>
            <!--End Sub Header-->
            <div class="latest_projects">
                <!--Latest Projects-->
                <div class="project col_01">
                    <!--Project-->
                    <a href="<?php echo $host;?>/public/systemint/">
                        <div class="project_preview">
                            <img width="300" src="<?php echo $url;?>images/Syste_integration.png" alt="System Integrator">
                        </div>
                        <div class="project_hover_info">
                        </div>
                    </a>
                    <div class="project_info">
                        <a href="<?php echo $host;?>/public/systemint/">
                        </a>
                        <h4 class="bold_typo"><a href="<?php echo $host;?>/public/systemint/"></a><a href="<?php echo $host;?>/public/systemint/"><?php echo initConfig::getInstance()->getLang() -> getValue("home.si"); ?></a></h4>
                        <p class="project_category"><span></span><?php echo initConfig::getInstance()->getLang() -> getValue("home.soluzioni"); ?></p>
                    </div>
                </div>
                <!--End Project-->
                <div class="project col_01">
                    <!--Project-->
                    <a href="<?php echo $host;?>/public/bi/">
                        <div class="project_preview">
                            <img  width="300"  src="<?php echo $url;?>images/bi-300x193.png" alt="Big Data">
                        </div>
                        <div class="project_hover_info">
                        </div>
                    </a>
                    <div class="project_info">
                        <a href="<?php echo $host;?>/public/bi/" >
                        </a>
                        <h4 class="bold_typo"><a href="<?php echo $host;?>/public/bi/"></a><a href="<?php echo $host;?>/public/bi/"><?php echo initConfig::getInstance()->getLang() -> getValue("home.bi"); ?></a></h4>
                        <p class="project_category"><span></span><?php echo initConfig::getInstance()->getLang() -> getValue("home.soluzioni"); ?></p>
                    </div>
                </div>
                <!--End Project-->
                <div class="project col_01">
                    <!--Project-->
                    <a href="<?php echo $host;?>/public/outsourcing/">
                        <div class="project_preview">
                            <img src="<?php echo $url;?>images/outsourcing-300x193.jpg" alt="OutSourcing">
                        </div>
                        <div class="project_hover_info">
                        </div>
                    </a>
                    <div class="project_info">
                        <a href="<?php echo $host;?>/public/outsourcing/">
                        </a>
                        <h4 class="bold_typo"><a href="<?php echo $host;?>/public/outsourcing/"></a><a href="<?php echo $host;?>/public/outsourcing/"><?php echo initConfig::getInstance()->getLang() -> getValue("home.os"); ?></a></h4>
                        <p class="project_category"><span></span><?php echo initConfig::getInstance()->getLang() -> getValue("home.servizi"); ?></p>
                    </div>
                </div>
                <!--End Project-->
                <div class="project col_01">
                    <!--Project-->
                    <a href="<?php echo $host;?>/public/workwithus/">
                        <div class="project_preview">
                            <img src="<?php echo $url;?>images/work-with-us-300x193.png" alt="Lavora con noi">
                        </div>
                        <div class="project_hover_info">
                        </div>
                    </a>
                    <div class="project_info">
                        <a href="<?php echo $host;?>/public/workwithus/">
                        </a>
                        <h4 class="bold_typo"><a href="<?php echo $host;?>/public/workwithus/"></a><a href="<?php echo $host;?>/public/workwithus/"><?php echo initConfig::getInstance()->getLang() -> getValue("home.lavoraconnoi"); ?></a></h4>
                        <p class="project_category"><span></span><?php echo initConfig::getInstance()->getLang() -> getValue("home.azienda"); ?></p>
                    </div>
                </div>
                <!--End Project-->
            </div>
            <!--End Latest Projects-->
            <div class="services_brief">
                <!--Services Brief-->

                <div class="content_slide_box">
                    <div class="content_slide_holder">
                        <div class="b_service col_01">
                            <!--Service-->
                            <a href="<?php echo $host;?>/public/solutions/">
                                <div class="b_service_content">
                                    <div class="service_icon center_parent"><img class="center_element" src="<?php echo $url;?>images/software.png" alt="Researching" style="margin-left: 18px; margin-top: 18px;"></div>
                                    <div class="service_info">
                                        <h2><?php echo initConfig::getInstance()->getLang() -> getValue("home.softsol"); ?></h2>
                                        <p class="bold_typo"><?php echo initConfig::getInstance()->getLang() -> getValue("home.soluzioni"); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--End Service-->
                        <div class="b_service col_01">
                            <!--Service-->
                            <a href="<?php echo $host;?>/public/bigdata/">
                                <div class="b_service_content">
                                    <div class="service_icon center_parent"><img class="center_element" src="<?php echo $url;?>images/gear.png" alt="Researching" style="margin-left: 18.5px; margin-top: 18px;"></div>
                                    <div class="service_info">
                                        <h2><?php echo initConfig::getInstance()->getLang() -> getValue("home.bigdata"); ?></h2>
                                        <p class="bold_typo"><?php echo initConfig::getInstance()->getLang() -> getValue("home.soluzioni"); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--End Service-->
                        <div class="b_service col_01">
                            <!--Service-->
                            <a href="<?php echo $host;?>/public/team/">
                                <div class="b_service_content">
                                    <div class="service_icon center_parent"><img class="center_element" src="<?php echo $url;?>images/people.png" alt="Technology" style="margin-left: 18px; margin-top: 18px;"></div>
                                    <div class="service_info">
                                        <h2><?php echo initConfig::getInstance()->getLang() -> getValue("home.team"); ?></h2>
                                        <p class="bold_typo"><?php echo initConfig::getInstance()->getLang() -> getValue("home.azienda"); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--End Service-->
                        <div class="b_service col_01">
                            <!--Service-->
                            <a href="<?php echo $host;?>/public/corsi/">
                                <div class="b_service_content">
                                    <div class="service_icon center_parent"><img class="center_element" src="<?php echo $url;?>images/course.png" alt="Mobile Apps" style="margin-left: 18.5px; margin-top: 18px;"></div>
                                    <div class="service_info">
                                        <h2><?php echo initConfig::getInstance()->getLang() -> getValue("home.corsi"); ?></h2>
                                        <p class="bold_typo"><?php echo initConfig::getInstance()->getLang() -> getValue("home.servizi"); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--End Service-->
                    </div>
                </div>
            </div>
            <!--End Services Brief-->
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