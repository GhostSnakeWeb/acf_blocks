<?
$cards = get_field('cards');
?>
<? if (!empty($cards)): ?>
    <div class="aw-our-goal__wrapper">
        <? foreach ($cards as $card): ?>
            <div class="aw-goal-card">
                <? if (!empty($card['image'])): ?>
                    <img
                        src="<?=$card['image']['url'];?>"
                        alt="<?=$card['image']['alt'];?>"
                        title="<?=$card['image']['title'];?>"
                    />
                <? endif; ?>
                <? if (!empty($card['title'])):
                    $title_parts = explode(' ', $card['title']);
                ?>
                    <span><?=$title_parts[0];?>
                        <? if (!empty($title_parts[1])): ?>
                            <span>
                                <? for ($i = 1; $i < count($title_parts); $i++): ?>
                                    <?=$title_parts[$i];?>
                                <? endfor; ?>
                            </span>
                        <? endif; ?>
                    </span>
                <? endif; ?>
                <? if (!empty($card['description'])): ?>
                    <span><?=$card['description'];?></span>
                <? endif; ?>
            </div>
        <? endforeach; ?>
    </div>
<? endif; ?>