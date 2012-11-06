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
	$('#ic-home').infiniteCarousel({
		transitionSpeed:600,
		displayTime: 6000,
		displayProgressRing: true,
		progressRingColorOpacity: '0,0,0,.9',
		progressRingBackgroundOn: false,
		progressRingBackgroundColorOpacity: '255,255,255,.5',
		thumbnailType: 'images',
		easeLeft: 'linear',
		easeRight:'linear',
		imagePath: '/statics/alumni/global/img/plugins/carousel/',
		inView: 1,
		margin: 0,
		advance: 1,
		customClass: '',
		showControls: true,
		autoHideCaptions: false,
		autoPilot: true,
		prevNextInternal: true,
		internalThumbnails: true,
		enableKeyboardNav: true,
		onSlideStart: function(){},
		onSlideEnd: function(){},
		onPauseClick: function(){},
		onPlayClick: function(){}
	});

	//___ Form Controls ___//
	$( ".form-section .signup" ).on( "click" , "a" , function() {
		$( this ).parents( "form" ).submit();
	});
	
	//___ Events ___//
	// Accordion
	$('.view-event h3 a').click(function(){
		$('.view-event .list-item.active').removeClass('active');
		$(this).parents('.list-item').addClass('active');
		return false;
	});
});