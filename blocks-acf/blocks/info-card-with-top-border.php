<?php
$is_map = get_field('is_map');
$class = $is_map ? 'aw-info-card-with-map' : 'aw-info-card-twitter';
if ($is_map) {
    $card_fields = get_field('map_fields');
} else {
	$card_fields = get_field('social_fields');
}
?>

<div class="<?=$class;?> aw-info-card-with-top-border">
    <? if (!empty($card_fields['title_fields'])): ?>
        <div class="aw-info-card-with-top-border__header">
            <? if (!empty($card_fields['title_fields']['title'])): ?>
                <span><?=$card_fields['title_fields']['title'];?></span>
            <? endif; ?>
	        <? if (!empty($card_fields['title_fields']['icon'])): ?>
                <img src="<?=$card_fields['title_fields']['icon'];?>" alt="Title Icon"/>
	        <? endif; ?>
        </div>
    <? endif; ?>
	<div class="aw-info-card-with-top-border__content">
        <? if ($is_map): ?>
            <InnerBlocks />
        <? endif; ?>
        <? if (isset($card_fields['content_fields']) && !empty($card_fields['content_fields'])): ?>
            <div class="aw-info-card-with-top-border__content">
	            <? if (isset($card_fields['content_fields']['header']) && !empty($card_fields['content_fields']['header'])): ?>
                    <div class="aw-info-card-with-top-border__content-header">
                        <span>
                            <span>
                                <? if (isset($card_fields['content_fields']['header']['social_name']) && !empty($card_fields['content_fields']['header']['social_name'])): ?>
                                    <?=$card_fields['content_fields']['header']['social_name'];?>
                                <? endif; ?>
                            </span> <?=__('von');?>
                            <span>
                                <? if (isset($card_fields['content_fields']['header']['social_link_title']) && !empty($card_fields['content_fields']['header']['social_link_title'])): ?>
	                                <?=$card_fields['content_fields']['header']['social_link_title'];?>
                                <? endif; ?>
                            </span>
                        </span>
                        <img src="<?=get_template_directory_uri() . '/assets/img/about-company-paypal/info-icon.svg'?>" alt="Info">
                    </div>
	            <? endif; ?>

	            <? if (isset($card_fields['content_fields']['content']) && !empty($card_fields['content_fields']['content'])): ?>
                    <div class="aw-info-card-with-top-border__content-main">
	                    <? if (!empty($card_fields['content_fields']['content']['title'])): ?>
                            <div class="aw-info-card-with-top-border__content-main__logo">
                                <? if (!empty($card_fields['content_fields']['content']['title']['logo'])): ?>
                                    <img
                                        src="<?=$card_fields['content_fields']['content']['title']['logo']['url'];?>"
                                        alt="<?=$card_fields['content_fields']['content']['title']['logo']['alt'];?>"
                                        title="<?=$card_fields['content_fields']['content']['title']['logo']['title'];?>"
                                    >
                                <? endif; ?>
                                <div class="aw-info-card-with-top-border__content-main__logo-name">
                                    <div class="aw-info-card-with-top-border__content-main__logo-name__verified">
	                                    <? if (!empty($card_fields['content_fields']['content']['title']['name'])): ?>
                                            <span><?=$card_fields['content_fields']['content']['title']['name'];?></span>
	                                    <? endif; ?>
                                        <img src="<?=get_template_directory_uri() . '/assets/img/about-company-paypal/verified.svg'?>" alt="Verified">
                                    </div>
	                                <? if (!empty($card_fields['content_fields']['content']['title']['social_link'])): ?>
                                        <span><?=$card_fields['content_fields']['content']['title']['social_link'];?></span>
	                                <? endif; ?>
                                </div>
                            </div>
	                    <? endif; ?>
                        <? if (!$is_map): ?>
                            <InnerBlocks />
                        <? endif; ?>
	                    <? if (!empty($card_fields['content_fields']['content']['date'])): ?>
                            <div class="aw-info-card-with-top-border__content-main__date">
	                            <? if (!empty($card_fields['content_fields']['content']['date']['date'])): ?>
                                    <span><?=$card_fields['content_fields']['content']['date']['date'];?></span>
	                            <? endif; ?>
	                            <? if (!empty($card_fields['content_fields']['content']['date']['app'])): ?>
                                    <span><?=$card_fields['content_fields']['content']['date']['app'];?></span>
	                            <? endif; ?>
                            </div>
	                    <? endif; ?>
                    </div>
	            <? endif; ?>
	            <? if (isset($card_fields['content_fields']['footer']) && !empty($card_fields['content_fields']['footer'])): ?>
                    <div class="aw-info-card-with-top-border__content-footer">
	                    <? if (!empty($card_fields['content_fields']['footer']['embed'])): ?>
                            <span><?=$card_fields['content_fields']['footer']['embed'];?></span>
	                    <? endif; ?>
	                    <? if (!empty($card_fields['content_fields']['footer']['view_on'])): ?>
                            <span><?=$card_fields['content_fields']['footer']['view_on'];?></span>
	                    <? endif; ?>
                    </div>
	            <? endif; ?>
            </div>
        <? endif; ?>
	</div>
</div>

<!--<div class="aw-info-card-twitter aw-info-card-with-top-border">-->
<!--	<div class="aw-info-card-with-top-border__header">-->
<!--        <span>Firmenzentrale in Wien</span>-->
<!--        <img src="img/about-company-paypal/google-map-icon.svg" alt="Google Map Icon"/>-->
<!--    </div>-->
<!--	<div class="aw-info-card-with-top-border__content">-->
<!--		<div class="aw-info-card-with-top-border__content-header"><span><span>Tweets</span> von <span>@microgaming</span></span><img src="img/about-company-paypal/info-icon.svg" alt="Info"></div>-->
<!--		<div class="aw-info-card-with-top-border__content-main">-->
<!--			<div class="aw-info-card-with-top-border__content-main__logo"><img src="img/everything-about-company/microgaming-logo.png" alt="Microgaming Logo">-->
<!--				<div class="aw-info-card-with-top-border__content-main__logo-name">-->
<!--					<div class="aw-info-card-with-top-border__content-main__logo-name__verified"><span>Microgaming</span><img src="img/about-company-paypal/verified.svg" alt="Verified"></div><span>@microgaming</span>-->
<!--				</div>-->
<!--			</div>-->
<!--			<p>For merchants using PayPal Checkout, we’ve removed the subscription fees from our Happy Returns Return and Exchange portal.</p>-->
<!--			<div class="aw-info-card-with-top-border__content-main__date"><span>12:30 PM · Apr 21, 2021</span><span>Twitter Web App</span></div>-->
<!--		</div>-->
<!--		<div class="aw-info-card-with-top-border__content-footer"><span>Einbetten</span><span>Auf twitter anzeigen</span></div>-->
<!--	</div>-->
<!--</div>-->