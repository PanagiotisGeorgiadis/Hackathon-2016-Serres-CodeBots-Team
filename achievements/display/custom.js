$(document).ready( function () {

	

 	

 	

	var counter = 1;

	while ( $("#high_prio_container_"+counter).length ) { 		

		var high_parent_height = $("#high_prio_container_" + counter ).height();
 		var high_parent_width = $("#high_prio_container_" + counter ).width();

 		/* Centering Text And Title */
 		var text_container_width = $("#high_prio_container_" + counter + " div:nth-child(2)").width();
 		$("#high_prio_title_" + counter).css("padding-left", high_parent_width - text_container_width);
 		$("#high_prio_text_" + counter).css("padding-left", high_parent_width - text_container_width); 		

 		/* Vertically centering Image */
 		if(high_parent_height > 250) {
 			$("#high_prio_image_" + counter).css("margin-top", (high_parent_height/2.3));
 		} else {
 			$("#high_prio_image_" + counter).css("margin-top", "1%");
 		}
 		counter++; 
	}

	var counter = 1;

	while ( $("#medium_prio_container_"+counter).length ) { 		

		var medium_parent_height = $("#medium_prio_container_" + counter ).height();
 		var medium_parent_width = $("#medium_prio_container_" + counter ).width();

 		/* Centering Text And Title */
 		var text_container_width = $("#medium_prio_container_" + counter + " div:nth-child(2)").width();
 		$("#medium_prio_title_" + counter).css("padding-left", medium_parent_width - text_container_width);
 		$("#medium_prio_text_" + counter).css("padding-left", medium_parent_width - text_container_width); 		

 		/* Vertically centering Image */
 		if(medium_parent_height > 250) {
 			$("#medium_prio_image_" + counter).css("margin-top", (medium_parent_height/2.3));
 		} else {
 			$("#medium_prio_image_" + counter).css("margin-top", "1%");
 		}
 		counter++; 
	}

	var counter = 1;

	while ( $("#low_prio_container_"+counter).length ) { 

		var low_parent_height = $("#low_prio_container_" + counter ).height();
 		var low_parent_width = $("#low_prio_container_" + counter ).width();		

 		/* Centering Text And Title */
 		var text_container_width = $("#low_prio_container_" + counter + " div:nth-child(2)").width();
 		$("#low_prio_title_" + counter).css("padding-left", low_parent_width - text_container_width);
 		$("#low_prio_text_" + counter).css("padding-left", low_parent_width - text_container_width); 		

 		/* Vertically centering Image */
 		if(low_parent_height > 250) {
 			$("#low_prio_image_" + counter).css("margin-top", (low_parent_height/2.3));
 		} else {
 			$("#low_prio_image_" + counter).css("margin-top", "1%");
 		}
 		counter++; 
	}


});


$(window).load(function (){

	var counter = 1;

	
 	
 	/* Vertically Centering arrow */
	while ( $("#high_prio_container_"+counter).length ) {

		var high_parent_height = $("#high_prio_container_" + counter ).height();
		$("#high_prio_container_" + counter + " div:nth-child(1)").height(high_parent_height);

		var medium_parent_height = $("#medium_prio_container_" + counter ).height();
		$("#medium_prio_container_" + counter + " div:nth-child(1)").height(medium_parent_height);
		
		var low_parent_height = $("#low_prio_container_" + counter ).height();
 		$("#low_prio_container_" + counter + " div:nth-child(1)").height(low_parent_height);

 		counter++;
 	}

});