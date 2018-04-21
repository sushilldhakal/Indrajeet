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
	 * @since 0.0.1
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

if ( ! function_exists( 'indrajeet_primary_menu_fallback' ) ) :

	/**
	 * Fallback for Primary menu.
	 * @since 1.0.0
	 */
	function indrajeet_primary_menu_fallback( $args ) {

		echo '<ul id="primary-menu" class="sm sm-clean">';
		echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'indrajeet' ) . '</a></li>';
		wp_list_pages( array(
			'title_li' => '',
			'depth'    => 1,
			'number'   => 8,
		) );
		echo '</ul>';

	}
endif;