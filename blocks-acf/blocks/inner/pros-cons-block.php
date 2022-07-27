<?php

$is_pros = get_field( 'is_pros' );
$title = get_field( 'title' );
$image = get_field( 'image' );
$left = get_field('left');

$classes = ['aw-pros-and-cons'];

if ($is_pros) {
	$classes[] = 'aw-pros-and-cons__pros';
} else {
	$classes[] = 'aw-pros-and-cons__cons';
}

if ($left)
	$classes[] = 'aw-fl';

if ( ! empty( $block['className'] ) ) {
	$classes = array_merge( $classes, explode( ' ', $block['className'] ) );
}

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}
?>

<div class="<?=join( ' ', $classes );?>" <?=$anchor;?>>
    <? if (!empty($title)): ?>
	    <span><?=$title;?></span>
    <? endif; ?>
    <InnerBlocks />
	<? if (!empty($image)): ?>
        <img
            src="<?=$image['url'];?>"
            alt="<?=$image['alt'];?>"
            title="<?=$image['title'];?>"
        >
	<? endif; ?>
</div>

