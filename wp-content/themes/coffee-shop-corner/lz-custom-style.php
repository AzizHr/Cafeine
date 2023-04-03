<?php 

	$coffee_shop_corner_custom_style = '';

	// Logo Size
	$coffee_shop_corner_logo_top_padding = get_theme_mod('coffee_shop_corner_logo_top_padding');
	$coffee_shop_corner_logo_bottom_padding = get_theme_mod('coffee_shop_corner_logo_bottom_padding');
	$coffee_shop_corner_logo_left_padding = get_theme_mod('coffee_shop_corner_logo_left_padding');
	$coffee_shop_corner_logo_right_padding = get_theme_mod('coffee_shop_corner_logo_right_padding');

	if( $coffee_shop_corner_logo_top_padding != '' || $coffee_shop_corner_logo_bottom_padding != '' || $coffee_shop_corner_logo_left_padding != '' || $coffee_shop_corner_logo_right_padding != ''){
		$coffee_shop_corner_custom_style .=' .logo {';
			$coffee_shop_corner_custom_style .=' padding-top: '.esc_attr($coffee_shop_corner_logo_top_padding).'px; padding-bottom: '.esc_attr($coffee_shop_corner_logo_bottom_padding).'px; padding-left: '.esc_attr($coffee_shop_corner_logo_left_padding).'px; padding-right: '.esc_attr($coffee_shop_corner_logo_right_padding).'px;';
		$coffee_shop_corner_custom_style .=' }';
	}

	// Site Title Font Size
	$coffee_shop_corner_site_title_font_size = get_theme_mod('coffee_shop_corner_site_title_font_size');
	if( $coffee_shop_corner_site_title_font_size != ''){
		$coffee_shop_corner_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$coffee_shop_corner_custom_style .=' font-size: '.esc_attr($coffee_shop_corner_site_title_font_size).'px;';
		$coffee_shop_corner_custom_style .=' }';
	}

	// Site Tagline Font Size
	$coffee_shop_corner_site_tagline_font_size = get_theme_mod('coffee_shop_corner_site_tagline_font_size');
	if( $coffee_shop_corner_site_tagline_font_size != ''){
		$coffee_shop_corner_custom_style .=' .logo p.site-description {';
			$coffee_shop_corner_custom_style .=' font-size: '.esc_attr($coffee_shop_corner_site_tagline_font_size).'px;';
		$coffee_shop_corner_custom_style .=' }';
	}

	//Slider color
	$coffee_shop_corner_slider_color = get_theme_mod('coffee_shop_corner_slider_color');

	if ( $coffee_shop_corner_slider_color != '') {
		$coffee_shop_corner_custom_style .=' #slider h2 a, #slider p,#slider a.read-btn span {';
			$coffee_shop_corner_custom_style .=' color:'.esc_attr($coffee_shop_corner_slider_color).';';
		$coffee_shop_corner_custom_style .=' }';
	}
	
	//Service color
	$coffee_shop_corner_service_color = get_theme_mod('coffee_shop_corner_service_color');

	if ( $coffee_shop_corner_service_color != '') {
		$coffee_shop_corner_custom_style .=' .service-box .service-content h4 a,.service-btn a span {';
			$coffee_shop_corner_custom_style .=' color:'.esc_attr($coffee_shop_corner_service_color).';';
		$coffee_shop_corner_custom_style .=' }';
	}