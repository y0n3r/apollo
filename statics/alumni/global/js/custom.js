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
});