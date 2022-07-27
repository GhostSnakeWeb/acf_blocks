<?php

$allowed_blocks = [
	'acf/popular-casino-games',
	'acf/top-payment-methods',
	'acf/top-slot-games',
	'acf/top-five-casinos',
	'acf/mass-media',
	'acf/popular-best-blog-articles',
];
?>
<div class="aw-aside data-sticky-container" id="parentTest" data-sticky-container="">
    <div class="sticky">
        <InnerBlocks allowedBlocks="<?=esc_attr( wp_json_encode( $allowed_blocks ) );?>"/>
    </div>
</div>