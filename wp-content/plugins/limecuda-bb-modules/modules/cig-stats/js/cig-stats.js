jQuery(document).ready(function($){

	var title           = $('.stats__section-title'),
			titleWidth      = $(title).width(),
			titleLeftMargin = titleWidth/2;

	$(title).css('margin-left', '-' + titleLeftMargin + 'px' );

});
