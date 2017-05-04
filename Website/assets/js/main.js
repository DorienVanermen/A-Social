/**
 * Created by Andreea on 22/04/2017.
 */
//jQuery is required to run this code


$( document ).ready(function() {

    //navChange();
    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

function scaleVideoContainer() {

    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){

    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
        windowHeight = $(window).height() + 5,
        videoWidth,
        videoHeight;

    // console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
}


/* navbar change */

/*
function navChange() {
    //var heroHeight = document.getElementById('myHero').clientHeight;


    $(window).scroll(function() {

        if ($(document).scrollTop() > 250) {
            $(".navbar-fixed-top").css("background-color", "#007FA3");
            $(".navbar-default .navbar-nav > .active").css("color","#081F2C");
            $(".navbar-default .navbar-nav > .active").css("background-color","#007FA3");

            $(".navbar-default .navbar-nav > .active > a").css("color", "#ffffff");
            $(".navbar-default .navbar-nav > .active > a").css("background-color", "#081F2C");



/!*              $(".navbar-default .navbar-nav > li > a:hover").css("color","#ffffff");
            $(".navbar-default .navbar-nav > li > a:hover").css("background-color","#081F2C");

            $(".navbar-default .navbar-nav > li > a:focus").css("color","#ffffff");
            $(".navbar-default .navbar-nav > li > a:focus").css("background-color","#081F2C");*!/

        } else {
            $(".navbar-fixed-top").css("background-color", "transparent");
            $(".navbar-default .navbar-nav > .active").css("color","#007FA3");
            $(".navbar-default .navbar-nav > .active").css("background-color","transparent");

            $(".navbar-default .navbar-nav > .active > a").css("color","#007FA3");
            $(".navbar-default .navbar-nav > .active > a").css("background-color","transparent");

/!*            $(".navbar-default .navbar-nav > li > a:hover").css("color", "#007FA3");
            $(".navbar-default .navbar-nav > li > a:hover").css("background-color", "#transparent");

            $(".navbar-default .navbar-nav > li > a:focus").css("color", "#007FA3");
            $(".navbar-default .navbar-nav > li > a:focus").css("background-color", "#transparent");*!/


        }
    });
*/



/*----------------------- PARALLAX --------------------*/
/* to use: add data-type="background" data-speed="5"
* + must have background with fixed*/

$(function(){
    var $window = $(window);

    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this);

        $(window).scroll(function(){
            var yPos = -($window.scrollTop() /
            $bgobj.data('speed'));

            var coords='50% '+ yPos + 'px';

            $bgobject.css({ backgroundPosition: coords });
        });
    });
})

