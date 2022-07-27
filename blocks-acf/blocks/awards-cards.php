<?
    $cards = get_field('cards');
?>

<?php if( !empty($cards) ): ?>
    <div class="aw-awards__wrapper">
	    <? foreach ($cards as $card): ?>
		    <? if (!empty($card)): ?>
                <div class="aw-awards__card">
				    <? if (!empty($card['image'])): ?>
                        <img
                                src="<?=$card['image']['url'];?>"
                                alt="<?=$card['image']['alt'];?>"
                                title="<?=$card['image']['title'];?>"
                        />
				    <? endif; ?>
				    <? if (!empty($card['link'])): ?>
                        <a href="<? if ( !empty($card['link']['link_to']) ) echo $card['link']['link_to'];?>">
						    <? if (!empty($card['link']['title'])): ?>
                                <span><?=$card['link']['title'];?></span>
						    <? endif; ?>
                        </a>
				    <? endif; ?>
                </div>
		    <? endif; ?>
	    <? endforeach; ?>
    </div>
<? endif; ?>