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

<section class="<?=join( ' ', $classes );?> aw-bg" <?=$anchor;?>>
    <div class="aw-hero container">
        <InnerBlocks />
    </div>
</section>