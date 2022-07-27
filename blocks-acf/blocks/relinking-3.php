<?
    $items = get_field('items');
?>

<? if (!empty($items)) { ?>
    <div class="relinking-small">
        <? foreach ($items as $item) { ?>
            <div class="relinking-small__item">
                <a href="<?= $item['link']['url'] ?>" class="relinking-small__link">
                    <div>
                        <? if (!empty($item['logo'])) { ?>
                            <img
                                loading="lazy"
                                src="<?= $item['logo']['url'] ?>"
                                alt="<?= $item['logo']['alt'] ?>"
                                title="<?= $item['logo']['title'] ?>"
                                width="165"
                                class="relinking-small__img"
                            >
                        <? } ?>
                        <? if (!empty($item['link']['title'])) { ?>
                            <div class="relinking-small__title">
                                <?= $item['link']['title'] ?>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.5 12.3106H5.5" stroke="#20B18D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.5 17.3106L19.5 12.3106" stroke="#20B18D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.5 7.31061L19.5 12.3106" stroke="#20B18D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        <? } ?>
                    </div>
                </a>
            </div>
        <? } ?>
    </div>
<? } ?>