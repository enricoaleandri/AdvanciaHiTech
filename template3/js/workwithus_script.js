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
            jQuery.ajax({
                type: "POST",
                dataType: "json",
                url: host+'/ajax/workwithus/',
                data: $('#workwithus_form').serialize(),
                success: function (data) {
                    $valid = data.result;
                    if($valid){
                        $("#file").text('Allega cv');
                        $('#progress .progress-bar').css(
                            'width', 0
                        );
                        $("#message_sent").show(500);
                        $("#message_sent_error").hide();
                        $("input[type=text]").val('');
                        $("#txtarea").val('');
                        grecaptcha.reset();
                    }else {
                        $("#filename").val("");
                        $('#progress .progress-bar').css(
                            'width', 0
                        );
                        $("#file").text('Allega CV');
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
