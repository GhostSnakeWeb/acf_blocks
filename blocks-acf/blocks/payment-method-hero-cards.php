<?php
    $allowed_blocks = [
        'acf/payment-method-hero-card',
        'acf/review-payment-affiliate',
    ];
?>

<div class="aw-hero__paypal-cards">
    <InnerBlocks allowedBlocks="<?=esc_attr( wp_json_encode( $allowed_blocks ) );?>"/>
</div>