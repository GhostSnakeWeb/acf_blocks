<?
    $ids = get_field('items');
    if ( !empty($ids) ) {
        $posts = get_posts( [
            'post_type'      => 'post',
            'include'        => $ids,
            'orderby'        => 'post__in',
            'order'          => 'ASC',
        ] );
    } else {
        $posts = get_posts( [
            'post_type'      => 'post',
            'order'          => 'DESC',
            'posts_per_page' => 6
        ] );
    }
?>

<? if (!empty($posts)) { ?>
    <div class="latest-articles">
        <? foreach ($posts as $post) { ?>
            <?
                setup_postdata($post);
                $id = $post->ID;
                $title = $post->post_title;
                $image_id = get_post_thumbnail_id();
                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                $image_title = get_the_title($image_id);
                $date = get_the_date('F jS, Y', $id);
                $reading_time = get_field('read_time', $id);
                $link = get_permalink($id);
            ?>

            <div class="latest-articles__item">
                <a href="<?= $link ?>" class="latest-articles__link">
                    <div>
                        <img
                            src="<?= kama_thumb_src('w=272 &h=180', get_the_post_thumbnail_url($id)) ?>"
                            srcset="<?= kama_thumb_src('w=272 &h=180', get_the_post_thumbnail_url($id)) ?> 1x,
                                    <?= kama_thumb_src('w=544 &h=360', get_the_post_thumbnail_url($id)) ?> 2x"
                            alt="<?= $image_alt ?>"
                            title="<?= $image_title ?>"
                            width="272"
                            class="latest-articles__img"
                        >
                        <div class="latest-articles__title">
                            <?= $title ?>
                        </div>
                    </div>
                    <div class="latest-articles__info">
                        <span>
                            <?= $date ?>
                        </span>
                        <span>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.1941 3.07776C14.74 3.67359 17.4441 6.75026 17.4441 10.4653C17.4441 14.6078 14.0866 17.9653 9.94414 17.9653C6.22914 17.9653 3.15247 15.2611 2.55664 11.7153" stroke="#1A1A27" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2.5549 9.21616C2.63406 8.74533 2.75656 8.29116 2.91906 7.85449" stroke="#1A1A27" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5.16323 4.68701C4.79906 4.98785 4.4649 5.32201 4.16406 5.68618" stroke="#1A1A27" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.6937 3.07779C8.22286 3.15696 7.76786 3.28029 7.33203 3.44279" stroke="#1A1A27" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.3252 6.35535V10.8478H6.66602" stroke="#1A1A27" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <?= $reading_time ?>
                        </span>
                    </div>
                </a>
            </div>
        <? } ?>
        <? wp_reset_postdata() ?>
    </div>
<? } ?>