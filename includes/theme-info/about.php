<?php
/**
 * About configuration
 *
 * @package Richard_Resto
 */

$config = array(
	'menu_name' => esc_html__( 'About Richard Resto', 'richard-resto' ),
	'page_name' => esc_html__( 'About Richard Resto', 'richard-resto' ),

	/* translators: theme version */
	'welcome_title' => sprintf( esc_html__( 'Welcome to %s - ', 'richard-resto' ), 'Richard Resto' ),

	/* translators: 1: theme name */
	'welcome_content' => sprintf( esc_html__( 'This page will help you to setup %1$s with few clicks. We believe you will find it easy to use and perfect for your website development.', 'richard-resto' ), 'Richard Resto' ),

	// Quick links.
	'quick_links' => array(
		'theme_url' => array(
			'text' => esc_html__( 'Theme Details','richard-resto' ),
			'url'  => 'https://www.preciousthemes.com/downloads/richard-resto/',
			),
		'demo_url' => array(
			'text' => esc_html__( 'View Demo','richard-resto' ),
			'url'  => 'https://preciousthemes.com/demo/richard-resto/',
			),
		'documentation_url' => array(
			'text'   => esc_html__( 'View Documentation','richard-resto' ),
			'url'    => 'https://www.preciousthemes.com/documentation/richard-resto/',
			'button' => 'primary',
			),
		'rate_url' => array(
			'text' => esc_html__( 'Rate This Theme','richard-resto' ),
			'url'  => 'https://wordpress.org/support/theme/richard-resto/reviews/',
			),
		),

	// Tabs.
	'tabs' => array(
		'getting_started'     => esc_html__( 'Getting Started', 'richard-resto' ),
		'recommended_actions' => esc_html__( 'Recommended Actions', 'richard-resto' ),
		'support'             => esc_html__( 'Support', 'richard-resto' ),
		'upgrade_to_pro'      => esc_html__( 'Upgrade to Pro', 'richard-resto' ),
		'free_pro'            => esc_html__( 'FREE VS. PRO', 'richard-resto' ),
	),

	// Getting started.
	'getting_started' => array(
		array(
			'title'               => esc_html__( 'Theme Documentation', 'richard-resto' ),
			'text'                => esc_html__( 'Find step by step instructions with video documentation to setup theme easily.', 'richard-resto' ),
			'button_label'        => esc_html__( 'View documentation', 'richard-resto' ),
			'button_link'         => 'https://www.preciousthemes.com/documentation/richard-resto/',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		array(
			'title'               => esc_html__( 'Recommended Actions', 'richard-resto' ),
			'text'                => esc_html__( 'We recommend few steps to take so that you can get complete site like shown in demo.', 'richard-resto' ),
			'button_label'        => esc_html__( 'Check recommended actions', 'richard-resto' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=richard-resto-about&tab=recommended_actions' ) ),
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Customize Everything', 'richard-resto' ),
			'text'                => esc_html__( 'Start customizing every aspect of the website with customizer.', 'richard-resto' ),
			'button_label'        => esc_html__( 'Go to Customizer', 'richard-resto' ),
			'button_link'         => esc_url( wp_customize_url() ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'        			=> esc_html__( 'Youtube Video Tutorials', 'richard-resto' ),
			'icon'         			=> 'dashicons dashicons-video-alt3',
			'text'         			=> esc_html__( 'Please check our youtube channel for video instructions of Richard Resto setup and customization.', 'richard-resto' ),
			'button_label' 			=> esc_html__( 'Video Tutorials', 'richard-resto' ),
			'button_link'  			=> 'https://www.youtube.com/watch?v=_JDgKKG5zBA&list=PL-vVuHhFGshHxytZqdV3nwM-as0gmQtg4',
			'is_button'    			=> false,
			'recommended_actions'	=> false,
			'is_new_tab'   			=> true,
		),
	),

	// Recommended actions.
	'recommended_actions' => array(
		'content' => array(
			
			'front-page' => array(
				'title'       => esc_html__( 'Setting Static Front Page','richard-resto' ),
				'description' => esc_html__( 'Create a new page to display on front page ( Ex: Home ) and assign "Home" template. Select A static page then Front page and Posts page to display front page specific sections. Note: Static page will be set automatically when you import demo content.', 'richard-resto' ),
				'id'          => 'front-page',
				'check'       => ( 'page' === get_option( 'show_on_front' ) ) ? true : false,
				'help'        => '<a href="' . esc_url( wp_customize_url() ) . '?autofocus[section]=static_front_page" class="button button-secondary">' . esc_html__( 'Static Front Page', 'richard-resto' ) . '</a>',
			),

			'one-click-demo-import' => array(
				'title'       => esc_html__( 'One Click Demo Import', 'richard-resto' ),
				'description' => esc_html__( 'Please install the One Click Demo Import plugin to import the demo content. After activation go to Appearance >> Import Demo Data and import it.', 'richard-resto' ),
				'check'       => class_exists( 'OCDI_Plugin' ),
				'plugin_slug' => 'one-click-demo-import',
				'id'          => 'one-click-demo-import',
			),
		),
	),

	// Support.
	'support_content' => array(
		'first' => array(
			'title'        => esc_html__( 'Contact Support', 'richard-resto' ),
			'icon'         => 'dashicons dashicons-sos',
			'text'         => esc_html__( 'If you have any problem, feel free to create ticket on our dedicated Support forum.', 'richard-resto' ),
			'button_label' => esc_html__( 'Contact Support', 'richard-resto' ),
			'button_link'  => esc_url( 'https://www.preciousthemes.com/support/forum/richard-resto/' ),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'second' => array(
			'title'        => esc_html__( 'Theme Documentation', 'richard-resto' ),
			'icon'         => 'dashicons dashicons-book-alt',
			'text'         => esc_html__( 'Kindly check our theme documentation for detailed information and video instructions.', 'richard-resto' ),
			'button_label' => esc_html__( 'View Documentation', 'richard-resto' ),
			'button_link'  => 'https://www.preciousthemes.com/documentation/richard-resto/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'third' => array(
			'title'        => esc_html__( 'Pro Version', 'richard-resto' ),
			'icon'         => 'dashicons dashicons-products',
			'icon'         => 'dashicons dashicons-star-filled',
			'text'         => esc_html__( 'Upgrade to pro version for additional features and options.', 'richard-resto' ),
			'button_label' => esc_html__( 'View Pro Version', 'richard-resto' ),
			'button_link'  => 'https://www.preciousthemes.com/downloads/richard-resto-pro/',
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'fourth' => array(
			'title'        => esc_html__( 'Youtube Video Tutorials', 'richard-resto' ),
			'icon'         => 'dashicons dashicons-video-alt3',
			'text'         => esc_html__( 'Please check our youtube channel for video instructions of Richard Resto setup and customization.', 'richard-resto' ),
			'button_label' => esc_html__( 'Video Tutorials', 'richard-resto' ),
			'button_link'  => 'https://www.youtube.com/watch?v=_JDgKKG5zBA&list=PL-vVuHhFGshHxytZqdV3nwM-as0gmQtg4',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'fifth' => array(
			'title'        => esc_html__( 'Customization Request', 'richard-resto' ),
			'icon'         => 'dashicons dashicons-admin-tools',
			'text'         => esc_html__( 'We have dedicated team members for theme customization. Feel free to contact us any time if you need any customization service.', 'richard-resto' ),
			'button_label' => esc_html__( 'Customization Request', 'richard-resto' ),
			'button_link'  => 'https://www.preciousthemes.com/contact-us/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'sixth' => array(
			'title'        => esc_html__( 'Child Theme', 'richard-resto' ),
			'icon'         => 'dashicons dashicons-admin-customizer',
			'text'         => esc_html__( 'If you want to customize theme file, you should use child theme rather than modifying theme file itself.', 'richard-resto' ),
			'button_label' => esc_html__( 'About child theme', 'richard-resto' ),
			'button_link'  => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
	),

	// Upgrade.
	'upgrade_to_pro' 	=> array(
		'description'   => esc_html__( 'Upgrade to pro version for more exciting features and additional theme options.', 'richard-resto' ),
		'button_label' 	=> esc_html__( 'Upgrade to Pro', 'richard-resto' ),
		'button_link'  	=> 'https://www.preciousthemes.com/downloads/richard-resto-pro/',
		'is_new_tab'   	=> true,
	),

    // Free vs pro array.
    'free_pro' => array(
	    array(
		    'title'		=> esc_html__( 'Custom Widgets', 'richard-resto' ),
		    'desc' 		=> esc_html__( 'Widgets added by theme to enhance features', 'richard-resto' ),
		    'free' 		=> esc_html__('10','richard-resto'),
		    'pro'  		=> esc_html__('13','richard-resto'),
	    ),
	    
	    array(
		    'title'     => esc_html__( 'Google Fonts', 'richard-resto' ),
		    'desc' 		=> esc_html__( 'Google fonts options for changing the overall site fonts', 'richard-resto' ),
		    'free'  	=> 'no',
		    'pro'   	=> esc_html__('100+','richard-resto'),
	    ),
	    array(
		    'title'     => esc_html__( 'Color Options', 'richard-resto' ),
		    'desc'      => esc_html__( 'Options to change primary color of the site', 'richard-resto' ),
		    'free'      => esc_html__('no','richard-resto'),
		    'pro'       => esc_html__('yes','richard-resto'),
	    ),
	    array(
		    'title'     => esc_html__( 'WooCommerce Ready', 'richard-resto' ),
		    'desc'      => esc_html__( 'Theme supports/works with WooCommerce plugin', 'richard-resto' ),
		    'free'      => esc_html__('no','richard-resto'),
		    'pro'       => esc_html__('yes','richard-resto'),
	    ),
        array(
    	    'title'     => esc_html__( 'Latest Product Carousel', 'richard-resto' ),
    	    'desc'      => esc_html__( 'Widget to display latest products in carousel mode', 'richard-resto' ),
    	    'free'      => esc_html__('no','richard-resto'),
    	    'pro'       => esc_html__('yes','richard-resto'),
        ),

        array(
    	    'title'     => esc_html__( 'Skills with Progressbar', 'richard-resto' ),
    	    'desc'      => esc_html__( 'Widget to display skills with progress bar', 'richard-resto' ),
    	    'free'      => esc_html__('no','richard-resto'),
    	    'pro'       => esc_html__('yes','richard-resto'),
        ),

        array(
    	    'title'     => esc_html__( 'Fact Counter', 'richard-resto' ),
    	    'desc'      => esc_html__( 'Widget to display facts count that goes up when viewport is visible', 'richard-resto' ),
    	    'free'      => esc_html__('no','richard-resto'),
    	    'pro'       => esc_html__('yes','richard-resto'),
        ),
        array(
    	    'title'     => esc_html__( 'Hide Footer Credit', 'richard-resto' ),
    	    'desc'      => esc_html__( 'Option to enable/disable Powerby(Designer) credit in footer', 'richard-resto' ),
    	    'free'      => esc_html__('no','richard-resto'),
    	    'pro'       => esc_html__('yes','richard-resto'),
        ),
        array(
    	    'title'     => esc_html__( 'Override Footer Credit', 'richard-resto' ),
    	    'desc'      => esc_html__( 'Option to Override existing Powerby credit of footer', 'richard-resto' ),
    	    'free'      => esc_html__('no','richard-resto'),
    	    'pro'       => esc_html__('yes','richard-resto'),
        ),
	    array(
		    'title'     => esc_html__( 'SEO', 'richard-resto' ),
		    'desc' 		=> esc_html__( 'Developed with high skilled SEO tools.', 'richard-resto' ),
		    'free'  	=> 'yes',
		    'pro'   	=> 'yes',
	    ),
	    array(
		    'title'     => esc_html__( 'Support Forum', 'richard-resto' ),
		    'desc'      => esc_html__( 'Highly experienced and dedicated support team for your help plus online chat.', 'richard-resto' ),
		    'free'      => esc_html__('yes', 'richard-resto'),
		    'pro'       => esc_html__('High Priority', 'richard-resto'),
	    )

    ),

);
Richard_Resto_About::init( apply_filters( 'richard_resto_about_filter', $config ) );