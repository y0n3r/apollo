$(document).ready(function(){
	$('.toggle-view a').click(function(){
		$('.view-event.active').hide();
		$('.toggle-view a.active').removeClass('active');
		$('.view-event.active').removeClass('active');
		var view = $(this).attr('id');
		console.log(view);
		$('.view-event#'+view).show();
		$(this).addClass('active');
		$('.view-event#'+view).addClass('active');
		return false;
	});
	
	//Center carousel thumbnails
	$('.carousel').carousel();
	//var thumbWidth = $('.carousel-thumbs').outerWidth();
	$('.carousel-thumbs').width( $('.carousel-thumbs').outerWidth() );
	$('.carousel-thumbs').css('margin-left', ($('.carousel-thumbs').outerWidth()/2) );
});