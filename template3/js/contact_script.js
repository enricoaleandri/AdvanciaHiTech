$(document).ready(function(){
    $(".um_form").submit(function(){
        var $var = $('[name="umbheadfld_Name"]').val();
        alert($var);
    });
});