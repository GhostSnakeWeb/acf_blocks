<?php
// Настройка WP Settings/Reading/Blog pages show at most
$default_posts_per_page = get_option( 'posts_per_page' );

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query = new WP_Query(
	[
		'post_type'      => 'post',
		'posts_per_page' => !empty($default_posts_per_page) ? $default_posts_per_page : -1,
		'order'          => 'DESC',
		'orderby'        => 'date',
		'paged'          => $paged
	]
);
$pagination_parameters = [
	'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
	'total'        => $query->max_num_pages,
	'current'      => max( 1, get_query_var( 'paged' ) ),
	'format'       => '?paged=%#%',
	'show_all'     => false,
	'type'         => 'plain',
	'end_size'     => 2,
	'mid_size'     => 1,
	'prev_next'    => true,
	'prev_text'    => '',
	'next_text'    => '',
	'add_args'     => false,
	'add_fragment' => '#latestnews',
];
?>
<?php if ( $query->have_posts() ) : ?>
	<div class="aw-latest-news__wrapper">
		<!-- цикл -->
		<?php while ( $query->have_posts() ) :
			$query->the_post();
			$author = get_field('author', get_the_ID());
			$thumb = get_the_post_thumbnail(get_the_ID(), 'latest-news-blog');
		?>
			<article class="aw-learn-news__card">
				<figure>
					<?=$thumb;?>
				</figure>
				<a href="<? the_permalink(); ?>"><?php the_title(); ?></a>
				<hr/>
				<? if (!empty($author)): ?>
					<div class="aw-learn-news__by">
						<? if (!empty($author['photo'])): ?>
							<img
								src="<?=$author['photo']['url'];?>"
								alt="<?=$author['photo']['alt'];?>"
								title="<?=$author['photo']['title'];?>"
							/>
						<? endif; ?>
						<span>By
                        <a href="<?if (!empty($author['link'])) echo $author['link'];?>">
	                        <? if (!empty($author['name'])): ?>
		                        <?=$author['name'];?>
	                        <? endif; ?>
                        </a>
                    </span>
						<? if (!empty($author['date'])): ?>
							<hr/>
							<span><?=$author['date'];?></span>
						<? endif; ?>
					</div>
				<? endif; ?>
			</article>
		<?php endwhile; ?>
		<!-- конец цикла -->
	</div>

	<!-- пагинация -->
    <div class="aw-page-navigation">
		<?=paginate_links($pagination_parameters);?>
    </div>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>