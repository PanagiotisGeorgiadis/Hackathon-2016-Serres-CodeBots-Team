function wideLayout() {

	

	var window_width = $(window).width();

	if(window_width > 768) {

		var counter = 1;
		while ( $("#high_prio_container_"+counter).length ) { 		

			var high_parent_height = $("#high_prio_container_" + counter ).height();
	 		var high_parent_width = $("#high_prio_container_" + counter ).width();
	 		var footer_height = $("#high_prio_achievements_footer").height();
	 		/* Centering Text And Title */
	 		var text_container_width = $("#high_prio_container_" + counter + " div:nth-child(2)").width();
	 		$("#high_prio_title_" + counter).css("padding-left", 50);
	 		$("#high_prio_text_" + counter).css("padding-left", 50); 		

	 		/* Vertically centering Image */
	 		
	 		var imageMargin = (high_parent_height - $("#high_prio_image_" + counter).height())/2;
	 		//var arrowMargin = (high_parent_height - $("#high_arrow_" + counter).height())/2;
	 		$("#high_arrow_" + counter ).css("top", 50);
	 		$("#high_prio_image_" + counter).css("margin-top", imageMargin);

	 		counter++; 
		}

		var counter = 1;
		while ( $("#medium_prio_container_"+counter).length ) { 		

	 		var high_parent_height = $("#medium_prio_container_" + counter ).height();
	 		var high_parent_width = $("#medium_prio_container_" + counter ).width();
	 		
	 		if(high_parent_height > 250) {
	 			//$("#low_prio_image_" + counter).css("margin-top", (low_parent_height/2.3));
	 			var imageMargin = (high_parent_height - $("#high_prio_image_" + counter).height())/2;
		 		var arrowMargin = (high_parent_height - $("#high_arrow_" + counter).height())/2;
		 		$("#medium_arrow_" + counter ).css("top", arrowMargin);
		 		$("#medium_prio_image_" + counter).css("margin-top", imageMargin);
	 		} else {
	 			$("#low_prio_image_" + counter).css("margin-top", "1%");
	 			$("#medium_arrow_" + counter ).css("top", 40);
	 		}

	 		/* Centering Text And Title */
	 		var text_container_width = $("#medium_prio_container_" + counter + " div:nth-child(2)").width();
	 		$("#medium_prio_title_" + counter).css("padding-left", 50);
	 		$("#medium_prio_text_" + counter).css("padding-left", 50); 		

	 		/* Vertically centering Image */
	 		
	 		

	 		counter++; 
		}

		var counter = 1;

		while ( $("#low_prio_container_"+counter).length ) { 
	 		
	 		var low_parent_height = $("#low_prio_container_" + counter ).height();
	 		var low_parent_width = $("#low_prio_container_" + counter ).width();
	 		
	 		if(low_parent_height > 150) {
	 			//$("#low_prio_image_" + counter).css("margin-top", (low_parent_height/2.3));
	 			var imageMargin = (low_parent_height - $("#low_prio_image_" + counter).height())/2;
		 		var arrowMargin = (low_parent_height - $("#low_arrow_" + counter).height())/2;
		 		$("#low_arrow_" + counter ).css("top", 38+"%");
		 		$("#low_prio_image_" + counter).css("margin-top", imageMargin);
	 		
	 		} else {

	 			$("#low_prio_image_" + counter).css("margin-top", "1%");
	 			$("#low_arrow_" + counter ).css("top", 40);
	 		}

	 		/* Centering Text And Title */
	 		var text_container_width = $("#medium_prio_container_" + counter + " div:nth-child(2)").width();
	 		$("#low_prio_title_" + counter).css("padding-left", 50);
	 		$("#low_prio_text_" + counter).css("padding-left", 50); 	

	 		counter++; 
		}

	} else {

	}

}

function setProgressBars(elementID) {
	var achievProgress = $("#"+elementID).attr('data-progress');
	//alert(achievProgress);
	if (achievProgress > 75 ) {

		$("#"+elementID).css("border-top-width", "100%");
		$("#"+elementID).css("border-top-color", "#26A7DE");
		achievProgress = achievProgress - 25;

		if(achievProgress > 50 ) {
			achievProgress = achievProgress - 25;
			$("#"+elementID).css("border-right-width", "100%");
			$("#"+elementID).css("border-right-color", "#26A7DE");
		}

		if(achievProgress > 25 ) {
			achievProgress = achievProgress - 25;
			$("#"+elementID).css("border-bottom-width", "100%");
			$("#"+elementID).css("border-bottom-color", "#26A7DE");
		}

		$("#"+elementID).css("border-left-width", (achievProgress*4)+"%");
		$("#"+elementID).css("border-left-color", "#26A7DE");
	}

	if (achievProgress > 50 ) {
		achievProgress = achievProgress - 25;
		$("#high_prio_image_" + counter).css("border-top-width", "100%");
		$("#high_prio_image_" + counter).css("border-top-color", "#26A7DE");

		if(achievProgress > 25 ) {
			achievProgress = achievProgress - 25;
			$("#high_prio_image_" + counter).css("border-right-width", "100%");
			$("#high_prio_image_" + counter).css("border-right-color", "#26A7DE");
		}

		$("#high_prio_image_" + counter).css("border-bottom-width", (achievProgress*4)+"%");
		$("#high_prio_image_" + counter).css("border-bottom-color", "#26A7DE");
	}

	if(achievProgress > 25) {
		$("#"+elementID).css("border-top-width", "100%");
		$("#"+elementID).css("border-top-color", "#26A7DE");
		
		achievProgress = achievProgress - 25;
		$("#"+elementID).css("border-right-width", (achievProgress*4)+"%");
		$("#"+elementID).css("border-right-color", "#26A7DE");
	}

	if(achievProgress < 25 && achievProgress > 0) {			
		$("#"+elementID).css("border-top-width", (achievProgress*4)+"%");
		$("#"+elementID).css("border-top-color", "#26A7DE");
	}
}



$(document).ready(wideLayout());

$(window).on("resize", function(){location.reload();});


$(window).load( function () {

 	/* Vertically Centering arrow */

	var counter = 1; 	
	while ( $("#high_prio_container_" + counter ).length ) {

		var high_parent_height = $("#high_prio_container_" + counter ).height();
		$("#high_prio_container_" + counter + " div:nth-child(1)").height(high_parent_height);		


		//setProgressBars($("#high_prio_image_" + counter));
		//var achievProgressDiv = $("#high_prio_container_" + counter + " div:nth-child(3)");
		var achievProgress = $("#high_prio_image_" + counter).attr('data-progress');
		//alert(achievProgress);
		if (achievProgress > 75 ) {

			$("#high_prio_image_" + counter).css("border-top-width", "100%");
			$("#high_prio_image_" + counter).css("border-top-color", "#26A7DE");
			achievProgress = achievProgress - 25;

			if(achievProgress > 50 ) {
				achievProgress = achievProgress - 25;
				$("#high_prio_image_" + counter).css("border-right-width", "100%");
				$("#high_prio_image_" + counter).css("border-right-color", "#26A7DE");
			}

			if(achievProgress > 25 ) {
				achievProgress = achievProgress - 25;
				$("#high_prio_image_" + counter).css("border-bottom-width", "100%");
				$("#high_prio_image_" + counter).css("border-bottom-color", "#26A7DE");
			}

			$("#high_prio_image_" + counter).css("border-left-width", (achievProgress*4)+"%");
			$("#high_prio_image_" + counter).css("border-left-color", "#26A7DE");
		}

		if (achievProgress > 50 ) {
			achievProgress = achievProgress - 25;
			$("#high_prio_image_" + counter).css("border-top-width", "100%");
			$("#high_prio_image_" + counter).css("border-top-color", "#26A7DE");

			if(achievProgress > 25 ) {
				achievProgress = achievProgress - 25;
				$("#high_prio_image_" + counter).css("border-right-width", "100%");
				$("#high_prio_image_" + counter).css("border-right-color", "#26A7DE");
			}

			$("#high_prio_image_" + counter).css("border-bottom-width", (achievProgress*4)+"%");
			$("#high_prio_image_" + counter).css("border-bottom-color", "#26A7DE");
		}

		if(achievProgress > 25) {
			$("#high_prio_image_" + counter).css("border-top-width", "100%");
			$("#high_prio_image_" + counter).css("border-top-color", "#26A7DE");
			
			achievProgress = achievProgress - 25;
			$("#high_prio_image_" + counter).css("border-right-width", (achievProgress*4)+"%");
			$("#high_prio_image_" + counter).css("border-right-color", "#26A7DE");
		}

		if(achievProgress < 25 && achievProgress > 0) {			
			$("#high_prio_image_" + counter).css("border-top-width", (achievProgress*4)+"%");
			$("#high_prio_image_" + counter).css("border-top-color", "#26A7DE");
		}

 		counter++;
 	}

 	var counter = 1; 	
	while ( $("#medium_prio_container_" + counter ).length ) {

		var medium_parent_height = $("#medium_prio_container_" + counter ).height();
		$("#medium_prio_container_" + counter + " div:nth-child(1)").height(medium_parent_height);		

		//var achievProgressDiv = $("#high_prio_container_" + counter + " div:nth-child(3)");
		var achievProgress = $("#medium_prio_image_" + counter).attr('data-progress');
		//alert(achievProgress);
		if (achievProgress > 75 ) {

			$("#medium_prio_image_" + counter).css("border-top-width", "100%");
			$("#medium_prio_image_" + counter).css("border-top-color", "#26A7DE");
			achievProgress = achievProgress - 25;

			if(achievProgress > 50 ) {
				achievProgress = achievProgress - 25;
				$("#medium_prio_image_" + counter).css("border-right-width", "100%");
				$("#medium_prio_image_" + counter).css("border-right-color", "#26A7DE");
			}

			if(achievProgress > 25 ) {
				achievProgress = achievProgress - 25;
				$("#medium_prio_image_" + counter).css("border-bottom-width", "100%");
				$("#medium_prio_image_" + counter).css("border-bottom-color", "#26A7DE");
			}

			$("#medium_prio_image_" + counter).css("border-left-width", (achievProgress*4)+"%");
			$("#medium_prio_image_" + counter).css("border-left-color", "#26A7DE");
		}

		if (achievProgress > 50 ) {

		}

		if(achievProgress > 25) {
			$("#medium_prio_image_" + counter).css("border-top-width", "100%");
			$("#medium_prio_image_" + counter).css("border-top-color", "#26A7DE");
			
			achievProgress = achievProgress - 25;
			$("#medium_prio_image_" + counter).css("border-right-width", (achievProgress*4)+"%");
			$("#medium_prio_image_" + counter).css("border-right-color", "#26A7DE");
		}

		if(achievProgress < 25 && achievProgress > 0) {			
			$("#medium_prio_image_" + counter).css("border-top-width", (achievProgress*4)+"%");
			$("#medium_prio_image_" + counter).css("border-top-color", "#26A7DE");
		} 

 		counter++;
 	}

 	var counter = 1; 	
	while ( $("#low_prio_container_" + counter ).length ) {

		var low_parent_height = $("#low_prio_container_" + counter ).height();
 		$("#low_prio_container_" + counter + " div:nth-child(1)").height(low_parent_height);

 		var achievProgress = $("#low_prio_image_" + counter).attr('data-progress');
		//alert(achievProgress);
		if (achievProgress > 75 ) {

			$("#low_prio_image_" + counter).css("border-top-width", "100%");
			$("#low_prio_image_" + counter).css("border-top-color", "#26A7DE");
			achievProgress = achievProgress - 25;

			if(achievProgress > 50 ) {
				achievProgress = achievProgress - 25;
				$("#low_prio_image_" + counter).css("border-right-width", "100%");
				$("#low_prio_image_" + counter).css("border-right-color", "#26A7DE");
			}

			if(achievProgress > 25 ) {
				achievProgress = achievProgress - 25;
				$("#low_prio_image_" + counter).css("border-bottom-width", "100%");
				$("#low_prio_image_" + counter).css("border-bottom-color", "#26A7DE");
			}

			$("#low_prio_image_" + counter).css("border-left-width", (achievProgress*4)+"%");
			$("#low_prio_image_" + counter).css("border-left-color", "#26A7DE");
		}

		if (achievProgress > 50 ) {

		}

		if(achievProgress > 25) {
			$("#low_prio_image_" + counter).css("border-top-width", "100%");
			$("#low_prio_image_" + counter).css("border-top-color", "#26A7DE");
			
			achievProgress = achievProgress - 25;
			$("#low_prio_image_" + counter).css("border-right-width", (achievProgress*4)+"%");
			$("#low_prio_image_" + counter).css("border-right-color", "#26A7DE");
		}

		if(achievProgress < 25 && achievProgress > 0) {			
			$("#low_prio_image_" + counter).css("border-top-width", (achievProgress*4)+"%");
			$("#low_prio_image_" + counter).css("border-top-color", "#26A7DE");
		} 		

 		counter++;
 	}
 	
});