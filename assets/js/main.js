/*********************************************************************************

	Version: 1.4

    Note: This is scripts js. All custom scripts here.

**********************************************************************************/

/*===============================================================================

    [ INDEX ]
	|
    |___ Mobile Menu
    |___ Loading overlay
	|___ AOS Animate
	|___ Datepicker
	|___ Scroll Up
	|___
    |
	[END INDEX ]

================================================================================*/


(function ($) {
    "use strict";


    //======= Mobile Menu Start ========
    //open left menu clicking the left menu icon
    $('.left_menu_icon').on('click', function(event){
        event.preventDefault();
        toggleLeftNav(true);
        $("body").css({'overflow':'hidden'});
    });
    
    //open right menu clicking the right menu icon
    $('.right_menu_icon').on('click', function(event){
        event.preventDefault();
        toggleRightNav(true);
        $("body").css({'overflow':'hidden'});
    });
    
    $('.cd-close-nav, .cd-overlay').on('click', function(event){
        event.preventDefault();
        toggleLeftNav(false);
        toggleRightNav(false);
        $("body").css({'overflow':'auto'});
    });

    //select a new section
    $('.cd-nav li').on('click', function(){

    });

    function toggleLeftNav(bool) {
        $('.left_menu, .cd-overlay').toggleClass('is-visible', bool);
        $('main').toggleClass('scale-down', bool);
    };

    function toggleRightNav(bool) {
        $('.right_menu, .cd-overlay').toggleClass('is-visible', bool);
        $('main').toggleClass('scale-down', bool);
    };
    //======= Mobile Menu End ========


    //======= Loading Overlay Start ========
    $(window).on('load', function () {
        $('.loading-overlay').fadeOut(100);
    });
    //======= Loading Overlay End ========


    //======= AOS Animate Start ========
    AOS.init({
        duration: 1200,
        startEvent: 'DOMContentLoaded',
        once: true,
    });
    //======= AOS Animate End ========


    //======= Banner Slider Start ========
    $('.banner-slider').slick({
        dots: true,
        arrows: false,
        infinite: true, 
        speed: 500,
        fade: false,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnFocus: false, 
    });
    //======= Banner Slider End ========


    //======= Datepicker Start ========
    $(document).ready(function() {
        $('#reserv_date').datepicker();
    });

    $(document).ready(function() {
        $('#reserv_time').datetimepicker({
            format: 'LT'
        });
    });
    //======= Datepicker End ========


    //======= Scroll Up Start ========
	$(document).on( 'scroll', function(){
		if ($(window).scrollTop() > 400) {
			$('.scroll-up').addClass('show');
		} else {
			$('.scroll-up').removeClass('show');
		}
	});

	$('.scroll-up').on('click', scrollToTop);
	 
	function scrollToTop() {
		var verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0,
		element = $('body'),
		offset = element.offset(),
		offsetTop = offset.top;
		$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
    }
    //======= Scroll Up End ========

})(jQuery);
