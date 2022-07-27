<?php

$allowed_blocks = [
	'core/paragraph',
];

$photo = get_field( 'photo' );
$position = get_field( 'position' );
$date_since = get_field( 'date_since' );
$title = get_field( 'title' );
$socials = get_field( 'socials' );

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}
?>

<div class="aw-author-card" <?=$anchor;?>>
    <div class="aw-author-card__left">
        <? if (!empty($photo)): ?>
            <figure>
                <img
                    src="<?=$photo['url'];?>"
                    alt="<?=$photo['alt'];?>"
                    title="<?=$photo['title'];?>"
                >
            </figure>
        <? endif; ?>
	    <? if (!empty($position)): ?>
            <span><?=$position;?></span>
	    <? endif; ?>
	    <? if (!empty($date_since)): ?>
            <span><?=$date_since;?></span>
	    <? endif; ?>
    </div>
    <div class="aw-author-card__right">
        <? if (!empty($title)): ?>
            <span><?=$title;?></span>
        <? endif; ?>
        <InnerBlocks allowedBlocks="<?=esc_attr( wp_json_encode( $allowed_blocks ) );?>"/>
        <? if (!empty($socials)): ?>
            <div class="aw-author-card__right-socials">
                <? foreach ($socials as $social): ?>
                    <a
                        class="aw-author-card__right-socials__link"
	                    <?if (!empty($social['icon'])):?>style="background-image: url(<?=$social['icon'];?>);"<?endif;?>
                        <?if (!empty($social['link'])):?>href="<?=$social['link'];?>"<?endif;?>>
                    </a>
                <? endforeach; ?>
            </div>
        <? endif; ?>
    </div>
</div>

