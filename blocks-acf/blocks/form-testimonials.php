<?php
$categories = get_field('categories');
$cards = get_field('cards');
$load_more = get_field('load_more');
?>

<ul class="comments-filter">
	<li><span data-filter="all">All</span></li>
    <? if (!empty($categories)): ?>
        <? foreach ($categories as $category):
		    $unique_name = str_replace(' ', '-', $category['title']);
		    $unique_name = strtolower($unique_name);
        ?>
            <li>
                <span data-filter=".<?=$unique_name;?>"><?=$category['title'];?></span>
            </li>
        <? endforeach; ?>
    <? endif; ?>
</ul>
<? if (!empty($cards)): ?>
    <div class="aw-filter-elemnts-container">
        <? foreach ($cards as $card):
	        $filters = '';
	        if (!empty($card['card_categories'])) {
		        foreach ($card['card_categories'] as $category) {
			        $unique_name = str_replace(' ', '-', $category['select_category_form_testimonial']);
			        $unique_name = strtolower($unique_name);
			        $filters .= $unique_name . ' ';
		        }
            }
        ?>
            <div class="<?=$filters;?> mix aw-review-card">
                <div class="aw-review-card__main">
	                <? if (!empty($card['card_categories'])): ?>
                        <div class="aw-review-card__tags">
                            <? foreach ($card['card_categories'] as $category): ?>
                                <span class="aw-review-card__tags-tag"><?=$category['select_category_form_testimonial'];?></span>
                            <? endforeach; ?>
                        </div>
	                <? endif; ?>
                    <div class="aw-review-card__description">
                        <div class="aw-review-card__description-name">
                            <? if (!empty($card['card']['name'])): ?>
                                <span><?=$card['card']['name'];?></span>
                            <? endif; ?>
                            <span><?=__('played at');?></span>
                            <? if (!empty($card['card']['played_at_link'])): ?>
                                <a href="<?=$card['card']['played_at_link'];?>"><?=$card['card']['played_at_link'];?></a>
                            <? endif; ?>
                        </div>
                        <div class="aw-review-card__description-rate">
                            <? if (!empty($card['card']['rating'])): ?>
                                <div class="aw-review-card__description-rate__stars">
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star-comment-fill.svg'?>" alt="Star"/>
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star-comment-fill.svg'?>" alt="Star"/>
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star-comment-fill.svg'?>" alt="Star"/>
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star-comment-fill.svg'?>" alt="Star"/>
                                    <img src="<?=get_template_directory_uri() . '/assets/img/icons/star-comment-fill.svg'?>" alt="Star"/>
                                </div>
                            <? endif; ?>
                            <? if (!empty($card['card']['date'])): ?>
                                <span class="aw-review-card__description-rate__date"><?=$card['card']['date'];?></span>
                            <? endif; ?>
                        </div>
                    </div>
	                <? if (!empty($card['card']['testimonial'])): ?>
                        <div class="aw-review-card__content">
                            <?=$card['card']['testimonial'];?>
                        </div>
	                <? endif; ?>
                    <div class="aw-review-card__likes-dislikes">
	                    <? if (!empty($card['card']['likes_&_dislikes'])): ?>
                            <form action="">
                                <? if (!empty($card['card']['likes_&_dislikes']['likes'])): ?>
                                    <input class="aw-review-card__likes-dislikes__like" id="toggle-like" type="radio" name="likeDislikeRate"/>
                                    <label for="toggle-like" aria-label="like"><?=$card['card']['likes_&_dislikes']['likes'];?></label>
                                <? endif; ?>
	                            <? if (!empty($card['card']['likes_&_dislikes']['dislikes'])): ?>
                                    <input class="aw-review-card__likes-dislikes__dislike" id="toggle-dislike" type="radio" name="likeDislikeRate"/>
                                    <label for="toggle-dislike" aria-label="dislike"><?=$card['card']['likes_&_dislikes']['dislikes'];?></label>
	                            <? endif; ?>
                            </form>
	                    <? endif; ?>
                        <? if (!empty($card['card']['bottom_link'])): ?>
                            <a <?if (!empty($card['card']['bottom_link']['link_to'])):?>href="<?=$card['card']['bottom_link']['link_to'];?>"<?endif;?>>
                                <? if (!empty($card['card']['bottom_link']['title'])): ?>
                                    <?=$card['card']['bottom_link']['title'];?>
                                <? endif; ?>
                            </a>
                        <? endif; ?>
                    </div>
                </div>
                <? if ($card['card']['with_answer']): ?>
                    <? if (isset($card['card']['answers']) && !empty($card['card']['answers'])): ?>
                        <? foreach ($card['card']['answers'] as $answer): ?>
                            <div class="aw-review-card__answer">
                                <div class="aw-review-card__answer-description">
                                    <div class="aw-review-card__answer-description__author">
                                        <? if (!empty($answer['name'])): ?>
                                            <span><?=$answer['name'];?></span>
                                        <? endif; ?>
                                        <span><?=__('antwortete');?></span>
	                                    <? if (!empty($card['card']['name'])): ?>
                                            <span><?=$card['card']['name'];?></span>
	                                    <? endif; ?>
                                    </div>
                                    <? if (!empty($answer['date'])): ?>
                                        <span class="aw-review-card__description-rate__date"><?=$answer['date'];?></span>
                                    <? endif; ?>
                                </div>
	                            <? if (!empty($answer['answer'])): ?>
                                    <div class="aw-review-card__content">
                                        <?=$answer['answer'];?>
                                    </div>
	                            <? endif; ?>
                                <div class="aw-review-card__likes-dislikes">
	                                <? if (!empty($answer['likes_&_dislikes'])): ?>
                                        <form action="">
	                                        <? if (!empty($answer['likes_&_dislikes']['likes'])): ?>
                                                <input class="aw-review-card__likes-dislikes__like" id="toggle-like-answer" type="radio" name="likeDislikeRateForAnswer"/>
                                                <label for="toggle-like-answer" aria-label="like"><?=$answer['likes_&_dislikes']['likes'];?></label>
	                                        <? endif; ?>
	                                        <? if (!empty($answer['likes_&_dislikes']['dislikes'])): ?>
                                                <input class="aw-review-card__likes-dislikes__dislike" id="toggle-dislike-answer" type="radio" name="likeDislikeRateForAnswer"/>
                                                <label for="toggle-dislike-answer" aria-label="dislike"><?=$answer['likes_&_dislikes']['dislikes'];?></label>
	                                        <? endif; ?>
                                        </form>
	                                <? endif; ?>
	                                <? if (!empty($answer['bottom_link'])): ?>
                                        <a <?if (!empty($answer['bottom_link']['link_to'])):?>href="<?=$answer['bottom_link']['link_to'];?>"<?endif;?>>
			                                <? if (!empty($answer['bottom_link']['title'])): ?>
				                                <?=$answer['bottom_link']['title'];?>
			                                <? endif; ?>
                                        </a>
	                                <? endif; ?>
                                </div>
                            </div>
                        <? endforeach; ?>
                    <? endif; ?>
                <? endif; ?>
            </div>
        <? endforeach; ?>
    </div>
<? endif; ?>
<? if (!empty($load_more)): ?>
    <button class="button-green mt-20"><?=$load_more;?></button>
<? endif; ?>