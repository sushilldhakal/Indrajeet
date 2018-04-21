<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Indrajeet
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function indrajeet_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'indrajeet_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function indrajeet_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'indrajeet_pingback_header' );


/* Footer Templates Starts */
if ( ! function_exists( 'indrajeet_footer_widgets' ) ) :
	/**
	 * Footer widgets.
	 *
	 * @since 0.0.1
	 */
	function indrajeet_footer_widgets() {

		// Get no of active Sidebars.
		$count = indrajeet_active_footer_count();

		$class = '';

		switch ( $count ) {
			case '2':
				$class = '6';
				break;
			case '3':
				$class = '4';
				break;
			case '4':
				$class = '3';
				break;

			default:
				$class = '12';
				break;
		}

		$footer_areas = array( 'footer-sidebar', 'footer-sidebar-2', 'footer-sidebar-3', 'footer-sidebar-4' );

		foreach ( $footer_areas as $footer ) {

			if ( is_active_sidebar( $footer ) ) : ?>

					<div class="col-md-<?php echo esc_attr( $class ); ?>" >

						<?php dynamic_sidebar( $footer ); ?>

					</div>
				<?php

				endif;

		}
	}

endif;

add_action( 'indrajeet_footer_widget_wrapper', 'indrajeet_footer_widgets' );
