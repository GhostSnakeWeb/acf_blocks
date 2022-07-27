<?
    $items = get_field('items');
?>

<? if (!empty($items)) { ?>
    <div class="cards">
        <? foreach ($items as $item) { ?>
            <div class="card-wrap">
                <a href="<?= !empty($item['link']) ? $item['link']['url'] : '' ?>" class="card">
                    <img
                        loading="lazy"
                        src="<?= $item['icon']['url'] ?>"
                        alt="<?= $item['icon']['alt'] ?>"
                        title="<?= $item['icon']['title'] ?>"
                    >
                    
                    <? if (!empty(trim($item['title']))) { ?>
                        <div class="card-title">
                            <?= $item['title'] ?>
                        </div>
                    <? } ?>
                </a>
            </div>
        <? } ?>
    </div>
<? } ?>