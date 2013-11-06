$(document).ready(function() {

	$('.rd-more').click(function() {
		$('.comments').fadeIn();
	});

	
	$('.grid-item').hover(function(){
		$(this).find('.overlay').fadeIn();
	}, 
	function() {
		$(this).find('.overlay').fadeOut();
	});
	
});