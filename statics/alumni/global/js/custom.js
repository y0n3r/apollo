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
	
	//___ Carousel ___//
	$('.carousel').carousel();
	//Center thumbnails
	$('.carousel-thumbs').width( $('.carousel-thumbs').outerWidth() );
	$('.carousel-thumbs').css('margin-left', ($('.carousel-thumbs').outerWidth()/2-70) );
});