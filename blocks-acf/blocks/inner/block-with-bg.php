<?php

$classes = [ '' ];
if ( ! empty( $block['className'] ) ) {
	$classes = array_merge( $classes, explode( ' ', $block['className'] ) );
}

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}

$image_src = get_field( 'background_image' );

echo '<div class="' . join( ' ', $classes ) . '"' . $anchor . ' style="background: url('. $image_src .')">';
	echo '<InnerBlocks />';
echo '</div>';