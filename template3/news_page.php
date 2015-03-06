<?php
/**
 * Created by PhpStorm.
 * User: Enrico
 * Date: 19/02/15
 * Time: 2.07
 */


global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");

?>
<!DOCTYPE html>
<html lang="it-IT">
<head>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("header");
    ?>
    <title>Outsourcing - Advancia</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>


    <style>
        .outsourcing ul
        {
            list-style-type: circle;
            margin: 0;
            padding: 10px 0px 10px 20px;;
            font-size: 12px;
            color: #606060;
            line-height: 18px;
        }
        .outsourcing p
        {
            font-size: 12px;
            color: #606060;
            line-height: 18px;
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
                <h4><strong>Servizi</strong></h4>
            </div>
        </div><!--End Sub Header-->
        <div class="outsourcing who_we_are  col_04">
            <h1>News</h1>
            <!-- news 1 -->

            <div data-post="1" id="post-223" class="post-223 post type-post status-publish format-standard has-post-thumbnail hentry category-misc tag-way">
                <script>
                </script>
                <div class="post_content">
                    <div class="post_column_02">
                        <div style="width: 610px;height: auto;position: relative;background: rgba(18, 19, 23, 0.97);overflow: hidden;">
                            <img style="float: right; margin: 5px;width: 54%;margin-top: 15%;" src="http://www.asonentertainment.com/wp-content/uploads/2013/06/NEW.png" alt="#"/>
                            <div class="post_content_box">
                                <div class="post_title"><h1>Qualcosa di nuovo?</h1></div>
                                <div class="post_content_in">
                                    <p>
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog_post_info">
                            <div class="post_info_content">
                                <h1>Post Summary</h1>
                                <ul>
                                    <li>
                                        <h5>Date</h5>
                                        <p>20 January 2013, 04.19 AM</p>
                                    </li>
                                    <li>
                                        <h5>Posted by</h5>
                                        <p>admin</p>
                                    </li>
                                    <li>
                                        <h5>Posted on</h5>
                                        <p>
                                            Misc
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="share_post">
                                <div class="left"><p>You’re <strong>loving</strong> it? <strong>Share</strong> it with the others.</p></div>
                                <div class="share_buttons">
                                    <a href="" class="fb"><span></span>Share</a>
                                    <a href="" class="tw"><span></span>Tweet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- news 1 END -->

            <div style="padding: 3px;margin: 25px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;background: #C00000;position: relative; width: 96%;display: table;"></div>
            <!-- news 2 -->

            <div data-post="1" id="post-223" class="post-223 post type-post status-publish format-standard has-post-thumbnail hentry category-misc tag-way">
                <script>
                </script>
                <div class="post_content">
                    <div class="post_column_02">
                        <div style="width: 610px;height: auto;position: relative;background: rgba(18, 19, 23, 0.97);overflow: hidden;">
                            <img style="float: right; margin: 5px;width: 54%;margin-top: 15%;" src="http://www.asonentertainment.com/wp-content/uploads/2013/06/NEW.png" alt="#"/>
                            <div class="post_content_box">
                                <div class="post_title"><h1>Tutto molto nuovo, ma niente di vecchio?</h1></div>
                                <div class="post_content_in">
                                    <p>
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog_post_info">
                            <div class="post_info_content">
                                <h1>Post Summary</h1>
                                <ul>
                                    <li>
                                        <h5>Date</h5>
                                        <p>20 January 2013, 04.19 AM</p>
                                    </li>
                                    <li>
                                        <h5>Posted by</h5>
                                        <p>admin</p>
                                    </li>
                                    <li>
                                        <h5>Posted on</h5>
                                        <p>
                                            Misc
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="share_post">
                                <div class="left"><p>You’re <strong>loving</strong> it? <strong>Share</strong> it with the others.</p></div>
                                <div class="share_buttons">
                                    <a href="" class="fb"><span></span>Share</a>
                                    <a href="" class="tw"><span></span>Tweet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- news 2 END -->

            <div style="padding: 3px;margin: 25px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;background: #C00000;position: relative; width: 96%;display: table;"></div>
            <!-- news 3 -->

            <div data-post="1" id="post-223" class="post-223 post type-post status-publish format-standard has-post-thumbnail hentry category-misc tag-way">
                <script>
                </script>
                <div class="post_content">
                    <div class="post_column_02">
                        <div style="width: 610px;height: auto;position: relative;background: rgba(18, 19, 23, 0.97);overflow: hidden;">
                            <img style="float: right; margin: 5px;width: 54%;margin-top: 15%;" src="http://www.asonentertainment.com/wp-content/uploads/2013/06/NEW.png" alt="#"/>
                            <div class="post_content_box">
                                <div class="post_title"><h1>No assolutamente nietne di nuvo sotto il ponte!!</h1></div>
                                <div class="post_content_in">
                                    <p>
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                        lorem iasdansda a lskdjalkas asdas das dasdas as as a
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog_post_info">
                            <div class="post_info_content">
                                <h1>Post Summary</h1>
                                <ul>
                                    <li>
                                        <h5>Date</h5>
                                        <p>20 January 2013, 04.19 AM</p>
                                    </li>
                                    <li>
                                        <h5>Posted by</h5>
                                        <p>admin</p>
                                    </li>
                                    <li>
                                        <h5>Posted on</h5>
                                        <p>
                                            Misc
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="share_post">
                                <div class="left"><p>You’re <strong>loving</strong> it? <strong>Share</strong> it with the others.</p></div>
                                <div class="share_buttons">
                                    <a href="" class="fb"><span></span>Share</a>
                                    <a href="" class="tw"><span></span>Tweet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- news 3 END -->

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


