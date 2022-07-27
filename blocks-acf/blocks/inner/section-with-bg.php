<?php

$classes = [ '' ];
if ( ! empty( $block['className'] ) ) {
	$classes = array_merge( $classes, explode( ' ', $block['className'] ) );
}

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}

$image_class = get_field( 'background_class' );
$image_src = get_field( 'background_image' );

echo '<section class="' . join( ' ', $classes ) . '"' . $anchor . '>';
	echo '<InnerBlocks />';
	echo '<img class="'. $image_class .'" src="'. $image_src .'" alt="Background">';
echo '</section>';