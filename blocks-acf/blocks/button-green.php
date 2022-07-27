<?
    $title = get_field('title');
    $link = get_field('link');
?>

<? if (!empty($title)): ?>
    <button class="button-green" <?if (!empty($link)):?>data-url="<?=$link;?>"<?endif;?>><?=$title;?></button>
<? endif; ?>