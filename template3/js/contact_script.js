$ = jQuery;
jQuery(document).ready(function () {
    $.validate({
        form: '#contact_form',
        validateOnBlur : false,
        modules: 'security',
        onError: function () {
        },
        onSuccess: function () {
            jQuery.ajax({
                type: "POST",
                dataType: "json",
                url: host+'/ajax/sendemail/',
                data: $('#contact_form').serialize(),
                success: function (data) {
                    $valid = data.result;
                    if($valid){
                        $("#message_sent").show(500);
                        $("#message_sent_error").hide();
                    }else {
                        $("#message_sent_error").show(500);
                        $("#message_sent").hide();
                    }
                },
                error: function (){
                    $("#message_sent_error").show(500);
                    $("#message_sent").hide();
                }
            });
            /* $.ajax({
             type: 'post',
             url: host+'/ajax/sendemail/',
             data: $('#contact_form').serialize(),
             success: function () {

             $("#message_sent").show(500);
             },
             error: function (){
             $("#message_sent_error").show(500);
             }
             }); */
            return false;
        }
    });
});
