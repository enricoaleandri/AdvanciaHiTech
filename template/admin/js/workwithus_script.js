$ = jQuery;
jQuery(document).ready(function () {
    $.validate({
        form: '#workwithus_form',
        validateOnBlur : false,
        modules: 'security',
        onError: function () {
            if($("#fileurl").val()==""){
                $("#errorfile").show();
                $("#message_sent_error").hide();
                $("#message_sent").hide();
            }
            if($("#robot").val()==""){
                $("#errorfilecapctha").show();
                $("#message_sent_error").hide();
                $("#message_sent").hide();
            }
            if($("#robot").val()!="") {
                $("#errorfilecapctha").hide();
                $("#message_sent_error").hide();
                $("#message_sent").hide();
            }
            if( $("#fileurl").val()!=""){
                $("#message_sent_error").hide();
                $("#message_sent").hide();
            }
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
                        $("#filesecond").show();
                        $("#file").hide();
                        $('#progress .progress-bar').css(
                            'width', 0
                        );
                        $("#message_sent").show(500);
                        $("#errorfilecapctha").hide();
                        $("#message_sent_error").hide();
                        $("input[type=text]").val('');
                        $("#txtarea").val('');
                        $("#fileurl").val("");
                        $("#filename").val("");
                        grecaptcha.reset();
                    }else {
                        $("#fileurl").val("");
                        $("#filename").val("");
                        $('#progress .progress-bar').css(
                            'width', 0
                        );
                        $("#filesecond").show();
                        $("#errorfilecapctha").hide();
                        $("#file").hide();
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
