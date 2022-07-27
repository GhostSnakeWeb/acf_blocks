<?php

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}

$template = [
	[
		'custom/list-with-green-circles'
	],
	[
		'acf/review-casino-hero-info-cards'
	],
];

?>

<div class="aw__flex" <?=$anchor;?>>
	<div class="aw__right-item">
		<div class="aw-header-container">
            <InnerBlocks
                template="<?=esc_attr( wp_json_encode( $template ) );?>"
            />
		</div>
	</div>
</div>