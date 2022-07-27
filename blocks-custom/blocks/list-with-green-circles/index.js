(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let RichText = blockEditor.RichText;
    let allowedBlocks = ['core/list'];
    const templateBlocks = [
        [ 'core/list', {} ],
    ];

    blocks.registerBlockType('custom/list-with-green-circles', {
        title: 'List With Green Circles',
        category: 'common',
        keywords: 'list with green circles',
        icon: 'editor-ul',
        // parent: ['acf/review-casino-hero-content-container'],
        supports: {
            className: false
        },

        attributes: {
            title: { type: 'array', source: 'children', selector: 'span', },
        },

        edit: function (props) {
            const attributes = props.attributes;

            return (
                el('div', { className: 'aw-list-with-green-circles' },
                    el(RichText, {
                        tagName: 'span',
                        placeholder: 'Title',
                        value: attributes.title,
                        onChange: function (value) {
                            props.setAttributes({ title: value });
                        },
                    }),
                    el(
                        InnerBlocks,
                        {
                            allowedBlocks:allowedBlocks,
                            template: templateBlocks
                        }
                    )
                )
            );
        },

        save: function (props) {
            const attributes = props.attributes;

            return (
                el('div', { className: 'aw-list-with-green-circles' },
                    el(RichText.Content, { tagName: 'span', value: attributes.title }),
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