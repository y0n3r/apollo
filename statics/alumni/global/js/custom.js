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
	$('.carousel-thumbs').slideDown();
	
	//Thumbnail hovers
	$('.carousel-thumbs .thumbnail').mouseenter(function(){
		$(this).children('h3').css('top','0');
	});
	$('.carousel-thumbs .thumbnail').mouseleave(function(){
		$(this).children('h3').css('top','-60px');
	});
	
	//Thumbnail click
	$('.carousel-thumbs .thumbnail').click(function(){
		var slideID = $(this).attr('rel');
		$('.carousel .item.active').removeClass('active');
		$('.carousel-thumbs .thumbnail .active').removeClass('active');
		$('.carousel .item[rel="'+slideID+'"]').addClass('active');
		$(this).addClass('active');
		$('.carousel').carousel('pause');
	});

	// Form controls.
	$( ".form-section .signup" ).on( "click" , "a" , function() {
		$( this ).parents( "form" ).submit();
	});
});