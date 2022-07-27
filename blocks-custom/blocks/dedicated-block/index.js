(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    
    blocks.registerBlockType('custom/dedicated', {
        title: 'Fazit Block',
        category: 'common',
        keywords: 'dedicated',
        icon: 'block-default',
        supports: {
            className: false
        },
        
        edit: function () {
            return (
                el('div', { className: 'dedicated' },
                    el(InnerBlocks)
                )
            );
        },

        save: function () {
            return (
                el('div', { className: 'dedicated' },
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