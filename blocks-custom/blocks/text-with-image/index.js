(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('custom/text-with-image', {
        title: 'Text with Image',
        category: 'common',
        keywords: 'text with image',
        icon: 'block-default',
        parent: 0,
        supports: {
            className: false,
            anchor: true
        },

        edit: function () {
            return (
                el('div', { className: 'block-content' },
                    el(InnerBlocks)
                )
            );
        },

        save: function () {
            return (
                el('div', { className: 'block-content' },
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