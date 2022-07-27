<?php

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}

$allowed_blocks = [
	'acf/review-casino-hero-card',
	'acf/review-casino-hero-content-container',
];

$template = [
	[
		'acf/review-casino-hero-card'
	],
	[
		'acf/review-casino-hero-content-container'
	],
];
?>

<div class="aw-hero__container aw-clearfix" <?=$anchor;?>>
    <InnerBlocks
        allowedBlocks="<?=esc_attr( wp_json_encode( $allowed_blocks ) );?>"
        template="<?=esc_attr( wp_json_encode( $template ) );?>"
    />
</div>