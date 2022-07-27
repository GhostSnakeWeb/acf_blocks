<?php
$logo = get_field('logo');
$title = get_field('title');
$bonus = get_field('bonus');
$promocode = get_field('promocode');
$rating = get_field('rating');
$button = get_field('button');
$additional_info = get_field('additional_info');
$accepted_from = get_field('accepted_from');
$payment_speed = get_field('payment_speed');
$games = get_field('games');
$scores = get_field('scores');
$partners = get_field('partners');
$payment_methods = get_field('payment_methods');
$licensed = get_field('licensed');
$age_limit = get_field('age_limit');
?>

<div class="aw-hero__container-left">
	<div class="aw-hero__card">
		<div class="aw-hero__card-section">
			<div class="aw-hero__card-section__present">
				<div class="aw-hero__card-img-block">
                    <? if (!empty($logo)): ?>
					<figure>
                        <img
                            src="<?=$logo['sizes']['review-casino-hero-card-logo'];?>"
                            alt="<?=$logo['alt'];?>"
                            title="<?=$logo['title'];?>"
                        >
                    </figure>
                    <? endif; ?>
					<div class="aw-hero__card-content__speed aw-hero__card-content__speed--img-block">
						<? if (!empty($accepted_from)): ?>
                            <div class="aw-hero__card-content__speed-accepted">
	                            <? if (!empty($accepted_from['country_logo'])): ?>
                                    <img
                                        src="<?=$accepted_from['country_logo']['sizes']['review-casino-hero-card-country-logo'];?>"
                                        alt="<?=$accepted_from['country_logo']['alt'];?>"
                                        title="<?=$accepted_from['country_logo']['title'];?>"
                                    >
	                            <? endif; ?>
	                            <? if (!empty($accepted_from['title'])): ?>
                                    <span><?=$accepted_from['title'];?></span>
	                            <? endif; ?>
                            </div>
						<? endif; ?>
						<? if (!empty($payment_speed)): ?>
                            <span class="aw-hero__card-content__speed-zalung">
                                <? if (!empty($payment_speed['title'])): ?>
	                                <?=$payment_speed['title'];?>
                                <? endif; ?>
	                            <? if (!empty($payment_speed['description'])): ?>
                                    <span><?=$payment_speed['description'];?></span>
	                            <? endif; ?>
                            </span>
						<? endif; ?>
                    </div>
				</div>
				<div class="aw-hero__card-content">
					<div class="aw-hero__card-content__rating">
                        <? if (!empty($title)): ?>
                            <span><?=$title;?></span>
                        <? endif; ?>
						<? if (!empty($rating)): ?>
                            <div class="aw-hero__card-content__rating-stars">
                                <span><?=$rating;?> / 5</span>
                                <div class="aw-hero__card-content__rating-stars__container">
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                                    <div class="aw-swiper-slide__card__rating-cover" style="width: <?=100-$rating*100/5?>%"></div>
                                </div>
                            </div>
						<? endif; ?>
					</div>
					<div class="aw-hero__card-content__bonus">
                        <? if (!empty($bonus)): ?>
                            <span><?=$bonus;?></span>
                        <? endif; ?>
						<? if (!empty($promocode)): ?>
                            <div class="aw-tooltip">
                                <button data-copybutton>
                                    <span><?=$promocode;?></span>
                                    <hr>
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/copy.svg'?>" alt="copy">
                                    <span class="aw-tooltiptext" id="copyTooltip">Copy to clipboard</span>
                                </button>
                            </div>
						<? endif; ?>
					</div>
                    <? if (!empty($button)): ?>
					    <button class="aw-hero__card-content__link" <? if (!empty($button['link'])): ?>data-url="<?=$button['link'];?>"<? endif; ?>>
						    <? if (!empty($button['title'])): ?>
							    <?=$button['title'];?>
						    <? endif; ?>
                        </button>
                    <? endif; ?>
                    <? if (!empty($additional_info)): ?>
                        <div class="aw-hero__card-content__additional">
                            <? if (!empty($additional_info['title'])): ?>
                                <?=$additional_info['title'];?>
                            <? endif; ?>
	                        <? if (!empty($additional_info['description'])): ?>
                                <div class="aw-info">
                                    <p><?=$additional_info['description'];?></p>
                                </div>
	                        <? endif; ?>
                        </div>
                    <? endif; ?>
					<div class="aw-hero__card-content__speed">
                        <? if (!empty($accepted_from)): ?>
                            <div class="aw-hero__card-content__speed-accepted">
                                <? if (!empty($accepted_from['country_logo'])): ?>
                                    <img
                                        src="<?=$accepted_from['country_logo']['sizes']['review-casino-hero-card-country-logo'];?>"
                                        alt="AU"
                                    >
                                <? endif; ?>
	                            <? if (!empty($accepted_from['title'])): ?>
                                    <span><?=$accepted_from['title'];?></span>
	                            <? endif; ?>
                            </div>
                        <? endif; ?>
                        <? if (!empty($payment_speed)): ?>
                            <span class="aw-hero__card-content__speed-zalung">
                                <? if (!empty($payment_speed['title'])): ?>
                                    <?=$payment_speed['title'];?>
                                <? endif; ?>
	                            <? if (!empty($payment_speed['description'])): ?>
                                    <span><?=$payment_speed['description'];?></span>
	                            <? endif; ?>
                            </span>
                        <? endif; ?>
					</div>
				</div>
			</div>
			<? if (!empty($button)): ?>
                <button
                    class="aw-hero__card-content__link aw-hero__card-content__link--outer"
                    <? if (!empty($button['link'])): ?>data-url="<?=$button['link'];?>"<? endif; ?>
                >
	                <? if (!empty($button['title'])): ?>
		                <?=$button['title'];?>
	                <? endif; ?>
                </button>
			<? endif; ?>
			<? if (!empty($additional_info)): ?>
                <div class="aw-hero__card-content__additional aw-hero__card-content__additional--outer">
	                <? if (!empty($additional_info['title'])): ?>
		                <?=$additional_info['title'];?>
	                <? endif; ?>
	                <? if (!empty($additional_info['description'])): ?>
                        <div class="aw-info">
                            <p><?=$additional_info['description'];?></p>
                        </div>
	                <? endif; ?>
                </div>
			<? endif; ?>
		</div>
		<? if (!empty($games)): ?>
            <div class="aw-hero__card-section">
	            <? if (!empty($games['title'])): ?>
                    <span class="aw-hero__card-section__spiele-title"><?=$games['title'];?></span>
	            <? endif; ?>
	            <? if (!empty($games['games'])): ?>
                    <div class="aw-hero__card-section__spiele-content">
                        <div class="aw-hero__card-section__spiele-cards">
                            <? foreach ($games['games'] as $game): ?>
                                <div class="aw-hero__card-section__spiele-cards-card"><?=$game['title'];?></div>
                            <? endforeach; ?>
	                        <? if (!empty($games['more']) && !empty($games['more']['title'])): ?>
                                <a <?if (!empty($games['more']['link'])):?>href="<?=$games['more']['link'];?>"<? endif; ?>>
                                    <?=$games['more']['title'];?>
                                </a>
	                        <? endif; ?>
                        </div>
	                    <? if (!empty($games['more']) && !empty($games['more']['title'])): ?>
                            <a <?if (!empty($games['more']['link'])):?>href="<?=$games['more']['link'];?>"<? endif; ?>>
			                    <?=$games['more']['title'];?>
                            </a>
	                    <? endif; ?>
                    </div>
	            <? endif; ?>
            </div>
		<? endif; ?>
		<? if (!empty($scores)): ?>
            <div class="aw-hero__card-section">
                <div class="aw-hero__card-section__after-spiele">
                    <? foreach ($scores as $score): ?>
                        <div class="aw-hero__card-section__after-spiele__card">
                            <? if (!empty($score['title'])): ?>
                                <span><?=$score['title'];?></span>
                            <? endif; ?>
	                        <? if (!empty($score['rating'])): ?>
                                <div class="aw-hero__card-section__after-spiele__card-rating">
                                    <span><?=$score['rating'];?> / 5</span>
                                    <div class="aw-hero__card-section__after-spiele__card-rating__stars">
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                                        <div class="aw-swiper-slide__card__rating-cover" style="width: <?=100-$score['rating']*100/5?>%"></div>
                                    </div>
                                </div>
	                        <? endif; ?>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
		<? endif; ?>
		<? if (!empty($partners)): ?>
            <div class="aw-hero__card-section">
	            <? if (!empty($partners['title'])): ?>
                    <span class="aw-hero__card-section__typical-title"><?=$partners['title'];?></span>
	            <? endif; ?>
	            <? if (!empty($partners['partners'])): ?>
                    <div class="aw-hero__card-section__typical-content">
                        <div class="aw-hero__card-section__typical-cards">
                            <? foreach ($partners['partners'] as $partner): ?>
                                <img
                                    src="<?=$partner['logo']['sizes']['review-casino-hero-card-additional-logos'];?>"
                                    alt="<?=$partner['logo']['alt'];?>"
                                    title="<?=$partner['logo']['title'];?>"
                                >
                            <? endforeach; ?>
	                        <? if (!empty($partners['more']) && !empty($partners['more']['title'])): ?>
                                <a <?if (!empty($partners['more']['link'])):?>href="<?=$partners['more']['link'];?>"<? endif; ?>>
			                        <?=$partners['more']['title'];?>
                                </a>
	                        <? endif; ?>
                        </div>
	                    <? if (!empty($partners['more']) && !empty($partners['more']['title'])): ?>
                            <a <?if (!empty($partners['more']['link'])):?>href="<?=$partners['more']['link'];?>"<? endif; ?>>
			                    <?=$partners['more']['title'];?>
                            </a>
	                    <? endif; ?>
                    </div>
	            <? endif; ?>
            </div>
		<? endif; ?>
		<? if (!empty($payment_methods)): ?>
            <div class="aw-hero__card-section">
                <? if (!empty($payment_methods['title'])): ?>
                    <span class="aw-hero__card-section__typical-title"><?=$payment_methods['title'];?></span>
                <? endif; ?>
                <div class="aw-hero__card-section__typical-content">
	                <? if (!empty($payment_methods['methods'])): ?>
                        <div class="aw-hero__card-section__typical-cards">
                            <? foreach ($payment_methods['methods'] as $method): ?>
                                <img
                                    src="<?=$method['logo']['sizes']['review-casino-hero-card-additional-logos'];?>"
                                    alt="<?=$method['logo']['alt'];?>"
                                    title="<?=$method['logo']['title'];?>"
                                >
                            <? endforeach; ?>
	                        <? if (!empty($payment_methods['more']) && !empty($payment_methods['more']['title'])): ?>
                                <a <?if (!empty($payment_methods['more']['link'])):?>href="<?=$payment_methods['more']['link'];?>"<? endif; ?>>
			                        <?=$payment_methods['more']['title'];?>
                                </a>
	                        <? endif; ?>
                        </div>
	                <? endif; ?>
	                <? if (!empty($payment_methods['more']) && !empty($payment_methods['more']['title'])): ?>
                        <a <?if (!empty($payment_methods['more']['link'])):?>href="<?=$payment_methods['more']['link'];?>"<? endif; ?>>
			                <?=$payment_methods['more']['title'];?>
                        </a>
	                <? endif; ?>
                </div>
            </div>
		<? endif; ?>
		<? if (!empty($licensed)): ?>
            <div class="aw-hero__card-section">
	            <? if (!empty($licensed['title'])): ?>
                    <span class="aw-hero__card-section__typical-title"><?=$licensed['title'];?></span>
	            <? endif; ?>
	            <? if (!empty($licensed['licensers'])): ?>
                    <div class="aw-hero__card-section__typical-content">
                        <div class="aw-hero__card-section__typical-cards">
	                        <? foreach ($licensed['licensers'] as $licenser): ?>
                                <img
                                    src="<?=$licenser['logo']['sizes']['review-casino-hero-card-additional-logos'];?>"
                                    alt="<?=$licenser['logo']['alt'];?>"
                                    title="<?=$licenser['logo']['title'];?>"
                                >
	                        <? endforeach; ?>
                        </div>
                    </div>
	            <? endif; ?>
            </div>
		<? endif; ?>
	</div>
    <? if (!empty($age_limit)): ?>
        <div class="aw-hero__aware">
            <? if (!empty($age_limit['limit_logo'])): ?>
                <img
                    src="<?=$age_limit['limit_logo']['sizes']['review-casino-hero-age-limit'];?>"
                    alt="<?=$age_limit['limit_logo']['alt'];?>"
                    title="<?=$age_limit['limit_logo']['title'];?>"
                >
            <? endif; ?>
            <div class="aw-hero__aware-info">
	            <? if (!empty($age_limit['title'])): ?>
                    <span><?=$age_limit['title'];?></span>
	            <? endif; ?>
                <hr>
	            <? if (!empty($age_limit['link'])): ?>
                    <a href="<?=$age_limit['link'];?>"><?=$age_limit['link'];?></a>
	            <? endif; ?>
            </div>
        </div>
    <? endif; ?>
</div>