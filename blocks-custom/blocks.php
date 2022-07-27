<?php

function gutenberg_register_custom_blocks() {
    if ( ! function_exists( 'register_block_type' ) ) {
        return;
    }

    $custom_blocks = array(
        array( 'name' => 'section' ),
        array( 'name' => 'faq' ),
        array( 'name' => 'dedicated-block' ),
        array( 'name' => 'custom-styles' ),
        array( 'name' => 'expert' ),
        array( 'name' => 'text-with-image' ),
        array( 'name' => 'content-links' ),
	    array( 'name' => 'rate-players-block' ),
	    array( 'name' => 'list-how-we-rate' ),
	    array( 'name' => 'list-main-rules' ),
	    array( 'name' => 'hero-mobile-card-casino' ),
	    array( 'name' => 'green-card' ),
	    array( 'name' => 'list-with-green-circles' ),
	    array( 'name' => 'overview-card' ),
	    array( 'name' => 'customer-service-card' ),
	    array( 'name' => 'block-with-green-background' ),
    );

    foreach($custom_blocks as $block) {
        $script_name = 'gutenberg-custom-block-script-' . $block['name'];
        $style_name = 'gutenberg-custom-block-style-' . $block['name'];
        
        wp_register_script(
            $script_name,
            get_template_directory_uri() . '/blocks-custom/blocks/' . $block['name'] . '/index.js',
            array( 'wp-blocks', 'wp-element', 'wp-block-editor' ),
			'1.3'
        );

        register_block_type( 'custom/' . $block['name'], array(
            'editor_script' => $script_name,
            'style' => $style_name,
        ) );

    }
}

add_action( 'init', 'gutenberg_register_custom_blocks' );
