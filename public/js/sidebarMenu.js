
$(document).ready(function($) {
	$('ul.sidebar li').on('click', function(event) {
		$('ul.sidebar li.active').removeClass('active');
	});
});
