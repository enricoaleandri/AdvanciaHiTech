<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enrico
 * Date: 19/12/14
 * Time: 19.20
 * To change this template use File | Settings | File Templates.
 */


global $response;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");

$settings = initConfig::getInstance()->getSettings();

echo $settings['google_analytics_javascript'];
?>


<script>
    (function ($) {

        $(window).load(function () {
            if($(".content_slide_box").width() == 1230) {
                if ($(".services_brief").find(".b_service").length > 4) {
                    $(".services_brief a.service_prev, .services_brief a.service_next").show();
                } else if ($(".comp_stats").find(".stat").length <= 4) {
                    $(".services_brief a.service_prev, .services_brief a.service_next").hide();
                }

                $(".services_brief").serialScroll({
                    target:'.content_slide_box',
                    items:'.b_service',
                    prev:'a.service_prev',
                    next:'a.service_next',
                    margin: false,
                    axis:'xy',
                    duration:700,
                    force:true,
                    exclude: 3
                });
            } else if($(".content_slide_box").width() == 920) {
                if ($(".services_brief").find(".b_service").length > 3) {
                    $(".services_brief a.service_prev, .services_brief a.service_next").show();
                } else if ($(".comp_stats").find(".stat").length <= 3) {
                    $(".services_brief a.service_prev, .services_brief a.service_next").hide();
                }

                $(".services_brief").serialScroll({
                    target:'.content_slide_box',
                    items:'.b_service',
                    prev:'a.service_prev',
                    next:'a.service_next',
                    margin: false,
                    axis:'xy',
                    duration:700,
                    force:true,
                    exclude: 2
                });
            } else if($(".content_slide_box").width() == 610) {
                if ($(".services_brief").find(".b_service").length > 2) {
                    $(".services_brief a.service_prev, .services_brief a.service_next").show();
                } else if ($(".comp_stats").find(".stat").length <= 2) {
                    $(".services_brief a.service_prev, .services_brief a.service_next").hide();
                }

                $(".services_brief").serialScroll({
                    target:'.content_slide_box',
                    items:'.b_service',
                    prev:'a.service_prev',
                    next:'a.service_next',
                    margin: false,
                    axis:'xy',
                    duration:700,
                    force:true,
                    exclude: 1
                });
            } else if($(".content_slide_box").width() == 300) {
                if ($(".services_brief").find(".b_service").length > 1) {
                    $(".services_brief a.service_prev, .services_brief a.service_next").show();
                } else if ($(".comp_stats").find(".stat").length <= 1) {
                    $(".services_brief a.service_prev, .services_brief a.service_next").hide();
                }

                $(".services_brief").serialScroll({
                    target:'.content_slide_box',
                    items:'.b_service',
                    prev:'a.service_prev',
                    next:'a.service_next',
                    margin: false,
                    axis:'xy',
                    duration:700,
                    force:true,
                    exclude: 0
                });
            }
        });

    })(jQuery)
</script>


<script  type="text/javascript" src="./js/comment-reply.min.js"></script>


<?php

echo $settings['live_helper_chat_javascript'];

?>

