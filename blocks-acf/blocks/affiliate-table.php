<?
$affiliate_disclosure = get_field('affiliate_disclosure');
$top_panel = get_field('top_panel');
$load_more_button = get_field('load_more');

$allowed_blocks = [
	'acf/affiliate-separate-table',
];

?>

<? if( !empty($affiliate_disclosure) ): ?>
    <button class="aw-casinos__info" data-rotate-button>
        <? if ($affiliate_disclosure['title']): ?>
            <span><?=$affiliate_disclosure['title'];?></span>
		<? endif; ?>
        <img src="<?=get_template_directory_uri() . '/assets/img/icons/info-black.svg';?>" alt="Info Icon">
	    <? if ($affiliate_disclosure['content']): ?>
            <div class="aw-info none">
                <?=$affiliate_disclosure['content'];?>
            </div>
	    <? endif; ?>
    </button>
<?php endif; ?>

<? if( !empty($top_panel) ): ?>
    <div class="aw-casinos__btns">
	    <? if( !empty($top_panel['tabs_title']) ): ?>
            <span><?=$top_panel['tabs_title'];?></span>
	    <? endif; ?>


        <? if (count($tables) > 0): ?>
            <? foreach ($tables as $i => $table): ?>
                <? if (!empty($table['tab'])):
                    $unique_name = str_replace(' ', '-', $table['tab']['title']);
                    $unique_name = strtolower($unique_name);
                    $unique_name = 'aw-'.$unique_name;
			        $tables[$i]['unique_name'] = $unique_name; ?>
                    <button data-filter=".<?=$unique_name;?>">
                        <? if( !empty($table['tab']['image']) ): ?>
                            <div style="-webkit-mask: url(<?=$table['tab']['image'];?>) no-repeat center; mask: url(<?=$table['tab']['image'];?>) no-repeat center;"></div>
                        <? endif; ?>
                        <? if( !empty($table['tab']['title']) ): ?>
                            <span><?=$table['tab']['title'];?></span>
                        <? endif; ?>
                    </button>
                <? endif; ?>
            <? endforeach; ?>
        <? endif; ?>

<!--        <button class="aw-casinos__select-button">-->
<!--            <div class="aw-casinos__select-button-container">-->
<!--                <svg>-->
<!--                    <use xlink:href="img/btn-icons/b1.svg#icon1"></use>-->
<!--                </svg>-->
<!--                <span>Top Bonus</span>-->
<!--            </div>-->
<!--            <img src="--><?//=get_template_directory_uri().'/assets/img/icons/arrow.svg'?><!--" alt="arrow">-->
<!--            <ul class="aw-casinos__select">-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        <svg>-->
<!--                            <use xlink:href="img/btn-icons/b1.svg#icon1"></use>-->
<!--                        </svg>-->
<!--                        <span>Das beste Casino für echtes Geld</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        <svg>-->
<!--                            <use xlink:href="img/btn-icons/b1.svg#icon2"></use>-->
<!--                        </svg>-->
<!--                        <span>Bestes mobiles Casino</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        <svg>-->
<!--                            <use xlink:href="img/btn-icons/b1.svg#icon3"></use>-->
<!--                        </svg>-->
<!--                        <span>Neue Kasinos</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </button>-->

	    <? if( !empty($top_panel['author']) ): ?>
            <div class="aw-casinos__man">
                <? if( !empty($top_panel['author']['photo']) ): ?>
                    <img
                        src="<?=$top_panel['author']['photo']['url'];?>"
                        alt="<?=$top_panel['author']['photo']['alt'];?>"
                        title="<?=$top_panel['author']['photo']['title'];?>">
                <? endif; ?>
                <? if (!empty($top_panel['author']['link']) || !empty($top_panel['author']['date'])): ?>
                    <div class="aw-casinos__wrap">
			            <? if (!empty($top_panel['author']['link'])): ?>
                            <span>By <a href="<?=$top_panel['author']['link']['link_to'];?>"> <?=$top_panel['author']['link']['title'];?></a></span>
			            <? endif; ?>
			            <? if (!empty($top_panel['author']['date'])): ?>
                            <span><?=$top_panel['author']['date'];?></span>
			            <? endif; ?>
                    </div>
                <? endif; ?>
            </div>
	    <? endif; ?>
    </div>
<?php endif; ?>

<InnerBlocks allowedBlocks="<?=esc_attr( wp_json_encode( $allowed_blocks ) );?>"/>

<? if( !empty($load_more_button) ): ?>
    <button><?=$load_more_button;?></button>
<? endif; ?>