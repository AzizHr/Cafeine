<?php
/**
 * Coffee Shop Corner: Customizer
 *
 * @subpackage Coffee Shop Corner
 * @since 1.0
 */

use WPTRT\Customize\Section\Coffee_Shop_Corner_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Coffee_Shop_Corner_Button::class );

	$manager->add_section(
		new Coffee_Shop_Corner_Button( $manager, 'coffee_shop_corner_pro', [
			'title' => __( 'Coffee Shop Corner Pro', 'coffee-shop-corner' ),
			'priority' => 0,
			'button_text' => __( 'Go Pro', 'coffee-shop-corner' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/product/coffee-wordpress-theme/', 'coffee-shop-corner')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'coffee-shop-corner-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'coffee-shop-corner-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function coffee_shop_corner_customize_register( $wp_customize ) {

	$wp_customize->add_setting('coffee_shop_corner_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('coffee_shop_corner_logo_padding',array(
		'label' => __('Logo Margin','coffee-shop-corner'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('coffee_shop_corner_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'coffee_shop_corner_sanitize_float'
	));
	$wp_customize->add_control('coffee_shop_corner_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','coffee-shop-corner'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('coffee_shop_corner_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'coffee_shop_corner_sanitize_float'
	));
	$wp_customize->add_control('coffee_shop_corner_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','coffee-shop-corner'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('coffee_shop_corner_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'coffee_shop_corner_sanitize_float'
	));
	$wp_customize->add_control('coffee_shop_corner_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','coffee-shop-corner'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('coffee_shop_corner_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'coffee_shop_corner_sanitize_float'
 	));
 	$wp_customize->add_control('coffee_shop_corner_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','coffee-shop-corner'),
		'section' => 'title_tagline',
    ));

	$wp_customize->add_setting('coffee_shop_corner_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'coffee_shop_corner_sanitize_checkbox'
	));
	$wp_customize->add_control('coffee_shop_corner_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','coffee-shop-corner'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('coffee_shop_corner_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'coffee_shop_corner_sanitize_float'
	));
	$wp_customize->add_control('coffee_shop_corner_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','coffee-shop-corner'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('coffee_shop_corner_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'coffee_shop_corner_sanitize_checkbox'
	));
	$wp_customize->add_control('coffee_shop_corner_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','coffee-shop-corner'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('coffee_shop_corner_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'coffee_shop_corner_sanitize_float'
	));
	$wp_customize->add_control('coffee_shop_corner_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','coffee-shop-corner'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_panel( 'coffee_shop_corner_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'coffee-shop-corner' ),
		'description' => __( 'Description of what this panel does.', 'coffee-shop-corner' ),
	) );

	$wp_customize->add_section( 'coffee_shop_corner_theme_options_section', array(
    	'title'      => __( 'General Settings', 'coffee-shop-corner' ),
		'priority'   => 30,
		'panel' => 'coffee_shop_corner_panel_id'
	) );

	$wp_customize->add_setting('coffee_shop_corner_single_post_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'coffee_shop_corner_sanitize_choices'
	));
	$wp_customize->add_control('coffee_shop_corner_single_post_sidebar',array(
        'type' => 'select',
        'label' => __('Single Post Sidebar Layout','coffee-shop-corner'),
        'section' => 'coffee_shop_corner_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','coffee-shop-corner'),
            'Right Sidebar' => __('Right Sidebar','coffee-shop-corner'),
            'One Column' => __('One Column','coffee-shop-corner')
        ),
	));

	$wp_customize->add_setting('coffee_shop_corner_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'coffee_shop_corner_sanitize_choices'
	));
	$wp_customize->add_control('coffee_shop_corner_page_sidebar',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','coffee-shop-corner'),
        'section' => 'coffee_shop_corner_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','coffee-shop-corner'),
            'Right Sidebar' => __('Right Sidebar','coffee-shop-corner'),
            'One Column' => __('One Column','coffee-shop-corner')
        ),
	));

	$wp_customize->add_setting('coffee_shop_corner_archive_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'coffee_shop_corner_sanitize_choices'
	));
	$wp_customize->add_control('coffee_shop_corner_archive_page_sidebar',array(
        'type' => 'select',
        'label' => __('Archive & Search Page Sidebar Layout','coffee-shop-corner'),
        'section' => 'coffee_shop_corner_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','coffee-shop-corner'),
            'Right Sidebar' => __('Right Sidebar','coffee-shop-corner'),
            'One Column' => __('One Column','coffee-shop-corner'),
            'Grid Layout' => __('Grid Layout','coffee-shop-corner')
        ),
	));

	//home page header
	$wp_customize->add_section( 'coffee_shop_corner_header_section' , array(
    	'title'    => __( 'Header Settings', 'coffee-shop-corner' ),
		'priority' => null,
		'panel' => 'coffee_shop_corner_panel_id'
	) );

    $wp_customize->add_setting('coffee_shop_corner_contact_btn_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('coffee_shop_corner_contact_btn_text',array(
		'label'	=> __('Contact Button Text','coffee-shop-corner'),
		'section' => 'coffee_shop_corner_header_section',
		'type' => 'text'
	));

    $wp_customize->add_setting('coffee_shop_corner_contact_btn_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('coffee_shop_corner_contact_btn_url',array(
		'label'	=> __('Contact Button URL','coffee-shop-corner'),
		'section' => 'coffee_shop_corner_header_section',
		'type' => 'url'
	));

	//home page slider
	$wp_customize->add_section( 'coffee_shop_corner_slider_section' , array(
    	'title'    => __( 'Slider Settings', 'coffee-shop-corner' ),
		'priority' => null,
		'panel' => 'coffee_shop_corner_panel_id'
	) );

	$wp_customize->add_setting('coffee_shop_corner_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'coffee_shop_corner_sanitize_checkbox'
	));
	$wp_customize->add_control('coffee_shop_corner_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider','coffee-shop-corner'),
	   	'section' => 'coffee_shop_corner_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'coffee_shop_corner_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'coffee_shop_corner_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'coffee_shop_corner_slider' . $count, array(
			'label' => __('Select Slider Image Page', 'coffee-shop-corner' ),
			'description' => __('Image Size ( 600 x 650 )', 'coffee-shop-corner' ),
			'section' => 'coffee_shop_corner_slider_section',
			'type' => 'dropdown-pages'
		));
	}

	$wp_customize->add_setting( 'coffee_shop_corner_slider_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	   ));
	 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coffee_shop_corner_slider_color', array(
		   'label' => 'Text Color',
		'section' => 'coffee_shop_corner_slider_section',
	   )));

	//Service Section
	$wp_customize->add_section('coffee_shop_corner_service_section',array(
		'title'	=> __('Service Section','coffee-shop-corner'),
		'description'=> __('<b>Note :</b> This section will appear below the slider.','coffee-shop-corner'),
		'panel' => 'coffee_shop_corner_panel_id',
	));

    $wp_customize->add_setting('coffee_shop_corner_section_small_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('coffee_shop_corner_section_small_title',array(
		'label'	=> __('Section Small Title','coffee-shop-corner'),
		'section' => 'coffee_shop_corner_service_section',
		'type' => 'text'
	));

    $wp_customize->add_setting('coffee_shop_corner_section_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('coffee_shop_corner_section_title',array(
		'label'	=> __('Section Title','coffee-shop-corner'),
		'section' => 'coffee_shop_corner_service_section',
		'type' => 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('coffee_shop_corner_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'coffee_shop_corner_sanitize_choices',
	));
	$wp_customize->add_control('coffee_shop_corner_category_setting',array(
		'type' => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category To Display Post','coffee-shop-corner'),
		'section' => 'coffee_shop_corner_service_section',
	));

	$wp_customize->add_setting( 'coffee_shop_corner_service_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	   ));
	 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coffee_shop_corner_service_color', array(
		   'label' => 'Text Color',
		'section' => 'coffee_shop_corner_service_section',
	   )));


	//Footer
    $wp_customize->add_section( 'coffee_shop_corner_footer', array(
    	'title'  => __( 'Footer Text', 'coffee-shop-corner' ),
		'priority' => null,
		'panel' => 'coffee_shop_corner_panel_id'
	) );

	$wp_customize->add_setting('coffee_shop_corner_show_back_totop',array(
       'default' => true,
       'sanitize_callback'	=> 'coffee_shop_corner_sanitize_checkbox'
    ));
    $wp_customize->add_control('coffee_shop_corner_show_back_totop',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Back to Top','coffee-shop-corner'),
       'section' => 'coffee_shop_corner_footer'
    ));

    $wp_customize->add_setting('coffee_shop_corner_footer_copy',array(
		'default' => 'Coffee Shop WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('coffee_shop_corner_footer_copy',array(
		'label'	=> __('Footer Text','coffee-shop-corner'),
		'section' => 'coffee_shop_corner_footer',
		'setting' => 'coffee_shop_corner_footer_copy',
		'type' => 'text'
	));

	$wp_customize->add_setting('coffee_shop_corner_footer_copylink',array(
		'default' => 'https://www.luzuk.com/themes/free-coffee-shop-wordpress-theme/',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('coffee_shop_corner_footer_copylink',array(
		'label'	=> __('Footer Link','coffee-shop-corner'),
		'section' => 'coffee_shop_corner_footer',
		'setting' => 'coffee_shop_corner_footer_copylink',
		'type' => 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'coffee_shop_corner_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'coffee_shop_corner_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'coffee_shop_corner_customize_register' );

function coffee_shop_corner_customize_partial_blogname() {
	bloginfo( 'name' );
}

function coffee_shop_corner_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if (class_exists('WP_Customize_Control')) {

   	class coffee_shop_corner_Fontawesome_Icon_Chooser extends WP_Customize_Control {

      	public $type = 'icon';

      	public function render_content() { ?>
	     	<label>
	            <span class="customize-control-title">
	               <?php echo esc_html($this->label); ?>
	            </span>

	            <?php if ($this->description) { ?>
	                <span class="description customize-control-description">
	                   <?php echo wp_kses_post($this->description); ?>
	                </span>
	            <?php } ?>

	            <div class="coffee-shop-corner-selected-icon">
	                <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
	                <span><i class="fa fa-angle-down"></i></span>
	            </div>

	            <ul class="coffee-shop-corner-icon-list clearfix">
	                <?php
	                $coffee_shop_corner_font_awesome_icon_array = coffee_shop_corner_font_awesome_icon_array();
	                foreach ($coffee_shop_corner_font_awesome_icon_array as $coffee_shop_corner_font_awesome_icon) {
	                   $icon_class = $this->value() == $coffee_shop_corner_font_awesome_icon ? 'icon-active' : '';
	                   echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($coffee_shop_corner_font_awesome_icon) . '"></i></li>';
	                }
	                ?>
	            </ul>
	            <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
	        </label>
	        <?php
      	}
  	}
}
function coffee_shop_corner_customizer_script() {
   wp_enqueue_style( 'font-awesome-1', get_template_directory_uri().'/assets/css/fontawesome-all.css');
}
add_action( 'customize_controls_enqueue_scripts', 'coffee_shop_corner_customizer_script' );