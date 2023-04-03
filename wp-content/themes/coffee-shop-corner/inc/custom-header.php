<?php
/**
 * Custom header implementation
 */

function coffee_shop_corner_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'coffee_shop_corner_custom_header_args', array(
		'default-text-color' => 'fff',
		'header-text' 	     =>	false,
		'width'              => 600,
		'height'             => 650,
		'flex-width'         => true,
		'flex-height'        => true,
	) ) );
}

add_action( 'after_setup_theme', 'coffee_shop_corner_custom_header_setup' );