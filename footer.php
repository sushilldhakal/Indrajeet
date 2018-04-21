<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Indrajeet
 */

?>
	
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="widget-area">
				<div class="row">

					<?php
					/**
					*Hook indrajeet_footer_widget_wrapper.
					*
					*@hooked indrajeet_footer_widgets - 10
					*@hooked travel_log_footer_menu - 15
					*/
					do_action( 'indrajeet_footer_widget_wrapper' );
					?>
					
				</div>
			</div>	
		</div>		
	</footer><!-- #colophon -->

	<div class="below-footer">
		<div class="container">
			<div class="row">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'indrajeet' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'indrajeet' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'indrajeet' ), 'Indrajeet', '<a href="http://sushill.com.np">Sushill</a>' );
						?>
				</div><!-- .site-info -->
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
