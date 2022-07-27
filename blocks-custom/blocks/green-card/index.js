(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let RichText = blockEditor.RichText;
    let allowedBlocks = ['core/list', 'core/paragraph'];

    blocks.registerBlockType('custom/green-card', {
        title: 'Green Card',
        category: 'common',
        keywords: 'green card',
        icon: 'feedback',
        supports: {
            className: false,
            customClassName: true
        },

        attributes: {
            title: { type: 'array', source: 'children', selector: 'h3', },
        },

        edit: function (props) {
            const attributes = props.attributes;

            return (
                el('div', { className: `aw-green-card` },
                    el('div', { className: 'aw-green-card__header' },
                        el(RichText, {
                            tagName: 'h3',
                            placeholder: 'Title',
                            value: attributes.title,
                            onChange: function (value) {
                                props.setAttributes({ title: value });
                            },
                        }),
                    ),
                    el('div', { className: 'aw-green-card__content' },
                        el(InnerBlocks, { allowedBlocks:allowedBlocks } )
                    ),
                )
            );
        },

        save: function (props) {
            const attributes = props.attributes;

            return (
                el('div', { className: `aw-green-card` },
                    el('div', { className: 'aw-green-card__header' },
                        el(RichText.Content, { tagName: 'h3', value: attributes.title }),
                    ),
                    el('div', { className: 'aw-green-card__content' },
                        el(InnerBlocks.Content)
                    ),
                )
            );
        },
    });

}(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor,
));