<?
$members = get_field('members');
?>

<? if (!empty($members)): ?>
    <div class="aw-our-team__cards">
        <? foreach ($members as $member): ?>
            <div class="aw-our-team__cards-card">
                <? if (!empty($member['person_info'])): ?>
                    <div class="aw-our-team__cards-card__person">
                        <? if (!empty($member['person_info']['image'])): ?>
                            <img
                                src="<?=$member['person_info']['image']['url'];?>"
                                alt="<?=$member['person_info']['image']['alt'];?>"
                                title="<?=$member['person_info']['image']['title'];?>"
                            />
                        <? endif; ?>
                        <div class="aw-our-team__cards-card__person-info">
                            <? if (!empty($member['person_info']['name'])): ?>
                                <span><?=$member['person_info']['name'];?></span>
                            <? endif; ?>
	                        <? if (!empty($member['person_info']['position'])): ?>
                                <span><?=$member['person_info']['position'];?></span>
	                        <? endif; ?>
	                        <? if (!empty($member['person_info']['skills'])): ?>
                                <span><?=$member['person_info']['skills'];?></span>
	                        <? endif; ?>
                        </div>
                    </div>
                <? endif; ?>
                <? if (!empty($member['links'])): ?>
                    <div class="aw-our-team__cards-card__links">
                        <? foreach ($member['links'] as $link): ?>
                            <a
                                <?if (!empty($link['icon'])):?>style="background-image: url(<?=$link['icon'];?>);"<?endif;?>
                                <?if (!empty($link['link'])):?>href="<?=$link['link'];?>"<?endif;?>
                            ></a>
                        <? endforeach; ?>
                    </div>
                <? endif; ?>
                <? if (!empty($member['description'])): ?>
                    <p><?=$member['description'];?></p>
                <? endif; ?>
            </div>
        <? endforeach; ?>
    </div>
<? endif; ?>