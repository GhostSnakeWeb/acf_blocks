<?
    $title = get_field('title');
?>

<div class="aw__cards">
    <? if (!empty($title)): ?>
        <span><strong><?=$title;?></strong></span>
    <? endif; ?>
    <? if( have_rows('cards') ):?>
        <div class="aw__cards__img">
            <? while( have_rows('cards') ):
                the_row();
                $image = get_sub_field('image');
                $link = get_sub_field('link');
            ?>
                <? if( !empty($link) ): ?>
                    <a href="<?= $link; ?>" target="_blank">
	                    <? if( !empty($image) ): ?>
                            <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
	                    <? endif; ?>
                    </a>
                <? endif; ?>
            <? endwhile; ?>
        </div>
    <? endif; ?>
</div>