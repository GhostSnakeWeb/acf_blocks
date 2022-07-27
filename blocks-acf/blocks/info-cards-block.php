<?php
	$allowed_blocks = [
		'acf/info-card-with-top-border',
	];
?>

<div class="aw-about-company-paypal__info-cards">
	<InnerBlocks allowedBlocks="<?=esc_attr( wp_json_encode( $allowed_blocks ) );?>"/>
</div>