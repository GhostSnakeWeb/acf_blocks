<?php
$top_cards = get_field('top_cards');
$bottom_cards = get_field('bottom_cards');
$last_card_number_from_top = 0;
?>

<? if (!empty($top_cards)): ?>
    <div class="aw-more-testimonials__top-cards">
        <? foreach ($top_cards as $i => $card):
	        $last_card_number_from_top = $i+1;
        ?>
            <div class="aw-more-testimonials__top-cards__card">
                <div class="aw-more-testimonials__top-cards__card-container">
                    <div class="aw-more-testimonials__top-cards__card-rating-container">
                        <? if (!empty($card['logo'])): ?>
                            <img
                                src="<?=$card['logo']['url'];?>"
                                alt="<?=$card['logo']['alt'];?>"
                                title="<?=$card['logo']['title'];?>"
                            />
                        <? endif; ?>
                        <div class="aw-more-testimonials__top-cards__card-rating-container__rating">
	                        <? if (!empty($card['title'])): ?>
                                <span><?=$card['title'];?></span>
	                        <? endif; ?>
	                        <? if (!empty($card['rating'])): ?>
                                <div class="aw-more-testimonials__top-cards__card-rating-container__rating-rate">
                                    <div class="aw-more-testimonials__top-cards__card-rating-container__rating-rate__stars">
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                        <div class="aw-swiper-slide__card__rating-cover" style="width: <?=100-$card['rating']*100/5?>%"></div>
                                    </div>
                                    <span><?=$card['rating'];?> / 5</span>
                                </div>
	                        <? endif; ?>
                        </div>
                    </div>
                    <div class="aw-more-testimonials__top-cards__card-bonus">
	                    <? if (!empty($card['bonus'])): ?>
                            <span><?=$card['bonus'];?></span>
	                    <? endif; ?>
	                    <? if (!empty($card['promocode'])): ?>
                            <div class="aw-tooltip">
                                <button data-copybutton="data-copybutton">
                                    <span><?=$card['promocode'];?></span>
                                    <hr/>
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/copy.svg'?>" alt="copy"/>
                                    <span class="aw-tooltiptext" id="copyTooltip">Copy to clipboard</span>
                                </button>
                            </div>
	                    <? endif; ?>
                    </div>
                </div>
                <div class="aw-more-testimonials__top-cards__card-info">
                    <? if (!empty($card['number_of_games'])): ?>
                        <div class="aw-more-testimonials__top-cards__card-info__card">
                            <? if (!empty($card['number_of_games']['title'])): ?>
                                <span><?=$card['number_of_games']['title'];?></span>
                            <? endif; ?>
	                        <? if (!empty($card['number_of_games']['value'])): ?>
                                <span><?=$card['number_of_games']['value'];?></span>
	                        <? endif; ?>
                        </div>
                    <? endif; ?>
	                <? if (!empty($card['payment_speed'])): ?>
                        <div class="aw-more-testimonials__top-cards__card-info__card">
	                        <? if (!empty($card['payment_speed']['title'])): ?>
                                <span><?=$card['payment_speed']['title'];?></span>
	                        <? endif; ?>
	                        <? if (!empty($card['payment_speed']['value'])): ?>
                                <span><?=$card['payment_speed']['value'];?></span>
	                        <? endif; ?>
                        </div>
	                <? endif; ?>
                </div>
	            <? if (!empty($card['deposit_methods'])): ?>
                    <div class="aw-more-testimonials__top-cards__card-payment">
	                    <? if (!empty($card['deposit_methods']['title'])): ?>
                            <span><?=$card['deposit_methods']['title'];?></span>
	                    <? endif; ?>
	                    <? if (!empty($card['deposit_methods']['logos'])): ?>
                            <div class="aw-more-testimonials__top-cards__card-payment__cards">
                                <? foreach ($card['deposit_methods']['logos'] as $logo): ?>
                                    <? if (!empty($logo)): ?>
                                        <img
                                            src="<?=$logo['logo']['url'];?>"
                                            alt="<?=$logo['logo']['alt'];?>"
                                            title="<?=$logo['logo']['title'];?>"
                                        />
	                                <? endif; ?>
                                <? endforeach; ?>
                            </div>
	                    <? endif; ?>
                    </div>
	            <? endif; ?>
	            <? if (!empty($card['age_limit'])): ?>
                    <div class="aw-more-testimonials__top-cards__card-aware">
                        <? if (!empty($card['age_limit']['logo'])): ?>
                            <img
                                src="<?=$card['age_limit']['logo']['url'];?>"
                                alt="<?=$card['age_limit']['logo']['alt'];?>"
                                title="<?=$card['age_limit']['logo']['title'];?>"
                            />
                        <? endif; ?>
	                    <? if (!empty($card['age_limit']['from_logo'])): ?>
                            <img
                                src="<?=$card['age_limit']['from_logo']['url'];?>"
                                alt="<?=$card['age_limit']['from_logo']['alt'];?>"
                                title="<?=$card['age_limit']['from_logo']['title'];?>"
                            />
	                    <? endif; ?>
                    </div>
	            <? endif; ?>
	            <? if (!empty($card['button']) && !empty($card['button']['title'])): ?>
                    <button <?if (!empty($card['button']['link'])):?>data-url="<?=$card['button']['link'];?>"<?endif;?>><?=$card['button']['title'];?></button>
	            <? endif; ?>
                <span><?=$i+1;?></span>
            </div>
        <? endforeach; ?>
    </div>
<? endif; ?>

<? if (!empty($bottom_cards)): ?>
    <div class="aw-more-testimonials-slider aw-swiper-wrapper-additional">
        <div class="swiper swiper-review">
            <div class="swiper-wrapper aw-more-testimonials__bottom-cards">
                <? foreach ($bottom_cards as $i => $card): ?>
                    <a <?if (!empty($card['link'])):?>href="<?=$card['link'];?>"<?endif;?> class="swiper-slide">
                        <div class="aw-more-testimonials__bottom-cards__card">
		                    <? if (!empty($card['logo'])): ?>
                                <img
                                        src="<?=$card['logo']['url'];?>"
                                        alt="<?=$card['logo']['alt'];?>"
                                        title="<?=$card['logo']['title'];?>"
                                />
		                    <? endif; ?>
		                    <? if (!empty($card['title'])): ?>
                                <span><?=$card['title'];?></span>
		                    <? endif; ?>
		                    <? if (!empty($card['rating'])): ?>
                                <div class="aw-more-testimonials__bottom-cards__card-rating">
                                    <div class="aw-more-testimonials__bottom-cards__card-rating__stars">
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star"/>
                                        <div class="aw-swiper-slide__card__rating-cover" style="width: <?=100-$card['rating']*100/5?>%"></div>
                                    </div>
                                    <span><?=$card['rating'];?> / 5</span>
                                </div>
		                    <? endif; ?>
                            <span class="aw-more-testimonials__bottom-cards__card-number">
                            <?=$last_card_number_from_top + ($i+1);?>
                        </span>
                        </div>
                    </a>
                <? endforeach; ?>
            </div>
        </div>
        <div class="aw-swiper-button swiper-button-next"></div>
        <div class="aw-swiper-button swiper-button-prev"></div>
        <div class="aw-swiper-bullets swiper-pagination" id="bulletsMoreTestimonials"></div>
    </div>
<? endif; ?>