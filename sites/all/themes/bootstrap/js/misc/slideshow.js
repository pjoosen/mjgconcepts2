(function ($) {

$( document ).ready(function() {
	
	$('#carousel-generic').carousel({
		  interval: 12500
		});
	
	$('.slide_caption .inner').html($('#carousel-generic .carousel-inner .item.active .slide_text').html());
	
	
    $('#carousel-generic').on('slide.bs.carousel', function () { 
    	
    	$('.slide_caption').fadeOut();
    	
    });
    
    
    $('#carousel-generic').on('slid.bs.carousel', function () { 
    		
    	$('.slide_caption  .inner').html($('#carousel-generic .carousel-inner .item.active .slide_text').html());
    	
    	$('.slide_caption').fadeIn();
    
    });
    
    
 });

})(jQuery);
