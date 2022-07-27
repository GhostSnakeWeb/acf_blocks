(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let allowedBlocks = ['custom/rate-players-slide'];

    blocks.registerBlockType('custom/rate-players-block', {
        title: 'Rate Players',
        category: 'common',
        keywords: 'rate players',
        icon: 'star-filled',
        supports: {
            className: false
        },

        edit: function () {
            return (
                el('div', { className: 'aw-rate-players aw-swiper-wrapper-additional' },
                    el('div', { className: 'aw-swiper swiper swiper-main' },
                        el('div', { className: 'aw-swiper-wrapper swiper-wrapper' },
                            el(InnerBlocks, { allowedBlocks:allowedBlocks } ),
                        )
                    )
                )
            );
        },

        save: function () {
            return (
                el('div', { className: 'aw-rate-players aw-swiper-wrapper-additional' },
                    el('div', { className: 'aw-swiper swiper swiper-main' },
                        el('div', { className: 'aw-swiper-wrapper swiper-wrapper' },
                            el(InnerBlocks.Content),
                        )
                    ),
                    el('div', { className: 'aw-swiper-button swiper-button-next' }),
                    el('div', { className: 'aw-swiper-button swiper-button-prev' }),
                    el('div', { className: 'aw-swiper-bullets swiper-pagination aw-rate-players__pagination' })
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
    let allowedBlocks = ['custom/rate-players-card'];

    blocks.registerBlockType('custom/rate-players-slide', {
        title: 'Rate Players Slide',
        category: 'common',
        keywords: 'rate players slide',
        icon: 'images-alt',
        parent: ['custom/rate-players-block'],
        supports: {
            className: false
        },

        edit: function () {
            return (
                el('div', {className: 'aw-swiper-slide swiper-slide'},
                    el(InnerBlocks, { allowedBlocks:allowedBlocks } ),
                )
            );
        },

        save: function () {
            return (
                el('div', {className: 'aw-swiper-slide swiper-slide'},
                    el(InnerBlocks.Content ),
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
    let allowedBlocks = ['core/list', 'core/paragraph'];
    let MediaUpload = blockEditor.MediaUpload;
    let components = wp.components;
    let RangeControl = components.RangeControl;

    blocks.registerBlockType('custom/rate-players-card', {
        title: 'Rate Players Card',
        category: 'common',
        keywords: 'rate players card',
        icon: 'id',
        parent: ['custom/rate-players-slide'],
        supports: {
            className: false
        },

        attributes: {
            countCards: { type:'number' },
            playerName: { type: 'array', source: 'children', selector: 'span.aw-personal__card__content__name'},
            date: { type: 'array', source: 'children', selector: 'span.aw-personal__card__content__additional'},
            socialName: { type: 'array', source: 'children', selector: 'span.aw-personal__card__content__socials-name'},
            rating: { type:'number' },

            // Media Data For Photo
            playerPhotoMediaID: { type:'number' },
            playerPhotoMediaURL: { type:'string', source:'attribute', selector:'img.aw-swiper-aw-personal__card-photo', attribute: 'src' },
            playerPhotoMediaAlt: { type:'string', source:'attribute', selector:'img.aw-swiper-aw-personal__card-photo', attribute: 'alt' },
            playerPhotoMediaTitle: { type:'string', source:'attribute', selector:'img.aw-swiper-aw-personal__card-photo', attribute: 'title' },

            // Media Data For Social Icon
            socialIconMediaID: { type:'number' },
            socialIconMediaURL: { type:'string', source:'attribute', selector:'img.aw-personal__card__content__socials-icon', attribute: 'src' },
            socialIconMediaAlt: { type:'string', source:'attribute', selector:'img.aw-personal__card__content__socials-icon', attribute: 'alt' },
            socialIconMediaTitle: { type:'string', source:'attribute', selector:'img.aw-personal__card__content__socials-icon', attribute: 'title' },
        },

        edit: function (props) {
            const attributes = props.attributes;

            const onSelectPlayerPhoto = function(media){
                return props.setAttributes({
                    playerPhotoMediaURL: media.url,
                    playerPhotoMediaID: media.id,
                    playerPhotoMediaAlt: media.alt,
                    playerPhotoMediaTitle: media.title
                });
            };

            const onSelectSocialIcon = function(media){
                return props.setAttributes({
                    socialIconMediaURL: media.url,
                    socialIconMediaID: media.id,
                    socialIconMediaAlt: media.alt,
                    socialIconMediaTitle: media.title
                });
            };

            return (
                el('div', {className: 'aw-swiper-slide__container'},
                    el('div', {className: 'aw-swiper-slide__card'},
                        el('div', {className: 'aw-personal__card'},
                            el(MediaUpload, {
                                onSelect: onSelectPlayerPhoto,
                                allowedTypes: 'image',
                                value: attributes.playerPhotoMediaID,
                                labels: {
                                    alt: attributes.playerPhotoMediaAlt,
                                    title: attributes.playerPhotoMediaTitle,
                                },
                                render: function(obj) {
                                    return (
                                        el(wp.components.Button, {
                                                className:attributes.playerPhotoMediaID ? 'image-button' : 'button button-large',
                                                onClick:obj.open
                                            },
                                            ! attributes.playerPhotoMediaID ? 'Player Photo' :
                                                el('img', {
                                                    className: 'aw-swiper-aw-personal__card-photo',
                                                    width: 85,
                                                    src: attributes.playerPhotoMediaURL,
                                                    alt: attributes.playerPhotoMediaAlt,
                                                    title: attributes.playerPhotoMediaTitle,
                                                    loading: 'lazy'
                                                })
                                        )
                                    );
                                }
                            }),
                            el('div', {className: 'aw-personal__card__content'},
                                el(RichText, {
                                    tagName: 'span',
                                    className: 'aw-personal__card__content__name',
                                    placeholder: 'Player Name',
                                    value: attributes.playerName,
                                    itemprop: 'name',
                                    onChange: function (value) {
                                        props.setAttributes({ playerName: value });
                                    },
                                }),
                                el(RichText, {
                                    tagName: 'span',
                                    placeholder: 'Date',
                                    className: 'aw-personal__card__content__additional',
                                    value: attributes.date,
                                    onChange: function (value) {
                                        props.setAttributes({ date: value });
                                    },
                                }),
                                el('div', {className: 'aw-personal__card__content__socials'},
                                    el(MediaUpload, {
                                        onSelect: onSelectSocialIcon,
                                        allowedTypes: 'image',
                                        value: attributes.socialIconMediaID,
                                        labels: {
                                            alt: attributes.socialIconMediaAlt,
                                            title: attributes.socialIconMediaTitle,
                                        },
                                        render: function(obj) {
                                            return (
                                                el(wp.components.Button, {
                                                        className:attributes.socialIconMediaID ? 'image-button' : 'button button-large',
                                                        onClick:obj.open
                                                    },
                                                    ! attributes.socialIconMediaID ? 'Social Icon' :
                                                        el('img', {
                                                            className: 'aw-personal__card__content__socials-icon',
                                                            width: 24,
                                                            src: attributes.socialIconMediaURL,
                                                            alt: attributes.socialIconMediaAlt,
                                                            title: attributes.socialIconMediaTitle,
                                                            loading: 'lazy'
                                                        })
                                                )
                                            );
                                        }
                                    }),
                                    el(RichText, {
                                        tagName: 'span',
                                        className: 'aw-personal__card__content__socials-name',
                                        placeholder: 'Social Name',
                                        value: attributes.socialName,
                                        onChange: function (value) {
                                            props.setAttributes({ socialName: value });
                                        },
                                    }),
                                )
                            )
                        ),
                        el('div', {className: 'aw-swiper-slide__card__rating'},
                            el(
                                RangeControl,
                                {
                                    label: 'Stars',
                                    min: 0,
                                    max: 5,
                                    step: 0.1,
                                    initialPosition: 5,
                                    value: attributes.rating,
                                    onChange: function (value) {
                                        props.setAttributes({ rating: value });
                                    },
                                }
                            )
                        )
                    ),
                    el(InnerBlocks, { allowedBlocks:allowedBlocks } )
                )
            );
        },

        save: function (props) {
            const attributes = props.attributes;

            function Stars () {
                return el('svg', { viewBox: '0 0 18 19', width: '18', height: '19', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' },
                    el('g', { clippath: 'url(#clip0_3350_37716)' },
                        el('path', {
                            d: 'M14.46 11.9487C14.2351 12.1736 14.1227 12.5109 14.1789 12.8482L14.966 17.3459C15.0784 18.1329 14.2351 18.7514 13.5043 18.414L9.4564 16.2777C9.1753 16.109 8.83799 16.109 8.55685 16.2777L4.50899 18.3578C3.77812 18.7514 2.93483 18.1329 3.04725 17.2896L3.83433 12.792C3.89054 12.4547 3.77812 12.1174 3.55323 11.8925L0.292487 8.7441C-0.269708 8.18191 0.0113896 7.16994 0.854682 7.05748L5.35232 6.38282C5.68963 6.32661 5.97073 6.15794 6.08319 5.82063L8.10712 1.77276C8.44443 1.04189 9.51265 1.04189 9.90617 1.77276L11.9301 5.82063C12.0988 6.10173 12.3799 6.32661 12.661 6.38282L17.1586 7.05748C17.9457 7.1699 18.283 8.18187 17.7208 8.7441L14.46 11.9487Z',
                            fill: '#FFDA4F'
                        }),
                        el('path', {
                            d: 'M14.4581 11.9502C14.2332 12.175 14.1208 12.5123 14.177 12.8497L14.9641 17.3473C15.0765 18.1344 14.2332 18.7529 13.5023 18.4155L9.45445 16.2792C9.17335 16.1105 8.83604 16.1105 8.55491 16.2792L4.50704 18.3593C3.77617 18.7529 2.93288 18.1344 3.0453 17.2911L3.6075 14.0865C3.77617 14.0865 3.94481 14.0865 4.11348 14.0865C8.49866 14.0865 12.0968 10.6571 12.3779 6.32812C12.4341 6.38434 12.5466 6.38434 12.6028 6.38434L17.1004 7.05899C17.8875 7.17142 18.2248 8.18338 17.6626 8.74562L14.4581 11.9502Z',
                            fill: '#FFDA4F'
                        })
                    ),
                    el('defs', {},
                        el('clipPath', { id: 'clip0_3350_37716' },
                            el('rect', { width: '18', height: '18', fill: 'white', transform: 'translate(0 0.867188)' }),
                        ),
                    ),
                )
            }

            return (
                el('div', {className: 'aw-swiper-slide__container'},
                    el('div', {className: 'aw-swiper-slide__card'},
                        el('div', {className: 'aw-personal__card'},
                            attributes.playerPhotoMediaURL && el('img', {
                                width: 85,
                                className: 'aw-swiper-aw-personal__card-photo',
                                src: attributes.playerPhotoMediaURL,
                                alt: attributes.playerPhotoMediaAlt,
                                title: attributes.playerPhotoMediaTitle,
                                loading: 'lazy'
                            }),
                            el('div', {className: 'aw-personal__card__content'},
                                el(RichText.Content, {
                                    tagName: 'span',
                                    className: 'aw-personal__card__content__name',
                                    value: attributes.playerName,
                                    itemprop: 'name'
                                }),
                                el(RichText.Content, {
                                    tagName: 'span',
                                    className: 'aw-personal__card__content__additional',
                                    value: attributes.date,
                                }),
                                el('div', {className: 'aw-personal__card__content__socials'},
                                    attributes.socialIconMediaURL && el('img', {
                                        width: 24,
                                        className: 'aw-personal__card__content__socials-icon',
                                        src: attributes.socialIconMediaURL,
                                        alt: attributes.socialIconMediaAlt,
                                        title: attributes.socialIconMediaTitle,
                                        loading: 'lazy'
                                    }),
                                    el(RichText.Content, {
                                        tagName: 'span',
                                        className: 'aw-personal__card__content__socials-name',
                                        value: attributes.socialName,
                                    }),
                                )
                            )
                        ),
                        el('div', {className: 'aw-swiper-slide__card__rating'},
                            el(Stars, null),
                            el(Stars, null),
                            el(Stars, null),
                            el(Stars, null),
                            el(Stars, null),
                            el('div', {
                                className: 'aw-swiper-slide__card__rating-cover',
                                style: {
                                    width: attributes.rating ? `${100 - attributes.rating*100/5}%`: '0%'
                                }
                            })
                        ),
                    ),
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