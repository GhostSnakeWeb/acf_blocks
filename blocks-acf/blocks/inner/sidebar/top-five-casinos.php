<?php
	$title = get_field('title');
	$casinos = get_field('casinos');
?>
<aside class="aw-aside__card aw-aside__card-top-casinos selector" data-margin-top="153">
    <? if (!empty($title)): ?>
        <span><?=$title;?></span>
    <? endif; ?>
	<? if (!empty($casinos)): ?>
        <? foreach ($casinos as $casino): ?>
            <div class="aw-aside__card-top-casinos__casino">
                <? if (!empty($casino['image'])): ?>
                    <a href="<? if (!empty($casino['link'])) echo $casino['link'];?>" target="_blank">
                        <img
                            src="<?=$casino['image']['url'];?>"
                            alt="<?=$casino['image']['alt'];?>"
                            title="<?=$casino['image']['title'];?>"
                        >
                    </a>
                <? endif; ?>
                <div class="aw-aside__card-top-casinos__casino-content">
	                <? if (!empty($casino['bonus'])): ?>
                        <span><?=$casino['bonus'];?></span>
	                <? endif; ?>
	                <? if (!empty($casino['button']) && !empty($casino['button']['title'])): ?>
                        <button <?if (!empty($casino['button']['link'])):?>data-url="<?=$casino['button']['link'];?>"<?endif;?>><?=$casino['button']['title'];?></button>
	                <? endif; ?>
                </div>
            </div>
        <? endforeach; ?>
	<? endif; ?>
</aside>