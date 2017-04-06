/**
 * Created by Flow on 6/4/2017.
 */

$(document).ready(function () {
    $('.parallax-window').parallax({
        imageSrc: '../images/header.png'
    });

    var height = $(window).height();

    $('#header-public').css('height', height / 1.5);
});

$(window).resize(function () {
    var height = $(window).height();

    $('#header-public').css('height', height / 1.5);

});