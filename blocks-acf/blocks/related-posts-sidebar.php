<?
    $title = get_field('title');
    $posts = get_field('ids');
    $view = get_field('view');
?>

<div class="widget widget-related">
    <? if ( !empty($title) ) { ?>
        <div class="widget-title">
            <?= $title ?>
        </div>
    <? } ?>

    <div class="widget-body">
        <? if ( !empty($posts) ) { ?>
            <ul class="related-posts">
                <? foreach( $posts as $post ) {
                    setup_postdata( $post );

                    $id = $post->ID;
                    $image_id = get_post_thumbnail_id();
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                    $image_title = get_the_title($image_id);
                    $infobar_items = get_field('infobar', $id);
                    ?>

                    <? if ( $view == 'small' ) { ?>
                        <li class="related-post">
                            <img
                                loading="lazy"
                                src="<?= kama_thumb_src('w=90 &h=70', get_the_post_thumbnail_url($post->ID)) ?>"
                                srcset="<?= kama_thumb_src('w=90 &h=70', get_the_post_thumbnail_url($post->ID)) ?> 1x,
                                        <?= kama_thumb_src('w=180 &h=140', get_the_post_thumbnail_url($post->ID)) ?> 2x"
                                alt="<?= $image_alt ?>"
                                title="<?= $image_title ?>"
                                width="90"
                            >
                            
                            <div class="related-post-info">
                                <a class="related-post-title" href="<?= get_the_permalink($post->ID) ?>">
                                    <?= $post->post_title ?>
                                </a>
                                
                                <? if (!empty($infobar_items)) { ?>
                                    <ul class="related-post-meta">
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
                                    </ul>
                                <? } ?>
                            </div>
                        </li>
                    <? } else if ( $view == 'big' ) { ?>
                        <li class="related-post-big">
                            <img
                                loading="lazy"
                                src="<?= kama_thumb_src('w=310 &h=160', get_the_post_thumbnail_url($post->ID)) ?>"
                                srcset="<?= kama_thumb_src('w=310 &h=160', get_the_post_thumbnail_url($post->ID)) ?> 1x,
                                        <?= kama_thumb_src('w=620 &h=320', get_the_post_thumbnail_url($post->ID)) ?> 2x"
                                alt="<?= $image_alt ?>"
                                title="<?= $image_title ?>"
                                width="310"
                            >

                            <a class="related-post-title" href="<?= get_the_permalink($post->ID) ?>">
                                <?= $post->post_title ?>
                            </a>

                            <? if (!empty($infobar_items)) { ?>
                                <ul class="related-post-meta">
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
                                </ul>
                            <? } else { ?>
                                <ul class="related-post-meta">
                                    <li>
                                        <a href="<?= get_author_posts_url($post->post_author) ?>">
                                            <?= get_the_author() ?>
                                        </a>
                                    </li>
                                    <li>
                                        <?= get_the_date('F j, Y', $post->ID) ?>
                                    </li>
                                </ul>
                            <? } ?>
                        </li>
                    <? } ?>
                <? } wp_reset_postdata(); ?>
            </ul>
        <? } ?>
    </div>
</div>