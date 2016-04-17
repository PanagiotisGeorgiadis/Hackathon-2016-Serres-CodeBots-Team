function showFoldersTab() {
	$(".folders").show();
	$(".tasks").hide();
}

function showTasksTab() {
	$(".folders").hide();
	$(".tasks").show();
}

function editTask() {

	var description = $('.stickyDesc').val();
	$('.taskDesc').val(description);

	$('.myModal').modal("show");
}

function clearTxt() {
	$('.taskDesc').val('');
	$('.txtTaskTitle').val('');
}



$(document).ready(showFoldersTab);
$(document).ready(showTasksTab);
