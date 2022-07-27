(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let MediaUpload = blockEditor.MediaUpload;
    let allowedBlocks = ['core/list', 'core/paragraph'];

    blocks.registerBlockType('custom/customer-service-card', {
        title: 'Customer Service Card',
        category: 'common',
        keywords: 'customer service card',
        icon: 'buddicons-buddypress-logo',
        supports: {
            className: false,
            // customClassName: true
        },

        attributes: {
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
                el('div', { className: `aw-customer-service__card` },
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
                                            width: 148,
                                            src: attributes.mediaURL,
                                            alt: attributes.mediaAlt,
                                            title: attributes.mediaTitle,
                                            loading: 'lazy'
                                        })
                                )
                            );
                        }
                    }),
                    el(InnerBlocks, { allowedBlocks:allowedBlocks } )
                )
            );
        },

        save: function (props) {
            const attributes = props.attributes;

            return (
                el('div', { className: `aw-customer-service__card` },
                    attributes.mediaURL && el('img', {
                        width: 148,
                        src: attributes.mediaURL,
                        alt: attributes.mediaAlt,
                        title: attributes.mediaTitle,
                        loading: 'lazy'
                    }),
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