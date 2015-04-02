function auto_slide(){
	jQuery(".rp_slider_nav").find("a.slide_prev").click();
	setTimeout(function(){
		auto_slide();
	},6000);
}

jQuery(document).ready(function ($) {



    $('blockquote').append('<span></span>');

    var allPanels = $('.accordion > ul > li > div').hide();

    $('.accordion li:first-child > div').show().addClass('active');
    $('.accordion li:first-child > a').addClass('selected_accordion');

    $('.accordion > ul > li > a').live("click", function (e) {
        e.preventDefault();
        $this = $(this);
        $target = $this.next();

        if (!$target.hasClass('active')) {
            $(this).parent().parent().find('.active').stop(true, true).slideUp(500).removeClass("active").siblings("a").removeClass("selected_accordion");
            $this.siblings("div").stop(true, true).slideDown(500).addClass("active");
            $(this).stop(true, true).addClass("selected_accordion");
        } else {
            $this.siblings("div").stop(true, true).slideUp(500).removeClass("active");
            $(this).stop(true, true).removeClass("selected_accordion");
        }

        return false;
    });

    $('a.close').live("click", function (e) {
        e.preventDefault();
        var element = $(this).parent();
        element.fadeOut("slow", function () {
            parent.remove();
        });
    });

    if ($("ul#slides").find("li").length < 2) {
        $("div.slider_nav").hide();
    }

    $("div.tabs_buttons").each(function () {
        $(this).find("a").eq(0).click();
    });

    $("div.filter_items a").click(function (e) {
        e.preventDefault();
        var dataid = $(this).data("id");
        if (dataid == "all") {
            $("div.project").fadeIn("normal");
            return false;
        }
		$("div.projects").find(".project").hide();
		$("div.projects").find(".project").each(function () {
			try {
				var categories = String($(this).data("termid"));
				if (categories) {
					categories = "[" + categories + "]";
					categories = $.parseJSON(categories);
					var categories = $.map(categories, function(k, v) {
						return [k];
					});
					if ($.inArray(dataid, categories) != -1) {
						$(this).fadeIn("fast");
					}
				}
			} catch (err) {

			}
		});
        /*$("div.project").fadeOut("normal", function () {
            $("div.project[data-termid='" + dataid + "']").fadeIn("normal");
        });*/
    });

});



(function ($) {

$(document).ready(function(){
    $("a.fb").live("click", function (e) {
        e.preventDefault();
        var url = $(this).attr("href");
        window.open("http://www.facebook.com/share.php?u=" + url, "Facebook_Share", "menubar=1,resizable=1,width=900,height=500");
    });

    $("a.tw").live("click", function (e) {
        e.preventDefault();
        var url = $(this).attr("href");
        window.open("https://twitter.com/share?url=" + url, "Tweet", "menubar=1,resizable=1,width=900,height=500");
    });

    $("a.pin").live("click", function (e) {
        e.preventDefault();
        var url = $(this).attr("href");
        var media = $(this).data("media");
        window.open("http://pinterest.com/pin/create/bookmarklet/?url=" + encodeURIComponent(url) + "&is_video=false&media=" + media, "Pinterest +", "menubar=1,resizable=1,width=900,height=500");
        return false;
    });

    $("div.tabs").each(function(){
        if($(this).hasClass("no-shortcode")){
            return;
        }
        var parent = $(this);
        var tabs = $(this).find("div.tab_box");
        $(tabs).each(function(){
            var title = $(this).find("h3.tab_title").text();
            parent.find("div.tabs_buttons").append("<a href='#'>"+title+"</a>");
        });
        parent.find("div.tab_box").hide();
        parent.find("div.tab_box").eq(0).show();
        parent.find(".tabs_buttons a").eq(0).addClass("selected_tab");
    });


	$(".tabs_buttons a").live("click",function (e) {
		e.preventDefault();
		if ($(this).hasClass("selected_tab"))
			return false;
		var current_tab = $(this).index();
        $(this).parent().find("a.selected_tab").removeClass("selected_tab");
		$(this).parent().parent().find(".tabs_boxes").find(".tab_box:visible").stop(true,true).fadeOut("fast", function () {
			$(this).parent().find(".tab_box").eq(current_tab).stop(true,true).fadeIn();
		});
		$(this).addClass("selected_tab");
	});

});

$(window).load(function () {

	$('.blog_image img, .image_slider ul li img').each( function() {
        if ($(this).width() > $(this).height()) {
           $(this).css("width", 620);
        } 
		else if($(this).width() < $(this).height()) {
            $(this).css("height", 392);
        }
    });

	$('.rp_image_preview img').each( function() {
        if ($(this).width() < $(this).height()) {
            $(this).css("width", '100%');
        } else {
            $(this).css("height", '100%');
        }
    });

	
	
	$(".filter_work > a").click(function (e) {
		e.preventDefault();
		if ($(this).parent().find(".filter_items").hasClass("hidden")) {
			$(this).parent().find(".filter_items").stop(true, true).slideDown().removeClass("hidden").addClass("visible");
		} else {
			$(this).parent().find(".filter_items").stop(true, true).slideUp().removeClass("visible").addClass("hidden");
		}
	});

	$(".center_element").each(function () {
		var width = $(this).width();
		var height = $(this).height();
		var containerWidth = $(".center_parent").width();
		var containerHeight = $(".center_parent").height();
		var minWidth = width - containerWidth;
		var minHeight = height - containerHeight;
		var center = minWidth / 2;
		var centerH = minHeight / 2;

		$(this).css("marginLeft", -center);
		$(this).css("marginTop", -centerH);
	});

	$(".center_element_v").each(function () {
		var height = $(this).height();
		var containerHeight = $(".center_parent_v").height();
		var minHeight = height - containerHeight;
		var centerH = minHeight / 2;

		$(this).css("marginTop", -centerH);
	});

	$("#slides li img, .blog_image > img, .rp_image_preview img").each(function () {
		var width = $(this).width();
		var height = $(this).height();
		var containerWidth = $(".image_slider, .blog_image, .rp_slider .slide").width();
		var containerHeight = $(".image_slider, .blog_image, .rp_slider .slide").height();
		var minWidth = width - containerWidth;
		var minHeight = height - containerHeight;
		var center = minWidth / 2;
		var centerH = minHeight / 2;

		$(this).css("marginLeft", -center);
		$(this).css("marginTop", -centerH);
	});

	var slides = $("#slides li");
	var slide_index = 0;
	$("#slides li").hide();
	$("#slides li").eq(0).show();

	$(".slider_nav a[data-dir='next']").click(function (e) {
		e.preventDefault();
		var cur_slide = $("#slides li:visible");
		var next_slide = $("#slides li:visible").next();
		var slideToIn;
		if (next_slide.length)
			slideToIn = next_slide;
		else
			slideToIn = $("#slides li").eq(0);

		cur_slide.fadeOut("fast", function () {
			slideToIn.fadeIn("fast");
		});
	});

	$(".slider_nav a[data-dir='prev']").click(function (e) {
		e.preventDefault();
		var cur_slide = $("#slides li:visible");
		var next_slide = $("#slides li:visible").prev();
		var slideToIn;
		if (next_slide.length)
			slideToIn = next_slide;
		else
			slideToIn = $("#slides li").eq(slides.length - 1);

		cur_slide.fadeOut("fast", function () {
			slideToIn.fadeIn("fast");
		});
	});

	var slides = $(".rp_slider .slide");
	var slide_index = 0;
	$(".rp_slider .slide").hide();
	$(".rp_slider .slide").eq(0).show();

	$(".rp_slider_nav a.slide_next").click(function (e) {
		e.preventDefault();
		var cur_slide = $(".rp_slider .slide:visible");
		var next_slide = $(".rp_slider .slide:visible").next();
		var slideToIn;
		if (next_slide.length)
			slideToIn = next_slide;
		else
			slideToIn = $(".rp_slider .slide").eq(0);

		cur_slide.fadeOut("fast", function () {
			slideToIn.fadeIn("fast");
		});
	});

	$(".rp_slider_nav a.slide_prev").click(function (e) {
		e.preventDefault();
		var cur_slide = $(".rp_slider .slide:visible");
		var next_slide = $(".rp_slider .slide:visible").prev();
		var slideToIn;
		if (next_slide.length)
			slideToIn = next_slide;
		else
			slideToIn = $(".rp_slider .slide").eq(slides.length - 1);

		cur_slide.fadeOut("fast", function () {
			slideToIn.fadeIn("fast");
		});
	});

});

})(jQuery)