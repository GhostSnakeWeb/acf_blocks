<?
    $pluses = get_field('pluses');
    $minuses = get_field('minuses');
?>


<div class="advantages <?= !empty($pluses['list']) && !empty($minuses['list']) ? 'init-tab' : '' ?>">
    <div class="advantages__titles">
        <? if (!empty($pluses['list'])) { ?>
            <h3 data-tab="pluses"
                class="
                    advantages__title
                    advantages__pluses-title
                    is-active
                    <?= empty($minuses['list']) ? 'full-width' : '' ?>">
                <?= $pluses['title'] ?>
            </h3>
        <? } ?>
        <? if (!empty($minuses['list'])) { ?>
            <h3 data-tab="minuses"
                class="
                    advantages__title
                    advantages__minuses-title
                    <?= empty($pluses['list']) ? 'is-active full-width' : '' ?>">
                <?= $minuses['title'] ?>
            </h3>
        <? } ?>
    </div>
    <div class="advantages__content">
        <? if (!empty($pluses['list'])) {
            $items = explode(PHP_EOL, $pluses['list']);
            ?>
            <div class="advantages__pluses is-active" id="pluses">
                <? if (!empty($items)) { ?>
                    <ul>
                        <? foreach ($items as $item) { ?>
                            <? if (!empty(trim($item))) { ?>
                                <li><?= $item ?></li>
                            <? } ?>
                        <? } ?>
                    </ul>
                <? } ?>
            </div>
        <? } ?>
        <? if (!empty($minuses['list'])) {
            $items = explode(PHP_EOL, $minuses['list']);
            ?>
            <div class="advantages__minuses <?= empty($pluses['list']) ? 'is-active' : '' ?>" id="minuses">
                <? if (!empty($items)) { ?>
                    <ul>
                        <? foreach ($items as $item) { ?>
                            <? if (!empty(trim($item))) { ?>
                                <li><?= $item ?></li>
                            <? } ?>
                        <? } ?>
                    </ul>
                <? } ?>
            </div>
        <? } ?>
    </div>
</div>