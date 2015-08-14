$(document).ready(function() {
    $(".link").focus(function() {
        $(".link").css("box-shadow", "none");
        $(".link").css("border-color", "#c6c6c6");
        $(".link").select();
    });
});