<?

/*

  Styles and Scripts

*/

function ra_scripts_styles() {
	wp_enqueue_style( 'swiper-styles', get_template_directory_uri() . '/assets/css/swiper.min.css', [], '9.15' );
	wp_enqueue_style( 'slick-styles', get_template_directory_uri() . '/assets/css/slick.css', [], '9.15' );
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/main.css', ['swiper-styles', 'slick-styles'], '8.1.4' );

    wp_register_style('custom-gutenberg-styles', get_template_directory_uri() . '/assets/css/custom-gutenberg-styles.css');
	wp_enqueue_style('custom-gutenberg-styles');

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/libs/jquery.min.js', array(), '3.6.0', true);
    wp_enqueue_script('sticky', get_template_directory_uri() . '/assets/js/libs/sticky.js', array(), '1.0', true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/libs/swiper.min.js', array(), '1.0', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/libs/slick.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/libs/mixitup.min.js', array(), '1.0', true);
	wp_enqueue_script('jquery-sticky', get_template_directory_uri() . '/assets/js/libs/jquery.sticky.js', array('jquery'), '1.0.4', true);

	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/app.js', array('sticky', 'swiper', 'slick', 'mixitup'), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'ra_scripts_styles' );

/*

  Add Menu

*/



add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {

    register_nav_menu( 'main', __( 'Main menu' ) );

    register_nav_menu( 'user', __( 'User menu' ) );

    register_nav_menu( 'footer_links_1', __( 'Footer Links 1' ) );

    register_nav_menu( 'footer_links_2', __( 'Footer Links 2' ) );

	register_nav_menu( 'all_categories', __( 'All Categories Menu' ) );

	register_nav_menu( 'sidebar', __( 'Sidebar' ) );
}



function casino_get_menu_title($location_menu) {

  $theme_locations = get_nav_menu_locations();

  $menu_obj = get_term( $theme_locations[$location_menu], 'nav_menu' );

  return $menu_obj->name;

}



require get_template_directory() . '/includes/custom-walker-menu.php';

/*

  Add Option Pages

*/



if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> __('Header'),
		'menu_title'	=> __('Header'),
		'menu_slug' 	=> 'header-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'parent_slug' => 'themes.php',
	));

    acf_add_options_page(array(
        'page_title' 	=> __('Footer'),
        'menu_title'	=> __('Footer'),
        'menu_slug' 	=> 'footer-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false,
        'parent_slug' => 'themes.php',
    ));

	acf_add_options_page(array(
		'page_title' 	=> __('404'),
		'menu_title'	=> __('404'),
		'menu_slug' 	=> '404-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'parent_slug' => 'themes.php',
	));

    acf_add_options_page(array(
        'page_title' 	=> __('Alternative URLs'),
        'menu_title'	=> __('Alternative URLs'),
        'menu_slug' 	=> 'alternative-urls-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false,
        'parent_slug' => 'themes.php',
    ));

}



/*

  Custom styles for Gutenberg editor

*/



add_action( 'after_setup_theme', 'gutenberg_setup_theme' );

function gutenberg_setup_theme() {

	add_theme_support( 'editor-styles' );

	add_editor_style( 'assets/css/editor.css' );

	wp_register_style('custom-gutenberg-styles', get_template_directory_uri() . '/assets/css/custom-gutenberg-styles.css');
	wp_enqueue_style('custom-gutenberg-styles');
}



/*

  Add custom blocks

*/


require get_template_directory() . '/blocks-custom/blocks.php';
require get_template_directory() . '/blocks-acf/blocks.php';


add_theme_support( 'post-thumbnails', array( 'post' ) );
add_image_size( 'submenu-image', 64, 40 );
add_image_size( 'author-photo', 48, 49, true);
add_image_size( 'author-photo', 49, 49, true);
add_image_size( 'affiliate-brand-logo', 136, 100, true);
add_image_size( 'learn-more', 72, 72, true);
add_image_size( 'learn-news-preview', 304, 206, ['center', 'center']);
add_image_size( 'top-brands-main', 184, 93, true);
add_image_size( 'angebot-brand', 152, 94, true);
add_image_size( 'popular-themes', 73, 73, true);
add_image_size( 'casino-expert-author', 80, 80, true);
add_image_size( 'casino-expert-social-icon', 24, 24, true);
add_image_size( 'casino-expert-promo-logo', 111, 56, true);
add_image_size( 'all-categories-menu-icon', 33, 33, true);
add_image_size( 'popular-casino-games-icon', 48, 48, true);
add_image_size( 'top-5-casinos-sidebar', 87, 58, true);
add_image_size( 'cards-404', 276, 143, true);
add_image_size( 'sidebar-mass-media', 143, 50, true);
add_image_size( 'sidebar-popular-best-blog-articles', 81, 70, ['center', 'center']);
add_image_size( 'top-news-blog', 658, 427, ['center', 'center']);
add_image_size( 'popular-news-blog', 422, 288, ['center', 'center']);
add_image_size( 'latest-news-blog', 304, 206, ['center', 'center']);
add_image_size( 'our-goals', 64, 64, true);
add_image_size( 'team-member', 88, 88, true);
add_image_size( 'author-page-hero-card', 212, 212, true);
add_image_size( 'software-hero-logo', 288, 115, true);
add_image_size( 'software-card-logo', 176, 100, true);
add_image_size( 'software-card-regulation', 71, 28, true);
add_image_size( 'software-card-deposit-methods', 64, 32, true);
add_image_size( 'software-play-online-card-logo', 170, 76, true);
add_image_size( 'software-games-list-logo', 87, 58, true);
add_image_size( 'info-card-with-top-border-title-icon', 24, 24, true);
add_image_size( 'info-card-with-top-border-content-logo', 63, 48, true);
add_image_size( 'payment-method-hero-card-logo', 199, 138, true);
add_image_size( 'info-card-in-hero-demo-placeholder', 894, 503, true);
add_image_size( 'review-casino-hero-card-logo', 196, 215, true);
add_image_size( 'review-casino-hero-card-additional-logos', 96, 53, true);
add_image_size( 'review-casino-hero-card-country-logo', 23, 23, true);
add_image_size( 'review-casino-hero-age-limit', 35, 35, true);
add_image_size( 'review-casino-hero-preview-small', 120, 120, true);
add_image_size( 'live-casino-cards', 154, 80, true);
add_image_size( 'more-testimonials-top-logo', 186, 99, true);
add_image_size( 'more-testimonials-top-payment-methods', 54, 24, true);
add_image_size( 'more-testimonials-top-age-limit-logo', 28, 28, true);
add_image_size( 'more-testimonials-top-age-limit-from-logo', 74, 24, true);
add_image_size( 'more-testimonials-bottom-logo', 131, 80, true);
add_image_size( 'review-payment-affiliate-logo', 69, 51, true);
add_image_size( 'author-in-hero-icon', 20, 20 );

function __extend_http_request_timeout( $timeout ) {
    return 60;
}

add_filter( 'http_request_timeout', '__extend_http_request_timeout' );

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

require get_template_directory() . '/includes/lang.php';

function rankya_remove_global_styles() {
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
remove_action( 'in_admin_header', 'wp_global_styles_render_svg_filters' );
}
add_action('after_setup_theme', 'rankya_remove_global_styles', 10, 0);

/*

  Custom Functions

*/
function vardump($var): void {
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

function build_menu_tree(array &$elements, $parentId = 0, bool $isAssociate = false): array {

	$branch = [];

	foreach ($elements as &$element) {

		if ($element->menu_item_parent == $parentId) {
			$children = build_menu_tree($elements, $element->ID);

			if ($children) {
				$element->children = $children;
			}
            if ($isAssociate)
			    $branch[$element->ID] = $element;
            else
	            $branch[] = $element;
			unset($element);
		}
	}
	return $branch;
}

function get_menu_items(string $menu) {
	$menu_name = $menu;
	$locations = get_nav_menu_locations();
	$menu_items = [];

	if( $locations && isset( $locations[ $menu_name ] ) ){
		$menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );
	}

	return $menu_items;
}

/**
 * Рендеринг половин меню для секции All Categories
 *
 * @param array $menu
 *
 * @return void
 */
function render_all_categories_menu(array $menu, bool $isNeededBg = false) {
	if (!empty($menu)): ?>
		<nav class="aw-all-categories__menu-container">
			<ul>
				<? foreach ($menu as $item):
					$icon_src = get_field('icon', $item->ID);
				?>
					<li class="aw-all-categories__menu">
						<? if (!empty($icon_src)): ?>
							<img src="<?=$icon_src;?>" alt="Heart Circle"/>
						<? endif; ?>
						<div class="aw-all-categories__menu-content">
							<? if ($item->post_title != ""): ?>
								<a href="<?=$item->url;?>"><?=$item->post_title;?></a>
							<? endif; ?>
							<? if (!empty($item->children)): ?>
                                <ul>
                                    <? foreach ($item->children as $child): ?>
                                        <li>
                                            <? if ($child->post_title != ""): ?>
                                                <a href="<?=$child->url;?>"><?=$child->post_title;?></a>
                                            <? endif; ?>
                                        </li>
                                    <? endforeach; ?>
                                </ul>
							<? endif; ?>
						</div>
					</li>
				<? endforeach; ?>
			</ul>
            <? if ($isNeededBg): ?>
                <div class="aw-all-categories__menu-container__bg"></div>
            <? endif; ?>
		</nav>
	<? endif;
}

// Получение блока со страницы по имени
function get_acf_block(array $block_object, string $block_name) {
	if ($block_object['blockName'] === $block_name) {
		return $block_object;
	}
	if (!empty($block_object['innerBlocks'])) {
		foreach ($block_object['innerBlocks'] as $inner_block) {
			$inner_block_object = get_acf_block($inner_block, $block_name);
			if ($inner_block_object) {
				return $inner_block_object;
			}
		}
	}
	return false;
}

// Получение данных блока по названию, через которое он зарегестрирован в системе
function get_acf_block_content(array $block, bool $collect_render, bool $collect_fields, bool $collect_block) {
	if( function_exists('get_acf_block')) {
        if (!empty($block['innerBlocks'])) {
	        $collect = [];

	        foreach ($block['innerBlocks'] as $block) {

		        if (($pos = strpos($block['blockName'], "/")) !== FALSE) {
			        $blockName = substr($block['blockName'], $pos+1);
		        }

		        // && !empty($block['attrs']['data'][array_keys($block['attrs']['data'])[0]]) - ищет по имени title в data, который может измениться
                if( !empty($blockName) && isset($block['attrs']['data']) ){

                    acf_setup_meta( $block['attrs']['data'], $block['attrs']['id'], true );

                    if ($collect_fields)
                        $fields = get_fields();
                    else
	                    $fields = '';

                    acf_reset_meta( $block['attrs']['id'] );

                    // $element_name = str_replace(' ', '-', mb_strtolower($block['attrs']['data'][array_keys($block['attrs']['data'])[0]])); - ищет по имени title в data, который может измениться
	                // $element_name - вставить в квадртаные скобки вместо $blockName если охота использовать ассоциативный массив с именами

                    $collect[$blockName] = [
                            'render' 	=> 	$collect_render ? render_block( $block ) : '',
                            'fields' 	=>	$fields,
                            'block'  	=> 	$collect_block ? $block : ''
                    ];
                } else {
                    $collect['main'] .= render_block( $block );
                }
            }
            return $collect;
        }
    }
    return false;
}

// Получаем пост (страницу) по имени
function get_post_by_name($post_name) {
	$page = get_page_by_title( $post_name );
	return get_post($page->ID);
}

// Обрезаем заголовок
// Использование:  trim_chars(30, '...');
function trim_chars($string, $count, $after) {
	if (mb_strlen($string) > $count) $string = mb_substr($string, 0, $count);
	else $after = '';
	echo $string.$after;
}

// Remove P tags Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Select Categories Form Testimonials
function acf_select_category_form_testimonial_field_choices( $field ) {
	$field['categories'] = [];

	if( have_rows('categories') ) {
		while( have_rows('categories') ) {
			the_row();
			$title = get_sub_field('title');
			$field['choices'][ $title ] = $title;
		}
	}

	return $field;
}
add_filter('acf/load_field/name=select_category_form_testimonial', 'acf_select_category_form_testimonial_field_choices');

/* Стили для блоков */
register_block_style(
	'core/list',
	[
		'name'         => 'list-checks',
		'label'        => __( 'List Checks', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
    ]
);
register_block_style(
	'core/list',
	[
		'name'         => 'references',
		'label'        => __( 'References', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'core/list',
	[
		'name'         => 'our-history',
		'label'        => __( 'Our History', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'core/image',
	[
		'name'         => 'angebot',
		'label'        => __( 'Angebot', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'core/image',
	[
		'name'         => 'faq',
		'label'        => __( 'FAQ', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'core/image',
	[
		'name'         => 'more-testimonials',
		'label'        => __( 'More Testimonials', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'core/image',
	[
		'name'         => 'company-awards-image',
		'label'        => __( 'Company Awards', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'core/image',
	[
		'name'         => 'our-partners-image',
		'label'        => __( 'Our Partners', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'custom/section',
	[
		'name'         => 'all-categories',
		'label'        => __( 'All Categories', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'custom/section',
	[
		'name'         => 'affiliate',
		'label'        => __( 'Affiliate', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'acf/hero-block',
	[
		'name'         => 'review-casino',
		'label'        => __( 'Review Casino', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'acf/hero-block',
	[
		'name'         => 'review-slot',
		'label'        => __( 'Review Slot', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'acf/hero-block',
	[
		'name'         => 'review-payment-method',
		'label'        => __( 'Review Payment Method', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'acf/hero-block',
	[
		'name'         => 'software',
		'label'        => __( 'Software', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'core/table',
	[
		'name'         => 'review-payment',
		'label'        => __( 'Review Payment', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);
register_block_style(
	'core/table',
	[
		'name'         => 'company-awards',
		'label'        => __( 'Company Awards', 'textdomain' ),
		'style_handle' => 'custom-gutenberg-styles',
	]
);