$ = jQuery;
jQuery(document).ready(function () {
    $(".linkLanguage").on("click", function(){
        var lang = $(this).attr("data-language");
        changeLanguage(lang);
    });
    function changeLanguage($lang){
        alert($lang);
        jQuery.ajax({
            type: "POST",
            dataType: "json",
            url: host + '/public/changeLang/',
            data: {"lingua" : $lingua},
            success: function (data) {
                $res = data.result;
                alert($res);
                //location.reload();
            },
            error: function () {
                alert("Error to change language");
            }
        });
    };
});