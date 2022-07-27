<?
    $title = get_field('title');
    $avatar = get_field('avatar');
    $name = get_field('name');
    $caption = get_field('caption');
    $socials = get_field('socials');
?>

<div class="widget-author">
    <div class="widget-title">
        <?= $title ?>
    </div>
    <figure class="widget-author__box">
        <img
            loading="lazy"
            src="<?= $avatar['url'] ?>"
            alt="<?= $avatar['alt'] ?>"
            title="<?= $avatar['title'] ?>"
            width="76"
            class="widget-author__photo"
        >
        <figcaption>
            <div class="widget-author__name">
                <?= $name ?>
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.9212 9.50002L16.7793 7.12199L17.1147 3.93838L13.9827 3.27536L12.3851 0.5L9.46107 1.80684L9.06641 9.50002L9.46107 17.1932L12.3851 18.5L13.9827 15.7247L17.1147 15.0616L16.7793 11.878L18.9212 9.50002Z" fill="#20B18D"/>
                    <path d="M6.53608 0.5L4.9385 3.27536L1.80651 3.93842L2.14187 7.12199L0 9.50002L2.14187 11.878L1.80651 15.0616L4.9385 15.7247L6.53611 18.5L9.46017 17.1932V1.80684L6.53608 0.5Z" fill="#20B18D"/>
                    <path d="M13.4192 7.42809L12.5911 6.68896L9.45326 10.2045L9.05859 11.0781L9.45326 11.8713L13.4192 7.42809Z" fill="white"/>
                    <path d="M6.15591 8.66309L5.37109 9.44794L8.67084 12.7477L9.45355 11.8708V10.2039L8.62504 11.1322L6.15591 8.66309Z" fill="white"/>
                </svg>
            </div>

            <? if (!empty($caption)) { ?>
                <span class="widget-author__caption">
                    <?= $caption ?>
                </span>
            <? } ?>

            <? if (!empty($socials)) { ?>
                <div class="widget-author__socials">
                    <? foreach ($socials as $social) { ?>
                        <a href="<?= $social['link'] ?>">
                            <img
                                loading="lazy"
                                src="<?= $social['icon']['url'] ?>"
                                alt="<?= $social['icon']['alt'] ?>"
                                title="<?= $social['icon']['title'] ?>"
                                width="32"
                            >
                        </a>
                    <? } ?>
                </div>
            <? } ?>
        </figcaption>
    </figure>
</div>