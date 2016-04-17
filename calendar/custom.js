$(document).ready(function() {
	//Sets some basic properties of kendoCalendar
	$("#calendar").kendoCalendar({
		value : new Date(),
		min : new Date(2000, 0, 1),
		max : new Date(2049, 11, 31),
		start : "year",
		depth : "days",
	});
	//Initialize the kendoScheduler
	$(function() {
		$("#scheduler").kendoScheduler({
			date : new Date(),
		});
	});
});

