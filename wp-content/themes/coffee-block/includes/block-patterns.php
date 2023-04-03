<?php
/**
 * Coffee Block : Block Patterns
 *
 * @since Coffee Block 1.0
 */

function coffee_block_register_block_patterns() {
	$block_pattern_categories = array(
		'coffee-block' => array( 'label' => __( 'Coffee Block', 'coffee-block' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Coffee Block 1.0
	 *
	 */
	$block_pattern_categories = apply_filters( 'coffee_block_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}

	$block_patterns = array(
		'coffee-block-background-header',		
		'coffee-block-hero-banner',
		'coffee-block-section1',
		'coffee-block-section2',
		'coffee-block-section3',
		'coffee-block-section4',
		'coffee-block-section11',
		'coffee-block-with-post-title',
		'coffee-block-header',
		'coffee-block-with-heading-title',
		'coffee-block-with-archive-title',
		'coffee-block-footer',	
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Coffee Block 1.0
	 * 
	 * @param array $block_patterns List of block patterns by name.
	 *
	 */
	$block_patterns = apply_filters( 'coffee_block_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/includes/patterns/' . $block_pattern . '.php' );

		register_block_pattern( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern
			'coffee-block/' . $block_pattern,
			require $pattern_file // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
		);
	}
}
add_action( 'init', 'coffee_block_register_block_patterns', 9 );
