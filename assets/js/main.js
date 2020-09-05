/*********************************************************************************

	Version: 1.4

    Note: This is scripts js. All custom scripts here.

**********************************************************************************/

/*===============================================================================

    [ INDEX ]
	|
    |___ Touch Swipe mobile menu
    |___ Loading overlay
	|___ AOS Animate
	|___ Datepicker
	|___ ScrollUp
	|___
    |
	[END INDEX ]

================================================================================*/


"use strict";

$(document).ready(function() {

    //======= START Touch Swipe mobile menu ========

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
    }

    function toggleRightNav(bool) {
        $('.right_menu, .cd-overlay').toggleClass('is-visible', bool);
        $('main').toggleClass('scale-down', bool);
    }

    //======= END Touch Swipe mobile menu ========


    //======= START Loading overlay ========

    $(window).on('load', function () {
        $('.loading-overlay').fadeOut(100);
    });

    //======= END Loading overlay ========



    //======= START AOS Animate ========

    // Init AOS Animate On Scroll Library
    AOS.init({
        duration: 1200,
        startEvent: 'DOMContentLoaded',
        once: true,
    });

    //======= END AOS Animate ========

});


    //======= START Datepicker ========

    $(document).ready(function() {
        $('#reserv_date').datepicker();
    });

    $(document).ready(function() {
        $('#reserv_time').datetimepicker({
            format: 'LT'
        });
    });

    //======= END Datepicker ========


    //======= START ScrollUp ========

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

    //======= END ScrollUp ========
