<?
    $cards = get_field('cards');
?>

<?php if( !empty($cards) ): ?>
    <div class="aw-topics__wrapper">
	    <? foreach ($cards as $card): ?>
		    <? if (!empty($card)): ?>
                <a <?if (!empty($card['link'])):?>href="<?=$card['link'];?>"<?endif;?>>
                    <div class="aw-topics__card">
					    <? if (!empty($card['image'])): ?>
                            <img
                                    src="<?=$card['image']['url'];?>"
                                    alt="<?=$card['image']['alt'];?>"
                                    title="<?=$card['image']['title'];?>"
                            />
					    <? endif; ?>
					    <? if (!empty($card['title'])): ?>
                            <span><?=$card['title'];?></span>
					    <? endif; ?>
                    </div>
                </a>
		    <? endif; ?>
	    <? endforeach; ?>
    </div>
<? endif; ?>