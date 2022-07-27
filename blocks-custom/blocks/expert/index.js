(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let allowedBlocks = ['custom/author-card', 'core/paragraph', 'core/quote', 'core/heading'];

    blocks.registerBlockType('custom/expert', {
        title: 'Expert',
        category: 'common',
        icon: 'block-default',
        supports: {
            className: false
        },

        edit: function () {
            return (
                el('div', { className: 'author-block' },
                    el(InnerBlocks, { allowedBlocks: allowedBlocks } )
                )
            );
        },

        save: function () {
            return (
                el('div', { className: 'author-block' },
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
    let RichText=blockEditor.RichText;
    let MediaUpload = blockEditor.MediaUpload;

    blocks.registerBlockType('custom/author-card', {
        title: 'Author Card',
        category: 'common',
        icon: 'block-default',
        supports: {
            className: false
        },

        attributes: {
            name: { type: 'array', source: 'children', selector: '.author-name'},
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
                el('figure', { className: 'author-info' },
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
                                    ! attributes.mediaID ? 'Upload' :
                                        el('img', {
                                            width: 100,
                                            height: 100,
                                            src: attributes.mediaURL,
                                            alt: attributes.mediaAlt,
                                            title: attributes.mediaTitle,
                                            loading: 'lazy',
                                            className: 'author-photo',
                                        })
                                )
                            );
                        }
                    }),

                    el('figcaption', {},
                        el(RichText, {
                            tagName: 'span',
                            className: 'author-name',
                            placeholder: 'Name',
                            value: attributes.name,
                            onChange: function (value) { 
                                props.setAttributes({ name: value }); 
                            },
                        }),

                        el('div', { className: 'author-socials' }, el(InnerBlocks, { allowedBlocks: ['core/image'] })),
                    )
                )
            );
        },

        save: function (props) {
            const attributes = props.attributes;

            return (
                el('figure', { className: 'author-info' },
                    attributes.mediaURL && el('img', {
                        width: 100,
                        height: 100,
                        src: attributes.mediaURL,
                        alt: attributes.mediaAlt,
                        title: attributes.mediaTitle,
                        loading: 'lazy',
                        className: 'author-photo',
                    }),

                    el('figcaption', {},
                        el(RichText.Content, { tagName: 'span', className: 'author-name', value: attributes.name }),
                        el('div', { className: 'author-socials' }, el(InnerBlocks.Content, null) ),
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