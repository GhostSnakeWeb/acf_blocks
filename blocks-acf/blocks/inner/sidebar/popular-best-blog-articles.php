<?php
$title = get_field('title');
$articles = get_field('articles');
?>
<aside class="aw-aside__card aw-aside__card-news">
    <? if (!empty($title)): ?>
        <span><?=$title;?></span>
    <? endif; ?>
    <? if (!empty($articles)): ?>
        <? foreach ($articles as $article): ?>
		    <? if (!empty($article['article'])):
			    $article_thumb = get_the_post_thumbnail( $article['article'][0]->ID, 'sidebar-popular-best-blog-articles' );
			    $article_title = $article['article'][0]->post_title;
			    $article_author = get_field('author', $article['article'][0]->ID);
			    $article_link = get_permalink($article['article'][0]->ID);
            ?>
                <article class="aw-aside__card-news__article">
                    <div class="aw-aside__card-news__article-title">
                        <? if (!empty($article_thumb)): ?>
                            <figure>
                                <?=$article_thumb;?>
                            </figure>
                        <? endif; ?>
                        <? if (!empty($article_title)): ?>
                            <a href="<?=$article_link;?>"><?=$article_title;?></a>
                        <? endif; ?>
                    </div>
                    <? if (!empty($article_author)): ?>
                        <div class="aw-aside__card-news__article-date">
                            <? if (!empty($article_author['name'])): ?>
                                <a href="<?if (!empty($article_author['link'])) echo $article_author['link']?>">
                                    <?=$article_author['name'];?>
                                </a>
                            <? endif; ?>
                            <? if (!empty($article_author['date'])): ?>
                                <hr/>
                                <span><?=$article_author['date'];?></span>
                            <? endif; ?>
                        </div>
                    <? endif; ?>
                </article>
            <? endif; ?>
        <? endforeach; ?>
    <? endif; ?>
</aside>