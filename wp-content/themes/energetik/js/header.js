$(document).ready(function() {
    $("#header-bottom-item-mob-btn").on( "click", function() {
        $("#header-mobile").removeClass("d-none").removeClass("d-block")
    });
    $("#header-mobile-close-btn").on( "click", function() {
        $("#header-mobile").removeClass("d-block").addClass("d-none")
    });
});