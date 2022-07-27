<?
    $posts = get_field('posts');
?>

<? if ( !empty($posts) ) { ?>
    <div class="recent-news">
        <? foreach( $posts as $post ) {
            setup_postdata( $post );

            $image_id = get_post_thumbnail_id();
            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
            $image_title = get_the_title($image_id);
            $id = $post->ID;
            $infobar_items = get_field('infobar', $id);
        ?>
            <article class="recent-news-item">
                <div class="recent-news-img">
                    <img
                        loading="lazy"
                        src="<?= kama_thumb_src('w=155 &h=124', get_the_post_thumbnail_url($post->ID)) ?>"
                        srcset="<?= kama_thumb_src('w=155 &h=124', get_the_post_thumbnail_url($post->ID)) ?> 1x,
                                <?= kama_thumb_src('w=310 &h=248', get_the_post_thumbnail_url($post->ID)) ?> 2x"
                        alt="<?= $image_alt ?>"
                        title="<?= $image_title ?>"
                        width="155"
                    >
                </div>

                <div class="recent-news-info">
                    <a class="recent-news-title" href="<?= get_the_permalink($post->ID) ?>">
                        <?= $post->post_title ?>
                    </a>
                    
                    <? if (!empty($infobar_items)) { ?>
                        <ul class="recent-news-meta">
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
                        <ul class="recent-news-meta">
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
                </div>
            </article>
        <? } wp_reset_postdata(); ?>
    </div>
<? } ?>