<?php

require_once get_template_directory() . '/includes/loader.php';

add_action( 'after_setup_theme', 'braine_setup_theme' );
add_action( 'after_setup_theme', 'braine_load_default_hooks' );


function braine_setup_theme() {

	load_theme_textdomain( 'braine', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'woocommerce' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'align-wide' );
	
    
	// Set the default content width.
	$GLOBALS['content_width'] = 525;
	
	/*---------- Register image sizes ----------*/
	
	//Register image sizes
	add_image_size( 'braine_90x90', 90, 90, true ); //braine_90x90 Recent Posts
	add_image_size( 'braine_380x250', 380, 250, true ); //braine_380x250 Blog Carousel
	add_image_size( 'braine_380x380', 380, 380, true ); //braine_380x380 Blog Grid
	add_image_size( 'braine_420x445', 420, 445, true ); //braine_420x445 Team Grid
	add_image_size( 'braine_1170x490', 1170, 490, true ); //braine_1170x490 Blog Classic
	
	/*---------- Register image sizes ends ----------*/
	
	
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main_menu' => esc_html__( 'Main Menu', 'braine' ),
		'footer_menu' => esc_html__( 'Footer Menu', 'braine' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'      => 250,
		'height'     => 250,
		'flex-width' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style();
	add_action( 'admin_init', 'braine_admin_init', 2000000 );
}

/**
 * [braine_admin_init]
 *
 * @param  array $data [description]
 *
 * @return [type]       [description]
 */


function braine_admin_init() {
	remove_action( 'admin_notices', array( 'ReduxFramework', '_admin_notices' ), 99 );
}

/*---------- Sidebar settings ----------*/

/**
 * [braine_widgets_init]
 *
 * @param  array $data [description]
 *
 * @return [type]       [description]
 */
function braine_widgets_init() {

	global $wp_registered_sidebars;
	$theme_options = get_theme_mod( 'braine' . '_options-mods' );
	register_sidebar( array(
		'name'          => esc_html__( 'Default Sidebar', 'braine' ),
		'id'            => 'default-sidebar',
		'description'   => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'braine' ),
		'before_widget' => '<div id="%1$s" class="widget sidebar-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="sidebar-widget_title">',
		'after_title'   => '</h5>',
	) );
	register_sidebar(array(
		'name' => esc_html__('Footer Widget', 'braine'),
		'id' => 'footer-sidebar',
		'description' => esc_html__('Widgets in this area will be shown in Footer Area.', 'braine'),
		'before_widget'=>'<div class="col-lg-6 col-md-12 col-sm-12 footer-column"><div id="%1$s" class="footer-widget %2$s">',
		'after_widget'=>'</div></div>',
		'before_title' => '<h5 class="footer-title">',
		'after_title' => '</h5>'
	));
	if ( class_exists( '\Elementor\Plugin' )){
		register_sidebar(array(
			'name' => esc_html__('Footer Widget Two', 'braine'),
			'id' => 'footer-sidebar-2',
			'description' => esc_html__('Widgets in this area will be shown in Footer Area.', 'braine'),
			'before_widget'=>'<div class="col-lg-6 col-md-12 col-sm-12 footer-column"><div id="%1$s" class="footer-widget %2$s">',
			'after_widget'=>'</div></div>',
			'before_title' => '<h5 class="footer-title">',
			'after_title' => '</h5>'
		));
		register_sidebar(array(
		  'name' => esc_html__( 'Blog Listing', 'braine' ),
		  'id' => 'blog-sidebar',
		  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'braine' ),
		  'before_widget'=>'<div id="%1$s" class="widget sidebar-widget %2$s">',
		  'after_widget'=>'</div>',
		  'before_title' => '<h5 class="sidebar-widget_title">',
		  'after_title' => '</h5>'
		));
	}
	if ( ! is_object( braine_WSH() ) ) {
		return;
	}

	$sidebars = braine_set( $theme_options, 'custom_sidebar_name' );

	foreach ( array_filter( (array) $sidebars ) as $sidebar ) {

		if ( braine_set( $sidebar, 'topcopy' ) ) {
			continue;
		}

		$name = $sidebar;
		if ( ! $name ) {
			continue;
		}
		$slug = str_replace( ' ', '_', $name );

		register_sidebar( array(
			'name'          => $name,
			'id'            => sanitize_title( $slug ),
			'before_widget' => '<div id="%1$s" class="%2$s widget sidebar-widget ">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="sidebar-widget_title">',
			'after_title'   => '</h5>',
		) );
	}

	update_option( 'wp_registered_sidebars', $wp_registered_sidebars );
}

add_action( 'widgets_init', 'braine_widgets_init' );

/*---------- Sidebar settings ends ----------*/

/*---------- Gutenberg settings ----------*/

function braine_gutenberg_editor_palette_styles() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_html__( 'strong yellow', 'braine' ),
            'slug' => 'strong-yellow',
            'color' => '#f7bd00',
        ),
        array(
            'name' => esc_html__( 'strong white', 'braine' ),
            'slug' => 'strong-white',
            'color' => '#fff',
        ),
		array(
            'name' => esc_html__( 'light black', 'braine' ),
            'slug' => 'light-black',
            'color' => '#242424',
        ),
        array(
            'name' => esc_html__( 'very light gray', 'braine' ),
            'slug' => 'very-light-gray',
            'color' => '#797979',
        ),
        array(
            'name' => esc_html__( 'very dark black', 'braine' ),
            'slug' => 'very-dark-black',
            'color' => '#000000',
        ),
    ) );
	
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => esc_html__( 'Small', 'braine' ),
			'size' => 10,
			'slug' => 'small'
		),
		array(
			'name' => esc_html__( 'Normal', 'braine' ),
			'size' => 15,
			'slug' => 'normal'
		),
		array(
			'name' => esc_html__( 'Large', 'braine' ),
			'size' => 24,
			'slug' => 'large'
		),
		array(
			'name' => esc_html__( 'Huge', 'braine' ),
			'size' => 36,
			'slug' => 'huge'
		)
	) );
	
}
add_action( 'after_setup_theme', 'braine_gutenberg_editor_palette_styles' );

/*---------- Gutenberg settings ends ----------*/

/*---------- Enqueue Styles and Scripts ----------*/

function braine_enqueue_scripts() {
	if ( ! defined( 'THEME_VAR' ) ) {
		// Replace the version number of the theme on each release.
		define( 'THEME_VAR', time() ); // you can change this time value with actual Theme version after release 
	}
	
    //styles
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'global', get_template_directory_uri() . '/assets/css/global.css' );
	wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css' );
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css' );
	wp_enqueue_style( 'braine-swiper', get_template_directory_uri() . '/assets/css/swiper.min.css' );	
	wp_enqueue_style( 'icomoon-style', get_template_directory_uri() . '/assets/css/icomoon-style.css' );
	wp_enqueue_style( 'braine-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css' );
	wp_enqueue_style( 'custom-animate', get_template_directory_uri() . '/assets/css/custom-animate.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );	
	wp_enqueue_style( 'odometer-theme-default', get_template_directory_uri() . '/assets/css/odometer-theme-default.css' );
	wp_enqueue_style( 'jquery.bootstrap-touchspin', get_template_directory_uri() . '/assets/css/jquery.bootstrap-touchspin.css' );
	wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css' );
	wp_enqueue_style( 'braine-main', get_stylesheet_uri() );
	wp_enqueue_style( 'braine-main-braine-style', get_template_directory_uri() . '/assets/css/braine-style.css' );
	wp_enqueue_style( 'braine-customs-1', get_template_directory_uri() . '/assets/css/customs-1.css' );
	wp_enqueue_style( 'braine-tut', get_template_directory_uri() . '/assets/css/tut.css' );
	wp_enqueue_style( 'braine-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	
    //scripts
	wp_enqueue_script( 'jquery-ui-core');
	wp_enqueue_script( 'popper', get_template_directory_uri().'/assets/js/popper.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array( 'jquery' ), '2.1.2', true );	
	wp_enqueue_script( 'appear', get_template_directory_uri().'/assets/js/appear.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'parallax', get_template_directory_uri().'/assets/js/parallax.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'tilt-jquery', get_template_directory_uri().'/assets/js/tilt.jquery.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-paroller', get_template_directory_uri().'/assets/js/jquery.paroller.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/js/wow.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'swiper', get_template_directory_uri().'/assets/js/swiper.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'backtotop', get_template_directory_uri().'/assets/js/backtotop.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'odometer', get_template_directory_uri().'/assets/js/odometer.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'parallax-scroll', get_template_directory_uri().'/assets/js/parallax-scroll.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'gsap', get_template_directory_uri().'/assets/js/gsap.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'splittext', get_template_directory_uri().'/assets/js/SplitText.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'scrolltrigger', get_template_directory_uri().'/assets/js/ScrollTrigger.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'scrolltoplugin', get_template_directory_uri().'/assets/js/ScrollToPlugin.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'scrollsmoother', get_template_directory_uri().'/assets/js/ScrollSmoother.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'touchspin', get_template_directory_uri().'/assets/js/touchspin.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-marquee', get_template_directory_uri().'/assets/js/jquery.marquee.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri().'/assets/js/magnific-popup.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'nav-tool', get_template_directory_uri().'/assets/js/nav-tool.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri().'/assets/js/jquery-ui.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'element-in-view', get_template_directory_uri().'/assets/js/element-in-view.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'braine-main-script', get_template_directory_uri().'/assets/js/main-script.js', array(), false, true );
	
	if( is_singular() ) wp_enqueue_script('comment-reply');
}
add_action( 'wp_enqueue_scripts', 'braine_enqueue_scripts' );

/*---------- Enqueue styles and scripts ends ----------*/

/*---------- Google fonts ----------*/

function braine_fonts_url() {
	
	$fonts_url = '';
	
		$font_families['Inter']    = 'Inter:300,400,500,600,700,800,900';
		$font_families['Lora']     = 'Lora:400,500,600,700';
		

		$font_families = apply_filters( 'BRAINE/includes/classes/header_enqueue/font_families', $font_families );

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$protocol  = is_ssl() ? 'https' : 'http';
		$fonts_url = add_query_arg( $query_args, $protocol . '://fonts.googleapis.com/css' );

		return esc_url_raw($fonts_url);

}

function braine_theme_styles() {
    wp_enqueue_style( 'braine-theme-fonts', braine_fonts_url(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'braine_theme_styles' );
add_action( 'admin_enqueue_scripts', 'braine_theme_styles' );

/*---------- Google fonts ends ----------*/

/*---------- More functions ----------*/

// 1) braine_set function

/**
 * [braine_set description]
 *
 * @param  array $data [description]
 *
 * @return [type]       [description]
 */
if ( ! function_exists( 'braine_set' ) ) {
	function braine_set( $var, $key, $def = '' ) {

		if ( is_object( $var ) && isset( $var->$key ) ) {
			return $var->$key;
		} elseif ( is_array( $var ) && isset( $var[ $key ] ) ) {
			return $var[ $key ];
		} elseif ( $def ) {
			return $def;
		} else {
			return false;
		}
	}
}


//Contact Form 7 List
function get_contact_form_7_list()
{
	$contact_forms = array();
	$cf7 = get_posts( 'post_type="wpcf7_contact_form"&numberposts=-1' );
	if (!empty($cf7)) {
		foreach ($cf7 as $cform) {
			if (isset($cform)) {
				if (isset($cform->ID) && isset($cform->post_title)) {
					$contact_forms[$cform->ID] = $cform->post_title;
				}
			}
		}
	}

    return $contact_forms;
}

// 2) braine_add_editor_styles function

function braine_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'braine_add_editor_styles' );

// 3) Add specific CSS class by filter body class.

$options = braine_WSH()->option(); 
if( braine_set($options, 'boxed_wrapper') ){

add_filter( 'body_class', function( $classes ) {
    $classes[] = 'boxed_wrapper';
    return $classes;
} );
}

add_filter('doing_it_wrong_trigger_error', function () {return false;}, 10, 0);

// Add social media user inputs
function braine_custom_user_profile_contact_fields( $methods ) {
    $methods['account_facebook'] = 'Facebook Account';
    $methods['account_x'] = 'X Account';
    $methods['account_instagram'] = 'Instagram Account';

	// Filter methods
    return apply_filters( 'braine_user_social_accounts', $methods );
}
add_action( 'user_contactmethods', 'braine_custom_user_profile_contact_fields' );

// Braine displayed icon in the dashboard menu items area
function braine_svg_icon() {
	return  "data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgMjYgMzAiPgogIDxpbWFnZSB3aWR0aD0iMjYiIGhlaWdodD0iMzAiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBQm9BQUFBZUNBWUFBQUF5Mnc3WUFBQUFHWFJGV0hSVGIyWjBkMkZ5WlFCQlpHOWlaU0JKYldGblpWSmxZV1I1Y2NsbFBBQUFBNGRwVkZoMFdFMU1PbU52YlM1aFpHOWlaUzU0YlhBQUFBQUFBRHcvZUhCaFkydGxkQ0JpWldkcGJqMGk3N3UvSWlCcFpEMGlWelZOTUUxd1EyVm9hVWg2Y21WVGVrNVVZM3ByWXpsa0lqOCtJRHg0T25odGNHMWxkR0VnZUcxc2JuTTZlRDBpWVdSdlltVTZibk02YldWMFlTOGlJSGc2ZUcxd2RHczlJa0ZrYjJKbElGaE5VQ0JEYjNKbElEa3VNUzFqTURBeUlEYzVMbVl6TlRSbFptTTNNQ3dnTWpBeU15OHhNUzh3T1MweE1qb3dOVG8xTXlBZ0lDQWdJQ0FnSWo0Z1BISmtaanBTUkVZZ2VHMXNibk02Y21SbVBTSm9kSFJ3T2k4dmQzZDNMbmN6TG05eVp5OHhPVGs1THpBeUx6SXlMWEprWmkxemVXNTBZWGd0Ym5NaklqNGdQSEprWmpwRVpYTmpjbWx3ZEdsdmJpQnlaR1k2WVdKdmRYUTlJaUlnZUcxc2JuTTZlRzF3VFUwOUltaDBkSEE2THk5dWN5NWhaRzlpWlM1amIyMHZlR0Z3THpFdU1DOXRiUzhpSUhodGJHNXpPbk4wVW1WbVBTSm9kSFJ3T2k4dmJuTXVZV1J2WW1VdVkyOXRMM2hoY0M4eExqQXZjMVI1Y0dVdlVtVnpiM1Z5WTJWU1pXWWpJaUI0Yld4dWN6cDRiWEE5SW1oMGRIQTZMeTl1Y3k1aFpHOWlaUzVqYjIwdmVHRndMekV1TUM4aUlIaHRjRTFOT2s5eWFXZHBibUZzUkc5amRXMWxiblJKUkQwaWVHMXdMbVJwWkRvME1tTTBZbUl6WVMwelpHTmhMVE0yTkdRdE9ERXlOQzFqTmpJNE5EVXlNMkV4TVRjaUlIaHRjRTFOT2tSdlkzVnRaVzUwU1VROUluaHRjQzVrYVdRNlJFSkVRMFEyTTBWRVJEVXdNVEZGUlRoQlF6RkZNRFU1TmpBME1VUTJNVU1pSUhodGNFMU5Pa2x1YzNSaGJtTmxTVVE5SW5odGNDNXBhV1E2UkVKRVEwUTJNMFJFUkRVd01URkZSVGhCUXpGRk1EVTVOakEwTVVRMk1VTWlJSGh0Y0RwRGNtVmhkRzl5Vkc5dmJEMGlRV1J2WW1VZ1VHaHZkRzl6YUc5d0lFTkRJREl3TVRRZ0tGZHBibVJ2ZDNNcElqNGdQSGh0Y0UxTk9rUmxjbWwyWldSR2NtOXRJSE4wVW1WbU9tbHVjM1JoYm1ObFNVUTlJbmh0Y0M1cGFXUTZPVGxtTkRsa09UY3RaakF4TnkwMVpUUXpMV0V3TWpFdFlUWXlaakkxTkRNM1pEY3hJaUJ6ZEZKbFpqcGtiMk4xYldWdWRFbEVQU0poWkc5aVpUcGtiMk5wWkRwd2FHOTBiM05vYjNBNllUSmxOMkpoWkRndFl6UTNZUzB4TVdWaExUZzFabUV0WkRBelpEYzRZbU5oTWpCbElpOCtJRHd2Y21SbU9rUmxjMk55YVhCMGFXOXVQaUE4TDNKa1pqcFNSRVkrSUR3dmVEcDRiWEJ0WlhSaFBpQThQM2h3WVdOclpYUWdaVzVrUFNKeUlqOCtWbVJhVVFBQUFmZEpSRUZVZU5xOGxzMHJCSEVjeG1mSE9qcVF6Y3ZLNjVhWFFxaDE5WEtSWEJRNTdrV0t4RC9BU1E3K0FFVlJEaWlKaTFvT0tGS1NpSU9YOWJJWGIzazVyNkx3Zk90UjB6U3pNN016Zk91ejdjNXZtbWZuKzN1K3o0enZ1N3RVUVVYQUtDaFR2S3N2RUFQallNR1Bqd0V3cVhoZktxZ0U4L0xkaHp1SzQwdUo4cmQxSmFyRnl0OVhTSVI4L3lDa3Fzby9sWmRDNjNSdjNHalJiL01pTStBUmRJRXFnL1VvNkFRZklCZE02RThRMTMxYmlKeUFNUGprYjdGc04wV3J3VGJvQU84Z0grekk1cWNpSkhVSytzRys3bmc1dUFNSlVBUzJ6SWJlN2g3VmdqMHdEYkkweDJNVWtYalpUWllzcWtQajlQSGliYnExUEZEb3RldWV3Skh1bUxUMDNrdWhNOUFLWGtFRFRmQWJvQ3RlQ1oyREZvcUkyemJBRk1qZytySVhRaGNVZVFFVmRGYzJDSUl4VGZzZTNBakYySzVuenNjbUNHaldCMEdkVmZ0VURwcHB2UE5PbmpSekV0U2RrOFlXWm9KR3M0ZWd5bDRiMVRWRkpIb0tlQ2RtRmc2enZXWkNieUkwQkc0TTJ0WENuZ2NvRXJKb2NVNnlQZmJUL3pXZ2h4dDlDWmJZMG5Td3hxaHhVM3UvNlMwWG5UTTRvVGRKTzV6VXFwWHJJaDZJaU8yUFZSdGg2clpHN014Um1rdVJXVDZ2TElYT1hJZ2MwTkcya21FeFJaRkRCbTdDcnRBazA4RnB1NXBrU0oxa25meWpkcWFFSFhjMWN5UVNxYndGM1lKNk1Ld1phaDhmRitmTXZ5amZLMHpyUjRBQkFOZ1JiZjlnSXJheUFBQUFBRWxGVGtTdVFtQ0MiLz4KPC9zdmc+";
}

//Related Products
function braine_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
