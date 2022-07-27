<?
    $cards = get_field('cards');
?>

<? if( !empty($cards) ): ?>
    <div class="aw-learn-more__wrapper">
        <? foreach ($cards as $card): ?>
            <a <?if (!empty($card['link'])):?>href="<?=$card['link'];?>"<?endif;?>>
                <div class="aw-learn-more__card">
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
        <? endforeach; ?>
    </div>
<? endif; ?>