(function ($) {

    $.fn.twitterfeed = function (options) {
        options = $.extend({}, $.fn.twitterfeed.defaultOptions, options);
        var main_element = $(this);
        var tweet_sample = $(this).find("div.tweet_sample");

        var livetweeter = function (container) {
            var twitter_search = $(container).attr("twitter_search");
            var counter = 0;
            var container = $(container);
            container.find("div.tweet").hide().eq(0).show();
            slide();
            function slide() {
                var next_tweet = container.find("div.tweet").eq(counter);
                if (next_tweet[0]) {
                    window.setTimeout(function () {
                        container.find("div.tweet:visible").fadeOut("normal", function () {
                            next_tweet.fadeIn("normal");
                            slide();
                        });
                    }, 5000);
                }
                else {
                    window.setTimeout(function () {
                        //addTweets();
                        slide();
                    }, 5000);
                }
                counter++;
            }

        };

        main_element.each(function () {
            var twitter_search = $(this).attr("twitter_search");
            //addTweets($(this),0,twitter_search);
            var twitterfedd = new livetweeter($(this));
        });
    };

})(jQuery);