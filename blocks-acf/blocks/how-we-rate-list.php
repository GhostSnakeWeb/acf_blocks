<?php

$list_items = get_field( 'list_items' );

$classes = [];
if ( ! empty( $block['className'] ) ) {
	$classes = array_merge( $classes, explode( ' ', $block['className'] ) );
}

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}
?>

<? if (!empty($list_items)): ?>
    <ul class="<?=join( ' ', $classes );?>" <?=$anchor;?>>
        <? foreach( $list_items as $number => $list_item ): ?>
            <li>
                <span><?=$number+1;?></span>
                <div class="aw-how-we-rate__list-container">
                    <div class="aw-how-we-rate__list-container__content">
                        <? if (!empty($list_items['title'])): ?>
                            <h3><?=$list_items['title'];?></h3>
                        <? endif; ?>
	                    <? if (!empty($list_items['content'])): ?>
                            <?=$list_items['content'];?>
	                    <? endif; ?>
                    </div>
	                <? if (!empty($list_items['image'])): ?>
                        <img
                            src="<?=$list_items['image']['url'];?>"
                            alt="<?=$list_items['image']['alt'];?>"
                            title="<?=$list_items['image']['title'];?>"
                        >
	                <? endif; ?>
                </div>
            </li>
        <? endforeach; ?>
<!--        <li><span>5</span>-->
<!--            <div class="aw-how-we-rate__list-container">-->
<!--                <div class="aw-how-we-rate__list-container__content">-->
<!--                    <h3>Casino bewertet</h3>-->
<!--                    <div class="aw-how-we-rate__list-container__content-text">-->
<!--                        <div class="card-mobile"><img src="img/how-we-rate/mobile/casino.png" alt="Casino Logo"/><img src="img/how-we-rate/mobile/casino-name.png" alt="Casino Name"/>-->
<!--                            <div class="card-mobile__rating">-->
<!--                                <div class="card-mobile__rating-stars"><img src="img/how-we-rate/mobile/star.svg" alt="Star"/><img src="img/how-we-rate/mobile/star.svg" alt="Star"/><img src="img/how-we-rate/mobile/star.svg" alt="Star"/><img src="img/how-we-rate/mobile/star.svg" alt="Star"/><img src="img/how-we-rate/mobile/star.svg" alt="Star"/></div><span>5.0 / 5</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <p>Hier in unserer Datenbank bieten wir eine große Auswahl an Online-Casinos, die für jeden Spielertyp geeignet sind. Selbst wenn Sie ein neuer Spieler oder ein erfahrener Online-Gaming-Enthusiast sind, wird unsere Sammlung von Online-Casinos daher nützlich sein, insbesondere wenn Sie wissen, wie und wo Sie suchen müssen. Es gibt jedoch viele Parameter, die Sie berücksichtigen sollten, bevor Sie ein Konto einrichten, bevor Sie Ihre erste Einzahlung tätigen.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="card"><img src="img/how-we-rate/rating-block/blur-logo.svg" alt="Logo"><img src="img/how-we-rate/rating-block/blur-casino-name.svg" alt="Casino Name"><img src="img/how-we-rate/rating-block/rating.svg" alt="Rating"></div>-->
<!--            </div>-->
<!--        </li>-->
    </ul>
<? endif; ?>

<div class="<?=join( ' ', $classes );?>" <?=$anchor;?>>
	<? if (!empty($title)): ?>
		<span><?=$title;?></span>
	<? endif; ?>
	<InnerBlocks />
	<? if (!empty($image)): ?>
		<img
			src="<?=$image['url'];?>"
			alt="<?=$image['alt'];?>"
			title="<?=$image['title'];?>"
		>
	<? endif; ?>
</div>