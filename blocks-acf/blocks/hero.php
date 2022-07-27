<?
    $id = get_the_ID();
    $title = get_field('title');
    $author = get_field('author');
    $bg = get_field('bg');
    $share = get_field('share');
    $infobar_items = get_field('infobar', $id);
    $reading_time = get_field('read_time', $id);
?>

<section class="hero hero-article">
    <div class="container">
        <h1><?= $title ?></h1>

        <? if ( is_singular('post') ) { ?>
            <? if (!empty($infobar_items)) { ?>
                <ul class="post-info">
                    <? foreach ($infobar_items as $item) { ?>
                        <li>
                            <? if (!empty($item['link'])) { ?>
                                <a href="<?= $item['link']['url'] ?>">
                            <? } ?>
                                <?= $item['text'] ?>
                            <? if (!empty($item['link'])) { ?>
                                </a>
                            <? } ?>
                        </li>
                    <? } ?>
                    <? if ( !empty($reading_time) ) { ?>
                        <li>
                            
                            <?= $reading_time ?>
                          
                        </li>
                    <? } ?>
                </ul>
            <? } ?>

            <div class="share">
                <img
                    loading="lazy"
                    src="<?= $share['share_icon']['url'] ?>"
                    alt="<?= $share['share_icon']['alt'] ?>"
                    title="<?= $share['share_icon']['title'] ?>"
                    width="24"
                >
                    
                <? if (!empty($share['links'])) { ?>
                    <? foreach ($share['links'] as $link) { ?>
                        <?
                            $replaceable = ['#title#', '#permalink#'];
                            $replacement = [$title, get_the_permalink()];
                            $url = str_replace($replaceable, $replacement, $link['url']);
                        ?>
                        <a href="<?= $url ?>" target="_blank" rel="nofollow">
                            <img
                                loading="lazy"
                                src="<?= $link['icon']['url'] ?>"
                                alt="<?= $link['icon']['alt'] ?>"
                                title="<?= $link['icon']['title'] ?>" width="32"
                            >
                        </a>
                    <? } ?>
                <? } ?>
            </div>
        <? } ?>
    </div>

    <div class="hero-bg" style="background-image: url(<?= $bg['url'] ?>)"></div>
</section>