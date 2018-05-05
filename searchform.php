<?php
/**
 * Template for displaying search forms in Indrajeet
 *
 * @package Indrajeet
 */
?>
	<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="input-group">
			<input type="search" class="search-field form-control mr-sm-2" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'placeholder', 'indrajeet' ); ?>" value="<?php echo esc_attr_e( get_search_query() ); ?>" title="<?php esc_attr_e('Search', 'indrajeet'); ?>" />

			<button type="submit" class="btn btn-outline-primary my-2 my-sm-0" id="search-form"><?php _e('Search', 'indrajeet'); ?></button>
		</div>
	</form>
