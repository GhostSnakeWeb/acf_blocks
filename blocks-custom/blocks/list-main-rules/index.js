(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let allowedBlocks = ['custom/list-item-main-rules'];

    blocks.registerBlockType('custom/list-main-rules', {
        title: 'List Main Rules',
        category: 'common',
        keywords: 'list main rules',
        icon: 'editor-ul',
        supports: {
            className: false
        },

        edit: function () {
            return (
                el('ul', { className: 'aw-main-rules-list' }, el(InnerBlocks, { allowedBlocks:allowedBlocks } ))
            );
        },

        save: function () {
            return (
                el('ul', { className: 'aw-main-rules-list' }, el(InnerBlocks.Content))
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
    let RichText = blockEditor.RichText;
    let InnerBlocks = blockEditor.InnerBlocks;
    let allowedBlocks = ['core/list', 'core/paragraph'];

    blocks.registerBlockType('custom/list-item-main-rules', {
        title: 'List Item Main Rules',
        category: 'common',
        keywords: 'list item main rules',
        icon: 'id',
        parent: ['custom/list-main-rules'],
        supports: {
            className: false
        },

        attributes: {
            numberInList: { type: 'array', source: 'children', selector: 'span.aw-main-rules__list-number'},
            listItemTitle: { type: 'array', source: 'children', selector: 'span.aw-main-rules__list-title'},
        },

        edit: function (props) {
            const attributes = props.attributes;

            return (
                el('li', null,
                    el(RichText, {
                        tagName: 'span',
                        className: 'aw-main-rules__list-number',
                        placeholder: '$',
                        value: attributes.numberInList,
                        onChange: function (value) {
                            props.setAttributes({ numberInList: value });
                        },
                    }),
                    el('div', null,
                        el(RichText, {
                            tagName: 'span',
                            className: 'aw-main-rules__list-title',
                            placeholder: 'Item Title',
                            value: attributes.listItemTitle,
                            onChange: function (value) {
                                props.setAttributes({ listItemTitle: value });
                            },
                        }),
                        el(InnerBlocks, { allowedBlocks:allowedBlocks } )
                    )
                )
            );
        },

        save: function (props) {
            const attributes = props.attributes;

            return (
                el('li', null,
                    el(RichText.Content, {
                        tagName: 'span',
                        className: 'aw-main-rules__list-number',
                        value: attributes.numberInList,
                    }),
                    el('div', null,
                        el(RichText.Content, {
                            tagName: 'span',
                            className: 'aw-main-rules__list-title',
                            value: attributes.listItemTitle,
                        }),
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