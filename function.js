$(document).ready(function() {

	
	$('.grid-item').hover(function(){
		$(this).find('.overlay').fadeIn();
	}, 
	function() {
		$(this).find('.overlay').fadeOut();
	});
	
});