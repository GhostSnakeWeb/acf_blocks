(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let allowedBlocks = ['custom/list-item-how-we-rate'];

    blocks.registerBlockType('custom/list-how-we-rate', {
        title: 'List How We Rate',
        category: 'common',
        keywords: 'list how we rate',
        icon: 'editor-ul',
        supports: {
            className: false
        },

        edit: function () {
            return (
                el('ul', { className: 'aw-how-we-rate-list' }, el(InnerBlocks, { allowedBlocks:allowedBlocks } ))
            );
        },

        save: function () {
            return (
                el('ul', { className: 'aw-how-we-rate-list' }, el(InnerBlocks.Content))
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
    // let allowedBlocks = ['core/list', 'core/paragraph'];
    let MediaUpload = blockEditor.MediaUpload;

    blocks.registerBlockType('custom/list-item-how-we-rate', {
        title: 'List Item How We Rate',
        category: 'common',
        keywords: 'list item how we rate',
        icon: 'id',
        parent: ['custom/list-how-we-rate'],
        supports: {
            className: false
        },

        attributes: {
            numberInList: { type: 'array', source: 'children', selector: 'span.aw-how-we-rate__list-number'},
            listItemTitle: { type: 'array', source: 'children', selector: 'h3'},

            itemListImageMediaID: { type:'number' },
            itemListImageMediaURL: { type:'string', source:'attribute', selector:'img.aw-how-we-rate__list-iamge', attribute: 'src' },
            itemListImageMediaAlt: { type:'string', source:'attribute', selector:'img.aw-how-we-rate__list-iamge', attribute: 'alt' },
            itemListImageMediaTitle: { type:'string', source:'attribute', selector:'img.aw-how-we-rate__list-iamge', attribute: 'title' },
        },

        edit: function (props) {
            const attributes = props.attributes;

            const onSelectItemImage = function(media){
                return props.setAttributes({
                    itemListImageMediaURL: media.url,
                    itemListImageMediaID: media.id,
                    itemListImageMediaAlt: media.alt,
                    itemListImageMediaTitle: media.title
                });
            };

            return (
                el('li', null,
                    el(RichText, {
                        tagName: 'span',
                        className: 'aw-how-we-rate__list-number',
                        placeholder: '$',
                        value: attributes.numberInList,
                        onChange: function (value) {
                            props.setAttributes({ numberInList: value });
                        },
                    }),
                    el('div', {className: 'aw-how-we-rate__list-container'},
                        el('div', {className: 'aw-how-we-rate__list-container__content'},
                            el(RichText, {
                                tagName: 'h3',
                                placeholder: 'List Item Title',
                                value: attributes.listItemTitle,
                                onChange: function (value) {
                                    props.setAttributes({ listItemTitle: value });
                                },
                            }),
                            el(InnerBlocks, null )
                        ),
                        el(MediaUpload, {
                            onSelect: onSelectItemImage,
                            allowedTypes: 'image',
                            value: attributes.itemListImageMediaID,
                            labels: {
                                alt: attributes.itemListImageMediaAlt,
                                title: attributes.itemListImageMediaAlt,
                            },
                            render: function(obj) {
                                return (
                                    el(wp.components.Button, {
                                            className:attributes.itemListImageMediaID ? 'image-button' : 'button button-large',
                                            onClick:obj.open
                                        },
                                        ! attributes.itemListImageMediaID ? 'List Item Image' :
                                            el('img', {
                                                className: 'aw-how-we-rate__list-iamge',
                                                // width: 85,
                                                src: attributes.itemListImageMediaURL,
                                                alt: attributes.itemListImageMediaAlt,
                                                title: attributes.itemListImageMediaTitle,
                                                loading: 'lazy'
                                            })
                                    )
                                );
                            }
                        }),
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
                        className: 'aw-how-we-rate__list-number',
                        value: attributes.numberInList,
                    }),
                    el('div', {className: 'aw-how-we-rate__list-container'},
                        el('div', {className: 'aw-how-we-rate__list-container__content'},
                            el(RichText.Content, {
                                tagName: 'h3',
                                value: attributes.listItemTitle,
                            }),
                            el(InnerBlocks.Content)
                        ),
                        attributes.itemListImageMediaURL && el('img', {
                            // width: 85,
                            className: 'aw-how-we-rate__list-iamge',
                            src: attributes.itemListImageMediaURL,
                            alt: attributes.itemListImageMediaAlt,
                            title: attributes.itemListImageMediaTitle,
                            loading: 'lazy'
                        }),
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