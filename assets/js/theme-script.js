
(function($){

//sticky menu
// $(document).ready(function() {
// 	// grab the initial top offset of the navigation
//    	var stickyNavTop = $('#header').offset().top + 40;
   	
//    	// our function that decides weather the navigation bar should have "fixed" css position or not.
//    	var stickyNav = function(){
// 	    var scrollTop = $(window).scrollTop(); // our current vertical position from the top
	         
// 	    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
// 	    // otherwise change it back to relative
// 	    if (scrollTop > stickyNavTop) { 
// 	        $('#header').addClass('sticky');
// 	    } else {
// 	        $('#header').removeClass('sticky'); 
// 	    }
// 	};
// 	stickyNav();
// 	// and run it again every time you scroll
// 	$(window).scroll(function() {
// 		stickyNav();
// 	});
// });

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