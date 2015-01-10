jQuery(document).ready(function() {
    var offset = 50;
    var duration = 200;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top,#floating-nav').fadeIn(duration,function(){
				$('#floating-nav > .container').css({'opacity': '10','color':'#fff'});
			});
        } else {
			jQuery('.back-to-top,#floating-nav').fadeOut(duration);
        }
    });
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});