
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



})(jQuery);   