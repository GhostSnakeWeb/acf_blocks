<?php
$partners = get_field('partners');
?>
<? if (!empty($partners)): ?>
    <div class="aw-our-partners__cards">
        <? foreach ($partners as $partner): ?>
            <div class="aw-our-partners__cards-card">
                <img
                    src="<?=$partner['logo']['url'];?>"
                    alt="<?=$partner['logo']['alt'];?>"
                    title="<?=$partner['logo']['title'];?>"
                >
            </div>
        <? endforeach; ?>
    </div>
<? endif; ?>