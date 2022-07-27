<?php
	$title = get_field('title');
	$payment_methods = get_field('payment_methods');
?>
<aside class="aw-aside__card aw-aside__card-top">
    <? if (!empty($title)): ?>
        <span><?=$title;?></span>
    <? endif; ?>
	<? if (!empty($payment_methods)): ?>
        <div class="aw-aside__card-top__payment">
            <? foreach ($payment_methods as $payment_method): ?>
                <a class="aw-aside__card-top__payment-link" href="<? if (!empty($payment_method['link'])) echo $payment_method['link'];?>" target="_blank">
	                <? if (!empty($payment_method['image'])): ?>
                        <img
                            src="<?=$payment_method['image']['url'];?>"
                            alt="<?=$payment_method['image']['alt'];?>"
                            title="<?=$payment_method['image']['title'];?>"
                        >
	                <? endif; ?>
                </a>
            <? endforeach; ?>
        </div>
	<? endif; ?>
</aside>