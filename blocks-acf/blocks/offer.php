<?
	$brand_logo = get_field('brand_logo');
    $title = get_field('title');
    $rating = get_field('rating');
    $bonus_title = get_field('bonus_title');
    $promocode = get_field('promocode');
    $button_title = get_field('button_title');
    $link = get_field('link');

    $anchor = '';
    if ( ! empty( $block['anchor'] ) ) {
        $anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
    }
    $template = [
        [
            'core/list'
        ],
    ];
    $allowed_blocks = [
        'core/list',
    ];
?>

<div class="aw-ab__card" <?=$anchor;?>>
	<div class="aw-ab__wrapper">
		<div class="aw-ab__casino">
            <? if (!empty($brand_logo)): ?>
                <a href="<? if (!empty($brand_logo['link'])) echo $brand_logo['link'];?>" target="_blank">
                    <? if (!empty($brand_logo['image'])): ?>
                        <img
                            src="<?=$brand_logo['image']['url'];?>"
                            alt="<?=$brand_logo['image']['alt'];?>"
                            title="<?=$brand_logo['image']['title'];?>"
                        />
                    <? endif; ?>
                </a>
            <? endif; ?>

			<? if (!empty($title) || !empty($rating)): ?>
                <div class="aw-ab__stars-title">
	                <? if (!empty($title)): ?>
                        <span><?=$title;?></span>
	                <? endif; ?>
	                <? if (!empty($rating)): ?>
		                <? $width = ($rating * 65) / 5; ?>
                        <div class="aw-ab__stars">
                            <span><?=$rating;?> / 5</span>
                            <div class="aw-ab__stars-container" style="max-width: <?=$width;?>%">
                                <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg';?>" alt="star"/>
                                <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg';?>" alt="star"/>
                                <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg';?>" alt="star"/>
                                <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg';?>" alt="star"/>
                                <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg';?>" alt="star"/>
                            </div>
                        </div>
	                <? endif; ?>
                </div>
			<? endif; ?>
		</div>

		<? if (!empty($bonus_title) || !empty($promocode)): ?>
            <div class="aw-ab__bonus">
	            <? if (!empty($bonus_title)): ?>
                    <span><?=$bonus_title;?></span>
	            <? endif; ?>
	            <? if (!empty($bonus_title)): ?>
                    <div class="aw-tooltip">
                        <button data-copybutton="data-copybutton">
                            <span><?=$promocode;?></span>
                            <hr/>
                            <img src="<?=get_template_directory_uri() . '/assets/img/icons/copy.svg';?>" alt="copy"/>
                            <span class="aw-tooltiptext" id="copyTooltip">Copy to clipboard</span>
                        </button>
                    </div>
	            <? endif; ?>
            </div>
        <? endif; ?>

		<? if (!empty($button_title) || !empty($link)): ?>
            <div class="aw-ab__buttons">
	            <? if (!empty($button_title)): ?>
                    <button class="aw-ab__buttons-button"><?=$button_title;?></button>
	            <? endif; ?>
	            <? if (!empty($link)): ?>
                    <a class="aw-ab__buttons-link" href="<? if (!empty($link['link_to'])) echo $link['link_to']; ?>"><? if (!empty($link['title'])) echo $link['title']; ?></a>
	            <? endif; ?>
            </div>
		<? endif; ?>
    </div>
    <hr/>
    <InnerBlocks
        template="<?=esc_attr( wp_json_encode( $template ) );?>"
        allowedBlocks="<?=esc_attr( wp_json_encode( $allowed_blocks ) );?>"
    />
</div>
<!--<img class="aw-bg__circles" src="--><?//=get_template_directory_uri() . '/assets/img/bg/bg-angebot.svg'?><!--" alt="Background">-->