<?
    $title = get_field('title');
    $items = get_field('items');
?>

<div class="widget widget-list">
    <? if ( !empty($title) ) { ?>
        <div class="widget-title">
            <?= $title ?>
        </div>
    <? } ?>

    <div class="widget-body">
        <? if ( !empty($items) ) { ?>
            <ul class="list">
                <? foreach ($items as $item) { ?>
                    <? if ( !empty(trim($item['text']) || !empty($item['link'])) ) { ?>
                        <li <?= !empty($item['sub_list']) ? 'class="dropdown"' : '' ?>>
                            <? if ( !empty($item['link']) ) { ?>
                                <a href="<?= $item['link']['url'] ?>">
                            <? } ?>
                                
                            <?= $item['text'] ?>
                            
                            <? if ( !empty($item['link']) ) { ?>
                                </a>
                            <? } ?>

                            <? if ( !empty($item['sub_list']) ) { ?>
                                <span>
                                    <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.21967 0.21967C0.512563 -0.0732233 0.987437 -0.0732233 1.28033 0.21967L5.25 4.18934L9.21967 0.21967C9.51256 -0.0732233 9.98744 -0.0732233 10.2803 0.21967C10.5732 0.512563 10.5732 0.987437 10.2803 1.28033L5.78033 5.78033C5.48744 6.07322 5.01256 6.07322 4.71967 5.78033L0.21967 1.28033C-0.0732233 0.987437 -0.0732233 0.512563 0.21967 0.21967Z" fill="#3F3099"/>
                                    </svg>
                                </span>
                            <? } ?>

                            <? if ( !empty($item['sub_list']) ) { ?>
                                <ul class="sub">
                                    <? foreach ($item['sub_list'] as $sub_item) { ?>
                                        <li>
                                            <? if ( !empty($sub_item['link']) ) { ?>
                                                <a href="<?= $sub_item['link']['url'] ?>">
                                            <? } ?>
                                            
                                            <?= $sub_item['text'] ?>

                                            <? if ( !empty($sub_item['link']) ) { ?>
                                                </a>
                                            <? } ?>
                                        </li>
                                    <? } ?>
                                </ul>
                            <? } ?>
                        </li>
                    <? } ?>
                <? } ?>
            </ul>
        <? } ?>
    </div>
</div>