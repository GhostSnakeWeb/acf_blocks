<?
	$cards = get_field('cards');
?>

<?php if( !empty($cards) ): ?>
    <div class="aw-online__wrapper">
	    <? foreach ($cards as $card): ?>
		    <? if (!empty($card)): ?>
                <div class="aw-online__card">
				    <? if (!empty($card['title'])): ?>
                        <span><?=$card['title'];?></span>
				    <? endif; ?>
                    <hr/>
				    <? if (!empty($card['description'])): ?>
                        <p><?=$card['description'];?></p>
				    <? endif; ?>
                </div>
		    <? endif; ?>
	    <? endforeach; ?>
    </div>
<? endif; ?>