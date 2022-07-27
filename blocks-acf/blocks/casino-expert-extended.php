<?php
$title = get_field('title');
$excerpt = get_field('excerpt');
$author = get_field('author');
$with_promo = get_field('with_promo');
if ($with_promo)
    $promo = get_field('promo');
?>

<div class="aw-experte-card">
    <? if (!empty($title)): ?>
	    <h3><?=$title;?></h3>
    <? endif; ?>
	<div class="aw-experte-card__container">
		<img src="<?=get_template_directory_uri() . '/assets/img/quote.svg'?>" alt="Quote"/>
		<div class="aw-experte-card__content">
			<? if (!empty($excerpt)): ?>
                <p><img src="<?=get_template_directory_uri() . '/assets/img/quote.svg'?>" alt="Quote"/>
                    <?=$excerpt;?>
                </p>
            <? endif; ?>
			<div class="aw-experte-card__content-bottom">
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
                                <? foreach ($author['socials'] as $link): ?>
                                    <div class="aw-personal__card__content__socials">
                                        <? if (!empty($link['logo'])): ?>
                                            <img src="<?=$link['logo'];?>"/>
                                        <? endif; ?>
	                                    <? if (!empty($link['link'])): ?>
                                            <a href="<?=$link['link']['link_to'];?>"><?=$link['link']['title'];?></a>
	                                    <? endif; ?>
                                    </div>
                                <? endforeach; ?>
	                        <? endif; ?>
                        </div>
                    </div>
                <? endif; ?>
                <? if ($with_promo && isset($promo) && !empty($promo)): ?>
                    <div class="aw-casino-card-with-button">
                        <? if (!empty($promo['logo'])): ?>
                            <img
                                src="<?=$promo['logo']['url'];?>"
                                alt="<?=$promo['logo']['alt'];?>"
                                title="<?=$promo['logo']['title'];?>"
                            />
                        <? endif; ?>
                        <? if (!empty($promo['rating'])): ?>
                            <div class="aw-casino-card-with-button__rating">
                                <div class="aw-casino-card-with-button__rating-stars">
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                    <div class="aw-swiper-slide__card__rating-cover" style="width: <?=100-$promo['rating']*100/5?>%"></div>
                                </div>
                                <span><?=$promo['rating'];?> / 5</span>
                            </div>
                        <? endif; ?>
	                    <? if (!empty($promo['button'])): ?>
                            <button <?if (!empty($promo['button']['link'])):?>data-url="<?=$promo['button']['link'];?>"<?endif;?>>
                                <?=$promo['button']['title'];?>
                            </button>
	                    <? endif; ?>
                    </div>
                <? endif; ?>
			</div>
		</div>
	</div>
</div>