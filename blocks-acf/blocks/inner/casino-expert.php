<?php

$title = get_field( 'title' );
$author = get_field( 'author' );

$classes = ['aw-references__card'];
if ( ! empty( $block['className'] ) ) {
	$classes = array_merge( $classes, explode( ' ', $block['className'] ) );
}

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}
?>

<div class="<?=join( ' ', $classes );?>" <?=$anchor;?>>
    <? if (!empty($title)): ?>
        <h3><?=$title;?></h3>
    <? endif; ?>
    <div class="aw-references__card__container">
        <img src="<?=get_template_directory_uri() . '/assets/img/quote.svg'?>" alt="Quote">
        <div class="aw-references__card__content">
            <InnerBlocks />
            <? if (!empty($author)): ?>
                <div class="aw-personal__card">
                    <? if (!empty($author['photo'])): ?>
                        <img
                            src="<?=$author['photo']['url'];?>"
                            alt="<?=$author['photo']['alt'];?>"
                            title="<?=$author['photo']['title'];?>"
                        />
                    <? endif; ?>
                    <div class="aw-personal__card__content">
	                    <? if (!empty($author['name'])): ?>
                            <span class="aw-personal__card__content__name"><?=$author['name'];?></span>
	                    <? endif; ?>
	                    <? if (!empty($author['position'])): ?>
                            <span class="aw-personal__card__content__additional"><?=$author['position'];?></span>
	                    <? endif; ?>
	                    <? if (!empty($author['socials'])): ?>
                            <? foreach ($author['socials'] as $social): ?>
                                <div class="aw-personal__card__content__socials">
	                                <? if (!empty($social['icon'])): ?>
                                        <img
                                            src="<?=$social['icon']['url'];?>"
                                            alt="<?=$social['icon']['alt'];?>"
                                            title="<?=$social['icon']['title'];?>"
                                        />
	                                <? endif; ?>
	                                <? if (!empty($social['link'])): ?>
                                        <a href="<?=$social['link']['link_to'];?>"><?=$social['link']['title'];?></a>
	                                <? endif; ?>
                                </div>
                            <? endforeach; ?>
	                    <? endif; ?>
                    </div>
                </div>
            <? endif; ?>
        </div>
    </div>
</div>