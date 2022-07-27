<?
    $photo = get_field('photo');
    $name = get_field('name');
    $link = get_field('link');
    $date = get_field('date');
?>

<div class="aw-bests__by">
    <? if (!empty($photo)): ?>
        <img
            src="<?=$photo['url'];?>"
            alt="<?=$photo['alt'];?>"
            title="<?=$photo['title'];?>"
        />
    <? endif; ?>
	<? if (!empty($name) || !empty($link)): ?>
        <span>By <a href="<? if (!empty($link)) echo $link;?>"><? if (!empty($name)) echo $name;?></a></span>
	<? endif; ?>
	<? if (!empty($date)): ?>
        <hr>
        <span><?=$date;?></span>
    <? endif; ?>
</div>