<?php

$classes = [ '' ];
if ( ! empty( $block['className'] ) ) {
	$classes = array_merge( $classes, explode( ' ', $block['className'] ) );
}

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}
?>

<div class="<?=join( ' ', $classes );?> aw-main-content" <?=$anchor;?>>
    <InnerBlocks />
</div>