<?php

$title = get_field( 'title' );

$classes = ['aw-video-poker__tips-and-tricks'];
if ( ! empty( $block['className'] ) ) {
	$classes = array_merge( $classes, explode( ' ', $block['className'] ) );
}

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}
?>

<div class="<?=join( ' ', $classes );?>" <?=$anchor;?>>
    <div>
        <img src="<?=get_template_directory_uri() . '/assets/img/tips-and-tricks.svg'?>" alt="Tips and Tricks">
	    <? if (!empty($title)): ?>
            <span><?=$title;?></span>
	    <? endif; ?>
    </div>
    <InnerBlocks />
</div>

