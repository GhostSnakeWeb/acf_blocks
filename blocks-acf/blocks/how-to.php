<?
    $steps = get_field('steps');
    $style = get_field('style');

    /*
        Styles:
        1 : Simple
        2 : Left Image
        3 : Timeline
        4 : Slider
    */
?>

<? if (!empty($steps)) { ?>
    <? if ($style == 1) { ?>
        <div class="how-to how-to-1">
            <div class="how-to__list">
                <? foreach ($steps as $numb => $step) { ?>
                    <div class="how-to__item">
                        <div class="how-to__title-wrap">
                            <div class="how-to__numb">
                                <?= ++$numb < 10 ? '0' . $numb : $numb ?>
                            </div>
                            <div class="how-to__title">
                                <?= $step['title'] ?>
                            </div>
                        </div>
                        <? if (!empty($step['image'])) { ?>
                            <div class="how-to__image">
                                <img
                                    loading="lazy"
                                    src="<?= $step['image']['url'] ?>"
                                    alt="<?= $step['image']['alt'] ?>"
                                    title="<?= $step['image']['title'] ?>"
                                    width="104"
                                >
                            </div>
                        <? } ?>
                        <p class="how-to__text">
                            <?= $step['text'] ?>
                        </p>
                    </div>
                <? } ?>
            </div>
        </div>
    <? } else if ($style == 2) { ?>
        <div class="how-to how-to-2">
            <div class="how-to__list">
                <? foreach ($steps as $numb => $step) { ?>
                    <div class="how-to__item">
                        <div class="how-to__title-wrap">
                            <div class="how-to__numb">
                                <?= ++$numb < 10 ? '0' . $numb : $numb ?>
                            </div>
                            <div class="how-to__title">
                                <?= $step['title'] ?>
                            </div>
                        </div>
                        <div class="how-to__info">
                            <p class="how-to__text">
                                <?= $step['text'] ?>
                            </p>
                            <? if (!empty($step['image'])) { ?>
                                <div class="how-to__image">
                                    <img
                                        loading="lazy"
                                        src="<?= $step['image']['url'] ?>"
                                        alt="<?= $step['image']['alt'] ?>"
                                        title="<?= $step['image']['title'] ?>"
                                        width="115"
                                    >
                                </div>
                            <? } ?>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
    <? } else if ($style == 3) { ?>
        <div class="how-to how-to-3">
            <? foreach ($steps as $numb => $step) { ?>
                <div class="how-to__item">
                    <div class="how-to__numb">
                        <?= ++$numb < 10 ? '0' . $numb : $numb ?>
                    </div>
                    <div class="how-to__wrap">
                        <figure>
                            <? if (!empty($step['image'])) { ?>
                                <div class="how-to__image">
                                    <img
                                        loading="lazy"
                                        src="<?= $step['image']['url'] ?>"
                                        alt="<?= $step['image']['alt'] ?>"
                                        title="<?= $step['image']['title'] ?>"
                                        width="115"
                                    >
                                </div>
                            <? } ?>
                            <figcaption>
                                <div class="how-to__title">
                                    <?= $step['title'] ?>
                                </div>
                                <p class="how-to__text">
                                    <?= $step['text'] ?>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            <? } ?>
        </div>
    <? } else if ($style == 4) { ?>
        <div class="how-to-4-wrap">
            <div class="how-to how-to-4 how-to-slider">
                <? foreach ($steps as $numb => $step) { ?>
                    <div class="how-to__slide">
                        <div class="how-to__item">
                            <div class="how-to__title-wrap">
                                <div class="how-to__numb">
                                    <?= ++$numb < 10 ? '0' . $numb : $numb ?>
                                </div>
                                <div class="how-to__title">
                                    <?= $step['title'] ?>
                                </div>
                            </div>

                            <? if (!empty($step['image'])) { ?>
                                <div class="how-to__image">
                                    <img
                                        loading="lazy"
                                        src="<?= $step['image']['url'] ?>"
                                        alt="<?= $step['image']['alt'] ?>"
                                        title="<?= $step['image']['title'] ?>"
                                        width="115"
                                    >
                                </div>
                            <? } ?>

                            <p class="how-to__text">
                                <?= $step['text'] ?>
                            </p>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
    <? } ?>    
<? } ?>

<? if (!empty($steps)) { ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "step": [
            <? foreach ($steps as $index => $item) { ?>
            {
                "@type": "HowToStep",
                "name": "<?= $item['title'] ?>",
                "itemListElement": [
                    {
                    "@type": "HowToDirection",
                    "text": "<?= $item['text'] ?>"
                    }
                ],
                "image": {
                    "@type": "ImageObject",
                    "url": "<?= $item['image']['url'] ?>",
                    "height": "<?= $item['image']['height'] ?>",
                    "width": "<?= $item['image']['width'] ?>"
                }
            }<?= $index < count($steps) - 1 ? ',' : '' ?>
            <? } ?>
        ]
    }
    </script>
<? } ?>