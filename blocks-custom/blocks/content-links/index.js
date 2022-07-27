(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let RichText = blockEditor.RichText;

    blocks.registerBlockType('custom/content-links', {
        title: 'Content',
        category: 'common',
        keywords: 'content',
        icon: 'block-default',
        supports: {
            className: false
        },
        attributes: {
            list: { type: 'array', source: 'children', selector: '.content-links', },
        },

        edit: function (props) {
            const attributes = props.attributes;
            return (
                el(RichText, {
                    tagName: 'ul',
                    multiline: 'li',
                    placeholder: 'Items',
                    className: 'content-links',
                    value: attributes.list,
                    onChange: function (value) {
                        props.setAttributes({ list: value }); 
                    },
                })
            );
        },

        save: function (props) {
            const attributes = props.attributes;
            return (
                el(RichText.Content, { tagName: 'ul', className: 'content-links', value: attributes.list })
            );
        },
    });

}(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor,
));