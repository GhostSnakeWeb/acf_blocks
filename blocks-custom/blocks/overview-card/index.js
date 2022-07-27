(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let RichText = blockEditor.RichText;
    let MediaUpload = blockEditor.MediaUpload;
    let allowedBlocks = ['custom/overview-card-question'];

    /**
     * Получение заголовков h2, h3 на странице
     * @returns {*[]}
     */
    function getHeadingsAndBuildArray() {
        let h2 = document.querySelectorAll('.aw-main-content .block-editor-inner-blocks .block-editor-block-list__layout > h2')
        let headingBlocks = [];

        for (let i = 0; i < h2.length; i++) {
            let index = i + 1;
            let h3ForH2 = document.querySelectorAll(`.aw-main-content > .block-editor-inner-blocks > .block-editor-block-list__layout > h2:nth-of-type(${index}) ~ h3`)
            let h3 = []

            Object.keys(h3ForH2).forEach(key => {
                let h3Text = h3ForH2[key].innerText;
                h3.push(h3Text)
            });

            headingBlocks.push({
                'h2': h2[i].innerText,
                'h3': h3
            })
        }

        return headingBlocks;
    }

    // Settings For Block In Admin Sidebar
    const InspectorControls = blockEditor.InspectorControls;
    const ToggleControl = wp.components.ToggleControl,
          PanelBody = wp.components.PanelBody,
          PanelRow = wp.components.PanelRow;

    blocks.registerBlockType('custom/overview-card', {
        title: 'Overview Card',
        category: 'common',
        keywords: 'overview card',
        icon: 'text-page',
        supports: {
            className: false
        },

        attributes: {
            title: { type: 'array', source: 'children', selector: 'span', },
            mediaID: { type:'number' },
            mediaURL: { type:'string', source:'attribute', selector:'img', attribute: 'src' },
            mediaAlt: { type:'string', source:'attribute', selector:'img', attribute: 'alt' },
            mediaTitle: { type:'string', source:'attribute', selector:'img', attribute: 'title' },
            h2: { type: 'array', source: 'children', selector: 'h2', },
            // toggle: { type: 'boolean', default: true },
        },

        edit: function (props) {
            const attributes = props.attributes;

            /**
             * Построение списка для рендеринга
             */
            function renderHeadings() {
                let headings = getHeadingsAndBuildArray()
                if (headings.length !== 0) {
                    let contentForBlock = []


                    headings.forEach(panel => {
                        let h3Elements = []
                        if (panel.h3 !== 0) {
                            panel.h3.forEach(h3 => {
                                h3Elements.push(wp.element.concatChildren(
                                    el('a', { href: '#' },
                                        el('h3', null, h3)
                                    )
                                ))
                            })
                        }

                        contentForBlock.push(wp.element.concatChildren(
                            el('div', { className: 'aw-casino-overview__accordion-panel__question' },
                                el('a', { href: '#' },
                                    el(RichText, {
                                        tagName: 'h2',
                                        placeholder: 'h2',
                                        value: panel.h2,
                                        onChange: function (value) {
                                            props.setAttributes({ h2: value });
                                        },
                                    }),
                                    // el('h2', null, panel.h2),
                                ),
                                h3Elements
                            )
                        ))
                    })

                    return contentForBlock;
                }
            }

            const onSelectImage = function(media){
                return props.setAttributes({
                    mediaURL: media.url,
                    mediaID: media.id,
                    mediaAlt: media.alt,
                    mediaTitle: media.title
                });
            };


            return (
                el('div', {},
                    // el(InspectorControls, {},
                    //     el(PanelBody, { title: 'Настройки блока' },
                    //         el(PanelRow, {},
                    //             el(ToggleControl, {
                    //                 label: 'Блок содержания?',
                    //                 checked: attributes.toggle,
                    //                 onChange: function (value) {
                    //                     props.setAttributes({ toggle: value });
                    //                 },
                    //             })
                    //         )
                    //     )
                    // ),
                    el('div', { className: 'aw-casino-overview__accordion' },
                        el('button', { className: 'aw-casino-overview__accordion-button' },
                            el(RichText, {
                                tagName: 'span',
                                placeholder: 'Title',
                                value: attributes.title,
                                onChange: function (value) {
                                    props.setAttributes({ title: value });
                                },
                            }),
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
                                                    width: 20,
                                                    src: attributes.mediaURL,
                                                    alt: attributes.mediaAlt,
                                                    title: attributes.mediaTitle,
                                                    loading: 'lazy'
                                                })
                                        )
                                    );
                                }
                            }),
                        ),
                        el('div', { className: 'aw-casino-overview__accordion-panel' },
                            el(renderHeadings, null),
                            el(InnerBlocks, { allowedBlocks:allowedBlocks } )
                        ),
                    )
                )
            );
        },

        save: function (props) {
            const attributes = props.attributes;

            return (
                el('div', { className: `aw-casino-overview__accordion` },
                    el('button', { className: 'aw-casino-overview__accordion-button' },
                        el(RichText.Content, { tagName: 'span', value: attributes.title }),
                        attributes.mediaURL && el('img', {
                            width: 20,
                            src: attributes.mediaURL,
                            alt: attributes.mediaAlt,
                            title: attributes.mediaTitle,
                            loading: 'lazy'
                        }),
                    ),
                    el('div', { className: 'aw-casino-overview__accordion-panel' },
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

(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let InnerBlocks = blockEditor.InnerBlocks;
    let RichText = blockEditor.RichText;
    let allowedBlocks = ['core/heading'];

    blocks.registerBlockType('custom/overview-card-question', {
        title: 'Block Content',
        category: 'common',
        keywords: 'overview card content block',
        icon: 'plus-alt2',
        parent: ['custom/overview-card'],
        supports: {
            className: false
        },

        // attributes: {
        //     title: { type: 'array', source: 'children', selector: 'h2', },
        // },

        edit: function () {
            // const attributes = props.attributes;

            return (
                el('div', {className: 'aw-casino-overview__accordion-panel__question'},
                    // el(RichText, {
                    //     tagName: 'h2',
                    //     placeholder: 'Title',
                    //     value: attributes.title,
                    //     onChange: function (value) {
                    //         props.setAttributes({ title: value });
                    //     },
                    // }),
                    el(InnerBlocks, { allowedBlocks:allowedBlocks } )
                )
            );
        },

        save: function () {
            // const attributes = props.attributes;

            return (
                el('div', {className: 'aw-casino-overview__accordion-panel__question'},
                    // el(RichText.Content, { tagName: 'h2', value: attributes.title }),
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