<?php

$classes = [ 'aw__flex' ];
if ( ! empty( $block['className'] ) ) {
	$classes = array_merge( $classes, explode( ' ', $block['className'] ) );
}

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}

$template = [
	[
		'acf/hero-right-item',
		[
			'placeholder' => 'Add text here',
		]
	],
	[
		'acf/hero-left-item',
		[
			'placeholder' => 'Add image here',
		]
	],
];

echo '<div class="' . join( ' ', $classes ) . '"' . $anchor . '>';
	echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />';
echo '</div>';