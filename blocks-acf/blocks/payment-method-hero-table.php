<?php
$allowed_blocks = [
	'core/table',
];

$template = [
	['core/table'],
];

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}
?>

<div class="aw-hero__paypal-cards__table" <?=$anchor;?>>
	<InnerBlocks allowedBlocks="<?=esc_attr( wp_json_encode( $allowed_blocks ) );?>" template="<?=esc_attr( wp_json_encode( $template ) );?>" />
</div>