<?php
$title = get_field('title');
$allowed_blocks = ['acf/select_menu'];
$template = [
	[
		'acf/select-menu'
	],
];
?>

<aside class="aw-aside__card aw-aside__card-top-spiele">
    <? if (!empty($title)): ?>
        <span><?=$title;?></span>
    <? endif; ?>
    <InnerBlocks allowedBlocks="<?=esc_attr( wp_json_encode( $allowed_blocks ) );?>" template="<?=esc_attr( wp_json_encode( $template ) );?>" />
</aside>