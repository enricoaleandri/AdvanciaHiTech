$ = jQuery;
jQuery(document).ready(function () {
    $.validate({
        form: '#workwithus_form',
        validateOnBlur : false,
        modules: 'security',
        onError: function () {
            $("#message_sent_error").hide();
            $("#message_sent").hide();
        },
        onSuccess: function () {

            $formData = new FormData($('#workwithus_form')[0]);

            jQuery.ajax({
                type: "POST",
                dataType: "json",
                url: host+'/ajax/workwithus/',
                data: $formData,
                success: function (data) {
                    $valid = data.result;
                    if($valid){
                        $("#message_sent").show(500);
                        $("#message_sent_error").hide();
                        $("input[type=text]").val('');
                        $("#txtarea").val('');
                        grecaptcha.reset();
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
            return false;
        }
    });
});
