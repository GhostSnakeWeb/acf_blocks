<?php

$classes = [ '' ];
if ( ! empty( $block['className'] ) ) {
	$classes = array_merge( $classes, explode( ' ', $block['className'] ) );
}

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}

echo '<div class="' . join( ' ', $classes ) . '"' . $anchor . '>';
	echo '<InnerBlocks />';
echo '</div>';