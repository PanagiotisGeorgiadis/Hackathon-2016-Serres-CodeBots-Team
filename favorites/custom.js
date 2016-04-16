(function  ($) {

	$(document).ready(function(){

		
	   $(".arrow").click(function(event) {
      		var id = event.target.id;
      		  
      		
      		  	$("."+id).stop().slideToggle("fast");
   				 
   		});	

	
	});                                                    
})(jQuery);