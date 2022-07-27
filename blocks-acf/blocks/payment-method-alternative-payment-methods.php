<?php
$top = get_field('top');
$bottom = get_field('bottom');
?>
<? if (!empty($top)): ?>
    <div class="aw-alternative-payment-methods__top-cards">
        <? foreach ($top['cards'] as $card): ?>
            <a <?if (!empty($card['link'])):?>href="<?=$card['link'];?>"<?endif;?>>
                <div class="aw-alternative-payment-methods__top-cards-card">
                    <? if (!empty($card['logo'])): ?>
                        <img
                            src="<?=$card['logo']['url'];?>"
                            alt="<?=$card['logo']['alt'];?>"
                            title="<?=$card['logo']['title'];?>"
                        >
                    <? endif; ?>
	                <? if (!empty($card['title'])): ?>
                        <span><?=$card['title'];?></span>
	                <? endif; ?>
                </div>
            </a>
        <? endforeach; ?>
    </div>
<? endif; ?>

<? if (!empty($bottom)): ?>
    <div class="aw-alternative-payment-methods__bottom-cards">
        <? foreach ($bottom['cards'] as $card): ?>
            <a <?if (!empty($card['link'])):?>href="<?=$card['link'];?>"<?endif;?>>
                <div class="aw-alternative-payment-methods__bottom-cards-card">
	                <? if (!empty($card['logo'])): ?>
                        <img
                                src="<?=$card['logo']['url'];?>"
                                alt="<?=$card['logo']['alt'];?>"
                                title="<?=$card['logo']['title'];?>"
                        >
	                <? endif; ?>
	                <? if (!empty($card['title'])): ?>
                        <span><?=$card['title'];?></span>
	                <? endif; ?>
                </div>
            </a>
        <? endforeach; ?>
    </div>
<? endif; ?>