<?php

add_action('acf/init', 'acf_gutenberg_blocks_init');

function acf_gutenberg_blocks_init() {
    // Blocks
	if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'Hero Block Article',
            'title'             => __('Hero Block Article'),
            'render_template'   => 'blocks-acf/blocks/hero.php',
            'category'          => 'common',
            'keywords'          => array( 'Hero Block Article' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'Blog',
            'title'             => __('Blog'),
            'render_template'   => 'blocks-acf/blocks/blog.php',
            'description'       => 'List of all posts with pagination',
            'category'          => 'common',
            'keywords'          => array( 'Blog' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'List in Sidebar',
            'title'             => __('List in Sidebar'),
            'render_template'   => 'blocks-acf/blocks/list.php',
            'category'          => 'common',
            'keywords'          => array( 'List in Sidebar' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'Related Posts Sidebar',
            'title'             => __('Related Posts Sidebar'),
            'render_template'   => 'blocks-acf/blocks/related-posts-sidebar.php',
            'category'          => 'common',
            'keywords'          => array( 'Related Posts Sidebar' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'Recent news',
            'title'             => __('Recent news'),
            'render_template'   => 'blocks-acf/blocks/recent-news.php',
            'category'          => 'common',
            'keywords'          => array( 'Recent news' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'Relinking',
            'title'             => __('Relinking'),
            'render_template'   => 'blocks-acf/blocks/relinking.php',
            'category'          => 'common',
            'keywords'          => array( 'Relinking' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'Relinking 2',
            'title'             => __('Relinking 2'),
            'render_template'   => 'blocks-acf/blocks/relinking-2.php',
            'category'          => 'common',
            'keywords'          => array( 'Relinking 2' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'Relinking 3',
            'title'             => __('Relinking 3'),
            'render_template'   => 'blocks-acf/blocks/relinking-3.php',
            'category'          => 'common',
            'keywords'          => array( 'Relinking 3' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'Menu',
            'title'             => __('Menu'),
            'render_template'   => 'blocks-acf/blocks/menu.php',
            'category'          => 'common',
            'keywords'          => array( 'Menu' ),
            'mode'              => 'preview'
        ));
		
		acf_register_block_type(array(
            'name'              => 'Brand Review',
            'title'             => __('Brand Review'),
            'render_template'   => 'blocks-acf/blocks/brand-review.php',
            'category'          => 'common',
            'keywords'          => array( 'Brand Review' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'Latest Articles',
            'title'             => __('Latest Articles'),
            'render_template'   => 'blocks-acf/blocks/latest-articles.php',
            'category'          => 'common',
            'keywords'          => array( 'Latest Articles' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'Advantages and Disadvantages',
            'title'             => __('Advantages and Disadvantages'),
            'render_template'   => 'blocks-acf/blocks/advantages.php',
            'category'          => 'common',
            'keywords'          => array( 'Advantages and Disadvantages' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'Author in Sidebar',
            'title'             => __('Author in Sidebar'),
            'render_template'   => 'blocks-acf/blocks/author-sidebar.php',
            'category'          => 'common',
            'keywords'          => array( 'Author in Sidebar' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'Casino Review Sidebar',
            'title'             => __('Casino Review Sidebar'),
            'render_template'   => 'blocks-acf/blocks/review-casino.php',
            'category'          => 'common',
            'keywords'          => array( 'Casino Review Sidebar' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'Article Review',
            'title'             => __('Article Review'),
            'render_template'   => 'blocks-acf/blocks/article-review.php',
            'category'          => 'common',
            'keywords'          => array( 'Article Review' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'Short Content',
            'title'             => __('Short Content'),
            'render_template'   => 'blocks-acf/blocks/short-content.php',
            'category'          => 'common',
            'keywords'          => array( 'Short Content' ),
            'mode'              => 'preview'
        ));

        acf_register_block_type(array(
            'name'              => 'How To',
            'title'             => __('How To'),
            'render_template'   => 'blocks-acf/blocks/how-to.php',
            'category'          => 'common',
            'keywords'          => array( 'How To' ),
            'mode'              => 'preview'
        ));

		/* Созданные мной */
		acf_register_block_type(array(
			'name'              => 'affiliate-table',
			'title'             => __('Affiliate Table'),
			'render_template'   => 'blocks-acf/blocks/affiliate-table.php',
			'category'          => 'common',
			'keywords'          => array( 'Affiliate Table' ),
			'mode'              => 'preview',
			'icon'              => 'feedback',
			'supports'          => [
				'align'           => false,
				'anchor'          => false,
				'customClassName' => false,
				'jsx'             => true,
			],
		));

		acf_register_block_type(array(
			'name'              => 'affiliate-separate-table',
			'title'             => __('Affiliate Table Separate'),
			'render_template'   => 'blocks-acf/blocks/affiliate-separate-table.php',
			'category'          => 'common',
			'keywords'          => array( 'Affiliate Table Separate' ),
			'mode'              => 'preview',
			'icon'              => 'editor-table',
		));

	    acf_register_block_type(array(
		    'name'              => 'Author In Hero',
		    'title'             => __('Author In Hero'),
		    'render_template'   => 'blocks-acf/blocks/author-hero.php',
		    'category'          => 'common',
		    'keywords'          => array( 'Author In Hero' ),
		    'mode'              => 'preview'
	    ));

	    acf_register_block_type(array(
		    'name'              => 'table-in-hero-button',
		    'title'             => __('Table In Hero Button'),
		    'render_template'   => 'blocks-acf/blocks/table-in-hero-button.php',
		    'category'          => 'common',
		    'keywords'          => array( 'Table In Hero Button' ),
		    'mode'              => 'preview',
		    'icon'              => 'button',
	    ));

		acf_register_block_type(array(
			'name'              => 'hero-image-cards',
			'title'             => __('Hero Cards'),
			'render_template'   => 'blocks-acf/blocks/hero-image-cards.php',
			'category'          => 'common',
			'keywords'          => array( 'Hero Cards' ),
			'mode'              => 'preview',
			'icon'              => 'cover-image',
		));
		acf_register_block_type(array(
			'name'              => 'learn-more-cards',
			'title'             => __('Learn More'),
			'render_template'   => 'blocks-acf/blocks/learn-more-cards.php',
			'category'          => 'common',
			'keywords'          => array( 'Learn More' ),
			'mode'              => 'preview',
			'icon'              => 'welcome-learn-more',
		));
		acf_register_block_type(array(
			'name'              => 'learn-news-cards',
			'title'             => __('Learn News'),
			'render_template'   => 'blocks-acf/blocks/learn-news-cards.php',
			'category'          => 'common',
			'keywords'          => array( 'Learn News' ),
			'mode'              => 'preview',
			'icon'              => 'yes-alt',
		));
		acf_register_block_type(array(
			'name'              => 'button-green',
			'title'             => __('Button'),
			'render_template'   => 'blocks-acf/blocks/button-green.php',
			'category'          => 'common',
			'keywords'          => array( 'Button' ),
			'mode'              => 'preview',
			'icon'              => 'button',
		));
		acf_register_block_type(array(
			'name'              => 'author-summary',
			'title'             => __('Author Summary'),
			'render_template'   => 'blocks-acf/blocks/author-summary.php',
			'category'          => 'common',
			'keywords'          => array( 'Author Summary' ),
			'mode'              => 'preview',
			'icon'              => 'id',
		));
		acf_register_block_type(array(
			'name'              => 'top-brands',
			'title'             => __('Top Brands'),
			'render_template'   => 'blocks-acf/blocks/top-brands.php',
			'category'          => 'common',
			'keywords'          => array( 'Top Brands' ),
			'mode'              => 'preview',
			'icon'              => 'awards',
		));
		acf_register_block_type(array(
			'name'              => 'offer',
			'title'             => __('Angebot (Offer)'),
			'render_template'   => 'blocks-acf/blocks/offer.php',
			'category'          => 'common',
			'keywords'          => array( 'Angebot (Offer)' ),
			'mode'              => 'preview',
			'icon'              => 'businessman',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => true,
			],
		));
		acf_register_block_type(array(
			'name'              => 'popular-themes',
			'title'             => __('Popular Themes'),
			'render_template'   => 'blocks-acf/blocks/popular-themes.php',
			'category'          => 'common',
			'keywords'          => array( 'Popular Themes' ),
			'mode'              => 'preview',
			'icon'              => 'chart-bar',
		));
		acf_register_block_type(array(
			'name'              => 'online-cards',
			'title'             => __('Online Cards'),
			'render_template'   => 'blocks-acf/blocks/online-cards.php',
			'category'          => 'common',
			'keywords'          => array( 'Online Cards' ),
			'mode'              => 'preview',
			'icon'              => 'index-card',
		));
		acf_register_block_type(array(
			'name'              => 'awards-cards',
			'title'             => __('Awards Cards'),
			'render_template'   => 'blocks-acf/blocks/awards-cards.php',
			'category'          => 'common',
			'keywords'          => array( 'Awards Cards' ),
			'mode'              => 'preview',
			'icon'              => 'awards',
		));
		acf_register_block_type(array(
			'name'              => 'select-menu',
			'title'             => __('Select Menu'),
			'render_template'   => 'blocks-acf/blocks/select-menu.php',
			'category'          => 'common',
			'keywords'          => array( 'select menu' ),
			'mode'              => 'preview',
			'icon'              => 'menu',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => false,
				'mode'            => false
			],
		));
		acf_register_block_type(array(
			'name'              => 'blog-top-news',
			'title'             => __('Blog Top News'),
			'render_template'   => 'blocks-acf/blocks/blog-top-news.php',
			'category'          => 'common',
			'keywords'          => array( 'blog top news' ),
			'mode'              => 'preview',
			'icon'              => 'text-page',
		));
		acf_register_block_type(array(
			'name'              => 'blog-popular-news',
			'title'             => __('Blog Popular News'),
			'render_template'   => 'blocks-acf/blocks/blog-popular-news.php',
			'category'          => 'common',
			'keywords'          => array( 'blog popular news' ),
			'mode'              => 'preview',
			'icon'              => 'star-filled',
		));
		acf_register_block_type(array(
			'name'              => 'blog-latest-news',
			'title'             => __('Blog Latest News'),
			'render_template'   => 'blocks-acf/blocks/blog-latest-news.php',
			'category'          => 'common',
			'keywords'          => array( 'blog latest news' ),
			'mode'              => 'preview',
			'icon'              => 'clock',
			'supports'          => [
				'mode'          => false,
			],
		));
		acf_register_block_type(array(
			'name'              => 'our-goals',
			'title'             => __('Our Goals'),
			'render_template'   => 'blocks-acf/blocks/our-goals.php',
			'category'          => 'common',
			'keywords'          => array( 'our goals' ),
			'mode'              => 'preview',
			'icon'              => 'flag',
		));
		acf_register_block_type(array(
			'name'              => 'principles',
			'title'             => __('Principles'),
			'render_template'   => 'blocks-acf/blocks/principles.php',
			'category'          => 'common',
			'keywords'          => array( 'principles' ),
			'mode'              => 'preview',
			'icon'              => 'shield',
		));
		acf_register_block_type(array(
			'name'              => 'team',
			'title'             => __('Team'),
			'render_template'   => 'blocks-acf/blocks/team.php',
			'category'          => 'common',
			'keywords'          => array( 'team' ),
			'mode'              => 'preview',
			'icon'              => 'admin-users',
		));
		acf_register_block_type(array(
			'name'              => 'our-partners',
			'title'             => __('Our Partners'),
			'render_template'   => 'blocks-acf/blocks/our-partners.php',
			'category'          => 'common',
			'keywords'          => array( 'our partners' ),
			'mode'              => 'preview',
			'icon'              => 'groups',
		));
		acf_register_block_type(array(
			'name'              => 'author-page-hero',
			'title'             => __('Author Page Hero Card'),
			'render_template'   => 'blocks-acf/blocks/inner/author-page-hero.php',
			'category'          => 'common',
			'keywords'          => array( 'author page hero card' ),
			'mode'              => 'preview',
			'icon'              => 'id',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => true,
			],
		));
		acf_register_block_type(array(
			'name'              => 'author-latest-articles',
			'title'             => __('Author Latest Articles'),
			'render_template'   => 'blocks-acf/blocks/author-latest-articles.php',
			'category'          => 'common',
			'keywords'          => array( 'author latest articles' ),
			'mode'              => 'preview',
			'icon'              => 'clock',
		));
		acf_register_block_type(array(
			'name'              => 'info-card-software',
			'title'             => __('Info Card Software'),
			'render_template'   => 'blocks-acf/blocks/inner/info-card-software.php',
			'category'          => 'common',
			'keywords'          => array( 'info card software' ),
			'mode'              => 'preview',
			'icon'              => 'media-code',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => true,
			],
		));
		acf_register_block_type(array(
			'name'              => 'info-cards-block',
			'title'             => __('Info Cards Block'),
			'render_template'   => 'blocks-acf/blocks/info-cards-block.php',
			'category'          => 'layout',
			'keywords'          => array( 'info cards block' ),
			'mode'              => 'preview',
			'icon'              => 'block-default',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => true,
				'mode'            => false
			],
		));
		acf_register_block_type(array(
			'name'              => 'info-card-with-top-border',
			'title'             => __('Info Card With Top Border'),
			'render_template'   => 'blocks-acf/blocks/info-card-with-top-border.php',
			'category'          => 'common',
			'keywords'          => array( 'info card with top border' ),
			'mode'              => 'preview',
			'icon'              => 'info',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => true,
			],
		));
		acf_register_block_type(array(
			'name'              => 'company-awards-table',
			'title'             => __('Company Awards Table'),
			'render_template'   => 'blocks-acf/blocks/company-awards-table.php',
			'category'          => 'common',
			'keywords'          => array( 'company awards table' ),
			'mode'              => 'preview',
			'icon'              => 'editor-table',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => true,
			],
		));
		acf_register_block_type(array(
			'name'              => 'payment-method-hero-cards',
			'title'             => __('Payment Method Hero Cards'),
			'render_template'   => 'blocks-acf/blocks/payment-method-hero-cards.php',
			'category'          => 'common',
			'keywords'          => array( 'review payment method hero cards' ),
			'mode'              => 'preview',
			'icon'              => 'block-default',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => true,
				'mode'            => false
			],
		));
		acf_register_block_type(array(
			'name'              => 'payment-method-hero-card',
			'title'             => __('Payment Method Hero Card'),
			'render_template'   => 'blocks-acf/blocks/payment-method-hero-card.php',
			'category'          => 'common',
			'keywords'          => array( 'payment method hero card' ),
			'mode'              => 'preview',
			'icon'              => 'vault',
		));
		acf_register_block_type(array(
			'name'              => 'payment-method-hero-table',
			'title'             => __('Payment Method Hero Table'),
			'render_template'   => 'blocks-acf/blocks/payment-method-hero-table.php',
			'category'          => 'common',
			'keywords'          => array( 'payment method hero table' ),
			'mode'              => 'preview',
			'icon'              => 'editor-table',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => true,
			],
		));
		acf_register_block_type(array(
			'name'              => 'payment-method-about-company-table',
			'title'             => __('Payment Method About Company Table'),
			'render_template'   => 'blocks-acf/blocks/payment-method-about-company-table.php',
			'category'          => 'common',
			'keywords'          => array( 'payment method about company table' ),
			'mode'              => 'preview',
			'icon'              => 'editor-table',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => true,
			],
		));
		acf_register_block_type(array(
			'name'              => 'payment-method-alternative-ways',
			'title'             => __('Payment Method Alternative Ways'),
			'render_template'   => 'blocks-acf/blocks/payment-method-alternative-payment-methods.php',
			'category'          => 'common',
			'keywords'          => array( 'payment method alternative methods ways' ),
			'mode'              => 'preview',
			'icon'              => 'randomize',
		));
		acf_register_block_type(array(
			'name'              => 'shared-links',
			'title'             => __('Shared Links'),
			'render_template'   => 'blocks-acf/blocks/shared-links.php',
			'category'          => 'common',
			'keywords'          => array( 'shared links share' ),
			'mode'              => 'preview',
			'icon'              => 'share',
		));
		acf_register_block_type( array(
			'name'              => 'casino-expert-extended',
			'title'             => __('Casino Expert Extended'),
			'render_template' => 'blocks-acf/blocks/casino-expert-extended.php',
			'mode'            => 'preview',
			'category'        => 'common',
			'icon'            => 'businessman',
			'supports'        => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true
			],
		));
		acf_register_block_type(array(
			'name'              => 'form-testimonials',
			'title'             => __('Form Testimonials'),
			'render_template'   => 'blocks-acf/blocks/form-testimonials.php',
			'category'          => 'common',
			'keywords'          => array( 'form testimonials' ),
			'mode'              => 'preview',
			'icon'              => 'testimonial',
		));
		acf_register_block_type(array(
			'name'              => 'info-card-slot',
			'title'             => __('Info Card Slot'),
			'render_template'   => 'blocks-acf/blocks/info-card-slot.php',
			'category'          => 'common',
			'keywords'          => array( 'info card review slot' ),
			'mode'              => 'preview',
			'icon'              => 'media-code',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => true,
			],
		));
		acf_register_block_type(array(
			'name'              => 'review-casino-hero-content',
			'title'             => __('Review Casino Hero Content'),
			'render_template'   => 'blocks-acf/blocks/review-casino-hero/review-casino-hero-content.php',
			'category'          => 'layout',
			'keywords'          => array( 'review casino hero content' ),
			'mode'              => 'preview',
			'icon'              => 'columns',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => true,
				'mode'            => false
			],
		));
		acf_register_block_type(array(
			'name'              => 'review-casino-hero-card',
			'title'             => __('Review Casino Hero Card'),
			'render_template'   => 'blocks-acf/blocks/review-casino-hero/review-casino-hero-card.php',
			'category'          => 'layout',
			'keywords'          => array( 'review casino hero card' ),
			'mode'              => 'preview',
			'icon'              => 'analytics',
			'parent'            => 'review-casino-hero-content'
		));
		acf_register_block_type(array(
			'name'              => 'review-casino-hero-content-container',
			'title'             => __('Review Casino Hero Content Container'),
			'render_template'   => 'blocks-acf/blocks/review-casino-hero/review-casino-hero-content-container.php',
			'category'          => 'layout',
			'keywords'          => array( 'review casino hero content container' ),
			'mode'              => 'preview',
			'icon'              => 'align-full-width',
			'parent'            => 'review-casino-hero-content',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => true,
				'mode'            => false
			],
		));
		acf_register_block_type(array(
			'name'              => 'review-casino-hero-info-cards',
			'title'             => __('Review Casino Hero Info Cards'),
			'render_template'   => 'blocks-acf/blocks/review-casino-hero/review-casino-hero-info-cards.php',
			'category'          => 'layout',
			'keywords'          => array( 'review casino info cards' ),
			'mode'              => 'preview',
			'icon'              => 'admin-page',
			'parent'            => 'review-casino-hero-content-container'
		));
		acf_register_block_type(array(
			'name'              => 'review-casino-hero-preview',
			'title'             => __('Review Casino Hero Preview'),
			'render_template'   => 'blocks-acf/blocks/review-casino-hero/review-casino-hero-preview.php',
			'category'          => 'layout',
			'keywords'          => array( 'review casino hero preview' ),
			'mode'              => 'preview',
			'icon'              => 'slides',
			'parent'            => 'review-casino-hero-content-container',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => false,
				'mode'            => false
			],
		));
		acf_register_block_type(array(
			'name'              => 'live-casino-cards',
			'title'             => __('Live Casino Cards'),
			'render_template'   => 'blocks-acf/blocks/live-casino-cards.php',
			'category'          => 'common',
			'keywords'          => array( 'live casino cards' ),
			'mode'              => 'preview',
			'icon'              => 'images-alt',
		));
		acf_register_block_type(array(
			'name'              => 'more-testimonials-block',
			'title'             => __('More Testimonials'),
			'render_template'   => 'blocks-acf/blocks/more-testimonials-block.php',
			'category'          => 'common',
			'keywords'          => array( 'more testimonials block' ),
			'mode'              => 'preview',
			'icon'              => 'testimonial',
		));
		acf_register_block_type(array(
			'name'              => 'review-payment-affiliate',
			'title'             => __('Review Payment Affiliate'),
			'render_template'   => 'blocks-acf/blocks/review-payment-affiliate.php',
			'category'          => 'layout',
			'keywords'          => array( 'review payment affiliate' ),
			'mode'              => 'preview',
			'icon'              => 'editor-table',
		));
    }

	//	Inner Blocks - созданные мной
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'hero-block',
			'title'             => __('Hero Block'),
			'render_template'   => 'blocks-acf/blocks/inner/hero.php',
			'category'          => 'layout',
			'keywords'          => array( 'Hero Block' ),
			'mode'              => 'preview',
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			],
		));

		acf_register_block_type( array(
			'name'              => 'Hero Content Container',
			'title'             => __('Hero Content Container'),
			'render_template' => 'blocks-acf/blocks/inner/hero-content-container.php',
			'mode'            => 'preview',
			'category'        => 'layout',
			'icon'            => 'align-center',
			'supports'        => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			],
		));
		acf_register_block_type( array(
			'name'              => 'table-in-hero-block',
			'title'             => __('Table In Hero Block'),
			'render_template' => 'blocks-acf/blocks/inner/table-in-hero-block.php',
			'mode'            => 'preview',
			'category'        => 'common',
			'icon'            => 'editor-table',
			'supports'        => [
				'align'           => false,
				'anchor'          => false,
				'customClassName' => false,
				'jsx'             => true,
			],
		));
		acf_register_block_type( array(
			'name'              => 'hero-flex-container',
			'title'             => __('Hero Flex Container'),
			'render_template' => 'blocks-acf/blocks/inner/hero-flex-container.php',
			'mode'            => 'preview',
			'category'        => 'layout',
			'icon'            => 'columns',
			'supports'        => [
				'align'           => false,
				'anchor'          => false,
				'customClassName' => false,
				'jsx'             => true,
				'mode'            => false,
			],
		));
		acf_register_block_type( array(
			'name'              => 'hero-right-item',
			'title'             => __('Hero Right Items'),
			'render_template' => 'blocks-acf/blocks/inner/hero-right-item.php',
			'mode'            => 'preview',
			'category'        => 'layout',
			'icon'            => 'align-pull-right',
			'supports'        => [
				'align'           => false,
				'anchor'          => false,
				'customClassName' => false,
				'jsx'             => true,
				'mode'            => false,
			],
		));
		acf_register_block_type( array(
			'name'              => 'hero-left-item',
			'title'             => __('Hero Left Items'),
			'render_template' => 'blocks-acf/blocks/inner/hero-left-item.php',
			'mode'            => 'preview',
			'category'        => 'layout',
			'icon'            => 'align-pull-left',
			'supports'        => [
				'align'           => false,
				'anchor'          => false,
				'customClassName' => false,
				'jsx'             => true,
				'mode'            => false,
			],
		));
		acf_register_block_type( array(
			'name'              => 'content-with-sidebar',
			'title'             => __('Content With Sidebar'),
			'render_template' => 'blocks-acf/blocks/inner/content-with-sidebar.php',
			'mode'            => 'preview',
			'category'        => 'layout',
			'icon'            => 'block-default',
			'supports'        => [
				'align'           => false,
				'anchor'          => false,
				'customClassName' => false,
				'jsx'             => true,
				'mode'            => false,
			],
		));
		acf_register_block_type( array(
			'name'              => 'content',
			'title'             => __('Content'),
			'render_template' => 'blocks-acf/blocks/inner/content.php',
			'mode'            => 'preview',
			'category'        => 'layout',
			'icon'            => 'block-default',
			'supports'        => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
				'mode'            => false,
			],
			'enqueue_assets' => 'content_assets',
		));

		acf_register_block_type( array(
			'name'              => 'universal-container',
			'title'             => __('Universal Container With Custom Class'),
			'render_template' => 'blocks-acf/blocks/inner/universal-container.php',
			'mode'            => 'preview',
			'category'        => 'layout',
			'icon'            => 'align-center',
			'supports'        => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
				'mode'            => false,
			],
		));
		acf_register_block_type( array(
			'name'              => 'universal-section',
			'title'             => __('Universal Section With Custom Class'),
			'render_template' => 'blocks-acf/blocks/inner/universal-section.php',
			'mode'            => 'preview',
			'category'        => 'layout',
			'icon'            => 'block-default',
			'supports'        => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
				'mode'            => false,
			],
		));
		acf_register_block_type( array(
			'name'              => 'section-with-bg',
			'title'             => __('Section With Background'),
			'render_template' => 'blocks-acf/blocks/inner/section-with-bg.php',
			'mode'            => 'preview',
			'category'        => 'layout',
			'icon'            => 'block-default',
			'supports'        => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
				'mode'            => false,
			],
		));
		acf_register_block_type( array(
			'name'              => 'block-with-bg',
			'title'             => __('Block With Background'),
			'render_template' => 'blocks-acf/blocks/inner/block-with-bg.php',
			'mode'            => 'preview',
			'category'        => 'common',
			'icon'            => 'block-default',
			'supports'        => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
				'mode'            => false,
			],
		));
		acf_register_block_type( array(
			'name'              => 'pros-cons-block',
			'title'             => __('Pros Cons Block'),
			'render_template' => 'blocks-acf/blocks/inner/pros-cons-block.php',
			'mode'            => 'preview',
			'category'        => 'common',
			'icon'            => 'dismiss',
			'supports'        => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			],
		));
		acf_register_block_type( array(
			'name'              => 'pros-cons-container',
			'title'             => __('Pros & Cons'),
			'render_template' => 'blocks-acf/blocks/inner/pros-cons-container.php',
			'mode'            => 'preview',
			'category'        => 'common',
			'icon'            => 'block-default',
			'supports'        => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => false,
				'jsx'             => true,
				'mode'            => false,
			],
		));
		acf_register_block_type( array(
			'name'              => 'tips-and-tricks',
			'title'             => __('Tips And Tricks'),
			'render_template' => 'blocks-acf/blocks/inner/tips-and-tricks.php',
			'mode'            => 'preview',
			'category'        => 'common',
			'icon'            => 'smiley',
			'supports'        => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true
			],
		));
		acf_register_block_type( array(
			'name'              => 'casino-expert',
			'title'             => __('Casino Expert'),
			'render_template' => 'blocks-acf/blocks/inner/casino-expert.php',
			'mode'            => 'preview',
			'category'        => 'common',
			'icon'            => 'businessman',
			'supports'        => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true
			],
		));
		acf_register_block_type(array(
			'name'              => 'sidebar',
			'title'             => __('Sidebar'),
			'render_template'   => 'blocks-acf/blocks/inner/sidebar/sidebar.php',
			'category'          => 'common',
			'keywords'          => array( 'sidebar' ),
			'mode'              => 'preview',
			'icon'              => 'block-default',
			'supports'        => [
				'align'           => false,
				'anchor'          => false,
				'customClassName' => false,
				'mode'            => false,
				'jsx'             => true
			],
		));
		acf_register_block_type(array(
			'name'              => 'popular-casino-games',
			'title'             => __('Popular Casino Games'),
			'render_template'   => 'blocks-acf/blocks/inner/sidebar/popular-casino-games.php',
			'category'          => 'common',
			'keywords'          => array( 'popular casino games' ),
			'mode'              => 'preview',
			'icon'              => 'games',
			'parent'            => ['acf/sidebar'],
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true
			],
		));
		acf_register_block_type(array(
			'name'              => 'top-payment-methods',
			'title'             => __('Top Payment Methods'),
			'render_template'   => 'blocks-acf/blocks/inner/sidebar/top-payment-methods.php',
			'category'          => 'common',
			'keywords'          => array( 'top payment methods' ),
			'mode'              => 'preview',
			'icon'              => 'awards',
			'parent'            => ['acf/sidebar'],
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
			],
		));
		acf_register_block_type(array(
			'name'              => 'top-slot-games',
			'title'             => __('Top Slot Games'),
			'render_template'   => 'blocks-acf/blocks/inner/sidebar/top-slot-games.php',
			'category'          => 'common',
			'keywords'          => array( 'top slot games' ),
			'mode'              => 'preview',
			'icon'              => 'superhero-alt',
			'parent'            => ['acf/sidebar'],
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true
			],
		));
		acf_register_block_type(array(
			'name'              => 'top-five-casinos',
			'title'             => __('Top 5 Casinos'),
			'render_template'   => 'blocks-acf/blocks/inner/sidebar/top-five-casinos.php',
			'category'          => 'common',
			'keywords'          => array( 'top five 5 casinos' ),
			'mode'              => 'preview',
			'icon'              => 'chart-bar',
			'parent'            => ['acf/sidebar'],
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
			],
		));
		acf_register_block_type(array(
			'name'              => 'mass-media',
			'title'             => __('Mass Media About Us'),
			'render_template'   => 'blocks-acf/blocks/inner/sidebar/mass-media.php',
			'category'          => 'common',
			'keywords'          => array( 'mass media about us' ),
			'mode'              => 'preview',
			'icon'              => 'info',
			'parent'            => ['acf/sidebar'],
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
			],
		));
		acf_register_block_type(array(
			'name'              => 'popular-best-blog-articles',
			'title'             => __('Popular Best Blog Articles'),
			'render_template'   => 'blocks-acf/blocks/inner/sidebar/popular-best-blog-articles.php',
			'category'          => 'common',
			'keywords'          => array( 'popular best blog articles' ),
			'mode'              => 'preview',
			'icon'              => 'analytics',
			'parent'            => ['acf/sidebar'],
			'supports'          => [
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
			],
		));
	}
}