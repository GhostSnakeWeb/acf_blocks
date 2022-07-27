<?
    $items = get_field('items');
?>

<? if (!empty($items)) { ?>
    <div class="relinking">
        <? foreach ($items as $item) { ?>
            <div class="relinking__item">
                <a href="<?= $item['link']['url'] ?>" class="relinking__link">
                    <div>
                        <? if (!empty($item['icon'])) { ?>
                            <div class="relinking__img">
                                <img
                                    loading="lazy"
                                    src="<?= $item['icon']['url'] ?>"
                                    alt="<?= $item['icon']['alt'] ?>"
                                    title="<?= $item['icon']['title'] ?>"
                                    width="<?= $item['icon']['width'] ?>"
                                >
                            </div>
                        <? } ?>
                        <? if (!empty($item['title'])) { ?>
                            <div class="relinking__title">
                                <?= $item['title'] ?>
                            </div>
                        <? } ?>
                        <? if (!empty($item['text'])) { ?>
                            <p class="relinking__text">
                                <?= $item['text'] ?>
                            </p>
                        <? } ?>
                    </div>
                    <? if (!empty($item['link'])) { ?>
                        <button class="relinking__button" type="button">
                            <?= $item['link']['title'] ?>
                        </button>
                    <? } ?>
                </a>
            </div>
        <? } ?>
    </div>
<? } ?>