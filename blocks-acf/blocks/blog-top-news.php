<?
    $articles = get_field('articles');
?>

<? if (!empty($articles)):
    $main_article = $articles[0]['article'][0];
	$main_article_author = get_field('author', $main_article->ID);
	$main_article_link = get_permalink($main_article->ID);
	$main_article_thumb = get_the_post_thumbnail($main_article->ID, 'top-news-blog');
?>
    <div class="aw-top-news__container">
        <article class="aw-top-news__container-big-card">
            <figure>
                <?=$main_article_thumb;?>
            </figure>
            <a href="<?=$main_article_link;?>"><?=$main_article->post_title;?></a>
            <p><? trim_chars($main_article->post_excerpt, 200, '...');?></p>
            <? if (!empty($main_article_author)): ?>
                <div class="aw-learn-news__by">
                    <? if (!empty($main_article_author['photo'])): ?>
                        <img
                            src="<?=$main_article_author['photo']['url'];?>"
                            alt="<?=$main_article_author['photo']['alt'];?>"
                            title="<?=$main_article_author['photo']['title'];?>"
                        />
                    <? endif; ?>
                    <span>By
                        <a href="<?if (!empty($main_article_author['link'])) echo $main_article_author['link'];?>">
	                        <? if (!empty($main_article_author['name'])): ?>
                                <?=$main_article_author['name'];?>
                            <? endif; ?>
                        </a>
                    </span>
                    <? if (!empty($main_article_author['date'])): ?>
                        <hr/>
                        <span><?=$main_article_author['date'];?></span>
                    <? endif; ?>
                </div>
            <? endif; ?>
        </article>
        <div class="aw-top-news__container-small-cards">
            <? for ($i = 1; $i < count($articles); $i++):
                $article = $articles[$i]['article'][0];
	            $article_author = get_field('author', $article->ID);
	            $article_link = get_permalink($article->ID);
	            $article_thumb = get_the_post_thumbnail($article->ID, 'top-news-blog');
            ?>
                <article class="aw-learn-news__card">
                    <figure>
                        <?=$article_thumb;?>
                    </figure>
                    <a href="<?=$article_link;?>"><?=$article->post_title;?></a>
	                <? if (!empty($article_author)): ?>
                        <div class="aw-learn-news__by">
			                <? if (!empty($article_author['photo'])): ?>
                                <img
                                        src="<?=$article_author['photo']['url'];?>"
                                        alt="<?=$article_author['photo']['alt'];?>"
                                        title="<?=$article_author['photo']['title'];?>"
                                />
			                <? endif; ?>
                            <span>By
                        <a href="<?if (!empty($article_author['link'])) echo $article_author['link'];?>">
	                        <? if (!empty($article_author['name'])): ?>
		                        <?=$article_author['name'];?>
	                        <? endif; ?>
                        </a>
                    </span>
			                <? if (!empty($article_author['date'])): ?>
                                <hr/>
                                <span><?=$article_author['date'];?></span>
			                <? endif; ?>
                        </div>
	                <? endif; ?>
                </article>
            <? endfor; ?>
        </div>
    </div>
<? endif; ?>