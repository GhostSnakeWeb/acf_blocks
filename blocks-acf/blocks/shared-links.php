<?php
$title = get_field('title');
$share_block = get_field('share_block');
$share_links = get_field('share_links');
?>

<div class="aw-blog-separate-cover__socials">
    <? if (!empty($title)): ?>
	    <span><?=$title;?></span>
    <? endif; ?>
	<? if (!empty($share_block)): ?>
        <a class="aw-blog-separate-cover__socials-share" id="sharePageLink">
            <? if (!empty($share_block['icon'])): ?>
                <img src="<?=$share_block['icon'];?>" title="<?=__('Copy Page Link')?>" alt="<?=__('Share')?>">
            <? endif; ?>
        </a>
	<? endif; ?>
	<? if (!empty($share_links)): ?>
        <? foreach ($share_links as $link): ?>
            <a class="aw-blog-separate-cover__socials-social"
               href="<?=$link['link'];?>" target="_blank">
                <span class="aw-blog-separate-cover__socials-social--logo" style="-webkit-mask-image: url('<?=$link['icon'];?>');
                mask-image: url('<?=$link['icon'];?>');"></span>
            </a>
        <? endforeach; ?>
	<? endif; ?>
</div>