(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let RichText = blockEditor.RichText;
    let allowedBlocks = ['core/list', 'core/paragraph'];

    blocks.registerBlockType('custom/block-with-green-background', {
        title: 'Block With Green Background',
        category: 'common',
        keywords: 'block with green background',
        icon: 'block-default',
        supports: {
            className: false,
        },

        attributes: {
            title: { type: 'array', source: 'children', selector: 'h2', },
        },

        edit: function (props) {
            const attributes = props.attributes;

            return (
                el('div', { className: `block-with-green-bg` },
                    el(RichText, {
                        tagName: 'h2',
                        placeholder: 'Title',
                        value: attributes.title,
                        onChange: function (value) {
                            props.setAttributes({ title: value });
                        },
                    }),
                    el(InnerBlocks, { allowedBlocks:allowedBlocks } ),
                )
            );
        },

        save: function (props) {
            const attributes = props.attributes;

            return (
                el('div', { className: `block-with-green-bg` },
                    el(RichText.Content, { tagName: 'h2', value: attributes.title }),
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