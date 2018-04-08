<?php
/**
 * Home widgets
 *
 * @package Richard_Resto
 */

// Bail if not home page.
if ( ! is_page_template( 'templates/home.php' )  ) {
	return;
}
?>

<div id="home-page-widget-area" class="widget-area">
	
		<?php if ( is_active_sidebar( 'home-page-widget-area' ) ) : ?>
			<?php dynamic_sidebar( 'home-page-widget-area' ); ?>
		<?php else: ?>
			<?php
			// CTA.
			$args = array(
				'title'       => esc_html__( 'This is Richard Resto', 'richard-resto' ),
				'filter'      => true,
				'button_url'  => '#',
				'button_text' => esc_html__( 'Learn More', 'richard-resto' ),
			);
			if ( current_user_can( 'edit_theme_options' ) ) {
				$args['button_url']  = esc_url( admin_url( 'widgets.php' ) );
				$args['button_text'] = esc_html__( 'Add Widgets', 'richard-resto' );
			}

			$widget_args = array(
				'before_title' => '<h2 class="widget-title">',
				'after_title'  => '</h2>',
			);
			the_widget( 'Richard_Resto_CTA_Widget', $args, $widget_args );
			?>
		<?php endif; ?>
	
</div><!-- #home-page-widget-area -->

