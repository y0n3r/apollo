$(document).ready(function(){
	$('.toggle-view a').click(function(){
		$('.view-event.active').hide();
		$('.view-event.active').removeClass('active');
		var view = $(this).attr('id');
		console.log(view);
		$('.view-event#'+view).show();
		$('.view-event#'+view).addClass('active');
		return false;
	});
	
	//Center carousel thumbnails
	$('.carousel').carousel();
	//var thumbWidth = $('.carousel-thumbs').outerWidth();
	$('.carousel-thumbs').width( $('.carousel-thumbs').outerWidth() );
	$('.carousel-thumbs').css('margin-left', ($('.carousel-thumbs').outerWidth()/2) );
});