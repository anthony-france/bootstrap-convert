$(document).ready(function() {
  

	$("#flash-area").delay(20000).animate({
		height: '-=75'
		}, 1000, function() {
			$("#flash-area").remove();
	  });
	  
	  $(".row-edit-link").hide();
	  $("tr").hover(
		function(){ 
			$(this).find(".row-edit-link").stop().fadeIn(250);
		}, 
		function() { 
			$(this).find(".row-edit-link").stop().fadeOut(250);
		}
	);
  
 });