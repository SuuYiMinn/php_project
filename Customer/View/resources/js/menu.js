$(document).ready(function () {
    $("#dropdown_menu").hide();
    $("#menu").click(function () {
        $(this).hide();
        $("#dropdown_menu").show();

    })
    $("#dropdown_menu").click(function () {
        $(this).hide();
        $("#menu").show();
    })
    
})