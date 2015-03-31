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

    <style type="text/css">
        .member{
            background-color: #FFF;
        }
        .team-thumb {
            margin-top: 26px;
            width: 120px;
            text-align: center;
            -webkit-border-radius: 500px;
            -moz-border-radius: 500px;
            border-radius: 500px;
        }
        #team h3 {
            font-weight: normal;
            font-family: 'Patua One', cursive;
            font-size: 26px;
            margin-top: 24px;
            margin-bottom: 0px;
        }
        #team h3, .job-position {
            text-align: center;
        }
        #team .featurette {
            text-align: center;
            font-size: 21px;
        }
        #team h2.featurette-heading {
            margin-bottom: 24px;
        }
        .teamalign {
            text-align:center
        }
        .team-thumb {
            margin-top: 26px;

            width:120px;
            text-align:center;
            -webkit-border-radius: 500px;    -moz-border-radius: 500px;    border-radius: 500px;
        }
        .job-position {
            font-family: 'Open Sans', sans-serif;
            margin-bottom: .46155em;
        }

    </style>


    <link rel="stylesheet" id="patterns-css" href="<?php echo $url;?>css/bootstrap-responsive.css" type="text/css" media="all">
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

    <div class="inner_content"><!--Inner Content-->
        <div class="sub_header col_04 w_space"><!--Sub Header-->
            <div class="sub_header_content">
                <h4><strong><?php echo initConfig::getInstance()->getLang() -> getValue("team.azienda"); ?></strong></h4>
            </div>
        </div><!--End Sub Header-->

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
                                    <?php echo initConfig::getInstance()->getLang() -> getValue("team.testo"); ?>
                                </ul>
                            </span>
                        </div>
                        <div class="member_project">
                            <h1><?php echo initConfig::getInstance()->getLang() -> getValue("team.testo1"); ?></h1>
                        </div>
                    </div>
                    <div class="member col_01">
                        <div>
                            <span class="member_photo"><img style="width: 167px;"  src="<?php echo $url;?>images/avatar2.png"></span>
                            <span class="member_info">
                                 <ul style="float: none;">
                                     <?php echo initConfig::getInstance()->getLang() -> getValue("team.testo2"); ?>
                                 </ul>
                            </span>
                        </div>
                        <div class="member_project">
                            <h1><?php echo initConfig::getInstance()->getLang() -> getValue("team.testo3"); ?></h1>
                        </div>
                    </div>
                    <div class="member col_01">
                        <div>
                            <span class="member_photo"><img style="width: 167px;" src="<?php echo $url;?>images/avatar3.png"></span>
                            <span class="member_info">
                                 <ul style="float: none;">
                                     <?php echo initConfig::getInstance()->getLang() -> getValue("team.testo4"); ?>
                                 </ul>
                            </span>
                        </div>
                        <div class="member_project">
                            <h1><?php echo initConfig::getInstance()->getLang() -> getValue("team.testo5"); ?></h1>
                        </div>
                    </div>

                    <div class="member col_01">
                        <div>
                            <span class="member_photo"><img style="width: 167px;" src="<?php echo $url;?>images/avatar2.png"></span>
                            <span class="member_info">
                                 <ul style="float: none;">
                                     <?php echo initConfig::getInstance()->getLang() -> getValue("team.testo6"); ?>
                                 </ul>
                            </span>
                        </div>
                        <div class="member_project">
                            <font> <?php echo initConfig::getInstance()->getLang() -> getValue("team.testo7"); ?></font>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="team" class="gen_box col_04">
            <div class="row">
                <div class="span6">
                    <div class="teamalign"> <img class="team-thumb img-circle" src="<?php echo $url; ?>/images/CEO1.png"  alt=""> </div>
                    <h3>Giuseppe</h3>
                    <div class="job-position">CEO &amp; Founder</div>
                </div>
                <div class="span6">
                    <div class="teamalign"> <img class="team-thumb img-circle" src="<?php echo $url; ?>/images/CEO2.png" alt=""> </div>
                    <h3>Ugo</h3>
                    <div class="job-position">CEO &amp; Founder</div>
                </div>
            </div>
            <div class="row">

                <div class="span3">
                    <div class="teamalign"> <img class="team-thumb img-circle" src="<?php echo $url; ?>/images/DIP1.png" alt=""> </div>
                    <h3>Luigi</h3>
                    <div class="job-position">App developer</div>
                </div>

                <div class="span3">
                    <div class="teamalign"> <img class="team-thumb img-circle" src="<?php echo $url; ?>/images/DIP2.png" alt=""> </div>
                    <h3>Brunella</h3>
                    <div class="job-position">Copy Editor</div>
                </div>


                <div class="span3">
                    <div class="teamalign"> <img class="team-thumb img-circle" src="<?php echo $url; ?>/images/DIP3.png" alt=""> </div>
                    <h3>Alberto</h3>
                    <div class="job-position">Marketing researcher</div>
                </div>

                <div class="span3">
                    <div class="teamalign"> <img class="team-thumb img-circle" src="<?php echo $url; ?>/images/DIP4.png" alt=""> </div>
                    <h3>Enrico</h3>
                    <div class="job-position">Software Developer</div>
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
                        <p><?php echo initConfig::getInstance()->getLang() -> getValue("team.progettiattivi"); ?></p>
                    </div>
                    <div class="stat col_footer_02">
                        <img src="<?php echo $url;?>images/f1.png">
                        <h1>86</h1>
                        <p><?php echo initConfig::getInstance()->getLang() -> getValue("team.softwaredeveloped"); ?></p>
                    </div>
                    <div class="stat col_footer_02">
                        <img src="<?php echo $url;?>images/f3.png">
                        <h1>1215</h1>
                        <p><?php echo initConfig::getInstance()->getLang() -> getValue("team.caffe"); ?></p>
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


