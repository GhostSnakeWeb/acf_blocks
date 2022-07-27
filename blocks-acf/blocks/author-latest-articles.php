<?php
$articles = get_field('articles');
?>

<? if (!empty($articles)): ?>
	<div class="aw-author-latest-articles__wrapper">
		<? foreach ($articles as $article):
            $cur_article = $article['article'][0];
			$author = get_field('author', $cur_article->ID);
			$thumb = get_the_post_thumbnail($cur_article->ID, 'latest-news-blog');
        ?>
			<article class="aw-learn-news__card">
				<figure>
                    <? if (!empty($thumb)) echo $thumb;?>
				</figure>
				<a href="<? the_permalink($cur_article->ID); ?>"><?= get_the_title($cur_article->ID); ?></a>
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
		<? endforeach; ?>
	</div>
<? endif; ?>