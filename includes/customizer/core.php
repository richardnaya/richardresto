<?php
/**
 * Core functions.
 *
 * @package Richard_Resto
 */

if ( ! function_exists( 'richard_resto_get_option' ) ) :

	/**
	 * Get theme option.
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function richard_resto_get_option( $key ) {

		if ( empty( $key ) ) {

			return;

		}

		$value 			= '';

		$default 		= richard_resto_get_default_theme_options();

		$default_value 	= null;

		if ( is_array( $default ) && isset( $default[ $key ] ) ) {

			$default_value = $default[ $key ];

		}

		if ( null !== $default_value ) {

			$value = get_theme_mod( $key, $default_value );

		}else {

			$value = get_theme_mod( $key );

		}

		return $value;

	}

endif;

if ( ! function_exists( 'richard_resto_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function richard_resto_get_default_theme_options() {

		$defaults = array();

		// Header.
		$defaults['show_top_header'] 	= false;
		$defaults['left_section'] 		= 'contact';
		$defaults['right_section'] 		= 'top-social';

		// Layout.
		$defaults['global_layout']  	= 'right-sidebar';

		// Footer.
		$defaults['copyright_text'] 	= esc_html__( 'Copyright &copy; All rights reserved.', 'richard-resto' );

		// Blog.
		$defaults['excerpt_length'] 	= 50;

		// Breadcrumb.
		$defaults['breadcrumb_type'] 	= 'simple';

		// Slider.
		$defaults['slider_status']            		= false;
		$defaults['slider_excerpt_length']    		= 20;
		$defaults['slider_transition_effect'] 		= 'scroll';
		$defaults['slider_transition_delay']  		= 3;
		$defaults['slider_arrow_status']      		= true;
		$defaults['slider_pager_status']      		= true;
		$defaults['slider_autoplay_status']   		= true;
		$defaults['slider_overlay_status']    		= true;

		$defaults['slider_readmore_status']    		= true;
		$defaults['slider_readmore_text']    		= esc_html__( 'Read More', 'richard-resto' );

		return $defaults;
	}

endif;

//=============================================================
// Get all options in array
//=============================================================
if ( ! function_exists( 'richard_resto_get_options' ) ) :

    /**
     * Get all theme options in array.
     *
     * @since 1.0.0
     *
     * @return array Theme options.
     */
    function richard_resto_get_options() {

        $value = array();

        $value = get_theme_mods();

        return $value;

    }

endif;