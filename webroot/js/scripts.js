

$( document ).ready(function() {
    var footerHeight = parseInt($('footer').css('height'))+200;
    $("#body").css("padding-bottom", footerHeight+'px');
});