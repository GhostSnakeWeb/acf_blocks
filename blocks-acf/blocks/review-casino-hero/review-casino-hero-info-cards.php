<?php
$cards = get_field('cards');
?>

<? if (!empty($cards)): ?>
    <div class="aw-hero__info">
        <? foreach ($cards as $i => $card): ?>
            <? if ($i !== 0): ?>
                <hr>
	        <? endif; ?>
            <div class="aw-hero__info-card">
                <? if (!empty($card['title'])): ?>
                    <span><?=$card['title'];?></span>
                <? endif; ?>
                <? if (!empty($card['description'])): ?>
                    <span><?=$card['description'];?></span>
                <? endif; ?>
            </div>
        <? endforeach; ?>
    </div>
<? endif; ?>