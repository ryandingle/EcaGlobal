
jQuery(function(){
	
	jQuery('#camera_wrap_4').camera({
		height: 'auto',
		loader: 'bar',
		pagination: false,
		thumbnails: true,
		hover: false,
		opacityOnGrid: false,
		imagePath: window.location.protocol+'//'+window.location.host+'/ecaglobal/global_views/assets/images'
	});

});