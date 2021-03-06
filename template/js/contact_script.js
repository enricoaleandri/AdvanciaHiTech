$ = jQuery;
jQuery(document).ready(function () {
    $.validate({
        form: '#contact_form',
        validateOnBlur : false,
        modules: 'security',
        onError: function () {
            if($("#robot").val()==""){
                $("#errorfilecapctha").show();
                $("#message_sent_error").hide();
                $("#message_sent").hide();
            }else{
                $("#errorfilecapctha").hide();
                $("#message_sent_error").hide();
                $("#message_sent").hide();
            }
        },
        onSuccess: function () {
            jQuery.ajax({
                type: "POST",
                dataType: "json",
                url: host+'/ajax/contactus/',
                data: $('#contact_form').serialize(),
                success: function (data) {
                    $valid = data.result;
                    if($valid){
                        $("input[type=text]").val('');
                        $("#txtarea").val('');
                        grecaptcha.reset();
                        $("#errorfilecapctha").hide();
                        $("#message_sent").show(500);
                        $("#message_sent_error").hide();
                    }else {
                        $("#errorfilecapctha").hide();
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
