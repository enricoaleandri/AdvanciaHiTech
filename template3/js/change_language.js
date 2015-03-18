$ = jQuery;
jQuery(document).ready(function () {
    $(".linkLanguage").on("click", function(){
        var lang = $(this).attr("data-language");
        changeLanguage(lang);
    });
    function changeLanguage($lang){
        $lingua=$lang;
        jQuery.ajax({
            type: "POST",
            dataType: "json",
            url: host + '/public/changeLang/',
            data: {"lingua" : $lingua},
            success: function (data) {
                $res = data.result;
                console.log("Lingua cambiata");
            },
            error: function () {
                console.log("Errore nel cambiare la lingua");
            }
        });
    };
});