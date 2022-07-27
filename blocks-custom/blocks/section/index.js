/*
    Section
*/

(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;

    blocks.registerBlockType('custom/section', {
        title: 'Section',
        category: 'common',
        keywords: 'section',
        icon: 'block-default',
        parent: 0,
        supports: {
            className: false,
            anchor: true
        },

        edit: function (props) {
            return (
                el('section', {},
                    el('div', { className: 'container' },
                        el(InnerBlocks)
                    )
                )
            );
        },

        save: function (props) {
            return (
                el('section', { },
                    el('div', { className: 'container' },
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