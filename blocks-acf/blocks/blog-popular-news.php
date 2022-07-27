<?
$articles = get_field('articles');
?>

<? if (!empty($articles)): ?>
    <div class="slider-blog-popular-news">
        <!-- Slides -->
        <? foreach ($articles as $article):
            $current_article = $article['article'][0];
            $current_article_author = get_field('author', $current_article->ID);
            $current_article_link = get_permalink($current_article->ID);
            $current_article_thumb = get_the_post_thumbnail($current_article->ID, 'popular-news-blog');
            ?>
            <article class="aw-popular-news__card">
                <figure>
                    <?=$current_article_thumb;?>
                </figure>
                <div class="aw-popular-news__card-content">
                    <a href="<?=$current_article_link;?>"><?=$current_article->post_title;?></a>
                    <p><?=$current_article->post_excerpt;?></p>
                    <hr/>
                    <? if (!empty($current_article_author)): ?>
                        <div class="aw-learn-news__by">
                            <? if (!empty($current_article_author['photo'])): ?>
                                <img
                                        src="<?=$current_article_author['photo']['url'];?>"
                                        alt="<?=$current_article_author['photo']['alt'];?>"
                                        title="<?=$current_article_author['photo']['title'];?>"
                                />
                            <? endif; ?>
                            <span>By
                    <a href="<?if (!empty($current_article_author['link'])) echo $current_article_author['link'];?>">
                        <? if (!empty($current_article_author['name'])): ?>
                            <?=$current_article_author['name'];?>
                        <? endif; ?>
                    </a>
                </span>
                            <? if (!empty($current_article_author['date'])): ?>
                                <hr/>
                                <span><?=$current_article_author['date'];?></span>
                            <? endif; ?>
                        </div>
                    <? endif; ?>
                </div>
            </article>
        <? endforeach; ?>
    </div>
<? endif; ?>
