<?
	$brands = get_field('brands');
?>

<? if (!empty($brands)): ?>
	<div class="aw-bests__wrapper">
		<? foreach( $brands as $brand ): ?>
			<div class="aw-bests__card">
				<? if (!empty($brand['brand_link'])): ?>
					<a href="<? if ($brand['brand_link']['link']) echo $brand['brand_link']['link'];?>" target="_blank">
						<? if (!empty($brand['brand_link']['image'])):
							$image = $brand['brand_link']['image'];

							$title = $image['title'];
							$alt = $image['alt'];

							// Size
							$size = 'top-brands-main';
							$src = $image['sizes'][$size];
							$width = $image['sizes'][$size . '-width'];
							$height = $image['sizes'][$size . '-height'];
							?>
							<img
								src="<?=esc_url($src);?>"
								alt="<?=esc_attr($alt);?>"
								title="<?=esc_attr($title);?>"
							/>
						<? endif; ?>
					</a>
				<? endif; ?>
				<? if (!empty($brand['title'])): ?>
					<span><?=$brand['title'];?></span>
				<? endif; ?>
				<? if (!empty($brand['rating'])): ?>
					<? $width = ($brand['rating'] * 66) / 5; ?>
					<div class="aw-bests__stars">
                        <div class="aw-bests__stars-container" style="width: <?=$width;?>%">
                            <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="star"/>
                            <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="star"/>
                            <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="star"/>
                            <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="star"/>
                            <img src="<?=get_template_directory_uri() . '/assets/img/icons/star.svg'?>" alt="star"/>
                        </div>
						<span><?=$brand['rating'];?> / 5</span>
					</div>
				<? endif; ?>
                <? if (!empty($brand['promocode'])): ?>
                    <div class="aw-tooltip">
                        <button data-copybutton="data-copybutton">
                            <span><?=$brand['promocode'];?></span>
                            <hr/>
                            <img src="<?=get_template_directory_uri() . '/assets/img/icons/copy.svg';?>" alt="copy"/>
                            <span class="aw-tooltiptext" id="copyTooltip">Copy to clipboard</span>
                        </button>
                    </div>
                <? endif; ?>
                <? if (!empty($brand['button_title'])): ?>
                    <button><?=$brand['button_title'];?></button>
                <? endif; ?>
				<? if (!empty($brand['link'])): ?>
                    <a href="<? if ($brand['link']['link_to']) echo $brand['link']['link_to'];?>"><? if ($brand['link']['title']) echo $brand['link']['title'];?></a>
				<? endif; ?>
			</div>
		<? endforeach; ?>
        <div class="bg"></div>
	</div>
<? endif; ?>