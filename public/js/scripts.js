/**
 * Created by Flow on 6/4/2017.
 */

$(document).ready(function () {
    var height = $(window).height();
    $('#header-public').css('height', height / 1.5);
});

$(window).resize(function () {
    var height = $(window).height();
    $('#header-public').css('height', height / 1.5);
});

$(window).scroll(function () {
    if ($(window).scrollTop() > 1) {
        $('.navbar').addClass("sticky");

    }
    else {
        $('.navbar').removeClass("sticky");
    }
});