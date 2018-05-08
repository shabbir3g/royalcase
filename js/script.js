(function ($) {
	"use strict";
		$(function() {
			
			
			$('.footer-one .footer-widgets:nth-child(1)').addClass('col-sm-6 col-md-2 col-lg-2');
			$('.footer-one .footer-widgets:nth-child(2)').addClass('col-sm-6 col-md-3 col-lg-3');
			$('.footer-one .footer-widgets:nth-child(3)').addClass('col-sm-6 col-md-2 col-lg-2');
			$('.footer-one .footer-widgets:nth-child(4)').addClass('col-sm-6 col-md-5 col-lg-5');
			
			
            $("#mySlider1").AnimatedSlider( { prevButton: "#btn_prev1", 
				 nextButton: "#btn_next1",
				 visibleItems: 3,
				 infiniteScroll: true,
				 willChangeCallback: function(obj, item) { $("#statusText").text("Will change to " + item); },
				 changedCallback: function(obj, item) { $("#statusText").text("Changed to " + item); }
			  });


            $("#mySlider2").AnimatedSlider( { prevButton: "#btn_prev2", 
				 nextButton: "#btn_next2",
				 visibleItems: 5,
				 infiniteScroll: true,
				 willChangeCallback: function(obj, item) { $("#statusText").text("Will change to " + item); },
				 changedCallback: function(obj, item) { $("#statusText").text("Changed to " + item); }
			  });
			  $(document).ready(function(){
			  
			  $('.warehousing-sliderss .owl-carousel').owlCarousel({
						loop:true,
						autoplay:true,
						video:true,
						autoplayHoverPause:true,
						margin:50,
						nav:false,
						responsiveClass:true,
						responsive:{
							0:{
								items:1
							},
							600:{
								items:1
							},
							1000:{
								items:1
							}
						}
					});
					
					var owls = $('.warehousing-sliderss .owl-carousel');
			owls.owlCarousel();
			$('a#customNextBtn').click(function() {
				owls.trigger('next.owl.carousel');
			})
			$('a#customPrevBtn').click(function() {
			
				owls.trigger('prev.owl.carousel', [300]);
			})
					
					
					
				 $('.manufacture-sliders .owl-carousel').owlCarousel({
						loop:true,
						autoplay:true,
						margin:50,
						nav:false,
						responsiveClass:true,
						responsive:{
							0:{
								items:1
							},
							600:{
								items:3
							},
							1000:{
								items:4
							}
						}
					});
					
						var owl = $('.manufacture-sliders .owl-carousel');
			owl.owlCarousel();
			// Go to the next item
			$('.customNextBtn').click(function() {
				owl.trigger('next.owl.carousel');
			})
			// Go to the previous item
			$('.customPrevBtn').click(function() {
				// With optional speed parameter
				// Parameters has to be in square bracket '[]'
				owl.trigger('prev.owl.carousel', [300]);
			})
			
			
			jQuery(function(){
			 var shrinkHeader = 200;
			  jQuery(window).scroll(function() {
				var scroll = getCurrentScroll();
				  if ( scroll >= shrinkHeader ) {
					   jQuery('.header-top-fixed').addClass('shrink');
					}
					else {
						jQuery('.header-top-fixed').removeClass('shrink');
					}
			  });
			function getCurrentScroll() {
				return window.pageYOffset || document.documentElement.scrollTop;
				}

			});
				  
			});
				
			
				
				
				
        });

}(jQuery));