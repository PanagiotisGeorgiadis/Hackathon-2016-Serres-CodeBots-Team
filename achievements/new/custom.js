function validateAchievementTitle() {

	var id = element.id;
	var value = element.value;
	var parent = document.getElementById(id + "_div");
	var patt = /^[a-zA-Z]+$/;

	if( value.length > 0 ) {
		parent.className = "col-lg-offset-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 alert alert-success";
		return true;
	} else {
		parent.className = "col-lg-3 col-md-3 col-sm-12 col-xs-12 alert alert-danger";
		return false;
	}

}