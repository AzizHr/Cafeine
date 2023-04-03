<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme Setup
if ( ! function_exists( 'coffee_block_support' ) ) :
	function coffee_block_support() {
		load_theme_textdomain( 'coffee-block', get_template_directory() . '/languages' );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		
		// Add support for WooCommerce
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );				
		
		// Enqueue editor styles.
		add_editor_style( 'editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'coffee_block_support' );

function coffee_block_style_load() {
  $theme_version = wp_get_theme()->get( 'Version' );
  $version_string = is_string( $theme_version ) ? $theme_version : false;	
  wp_register_style(
    'coffee_block_style_load',
    get_template_directory_uri() . '/editor-style.css',
    array(),
    $version_string
  );

  wp_enqueue_style( 'coffee_block_style_load' );
}

add_action( 'enqueue_block_editor_assets', 'coffee_block_style_load' );

// Load Styles/Scripts
if ( ! function_exists( 'coffee_block_styles' ) ) :
	function coffee_block_styles() {
		// Register theme stylesheet.
		wp_register_style('coffee-block-style', get_template_directory_uri() . '/style.css', array());

  		// Add styles inline.
  		wp_add_inline_style( 'coffee-block-style', coffee_block_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'coffee-block-style' );
		if ( is_rtl() ) { 
			wp_enqueue_style('rtl-css',get_template_directory_uri().'/assets/css/rtl.css', 'rtl_css' ); 
		}
		// Enqueue jquery.
		wp_enqueue_script('jquery');
	}
endif;
add_action( 'wp_enqueue_scripts', 'coffee_block_styles' );


// Get font face styles.
if ( ! function_exists( 'coffee_block_get_font_face_styles' ) ) {
function coffee_block_get_font_face_styles() {
return "
@font-face{font-family: 'Poppins'; font-weight: 100; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Thin.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 100; font-style: italic; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-ThinItalic.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 200; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-ExtraLight.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 200; font-style: italic; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-ExtraLightItalic.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 300; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Light.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 300; font-style: italic; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-LightItalic.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 400; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Regular.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 400; font-style: italic; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Italic.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 500; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Medium.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 500; font-style: italic; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-MediumItalic.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 600; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-SemiBold.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 600; font-style: italic; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-SemiBoldItalic.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 700; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Bold.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 700; font-style: italic; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-BoldItalic.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 800; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-ExtraBold.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 800; font-style: italic; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-ExtraBoldItalic.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 900; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Black.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Poppins'; font-weight: 900; font-style: italic; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-BlackItalic.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Oswald'; font-weight: 200; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Oswald-ExtraLight.woff2' ) . "') format('woff2');}		
@font-face{font-family: 'Oswald'; font-weight: 300; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Oswald-Light.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Oswald'; font-weight: 400; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Oswald-Regular.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Oswald'; font-weight: 500; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Oswald-Medium.woff2' ) . "') format('woff2');}         
@font-face{font-family: 'Oswald'; font-weight: 600; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Oswald-SemiBold.woff2' ) . "') format('woff2');}
@font-face{font-family: 'Oswald'; font-weight: 700; font-style: normal; font-stretch: normal; font-display: swap; src: url('" . get_theme_file_uri( 'assets/fonts/Oswald-Bold.woff2' ) . "') format('woff2');}  		
";
}
}

// Add block patterns
require get_template_directory() . '/includes/block-patterns.php';