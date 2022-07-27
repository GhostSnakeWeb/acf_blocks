<?php

$allowed_blocks = [
	'acf/sidebar',
	'acf/content'
];

$template = [
    ['acf/content'],
	['acf/sidebar']
];
?>

<div class="aw-main-wrapper container pb-100">
    <InnerBlocks allowedBlocks="<?=esc_attr( wp_json_encode( $allowed_blocks ) );?>" template="<?=esc_attr( wp_json_encode( $template ) );?>" />
</div>

