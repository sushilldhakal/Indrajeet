
(function($){

	// SmartMenus init
	$(function() {
	$('#primary-menu').smartmenus({
		subMenusSubOffsetX: 1,
		subMenusSubOffsetY: -8
	});
	});
	// SmartMenus mobile menu toggle button
	$(function() {
	var $mainMenuState = $('#main-menu-state');
	if ($mainMenuState.length) {
		// animate mobile menu
		$mainMenuState.change(function(e) {
		var $menu = $('#primary-menu');
		if (this.checked) {
			$menu.hide().slideDown(250, function() { $menu.css('display', ''); });
		} else {
			$menu.show().slideUp(250, function() { $menu.css('display', ''); });
		}
		});
		// hide mobile menu beforeunload
		$(window).bind('beforeunload unload', function() {
		if ($mainMenuState[0].checked) {
			$mainMenuState[0].click();
		}
		});
	}
	});
  //end

  jQuery('.theme-top-header .header-info a').click( function(e){
  	 e.preventDefault();
	  if (jQuery(this).parent().hasClass('disabled'))
	    return false; // Do something else in here if required
	  else
	    window.location.href = jQuery(this).attr('href');
  });

  $('#onload').hide();

})(jQuery);   