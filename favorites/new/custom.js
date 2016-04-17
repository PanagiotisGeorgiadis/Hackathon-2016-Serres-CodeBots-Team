(function  ($) {

	$(document).ready(function(){

		$(".star").click(function(){
			$( "div" ).addClass( "rotateIn" );
			setTimeout(function () { 
				$("div").removeClass("rotateIn");
			}, 1500);
		});

		$("#submitFavorite").click(function(){

			var x;
			x = document.getElementById("link-input").value;
			if (x == "") {
				$( "#link-input" ).addClass( "animated flash" );
			setTimeout(function () { 
				$( "#link-input" ).removeClass( "animated flash");
			}, 1500);
				return false;
			};
		

		});


	}); 

})(jQuery);