<?
$tabs = get_field('tabs');
?>

<? if (!empty($tabs)): ?>
    <div class="aw-vertical-tabs">
        <div class="aw-vertical-tabs__tabs">
            <? foreach ($tabs as $i => $tab): ?>
                <? if (!empty($tab['title'])): ?>
                    <button
                        class="aw-vertical-tabs__tabs-link <?if ($i === 0):?>aw-vertical-tabs__tabs-link--active<?endif;?>"
                        data-content="<?=$tab['title'];?>">
                        <span><?=$tab['title'];?></span>
                    </button>
                <? endif; ?>
            <? endforeach; ?>
        </div>
        <div class="aw-vertical-tabs__content">
            <? foreach ($tabs as $i => $tab): ?>
                <? if (!empty($tab['content'])): ?>
                    <div class="aw-vertical-tabs__content-text <?if ($i === 0):?>aw-display-block<?endif;?>" id="<?=$tab['title'];?>">
                        <?=$tab['content'];?>
                    </div>
                <? endif; ?>
            <? endforeach; ?>
        </div>
    </div>

    <div class="aw-accordion-tabs">
        <? foreach ($tabs as $tab): ?>
            <div class="aw-accordion-tabs__accordion">
                <? if (!empty($tab['title'])): ?>
                    <button class="aw-accordion-tabs__accordion-button">
                        <span><?=$tab['title'];?></span>
                    </button>
                <? endif; ?>
                <? if (!empty($tab['content'])): ?>
                    <div class="aw-accordion-tabs__accordion-panel">
                        <?=$tab['content'];?>
                    </div>
                <? endif; ?>
            </div>
        <? endforeach; ?>
    </div>
<? endif; ?>