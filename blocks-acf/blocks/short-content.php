<?
    $title = get_field('title');
    $items = get_field('items');
?>

<? if (!empty($items)) { ?>
    <div class="short-content">
        <? if (!empty($title)) { ?>
            <div class="short-content__title">
                <?= $title ?>
            </div>
        <? } ?>
        <div class="short-content__wrap scrollbar-inner hidden-bg-prev hidden-bg-next">
            <div class="short-content__list">
                <? foreach ($items as $item) { ?>
                    <div class="short-content__item">
                        <a href="#" data-title="<?= $item['anchor'] ?>">
                            <?= $item['title'] ?>
                        </a>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
<? } ?>