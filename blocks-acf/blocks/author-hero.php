<?
    $photo = get_field('photo');
    $editor_group = get_field('editor');
    $additional_fields = get_field('additional_fields');
?>

<div class="aw__hero-item">
    <? if( !empty( $photo ) ): ?>
        <img
            loading="lazy"
            src="<?=$photo['url']?>"
            alt="<?=$photo['alt']?>"
            title="<?= $photo['title'] ?>"
        >
    <? endif; ?>
	<? if( !empty( $editor_group ) &&
           !empty($editor_group['editor_title']) &&
           !empty($editor_group['editor_name']) &&
	       !empty($editor_group['editor_link'])): ?>
        <div class="aw__mini-wrap">
	        <? if( !empty($editor_group['editor_title'])): ?>
                <span><?=$editor_group['editor_title'];?></span>
	        <? endif; ?>
	        <? if( !empty($editor_group['editor_name']) && !empty($editor_group['editor_link'])): ?>
                <a href="<?=$editor_group['editor_link'];?>"><?=$editor_group['editor_name'];?></a>
	        <? endif; ?>
        </div>
	<? endif; ?>

    <?
        if( have_rows('additional_fields') ):
            while( have_rows('additional_fields') ) : the_row();
                $title = get_sub_field('title');
	            $fields = get_sub_field('fields'); ?>

                <? if( have_rows('fields' ) ):
	                while ( have_rows('fields') ):
		                the_row();

		                if ( get_row_layout() == 'text_field' ):
			                $text = get_sub_field( 'text' ); ?>
                            <hr>
                            <div class="aw__mini-wrap">
				                <? if (!empty($title)): ?>
                                    <span><?=$title;?></span>
				                <? endif; ?>
			                    <? if (!empty($text)): ?>
                                    <span><?=$text;?></span>
			                    <? endif; ?>
                            </div>
		                <? elseif ( get_row_layout() == 'text_editor_field' ):
			                $text_editor = get_sub_field( 'text_editor' ); ?>
			                <? if (!empty($text_editor)): ?>
                                <button data-rotate-button><img src="<?=get_template_directory_uri() . '/assets/img/icons/info.svg'?> " alt="info" data-icon-info><img data-rotate-arrow src="<?=get_template_directory_uri() . '/assets/img/icons/arrow-green.svg'?>" alt="arrow">
                                    <div class="aw-info none">
                                        <?=$text_editor;?>
                                    </div>
                                </button>
                            <? endif; ?>
		                <? elseif ( get_row_layout() == 'link_fields' ):
			                $link_title = get_sub_field( 'link_title' );
			                $link       = get_sub_field( 'link' ); ?>
                            <hr>
                            <div class="aw__mini-wrap">
				                <? if (!empty($title)): ?>
                                    <span><?=$title;?></span>
				                <? endif; ?>
				                <? if (!empty($link) && !empty($link_title)): ?>
                                    <a href="<?=$link;?>"><?=$link_title;?></a>
				                <? endif; ?>
                            </div>
		                <? elseif ( get_row_layout() == 'text_field_with_icon' ):
			                $text = get_sub_field( 'text' );
			                $icon  = get_sub_field( 'icon' ); ?>
                            <hr>
                            <div class="aw__mini-wrap">
	                            <? if (!empty($title)): ?>
                                    <span><?=$title;?></span>
	                            <? endif; ?>
                                <div class="aw__mini-wrap__time">
                                    <? if (!empty($icon)): ?>
                                        <img src="<?=$icon;?>">
                                    <? endif; ?>
	                                <? if (!empty($text)): ?>
                                        <span><?=$text;?></span>
	                                <? endif; ?>
                                </div>
                            </div>
		                <? endif;
	                endwhile;
                endif;
            endwhile;
        endif;
    ?>
</div>