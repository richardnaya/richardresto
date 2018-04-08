<?php
/**
 * Richard Resto Theme Customizer.
 *
 * @package Richard_Resto
 */

/**
 * Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function richard_resto_customize_register( $wp_customize ) {

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'            => '.site-title a',
			'container_inclusive' => false,
			'render_callback'     => 'richard_resto_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'            => '.site-description',
			'container_inclusive' => false,
			'render_callback'     => 'richard_resto_customize_partial_blogdescription',
		) );
	}

	// Sanitization.
	require_once trailingslashit( get_template_directory() ) . '/includes/customizer/sanitize.php';

	// Active callback.
	require_once trailingslashit( get_template_directory() ) . '/includes/customizer/active.php';

	// Load options.
	require_once trailingslashit( get_template_directory() ) . '/includes/customizer/options.php';

	// /* Load Upgrade to Pro control
	// ----------------------------------------------------------------------*/
	// require_once trailingslashit( get_template_directory() ) . '/includes/upgrade-to-pro/control.php';

	// /* Register custom section types.
	// ----------------------------------------------------------------------*/
	// $wp_customize->register_section_type( 'Richard_Resto_Customize_Section_Upsell' );

	// // Register sections.
	// $wp_customize->add_section(
	// 	new Richard_Resto_Customize_Section_Upsell(
	// 		$wp_customize,
	// 		'theme_upsell',
	// 		array(
	// 			'title'    => esc_html__( 'Richard Resto Pro', 'richard-resto' ),
	// 			'pro_text' => esc_html__( 'Buy Pro', 'richard-resto' ),
	// 			'pro_url'  => 'https://www.preciousthemes.com/downloads/richard-resto-pro/',
	// 			'priority' => 1,
	// 		)
	// 	)
	// );

}
add_action( 'customize_register', 'richard_resto_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function richard_resto_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function richard_resto_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function richard_resto_customize_preview_js() {
	wp_enqueue_script( 'richard-resto-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'richard_resto_customize_preview_js' );

/**
 * Enqueue style for custom customize control.
 */
function richard_resto_custom_customize_enqueue() {

	wp_enqueue_script( 'richard-resto-customize-controls', get_template_directory_uri() . '/includes/upgrade-to-pro/customize-controls.js', array( 'customize-controls' ) );

	wp_enqueue_style( 'richard-resto-customize-controls', get_template_directory_uri() . '/includes/upgrade-to-pro/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'richard_resto_custom_customize_enqueue' );