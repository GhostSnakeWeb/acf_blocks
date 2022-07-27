(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let allowedBlocks = ['custom/faq-item'];

    blocks.registerBlockType('custom/faq', {
        title: 'FAQ',
        category: 'common',
        keywords: 'faq',
        icon: 'format-chat',
        supports: {
            className: false
        },

        edit: function () {
            return (
                el('div', { className: 'aw-faq__accordion', itemtype: 'https://schema.org/FAQPage' },
                    el(InnerBlocks, { allowedBlocks:allowedBlocks } )
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
    let RichText = blockEditor.RichText;
    let InnerBlocks = blockEditor.InnerBlocks;
    let allowedBlocks = ['core/list', 'core/paragraph', 'core/image', 'core/heading'];
    let MediaUpload = blockEditor.MediaUpload;

    blocks.registerBlockType('custom/faq-item-extended', {
        title: 'Item FAQ',
        category: 'common',
        keywords: 'faq item',
        icon: 'block-default',
        parent: ['custom/faq'],
        supports: {
            className: false
        },

        attributes: {
            question: { type: 'array', source: 'children', selector: 'h3', },
            mediaID: { type:'number' },
            mediaURL: { type:'string', source:'attribute', selector:'img', attribute: 'src' },
            mediaAlt: { type:'string', source:'attribute', selector:'img', attribute: 'alt' },
            mediaTitle: { type:'string', source:'attribute', selector:'img', attribute: 'title' },
        },

        edit: function (props) {
            const attributes = props.attributes;

            const onSelectImage = function(media){
                return props.setAttributes({
                    mediaURL: media.url,
                    mediaID: media.id,
                    mediaAlt: media.alt,
                    mediaTitle: media.title
                });
            };

            return (
                el('div', {className: 'aw-faq__accordion-item'},
                    el('button', { className: 'aw-faq__accordion__button', itemprop: 'mainEntity', itemtype: 'https://schema.org/Question' },
                        el('div', { className: 'aw-faq__accordion__button__caption' },
                            el( MediaUpload, {
                                onSelect: onSelectImage,
                                allowedTypes: 'image',
                                value: attributes.mediaID,
                                labels: {
                                    alt: attributes.mediaAlt,
                                    title: attributes.mediaTitle,
                                },
                                render: function(obj) {
                                    return (
                                        el(wp.components.Button, {
                                                className:attributes.mediaID ? 'image-button' : 'button button-large',
                                                onClick:obj.open
                                            },
                                            ! attributes.mediaID ? 'Icon' :
                                                el('img', {
                                                    width: 24,
                                                    src: attributes.mediaURL,
                                                    alt: attributes.mediaAlt,
                                                    title: attributes.mediaTitle,
                                                    loading: 'lazy'
                                                })
                                        )
                                    );
                                }
                            }),
                            el(RichText, {
                                tagName: 'h3',
                                placeholder: 'Question',
                                value: attributes.question,
                                itemprop: 'name',
                                onChange: function (value) {
                                    props.setAttributes({ question: value });
                                },
                            }),
                        ),
                    ),
                    el('div', {className: 'aw-faq__accordion__content'},
                        el('div', { className: 'aw-faq__accordion__content__main' },
                            el(InnerBlocks, { allowedBlocks:allowedBlocks } )
                        ),
                    )
                )
            );
        },

        save: function (props) {
            const attributes = props.attributes;
            return (
                el('div', {className: 'aw-faq__accordion-item'},
                    el('button', { className: 'aw-faq__accordion__button', itemprop: 'mainEntity', itemtype: 'https://schema.org/Question' },
                        el('div', { className: 'aw-faq__accordion__button__caption' },
                            attributes.mediaURL && el('img', {
                                width: 24,
                                src: attributes.mediaURL,
                                alt: attributes.mediaAlt,
                                title: attributes.mediaTitle,
                                loading: 'lazy'
                            }),
                            el(RichText.Content, { tagName: 'h3', value: attributes.question, itemprop: 'name' }),
                        ),
                    ),
                    el('div', {className: 'aw-faq__accordion__content'},
                        el('div', { className: 'aw-faq__accordion__content__main' },
                            el(InnerBlocks.Content)
                        ),
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