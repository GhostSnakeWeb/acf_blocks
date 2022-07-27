<?php
$title = get_field('title');
$slides = get_field('slides');
?>

<div class="aw-hero__preview">
    <? if (!empty($title)): ?>
        <span><?=$title;?></span>
    <? endif; ?>
    <? if (!empty($slides)): ?>
        <div class="aw-hero-preview-slider aw-swiper-wrapper-additional">
            <div class="swiper swiper-review-header">
                <div class="aw-swiper-wrapper swiper-wrapper aw-hero__preview-cards">
	                <? foreach ($slides as $slide):
                        $image_big = $slide['image']['url'];
                        $image_small = $slide['image']['sizes']['review-casino-hero-preview-small'];
                    ?>
                        <div class="aw-hero__preview-cards__card swiper-slide">
                            <div class="aw-hero__preview-cards__card-hover"></div>
                            <img src="<?=$image_small;?>" alt="Black Casino" data-imagesrc="<?=$image_big;?>">
                        </div>
	                <? endforeach; ?>
                </div>
            </div>
            <div class="aw-swiper-bullets swiper-pagination" id="bulletsHeroReviewCasino"></div>
        </div>
    <? endif; ?>
</div>