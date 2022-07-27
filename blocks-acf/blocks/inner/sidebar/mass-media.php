<?php
    $title = get_field('title');
    $cards = get_field('cards');
?>
<aside class="aw-aside__card aw-aside__card-mass-media">
    <? if (!empty($title)): ?>
        <span><?=$title;?></span>
    <? endif; ?>
    <? if (!empty($cards)): ?>
        <? foreach ($cards as $card): ?>
            <div class="aw-aside__card-mass-media__card">
                <? if (!empty($card['logo'])): ?>
                    <a href="<?if (!empty($card['logo']['link'])) echo $card['logo']['link'];?>" target="_blank">
                        <? if (!empty($card['logo']['image'])): ?>
                            <img
                                src="<?=$card['logo']['image']['url'];?>"
                                alt="<?=$card['logo']['image']['alt'];?>"
                                title="<?=$card['logo']['image']['title'];?>"
                            >
                        <? endif; ?>
                    </a>
                <? endif; ?>
                <? if (!empty($card['link'])): ?>
                    <a href="<?if (!empty($card['link']['link_to'])) echo $card['link']['link_to'];?>" target="_blank">
                        <? if (!empty($card['link']['title'])): ?>
                            <span><?=$card['link']['title'];?></span>
                        <? endif; ?>
                    </a>
                <? endif; ?>
            </div>
        <? endforeach; ?>
    <? endif; ?>
</aside>