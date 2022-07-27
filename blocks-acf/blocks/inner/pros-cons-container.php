<?php

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}
$allowed_blocks = [
	'acf/pros-cons-block',
];
?>

<div class="aw-clearfix" <?=$anchor;?>>
    <InnerBlocks allowedBlocks="<?=esc_attr( wp_json_encode( $allowed_blocks ) );?>"/>
</div>