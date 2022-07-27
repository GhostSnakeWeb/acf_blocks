
/*
    Article
*/


// article

(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let allowedBlocks = ['custom/content', 'custom/sidebar'];

    blocks.registerBlockType('custom/content-with-sidebar', {
        title: 'Content with sidebar',
        category: 'common',
        keywords: 'article',
        icon: 'block-default',
        supports: {
            className: false,
            anchor: true
        },

        edit: function (props) {
            return (
                el('div', { className: 'container content-wrap' },
                    el(InnerBlocks, { allowedBlocks: allowedBlocks } )
                )
            );
        },

        save: function (props) {
            return (
                el('div', { className: 'container content-wrap ' },
                    el(InnerBlocks.Content)
                )
            );
        },
    });

}(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor,
));


// content

(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('custom/content', {
        title: 'Content',
        category: 'common',
        keywords: 'section',
        icon: 'block-default',
        parent: ['custom/content-with-sidebar'],
        useOnce: true,
        supports: {
            className: false,
            anchor: true
        },

        edit: function (props) {
            return (
                el('div', { className: 'content' },
                    el(InnerBlocks)
                )
            );
        },

        save: function (props) {
            return (
                el('div', { className: 'content' },
                    el(InnerBlocks.Content)
                )
            );
        },
    });

}(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor,
));

// sidebar

(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('custom/sidebar', {
        title: 'Sidebar',
        category: 'common',
        keywords: 'sidebar',
        icon: 'block-default',
        parent: ['custom/content-with-sidebar'],
        useOnce: true,
        supports: {
            className: false
        },

        edit: function (props) {
            return (
                el('aside', { className: 'sidebar' },
                    el(InnerBlocks)
                )
            );
        },

        save: function (props) {
            return (
                el('aside', { className: 'sidebar' },
                    el(InnerBlocks.Content)
                )
            );
        },
    });

}(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor,
));