$(document).ready(function () {

	var rootRef = firebase.database().ref().child("ServiceStations");

	rootRef.on("child_added", snap =>{
		var name = snap.child("name").val();
		var freeSlots = snap.child("slotsFree").val();
		var totalSlots = snap.child("slotsTotal").val();
		$("#table_body").append("<tr><td>" + name + "</td><td>" + freeSlots + "</td><td>" + totalSlots + "</td></tr>");
	});

	rootRef.on("child_changed", snap =>{
		var name = snap.child("name").val();
		var freeSlots = snap.child("slotsFree").val();
		var totalSlots = snap.child("slotsTotal").val();
		$("#table_body").each(function () {
			alert($(this).parents("tr").find(name));
		});
	});

});
