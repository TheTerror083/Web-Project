//json guest function
$(document).ready(function(){
	 	var $guests = $('#newEventGuests');
	 	var $name = $('#name');
	 	var $email = $('#email');
	 	$.ajax({
	 		type: 'GET',
 			url: "data/json/"+username+".json",
 			success: function (guests) {
			   $.each(guests, function (i, item) {
				 $guests.append('<li class="allGuests">' + item.name + '</li>');
			   });
			 }
 		}); 
});