<?
    $count = get_field('count');
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

    $query = new WP_Query( array(
        'posts_per_page' => $count,
        'paged'          => $paged,
    ) );
?>

<? if ( $query->have_posts() ) { ?>
    <div class="blog">
        <? while( $query->have_posts() ) {
            $query->the_post();
            $id = get_the_ID();
            $image_id = get_post_thumbnail_id();
            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
            $image_title = get_the_title($image_id);
            $author_id = get_post($id)->post_author;
            $infobar_items = get_field('infobar', $id);
            $reading_time = get_field('read_time', $id);
            ?>
            <article class="article">
                <img
                    loading="lazy"
                    src="<?= kama_thumb_src('w=190 &h=155') ?>"
                    srcset="<?= kama_thumb_src('w=190 &h=155') ?> 1x,
                        <?= kama_thumb_src('w=380 &h=310') ?> 2x"
                    alt="<?= $image_alt ?>"
                    title="<?= $image_title ?>"
                    width="190"
                    class="article-img"
                >

                <div class="article-info">
                    <a class="article-title" href="<? the_permalink() ?>">
                        <? the_title() ?>
                    </a>
                    <div class="article-text">
                        <? the_excerpt() ?>
                    </div>

                    <? if (!empty($infobar_items)) { ?>
                        <ul class="article-meta is-style-info">
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
                </div>
            </article>
        <? } ?>

        <? wp_reset_postdata(); ?>
    </div>

    <div class="pagination">
        <?
            $big = 999999999;
            echo paginate_links( array(
                'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'current' => max( 1, get_query_var('paged') ),
                'total'   => $query->max_num_pages,
                'prev_text' => '<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.625 12.75L6.375 8.5L10.625 4.25" stroke="#171A22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                'next_text' => '<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.375 12.75L10.625 8.5L6.375 4.25" stroke="#171A22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            ) );
        ?>
    </div>

<? } else { ?>

    <p class="text-center">
        <? __('No posts') ?>
    </p>

<? } ?>