$(document).ready(function() {
  

	$("#flash-area").delay(2000).animate({
		height: '-=75'
		}, 1000, function() {
			$("#flash-area").remove();
	  });
	  
	  
 });