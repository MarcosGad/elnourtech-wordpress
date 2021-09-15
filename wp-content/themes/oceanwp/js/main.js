jQuery(function ($) {

    'use strict';

	$('[placeholder]').focus(function(){

		$(this).attr('data-text', $(this).attr('placeholder'));

		$(this).attr('placeholder', '');

	}).blur(function(){

		$(this).attr('placeholder',$(this).attr('data-text'));

	});// this = [placeholder]

	
//navbar 
	
	
	    $(".dropdown-nav").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
	

// move carousel 

	
	$('.carousel').carousel({

         interval: false,

		 pause: null

       });

	$(".carousel").on("touchstart", function(event){

        var xClick = event.originalEvent.touches[0].pageX;

    $(this).one("touchmove", function(event){

        var xMove = event.originalEvent.touches[0].pageX;

        if( Math.floor(xClick - xMove) > 5 ){

            $(this).carousel('next');

        }

        else if( Math.floor(xClick - xMove) < -5 ){

            $(this).carousel('prev');

        }

    });

    $(".carousel").on("touchend", function(){

            $(this).off("touchmove");

    });

});

    // scroll to top 

    var scrollButton = $('.scrollTop');
/*
    $(window).scroll(function (){
        if($(this).scrollTop() >= 180 ) {
            scrollButton.show();
        }else {
            scrollButton.hide(); 
        }
    }); 
    
   $('.scrollTop').click(function(){
       $('body , html').animate({
           scrollTop : 0
       },500); 
   });

 */ 

   $('.scrollTop').click(function(){
       $('body , html').animate({
           scrollTop : 0
       },500); 
   });
   

  }); 
	







	

        