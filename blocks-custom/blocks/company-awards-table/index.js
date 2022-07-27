(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let allowedBlocks = ['custom/company-awards-table-body', 'core/table'];
    const templateBlocks = [
        [ 'core/table', {} ],
        [ 'custom/company-awards-table-body', {}],
    ];

    blocks.registerBlockType('custom/company-awards-table', {
        title: 'Company Awards Table',
        category: 'common',
        keywords: 'company awards table',
        icon: 'block-default',
        supports: {
            className: false
        },

        edit: function () {
            return (
                el('div', { className: 'aw-faq__accordion', itemtype: 'https://schema.org/FAQPage' },
                    el(InnerBlocks, {
                        allowedBlocks:allowedBlocks,
                        template: templateBlocks
                    })
                )
            );
        },

        save: function () {
            return (
                el('div', { className: 'aw-faq__accordion',  itemtype: 'https://schema.org/FAQPage' },
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

(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let allowedBlocks = ['core/table'];
    const templateBlocks = [
        [ 'core/table', {}],
    ];

    blocks.registerBlockType('custom/company-awards-table-body', {
        title: 'Table Body',
        category: 'common',
        keywords: 'table body',
        icon: 'block-default',
        parent: ['custom/company-awards-table'],
        supports: {
            className: false
        },

        edit: function () {
            return (
                el('div', {className: 'aw-scroll-table__body'},
                    el(InnerBlocks, {
                        allowedBlocks:allowedBlocks,
                        template: templateBlocks
                    })
                )
            );
        },

        save: function () {
            return (
                el('div', {className: 'aw-scroll-table__body'},
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