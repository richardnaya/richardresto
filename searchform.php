<?php
/**
 * Template for displaying search forms in Richard Resto
 *
 * @package WordPress
 * @subpackage Richard_Resto
 * @since Richard Resto 1.0.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'richard-resto' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'richard-resto' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'richard-resto' ); ?></span><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
