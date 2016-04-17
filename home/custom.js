function editTxt(evt) {
	$('.btnUpdate').fadeToggle();

	var text = $(evt).html();
	if (text == 'Cancel') {
		$(evt).html('Edit Info');
		$(".txtStatus").prop('disabled', true).css("border", "none");
		$(".txtPhone").prop('disabled', true).css("border", "none");
		$(".txtBirth").prop('disabled', true).css("border", "none");
		$(".txtEmail").prop('disabled', true).css("border", "none");
		$(".txtAboutMe").prop('disabled', true).css("border", "none");
	} else {
		$(evt).html('Cancel');
		$(".txtStatus").prop('disabled', false).css("border", "1px solid lightgray");
		$(".txtPhone").prop('disabled', false).css("border", "1px solid lightgray");
		$(".txtBirth").prop('disabled', false).css("border", "1px solid lightgray");
		$(".txtEmail").prop('disabled', false).css("border", "1px solid lightgray");
		$(".txtAboutMe").prop('disabled', false).css("border", "1px solid lightgray");
	}
}
