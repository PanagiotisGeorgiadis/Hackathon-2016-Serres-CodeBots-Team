function validateAchievementTitle(element) {

	var id = element.id;
	var value = element.value;
	var parent = document.getElementById(id + "_div");
	var patt = /^[a-zA-Z]+$/;

	if( value.length > 0 ) {
		parent.className = "col-lg-offset-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center alert alert-success";
		return true;
	} else {
		parent.className = "col-lg-offset-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center alert alert-danger";
		return false;
	}

}


function validateAchievementPercentage(element) {
	var id = element.id;
	var value = element.value;
	var parent = document.getElementById(id + "_div");

	var x = parseFloat(value);
	if (isNaN(x) || x < 0 || x > 100) {
	    parent.className = "col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center alert alert-danger";
		return false;
	} else {
		parent.className = "col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center alert alert-success";
		return true;
	}	
	
}

function validateAchievementDescription(element) {
	var id = element.id;
	var value = element.value;
	var parent = document.getElementById(id + "_div");

	if( value.length > 0 ) {
		parent.className = "col-lg-offset-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center alert alert-success";
		return true;
	} else {
		parent.className = "col-lg-offset-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center alert alert-danger";
		return false;
	}
}