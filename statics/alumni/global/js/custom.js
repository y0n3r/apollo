$(document).ready(function(){
	$('.toggle-view a').click(function(){
		$('.view-event.active').hide();
		$('.toggle-view a.active').removeClass('active');
		$('.view-event.active').removeClass('active');
		var view = jQuery(this).attr('name');
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
		customClass: 'ic-home',
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
	
	//Center thumbnails
	$('.ic_ic-home .ic_thumbnail_tray').width( $('.ic_thumbnails').outerWidth() );
	$('.ic_ic-home .ic_thumbnail_tray').css('margin-left', ($('.ic_thumbnail_tray').outerWidth()/2-70) );
	$('.ic_ic-home .ic_thumbnail_tray').slideDown();
	
	//Inject thumbnail titles
	var thumbTitle = '';
	var i=0;
	$('.ic_ic-home .ic_button').each(function(){
		thumbTitle = $('.infiniteCarousel_item[id$="'+i+'"]').find('.headline').text();
		$(this).append('<h3>'+thumbTitle+'</h3>');
		i++;
	});
	
	//Thumbnail hovers
	$('.ic_ic-home .ic_button').mouseenter(function(){
		$(this).children('h3').css('top','0');
	});
	$('.ic_ic-home .ic_button').mouseleave(function(){
		$(this).children('h3').css('top','-65px');
	});
	
	// News Ticker
	$('#ic-news-ticker').infiniteCarousel({
		transitionSpeed:600,
		displayTime: 6000,
		displayProgressRing: false,
		progressRingColorOpacity: '0,0,0,0',
		progressRingBackgroundOn: false,
		progressRingBackgroundColorOpacity: '255,255,255,255',
		thumbnailType: 'none',
		easeLeft: 'linear',
		easeRight:'linear',
		imagePath: '/statics/alumni/global/img/plugins/ticker/',
		inView: 1,
		margin: 0,
		advance: 1,
		customClass: 'ic-ticker',
		showControls: false,
		autoHideCaptions: false,
		autoPilot: false,
		prevNextInternal: false,
		internalThumbnails: false,
		enableKeyboardNav: true,
		onSlideStart: function(){},
		onSlideEnd: function(){},
		onPauseClick: function(){},
		onPlayClick: function(){}
	});
	
	$('.ic_ic-ticker .ic_caption').css({'bottom':'auto','top':'0','left':'117px'});
	
	// Mentors
	$('#ic-mentors').infiniteCarousel({
		transitionSpeed:600,
		displayTime: 6000,
		displayProgressRing: false,
		progressRingColorOpacity: '0,0,0,0',
		progressRingBackgroundOn: false,
		progressRingBackgroundColorOpacity: '255,255,255,255',
		thumbnailType: 'none',
		easeLeft: 'linear',
		easeRight:'linear',
		imagePath: '/statics/alumni/global/img/plugins/default/',
		inView: 2,
		margin: 0,
		advance: 2,
		customClass: 'ic-mentors',
		showControls: false,
		autoHideCaptions: false,
		autoPilot: false,
		prevNextInternal: false,
		internalThumbnails: false,
		enableKeyboardNav: true,
		onSlideStart: function(){},
		onSlideEnd: function(){},
		onPauseClick: function(){},
		onPlayClick: function(){}
	});
	
	$('.ic_ic-mentors .ic_caption').css({'bottom':'auto','top':'0','left':'95px'});
	
	// Offers
	$('#ic-offers').infiniteCarousel({
		transitionSpeed:600,
		displayTime: 6000,
		displayProgressRing: false,
		progressRingColorOpacity: '0,0,0,0',
		progressRingBackgroundOn: false,
		progressRingBackgroundColorOpacity: '255,255,255,255',
		thumbnailType: 'none',
		easeLeft: 'linear',
		easeRight:'linear',
		imagePath: '/statics/alumni/global/img/plugins/default/',
		inView: 7,
		margin: 20,
		advance: 1,
		customClass: 'ic-offers',
		showControls: false,
		autoHideCaptions: false,
		autoPilot: false,
		prevNextInternal: false,
		internalThumbnails: false,
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
	
	
	//___ Offer Hovers ___//
	$('.hero-extra .offer').mouseenter(function(){
		$(this).find('.overlay').css('bottom','-25px');
	});
	$('.hero-extra .offer').mouseleave(function(){
		$(this).find('.overlay').css('bottom','-145px');
	});
});