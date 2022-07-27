<?php
$logo = get_field('logo');
$title = get_field('title');
$rating = get_field('rating');
$additional_fields = get_field('additional_fields');
?>

<div class="aw-hero__paypal-cards__paypal-card">
	<img class="aw-hero__paypal-cards__paypal-card__ball" src="<?=get_template_directory_uri() . '/assets/img/hero/review-payment-method/ball.svg'?>" alt="Ball">
    <? if (!empty($logo)): ?>
        <figure>
            <img
                class="aw-hero__paypal-cards__paypal-card__paypal"
                src="<?=$logo['url'];?>"
                alt="<?=$logo['alt'];?>"
                title="<?=$logo['title'];?>"
            >
        </figure>
    <? endif; ?>
	<div class="aw-hero__paypal-cards__paypal-card__content">
		<div class="aw-hero__paypal-cards__paypal-card__content-header">
            <? if (!empty($title)): ?>
			    <span><?=$title;?></span>
            <? endif; ?>
            <? if (!empty($rating)): ?>
                <div class="aw-hero__paypal-cards__paypal-card__content-header__rating">
                    <div class="aw-hero__paypal-cards__paypal-card__content-header__rating-stars">
                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                        <div class="aw-swiper-slide__card__rating-cover" style="width: <?=100-$rating*100/5?>%"></div>
                    </div>
                    <span><?=$rating;?> / 5</span>
                </div>
            <? endif; ?>
		</div>
        <? if (!empty($additional_fields)): ?>
            <div class="aw-hero__paypal-cards__paypal-card__content-footer">
                <? foreach ($additional_fields as $i => $field): ?>
                    <? if ($i > 0): ?>
                        <hr>
                    <? endif; ?>
                    <div class="aw-hero__paypal-cards__paypal-card__content-footer__item">
                        <? if (!empty($field['title'])): ?>
                            <span><?=$field['title'];?></span>
                        <? endif; ?>
	                    <? if (!empty($field['description'])): ?>
                            <? if ($field['description'][0]['acf_fc_layout'] === 'text_field'): ?>
                                <span><?=$field['description'][0]['text'];?></span>
                            <? elseif ($field['description'][0]['acf_fc_layout'] === 'link_field'): ?>
                                <a href="<?=$field['description'][0]['link'];?>"><?=$field['description'][0]['link'];?></a>
                            <? endif; ?>
	                    <? endif; ?>
                    </div>
                <? endforeach; ?>
            </div>
        <? endif; ?>
	</div>
</div>