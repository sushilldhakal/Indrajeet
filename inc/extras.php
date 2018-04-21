<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Indrajeet
 */


if ( ! function_exists( 'indrajeet_active_footer_count' ) ) :
	/**
	 * [indrajeet_active_footer_count count active footers]
	 *
	 * @return [INT] [Number of active footer widgets]
	 *
	 * @since 1.0.0
	 */
	function indrajeet_active_footer_count() {

		$footer_areas = array( 'footer-sidebar', 'footer-sidebar-2', 'footer-sidebar-3', 'footer-sidebar-4' );

		$count = 0;

		foreach ( $footer_areas as $footer ) {

			if ( is_active_sidebar( $footer ) ) :

				$count++;

			endif;

		}

		return $count;

	}

endif;