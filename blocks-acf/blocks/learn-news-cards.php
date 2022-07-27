<?
    $learn_news_posts = get_field('choose_posts');
?>

<?php if( !empty($learn_news_posts) ): ?>
   <div class="aw-learn-news__wrapper">
	   <?php foreach( $learn_news_posts as $learn_news_post ):
		   $permalink = get_permalink( $learn_news_post->ID );
		   $title = get_the_title( $learn_news_post->ID );
		   $post_thumbnail_attributes = [
			   'alt'   => $title,
			   'title' => $title,
		   ];
		   $post_thumbnail = get_the_post_thumbnail( $learn_news_post->ID, 'learn-news-preview', $post_thumbnail_attributes);
		   $author = get_field( 'author', $learn_news_post->ID );
//        $new_pic = wp_get_attachment_url( get_post_thumbnail_id($learn_news_post->ID, 'learn-news-preview') );
		   ?>
           <article class="aw-learn-news__card">
               <figure>
				   <?=$post_thumbnail;?>
                   <!--                <img src="img/cas.png" alt="Online casino, wo man mit paypal bezahlen kann"/>-->
               </figure>
               <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
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
					   <? if (!empty($author['name']) || !empty($author['link'])): ?>
                           <span>By <a href="<? if (!empty($author['link'])): ?><?=$author['link'];?><? endif; ?>"><? if (!empty($author['name'])): ?><?=$author['name'];?><? endif; ?></a></span>
					   <? endif; ?>
					   <? if (!empty($author['date'])): ?>
                           <hr/>
                           <span><?=$author['date'];?></span>
					   <? endif; ?>
                   </div>
			   <? endif; ?>
           </article>
	   <?php endforeach; ?>
   </div>
<?php endif; ?>