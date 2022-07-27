<?
    $open_title = get_field('open_title');
    $close_title = get_field('close_title');
?>

<button class="aw-additional" id="hideShowTable">
    <span data-open="<?=$open_title;?>" data-close="<?=$close_title;?>"><strong><?=$open_title;?></strong></span>
    <img id="arrowTable" src="<?=get_template_directory_uri() . '/assets/img/icons/arrow.svg'?>" alt="arrow">
</button>