<?
$select_menu = get_field('select_menu');

if ($select_menu == 'All Categories') {
	if ( has_nav_menu( 'all_categories' ) ) {

		$all_categories_menu_items = get_menu_items('all_categories');

		if (!empty($all_categories_menu_items) && gettype($all_categories_menu_items) != "boolean") {
			if( function_exists('build_menu_tree')) {
				$menu_tree = build_menu_tree($all_categories_menu_items);
			}
		}
        if (!empty($menu_tree) && gettype($menu_tree) != "boolean") {
	        list($first_half, $second_half) = array_chunk($menu_tree, ceil((count($menu_tree) + 1)/2));
        }

		if( function_exists('render_all_categories_menu')) {
            if (!empty($first_half)) {
	            render_all_categories_menu($first_half);
            }
			if (!empty($second_half)) {
				render_all_categories_menu($second_half, true);
			}
		}
	}
} elseif ($select_menu == 'Sidebar') {
	if ( has_nav_menu( 'sidebar' ) ) {

		$sidebar_menu_items = get_menu_items('sidebar');

		if (!empty($sidebar_menu_items) && gettype($sidebar_menu_items) != "boolean") {
			if( function_exists('build_menu_tree')) {
				$menu_tree = build_menu_tree($sidebar_menu_items);
			}
		}?>
		<? if (!empty($menu_tree)): ?>
			<ul class="aw-aside__card-top-spiele__accordions">
				<? foreach ($menu_tree as $item): ?>
					<li>
						<a href="<? if (!empty($item->url)) echo $item->url;?>"><? if (!empty($item->post_title)) echo $item->post_title;?></a>
                        <? if (!empty($item->children)): ?>
                            <span class="aw-aside__card-top-spiele__accordions-dropdown"></span>
                            <ul class="aw-aside__card-top-spiele__accordions__content-list">
	                            <? foreach ($item->children as $child): ?>
                                    <li>
                                        <a href="<? if (!empty($child->url)) echo $child->url;?>"><? if (!empty($child->post_title)) echo $child->post_title;?></a>
                                    </li>
	                            <? endforeach; ?>
                            </ul>
                        <? endif; ?>
					</li>
				<? endforeach; ?>
			</ul>
		<? endif; ?>
	<? }
}