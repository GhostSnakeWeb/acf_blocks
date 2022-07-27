(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('custom/hero', {
        title: 'Hero Block',
        category: 'common',
        icon: 'block-default',
        supports: {
            className: false
        },

        edit: function () {
            return (
                el('section', { className: 'aw-bg' },
                    el('div', { className: 'aw-hero container' },
                        el(InnerBlocks)
                    )
                )
            );
        },

        save: function () {
            return (
                el('section', { className: 'aw-bg' },
                    el('div', { className: 'aw-hero container' },
                        el(InnerBlocks.Content)
                    )
                )
            );
        },
    });

}(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor,
));