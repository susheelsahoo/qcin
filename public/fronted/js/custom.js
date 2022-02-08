jQuery(function() {
	
	jQuery(document).click(function(c) {
       jQuery('#navbarNav').removeClass('toggled')
	});
	
	jQuery(".menu-toggle").click(function(c) {
        c.stopPropagation();
        jQuery('#navbarNav').toggleClass('toggled');
    });
	
	jQuery('.main-menu').click(function(c) {
       c.stopPropagation();
	});
	
	//jQuery(".main-menu").before(' <div class="back_arrow"><i class="fa fa-times-circle"></i></div>');
	
	jQuery(".main-menu .dropdown > a").after(' <div class="child-trigger"><i class="fa fa-angle-right"></i></div>');
	
	jQuery(".child-trigger").click(function() {
        jQuery(this).parent().siblings(".main-menu .dropdown").removeClass("child-open");
        jQuery(this).parent().siblings(".main-menu .dropdown").find(".sub-menu").slideUp(250);
        jQuery(this).next(".sub-menu").slideToggle(250);
        jQuery(this).next(".sub-menu").children(".dropdown").find(".toolbar-menu").slideUp(250);
        jQuery(this).next(".sub-menu").children(".dropdown").removeClass("child-open");
        jQuery(this).parent().toggleClass("child-open");
        return false
    });
});
