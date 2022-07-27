<?php

$allowed_blocks = [
	'core/list'
];

$title = get_field('title');
$games = get_field('games');
?>
<aside class="aw-aside__card aw-aside__card-spiele">
    <? if (!empty($title)): ?>
        <span><?=$title;?></span>
    <? endif; ?>

    <? if (!empty($games)): ?>
        <div class="aw-aside__card-spiele__games">
	        <? foreach ($games as $game): ?>
                <a href="<? if (!empty($game['link'])) echo $game['link'];?>" target="_blank">
                    <div class="aw-aside__card-spiele__games-game">
	                    <? if (!empty($game['image'])): ?>
                            <img
                                src="<?=$game['image']['url'];?>"
                                alt="<?=$game['image']['alt'];?>"
                                title="<?=$game['image']['title'];?>"
                            >
                        <? endif; ?>
	                    <? if (!empty($game['title'])): ?>
                            <span><?=$game['title'];?></span>
	                    <? endif; ?>
                    </div>
                </a>
	        <? endforeach; ?>
        </div>
    <? endif; ?>

    <div class="aw-aside__card-spiele__lists">
        <InnerBlocks allowedBlocks="<?=esc_attr( wp_json_encode( $allowed_blocks ) );?>"/>
    </div>
</aside>