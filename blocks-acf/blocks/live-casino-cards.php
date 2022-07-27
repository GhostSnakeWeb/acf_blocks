<?php
$cards = get_field('cards');
?>
<? if (!empty($cards)): ?>
    <div class="aw-live-casino__cards">
        <? foreach ($cards as $card): ?>
            <div class="aw-live-casino__cards-card">
                <a <?if (!empty($card['link'])):?>href="<?=$card['link'];?>" target="_blank"<?endif;?>>
                    <? if (!empty($card['image'])): ?>
                        <img
                            src="<?=$card['image']['url'];?>"
                            alt="<?=$card['image']['alt'];?>"
                            title="<?=$card['image']['title'];?>"
                        />
                    <? endif; ?>
                </a>
                <a <?if (!empty($card['link'])):?>href="<?=$card['link'];?>" target="_blank"<?endif;?>>
                    <? if (!empty($card['title'])): ?>
                        <span><?=$card['title'];?></span>
                    <? endif; ?>
                </a>
                <? if (!empty($card['button']) && !empty($card['button']['title'])): ?>
                    <button <?if (!empty($card['button']['link'])):?>data-url="<?=$card['button']['link'];?>"<?endif;?>>
                        <?=$card['button']['title'];?>
                    </button>
                <? endif; ?>
            </div>
        <? endforeach; ?>
    </div>
<? endif; ?>