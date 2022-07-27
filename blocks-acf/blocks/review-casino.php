<?
    $games_count = get_field('games_count');
    $recommendations = get_field('recommendations');
    $recommendations_live = get_field('recommendations_live');
    $software = get_field('software');
    $deposit_methods = get_field('deposit_methods');
    $reserve_methods = get_field('reserve_methods');
    $systems = get_field('systems');
?>

<div class="widget-review review-casino">
    <? if (!empty($games_count['text'])) { ?>
        <div class="review-casino__section">
            <div class="widget-title">
                <?= $games_count['title'] ?>
            </div>
            <div class="review-casino__big">
                <b><?= $games_count['text'] ?></b>
            </div>
        </div>
    <? } ?>

    <? if (!empty($recommendations['items'])) { ?>
        <div class="review-casino__section">
            <div class="widget-title">
                <?= $recommendations['title'] ?>
            </div>
            <div class="review-casino__items">
                <? foreach ($recommendations['items'] as $item) { ?>
                    <?= !empty($item['link'])
                        ? '<a class="review-casino__item" href="'.$item['link']['url'].'">'
                        : '<div class="review-casino__item">' ?>
                        
                        <? if (!empty($item['image'])) { ?>
                            <img
                                loading="lazy"
                                src="<?= $item['image']['url'] ?>"
                                alt="<?= $item['image']['alt'] ?>"
                                title="<?= $item['image']['title'] ?>"
                                width="92"
                                class="review-casino__image"
                            >
                        <? } ?>
                        
                        <div class="review-casino__title">
                            <?= !empty($item['link']) ? $item['link']['title'] : $item['title'] ?>
                        </div>
                    <?= !empty($item['link']) ? '</a>' : '</div>' ?>
                <? } ?>
            </div>
        </div>
    <? } ?>

    <? if (!empty($recommendations_live['items'])) { ?>
        <div class="review-casino__section">
            <div class="widget-title">
                <?= $recommendations_live['title'] ?>
            </div>
            <div class="review-casino__items">
                <? foreach ($recommendations_live['items'] as $item) { ?>
                    <?= !empty($item['link'])
                        ? '<a class="review-casino__item" href="'.$item['link']['url'].'">'
                        : '<div class="review-casino__item">' ?>
                        
                        <? if (!empty($item['image'])) { ?>
                            <img
                                loading="lazy"
                                src="<?= $item['image']['url'] ?>"
                                alt="<?= $item['image']['alt'] ?>"
                                title="<?= $item['image']['title'] ?>"
                                width="92"
                                class="review-casino__image"
                            >
                        <? } ?>
                        
                        <div class="review-casino__title">
                            <?= !empty($item['link']) ? $item['link']['title'] : $item['title'] ?>
                        </div>

                    <?= !empty($item['link']) ? '</a>' : '</div>' ?>
                <? } ?>
            </div>
        </div>
    <? } ?>

    <? if (!empty($software['items'])) { ?>
        <div class="review-casino__section">
            <div class="widget-title">
                <?= $software['title'] ?>
            </div>
            <div class="review-casino__cols-3">
                <? foreach ($software['items'] as $item) { ?>
                    <?= !empty($item['link'])
                        ? '<a class="review-casino__card" href="'.$item['link']['url'].'">'
                        : '<div class="review-casino__card">' ?>
                        
                        <? if (!empty($item['image'])) { ?>
                            <img
                                loading="lazy"
                                src="<?= $item['image']['url'] ?>"
                                alt="<?= $item['image']['alt'] ?>"
                                title="<?= $item['image']['title'] ?>"
                                width="<?= $item['image']['width'] ?>"
                                class="review-casino__icon"
                            >
                        <? } ?>

                    <?= !empty($item['link']) ? '</a>' : '</div>' ?>
                <? } ?>
            </div>
        </div>
    <? } ?>

    <? if (!empty($deposit_methods['items'])) { ?>
        <div class="review-casino__section">
            <div class="widget-title">
                <?= $deposit_methods['title'] ?>
            </div>
            <div class="review-casino__cols-4">
                <? foreach ($deposit_methods['items'] as $item) { ?>
                    <?= !empty($item['link'])
                        ? '<a class="review-casino__card" href="'.$item['link']['url'].'">'
                        : '<div class="review-casino__card">' ?>
                        
                        <? if (!empty($item['image'])) { ?>
                            <img
                                loading="lazy"
                                src="<?= $item['image']['url'] ?>"
                                alt="<?= $item['image']['alt'] ?>"
                                title="<?= $item['image']['title'] ?>"
                                width="<?= $item['image']['width'] ?>"
                                class="review-casino__icon"
                            >
                        <? } ?>

                    <?= !empty($item['link']) ? '</a>' : '</div>' ?>
                <? } ?>
            </div>
        </div>
    <? } ?>

    <? if (!empty($reserve_methods['items'])) { ?>
        <div class="review-casino__section">
            <div class="widget-title">
                <?= $reserve_methods['title'] ?>
            </div>
            <div class="review-casino__cols-4">
                <? foreach ($reserve_methods['items'] as $item) { ?>
                    <?= !empty($item['link'])
                        ? '<a class="review-casino__card" href="'.$item['link']['url'].'">'
                        : '<div class="review-casino__card">' ?>
                        
                        <? if (!empty($item['image'])) { ?>
                            <img
                                loading="lazy"
                                src="<?= $item['image']['url'] ?>"
                                alt="<?= $item['image']['alt'] ?>"
                                title="<?= $item['image']['title'] ?>"
                                width="<?= $item['image']['width'] ?>"
                                class="review-casino__icon"
                            >
                        <? } ?>

                    <?= !empty($item['link']) ? '</a>' : '</div>' ?>
                <? } ?>
            </div>
        </div>
    <? } ?>

    <? if (!empty($systems['items'])) { ?>
        <div class="review-casino__section">
            <div class="widget-title">
                <?= $systems['title'] ?>
            </div>

            <div class="review-casino__items">
                <? foreach ($systems['items'] as $item) { ?>
                    <?= !empty($item['link'])
                        ? '<a class="review-casino__item" href="'.$item['link']['url'].'">'
                        : '<div class="review-casino__item">' ?>
                        
                        <? if (!empty($item['image'])) { ?>
                            <img
                                loading="lazy"
                                src="<?= $item['image']['url'] ?>"
                                alt="<?= $item['image']['alt'] ?>"
                                title="<?= $item['image']['title'] ?>"
                                width="42"
                                class="review-casino__image"
                            >
                        <? } ?>
                        
                        <div class="review-casino__title">
                            <?= !empty($item['link']) ? $item['link']['title'] : $item['title'] ?>
                        </div>
                    <?= !empty($item['link']) ? '</a>' : '</div>' ?>
                <? } ?>
            </div>
        </div>
    <? } ?>
</div>