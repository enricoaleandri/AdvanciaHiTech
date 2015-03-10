$(document).ready(function(){
    $(".um_form").submit(function(){
        var $var = $('[name="nome"]').val();
        alert($var);
    });
});