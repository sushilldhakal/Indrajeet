<?php
/**
 * Theme widget area functions.
 *
 * @package Indrajeet
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


function indrajeet_widgets_init() {
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'indrajeet' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'indrajeet' ),
		'before_widget' => '<section id="%1$s" class="widget card %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title card-header">',
		'after_title'   => '</h4>',
	) );

	$args = array(
		'name'          => esc_html__( 'Footer Widget %s', 'indrajeet' ),
		'id'            => 'footer-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'indrajeet' ),
		'before_widget' => '<section id="%1$s" class="widget card %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title card-header">',
		'after_title'   => '</h2>',
	);
	register_sidebars( 4, $args );
}
add_action( 'widgets_init', 'indrajeet_widgets_init' );
