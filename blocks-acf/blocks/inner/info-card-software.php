<?php

$rating = get_field( 'rating' );
$logo = get_field( 'logo' );
$table = get_field( 'table' );
$card = get_field( 'card' );
$play_online_card = get_field( 'play_online_card' );
$games_list = get_field( 'games_list' );

$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}
?>

<div class="aw-info-card-in-hero" <?=$anchor;?>>
	<div class="aw-info-card-in-hero__container">
        <? if (!empty($rating)): ?>
            <div class="aw-info-card-in-hero__rating">
                <span><?=$rating;?> / 5</span>
                <div class="aw-info-card-in-hero__rating-stars">
                    <div class="aw-info-card-in-hero__rating-stars__container">
                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                        <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="Star">
                        <div class="aw-swiper-slide__card__rating-cover" style="width: <?=100-$rating*100/5?>%"></div>
                    </div>
                </div>
            </div>
        <? endif; ?>
		<div class="aw-info-card-in-hero__content">
			<div class="aw-info-card-in-hero__left">
				<div class="aw-info-card-in-hero__left-casino-info">
                    <? if (!empty($logo)): ?>
                        <div class="aw-info-card-in-hero__left-casino-info__preview">
                            <div class="aw-info-card-in-hero__left-casino-info__preview-card">
                                <img
                                    src="<?=$logo['url'];?>"
                                    alt="<?=$logo['alt'];?>"
                                    title="<?=$logo['title'];?>"
                                >
                            </div>
                        </div>
                    <? endif; ?>
                    <? if (!empty($table)): ?>
                        <table>
                            <tbody>
                                <? foreach ($table as $row):
                                    $row_title = $row['title'];
	                                $row_value = $row['value'][0];
                                ?>
                                    <tr>
                                        <? if (!empty($row_title)): ?>
                                            <td><?=$row_title;?></td>
                                        <? endif; ?>
	                                    <? if (!empty($row_value)): ?>
                                            <td>
                                                <? if ($row_value['acf_fc_layout'] === 'text_field'): ?>
                                                    <?=$row_value['value'];?>
                                                <? elseif ($row_value['acf_fc_layout'] === 'link_field'): ?>
                                                    <a href="<?=$row_value['link'];?>"><?=$row_value['link'];?></a>
                                                <? endif; ?>
                                            </td>
	                                    <? endif; ?>
                                    </tr>
                                <? endforeach; ?>
                            </tbody>
                        </table>
                    <? endif; ?>
				</div>
                <? if (!empty($card)): ?>
                    <div class="aw-info-card-in-hero__left-casino-card">

                        <? if (!empty($card['header'])): ?>
                            <div class="aw-info-card-in-hero__left-casino-card__header">
                                <div class="aw-info-card-in-hero__left-casino-card__header-name">
                                    <? if (!empty($card['header']['logo'])): ?>
                                        <img
                                            src="<?=$card['header']['logo']['url'];?>"
                                            alt="<?=$card['header']['logo']['alt'];?>"
                                            title="<?=$card['header']['logo']['title'];?>"
                                        >
                                    <? endif; ?>
	                                <? if (!empty($card['header']['name'])): ?>
                                        <span><?=$card['header']['name'];?></span>
	                                <? endif; ?>
                                </div>
                                <div class="aw-info-card-in-hero__left-casino-card__header-bonus">
	                                <? if (!empty($card['header']['bonus'])): ?>
                                        <span><?=$card['header']['bonus'];?></span>
	                                <? endif; ?>
	                                <? if (!empty($card['header']['promocode'])): ?>
                                        <div class="aw-tooltip">
                                            <button data-copybutton="data-copybutton">
                                                <span><?=$card['header']['promocode'];?></span>
                                                <hr/>
                                                <img src="<?=get_template_directory_uri() . '/assets/img/icons/copy.svg'?>" alt="copy"/>
                                                <span class="aw-tooltiptext" id="copyTooltip">Copy to clipboard</span>
                                            </button>
                                        </div>
	                                <? endif; ?>
                                </div>
                                <div class="aw-info-card-in-hero__left-casino-card__header-links">
	                                <? if (!empty($card['header']['button'])): ?>
                                        <button
                                            <?if (!empty($card['header']['button']['link'])): ?>data-url="<?=$card['header']['button']['link'];?>"<?endif;?>
                                        >
	                                        <? if (!empty($card['header']['button']['title'])) echo $card['header']['button']['title'];?>
                                        </button>
	                                <? endif; ?>
	                                <? if (!empty($card['header']['link'])): ?>
                                        <a
	                                        <?if (!empty($card['header']['link']['link'])): ?>href="<?=$card['header']['link']['link'];?>"<?endif;?>
                                        >
	                                        <? if (!empty($card['header']['link']['title'])) echo $card['header']['link']['title'];?>
                                        </a>
	                                <? endif; ?>
                                </div>
                            </div>
                        <? endif; ?>

	                    <? if (!empty($card['footer'])): ?>
                            <div class="aw-info-card-in-hero__left-casino-card__footer">
                                <? if (!empty($card['footer']['payment_speed'])): ?>
                                    <div class="aw-info-card-in-hero__left-casino-card__footer-zalung">
	                                    <? if (!empty($card['footer']['payment_speed']['title'])): ?>
                                            <span><?=$card['footer']['payment_speed']['title'];?></span>
	                                    <? endif; ?>
	                                    <? if (!empty($card['footer']['payment_speed']['value'])): ?>
                                            <span><?=$card['footer']['payment_speed']['value'];?></span>
	                                    <? endif; ?>
                                    </div>
                                <? endif; ?>
	                            <? if (!empty($card['footer']['regulation'])): ?>
                                    <div class="aw-info-card-in-hero__left-casino-card__footer-regulation">
	                                    <? if (!empty($card['footer']['regulation']['title'])): ?>
                                            <span><?=$card['footer']['regulation']['title'];?></span>
	                                    <? endif; ?>
	                                    <? if (!empty($card['footer']['regulation']['logo'])): ?>
                                            <img
                                                src="<?=$card['footer']['regulation']['logo']['url'];?>"
                                                alt="<?=$card['footer']['regulation']['logo']['alt'];?>"
                                                title="<?=$card['footer']['regulation']['logo']['title'];?>"
                                            >
	                                    <? endif; ?>
                                    </div>
	                            <? endif; ?>
	                            <? if (!empty($card['footer']['deposit_methods'])): ?>
                                    <div class="aw-info-card-in-hero__left-casino-card__footer-deposit">
	                                    <? if (!empty($card['footer']['deposit_methods']['title'])): ?>
                                            <span><?=$card['footer']['deposit_methods']['title'];?></span>
	                                    <? endif; ?>
	                                    <? if (!empty($card['footer']['deposit_methods']['methods'])): ?>
                                            <div class="aw-info-card-in-hero__left-casino-card__footer-deposit__cards">
	                                            <? foreach ($card['footer']['deposit_methods']['methods'] as $method): ?>
                                                    <div class="aw-info-card-in-hero__left-casino-card__footer-deposit__cards-card">
                                                        <img
                                                            src="<?=$method['logo']['url'];?>"
                                                            alt="<?=$method['logo']['alt'];?>"
                                                            title="<?=$method['logo']['title'];?>"
                                                        >
                                                    </div>
                                                <? endforeach; ?>
                                            </div>
	                                    <? endif; ?>
                                    </div>
	                            <? endif; ?>
                            </div>
	                    <? endif; ?>
                    </div>
			    <? endif; ?>
            </div>
			<div class="aw-info-card-in-hero__right">
                <? if (!empty($play_online_card)): ?>
                    <div class="aw-info-card-in-hero__right-card">
                        <? if (!empty($play_online_card['logo'])): ?>
                            <div class="aw-info-card-in-hero__right-card__logo">
                                <img
                                    src="<?=$play_online_card['logo']['url'];?>"
                                    alt="<?=$play_online_card['logo']['alt'];?>"
                                    title="<?=$play_online_card['logo']['title'];?>"
                                >
                            </div>
                        <? endif; ?>
	                    <? if (!empty($play_online_card['title'])): ?>
                            <span><?=$play_online_card['title'];?></span>
	                    <? endif; ?>
	                    <? if (!empty($play_online_card['info_rows'])): ?>
                            <? foreach ($play_online_card['info_rows'] as $info_row): ?>
                                <div class="aw-info-card-in-hero__right-card__info">
                                    <? if (!empty($info_row['first_block'])): ?>
                                        <div class="aw-info-card-in-hero__right-card__info-first">
                                            <span><?=$info_row['first_block']['title'];?></span>
                                            <span><?=$info_row['first_block']['description'];?></span>
                                        </div>
                                    <? endif; ?>
	                                <? if (!empty($info_row['second_block'])): ?>
                                        <div class="aw-info-card-in-hero__right-card__info-second">
                                            <span><?=$info_row['second_block']['title'];?></span>
                                            <span><?=$info_row['second_block']['description'];?></span>
                                        </div>
	                                <? endif; ?>
	                                <? if (!empty($info_row['third_block'])): ?>
                                        <div class="aw-info-card-in-hero__right-card__info-third">
                                            <span><?=$info_row['third_block']['title'];?></span>
                                            <span><?=$info_row['third_block']['description'];?></span>
                                        </div>
	                                <? endif; ?>
                                </div>
                            <? endforeach; ?>
	                    <? endif; ?>
                    </div>
                <? endif; ?>
				<? if (!empty($games_list)): ?>
                    <ul class="aw-info-card-in-hero__right-list">
                        <? foreach ($games_list as $item): ?>
                            <li>
                                <a
                                   <?if (!empty($item['link'])):?>href="<?=$item['link'];?>"<?endif;?>
                                   target="_blank">
                                    <? if (!empty($item['logo'])): ?>
                                        <img
                                            src="<?=$item['logo']['url'];?>"
                                            alt="<?=$item['logo']['alt'];?>"
                                            title="<?=$item['logo']['title'];?>"
                                        >
                                    <? endif; ?>
	                                <? if (!empty($item['title'])): ?>
                                        <span><?=$item['title'];?></span>
	                                <? endif; ?>
                                </a>
                            </li>
                        <? endforeach; ?>
                    </ul>
				<? endif; ?>
            </div>
		</div>
	</div>
</div>

<!--<InnerBlocks allowedBlocks="--><?//=esc_attr( wp_json_encode( $allowed_blocks ) );?><!--"/>-->