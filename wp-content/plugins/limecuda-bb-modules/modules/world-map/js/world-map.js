jQuery(document).ready(function($) {

	$('.region-list a').on('mouseenter', function() {

		var region = $(this).data('region');
		$('.world-map__marker.' + region ).addClass('active');

	}).on('mouseleave', function() {

		var region = $(this).data('region');
		$('.world-map__marker.' + region ).removeClass('active');

	});

});
