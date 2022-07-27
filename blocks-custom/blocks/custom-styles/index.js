wp.domReady(() => {
	wp.blocks.registerBlockStyle( 'core/list', [
        {
            name: 'tags',
            label: 'List Tags'
        },
        {
            name: 'ms',
            label: 'List Margin Small'
        },
        {
            name: 'info',
            label: 'List Info'
        },
	]);

    wp.blocks.registerBlockStyle( 'core/paragraph', [

	]);

    wp.blocks.registerBlockStyle( 'custom/expert', [
        {
            name: 'sm',
            label: 'Small margin'
        }
	]);

    wp.blocks.registerBlockStyle( 'core/heading', [

	]);

    wp.blocks.registerBlockStyle( 'custom/sidebar', [
        {
            name: 'without-border',
            label: 'Without Border',
        }
	]);
} );