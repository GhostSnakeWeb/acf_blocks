(function (blocks, element, blockEditor) {
    let el = element.createElement;
    let RichText = blockEditor.RichText;
    let MediaUpload = blockEditor.MediaUpload;
    let components = wp.components;
    let RangeControl = components.RangeControl;

    blocks.registerBlockType('custom/hero-mobile-card-casino', {
        title: 'Hero Mobile Card',
        category: 'common',
        keywords: 'hero mobile card',
        icon: 'embed-generic',
        supports: {
            className: false
        },

        attributes: {
            cardTitle: { type: 'array', source: 'children', selector: 'strong', },
            rating: { type:'number' },
            cardName: { type: 'array', source: 'children', selector: 'span.aw__mobile-card__casino-bonus__name', },
            cardBonus: { type: 'array', source: 'children', selector: 'span.aw__mobile-card__casino-bonus__header', },
            cardAgeLimit: { type: 'array', source: 'children', selector: 'span.aw__mobile-card__casino-bonus__info', },
            // cardLink: { type: 'array', source: 'children', selector: '.aw__mobile-card__casino-link', },

            // For Logo
            mediaIDCasinoLogo: { type:'number' },
            mediaURLCasinoLogo: { type:'string', source:'attribute', selector:'img.aw__mobile-card__casino-logo', attribute: 'src' },
            mediaAltCasinoLogo: { type:'string', source:'attribute', selector:'img.aw__mobile-card__casino-logo', attribute: 'alt' },
            mediaTitleCasinoLogo: { type:'string', source:'attribute', selector:'img.aw__mobile-card__casino-logo', attribute: 'title' },

            // For Link
            mediaIDLink: { type:'number' },
            mediaURLLink: { type:'string', source:'attribute', selector:'img.aw__mobile-card__casino-link-image', attribute: 'src' },
            mediaAltLink: { type:'string', source:'attribute', selector:'img.aw__mobile-card__casino-link-image', attribute: 'alt' },
            mediaTitleLink: { type:'string', source:'attribute', selector:'img.aw__mobile-card__casino-link-image', attribute: 'title' },
        },

        edit: function (props) {
            const attributes = props.attributes;

            const onSelectImageCasinoLogo = function(media){
                return props.setAttributes({
                    mediaURLCasinoLogo: media.url,
                    mediaIDCasinoLogo: media.id,
                    mediaAltCasinoLogo: media.alt,
                    mediaTitleCasinoLogo: media.title
                });
            };

            const onSelectImageLink = function(media){
                return props.setAttributes({
                    mediaURLLink: media.url,
                    mediaIDLink: media.id,
                    mediaAltLink: media.alt,
                    mediaTitleLink: media.title
                });
            };

            return (
                el('div', { className: 'aw__mobile-card' },
                    el('span', null,
                        el(RichText, {
                            tagName: 'strong',
                            placeholder: 'Title',
                            value: attributes.cardTitle,
                            onChange: function (value) {
                                props.setAttributes({ cardTitle: value });
                            },
                        }),
                    ),
                    el('div', { className: 'aw__mobile-card__casino' },
                        el('div', { className: 'aw__mobile-card__casino-rate' },
                            el( MediaUpload, {
                                onSelect: onSelectImageCasinoLogo,
                                allowedTypes: 'image',
                                value: attributes.mediaIDCasinoLogo,
                                labels: {
                                    alt: attributes.mediaAltCasinoLogo,
                                    title: attributes.mediaTitleCasinoLogo,
                                },
                                render: function(obj) {
                                    return (
                                        el(wp.components.Button, {
                                                className:attributes.mediaIDCasinoLogo ? 'image-button' : 'button button-large',
                                                onClick:obj.open
                                            },
                                            ! attributes.mediaIDCasinoLogo ? 'Casino Logo' :
                                                el('img', {
                                                    width: 105,
                                                    className: 'aw__mobile-card__casino-logo',
                                                    src: attributes.mediaURLCasinoLogo,
                                                    alt: attributes.mediaAltCasinoLogo,
                                                    title: attributes.mediaTitleCasinoLogo,
                                                    loading: 'lazy'
                                                })
                                        )
                                    );
                                }
                            }),
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
                        ),
                        el('div', { className: 'aw__mobile-card__casino-bonus' },
                            el(RichText, {
                                tagName: 'span',
                                className: 'aw__mobile-card__casino-bonus__name',
                                placeholder: 'Card Title',
                                value: attributes.cardName,
                                onChange: function (value) {
                                    props.setAttributes({ cardName: value });
                                },
                            }),
                            el(RichText, {
                                tagName: 'span',
                                className: 'aw__mobile-card__casino-bonus__header',
                                placeholder: 'Bonus',
                                value: attributes.cardBonus,
                                onChange: function (value) {
                                    props.setAttributes({ cardBonus: value });
                                },
                            }),
                            el(RichText, {
                                tagName: 'span',
                                className: 'aw__mobile-card__casino-bonus__info',
                                placeholder: 'Age Limit',
                                value: attributes.cardAgeLimit,
                                onChange: function (value) {
                                    props.setAttributes({ cardAgeLimit: value });
                                },
                            }),
                        ),
                        // el(RichText, {
                        //     tagName: 'span',
                        //     className: 'aw__mobile-card__casino-link',
                        //     placeholder: 'Card Link',
                        //     value: attributes.cardLink,
                        //     onChange: function (value) {
                        //         props.setAttributes({ cardLink: value });
                        //     },
                        // }),
                        el( MediaUpload, {
                            onSelect: onSelectImageLink,
                            allowedTypes: 'image',
                            value: attributes.mediaIDLink,
                            labels: {
                                alt: attributes.mediaAltLink,
                                title: attributes.mediaTitleLink,
                            },
                            render: function(obj) {
                                return (
                                    el(wp.components.Button, {
                                            className:attributes.mediaIDLink ? 'image-button' : 'button button-large',
                                            onClick:obj.open
                                        },
                                        ! attributes.mediaIDLink ? 'Link Icon' :
                                            el('img', {
                                                width: 105,
                                                className: 'aw__mobile-card__casino-link-image',
                                                src: attributes.mediaURLLink,
                                                alt: attributes.mediaAltLink,
                                                title: attributes.mediaTitleLink,
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

            function Star () {
                return el('svg', { viewBox: '0 0 11 11', width: '11', height: '11', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' },
                    el('path', {
                        d: 'M8.30911 10.1893C7.622 10.6878 6.06993 9.59648 5.22114 9.59648C4.37235 9.59648 2.82028 10.6905 2.13316 10.1893C1.44605 9.69079 2.00652 7.87734 1.74514 7.06897C1.48377 6.2606 -0.0359637 5.1235 0.225409 4.31513C0.486782 3.50676 2.38645 3.47981 3.07357 2.98132C3.76068 2.48282 4.37235 0.685547 5.22383 0.685547C6.07262 0.685547 6.68698 2.48282 7.37409 2.98132C8.06121 3.47981 9.95819 3.50945 10.2223 4.31513C10.4836 5.1235 8.96659 6.2606 8.70252 7.06897C8.43575 7.87734 8.99623 9.69079 8.30911 10.1893Z',
                        fill: '#FFC84B'
                    }),
                    el('path', {
                        d: 'M9.34029 4.19141C5.83466 4.1941 2.77632 6.5734 1.91406 9.97125C1.96256 10.0602 2.02454 10.1329 2.10268 10.1922C2.7898 10.6907 4.34187 9.5994 5.19065 9.5994C6.03944 9.5994 7.59152 10.6934 8.27863 10.1922C8.96575 9.69371 8.40527 7.88027 8.66665 7.0719C8.92802 6.26353 10.4478 5.12642 10.1864 4.31805C10.1783 4.2911 10.1648 4.26146 10.1514 4.23721C9.8819 4.20757 9.61244 4.1941 9.34029 4.1941C9.34298 4.19141 9.34298 4.19141 9.34029 4.19141Z',
                        fill: '#FF9F2C'
                    }),
                    el('path', {
                        d: 'M7.58122 9.23109C7.22284 9.48977 5.64113 8.63829 5.19653 8.63829C4.75462 8.63829 3.17022 9.49247 2.81184 9.23109C2.45346 8.97242 2.77681 7.20209 2.63939 6.78173C2.50196 6.36138 1.20318 5.11919 1.33791 4.69883C1.47533 4.27848 3.25644 4.03867 3.61482 3.77729C3.9732 3.51861 4.75193 1.89648 5.19383 1.89648C5.63574 1.89648 6.41447 3.51861 6.77285 3.77729C7.13123 4.03597 8.91234 4.27848 9.04976 4.69883C9.18718 5.11919 7.88571 6.36138 7.74828 6.78173C7.61895 7.19939 7.9396 8.96972 7.58122 9.23109Z',
                        fill: '#FFC84B'
                    }),
                    el('path', {
                        d: 'M5.1942 1.88672C4.75229 1.88672 3.97356 3.50885 3.61518 3.76753C3.2568 4.02621 1.47569 4.26872 1.33827 4.68907C1.20085 5.10942 2.50232 6.35162 2.63975 6.77197C2.7125 6.99292 2.65591 7.58573 2.64244 8.13811C3.81188 6.02827 5.90556 4.58937 8.29295 4.25794C7.71631 4.07201 6.98878 3.92381 6.77591 3.76753C6.41753 3.50885 5.63611 1.88672 5.1942 1.88672Z',
                        fill: '#FFED9B'
                    }),
                    el('path', {
                        d: 'M3.82593 3.27172C3.69928 3.45495 3.57533 3.60046 3.52952 3.63549C3.48372 3.66782 3.30857 3.74058 3.093 3.80525C2.87744 3.86992 2.61876 3.93729 2.36008 4.01004C2.1041 4.08279 1.85081 4.16093 1.64602 4.25524C1.43854 4.34686 1.258 4.43847 1.19333 4.64056C1.12866 4.84266 1.22028 5.02319 1.33345 5.2199C1.44662 5.4166 1.60291 5.62677 1.76728 5.83695C1.93164 6.04713 2.1014 6.25461 2.23883 6.43245C2.37625 6.61029 2.47595 6.77197 2.49212 6.82586C2.51098 6.87975 2.52176 7.07106 2.51906 7.29471C2.50559 7.96297 2.38703 8.89259 2.82355 9.22403C2.76427 8.92762 2.81008 8.08961 2.85319 7.3028C2.86666 7.06837 2.86127 6.87975 2.81007 6.72347C2.75888 6.56718 2.64571 6.41628 2.50289 6.23036C2.36008 6.04443 2.19032 5.83695 2.02865 5.63217C1.86698 5.42738 1.71608 5.22259 1.61908 5.05283C1.52207 4.88308 1.50321 4.75104 1.5059 4.74296C1.5086 4.73488 1.60021 4.63787 1.77806 4.55973C1.9559 4.48159 2.19841 4.40344 2.449 4.33069C2.6996 4.25794 2.96097 4.19057 3.18462 4.12321C3.40827 4.05585 3.5888 3.99926 3.72353 3.90495C3.85557 3.80794 3.97682 3.65974 4.09808 3.46034C4.79328 2.32324 5.20554 1.88672 5.20554 1.88672C4.62082 1.88941 4.15736 2.79209 3.82593 3.27172Z',
                        fill: '#FFFFFF'
                    }),
                    el('path', {
                        d: 'M5.20778 0.5C4.93024 0.5 4.69042 0.645503 4.48564 0.839511C4.28085 1.03352 4.09762 1.28142 3.92247 1.5428C3.57218 2.06285 3.23266 2.62871 2.95243 2.8308C2.67219 3.03289 2.03089 3.18109 1.4273 3.35354C1.12551 3.43977 0.831805 3.53678 0.583905 3.6742C0.336004 3.81162 0.123133 3.99485 0.0396018 4.25622C-0.0466243 4.52029 0.0180446 4.79245 0.136606 5.04843C0.257861 5.30441 0.438398 5.55501 0.629713 5.80291C1.01504 6.29871 1.44886 6.79451 1.55664 7.12325C1.66443 7.45198 1.60514 8.10946 1.58359 8.73729C1.57281 9.04986 1.57281 9.35973 1.6267 9.63727C1.68059 9.91481 1.78838 10.1735 2.01202 10.3352C2.23567 10.4968 2.51591 10.5211 2.79614 10.4861C3.07638 10.451 3.37009 10.3567 3.66649 10.2489C4.2566 10.0334 4.86288 9.7747 5.20778 9.7747C5.55269 9.7747 6.16166 10.0334 6.74907 10.2489C7.04278 10.3567 7.33918 10.451 7.61942 10.4861C7.89965 10.5211 8.17989 10.4968 8.40354 10.3352C8.62719 10.1735 8.73766 9.91481 8.78886 9.63727C8.84275 9.35973 8.84275 9.04986 8.83197 8.73729C8.81042 8.10946 8.75114 7.45468 8.85892 7.12325C8.9667 6.79451 9.40053 6.29601 9.78585 5.80291C9.97986 5.55501 10.1604 5.30441 10.279 5.04843C10.4002 4.79245 10.4622 4.52029 10.376 4.25622C10.2897 3.99216 10.0796 3.80893 9.83166 3.6742C9.58376 3.53678 9.29005 3.44246 8.98826 3.35354C8.38467 3.18109 7.74337 3.03289 7.46313 2.8308C7.1829 2.62871 6.84338 2.06015 6.49309 1.5428C6.31794 1.28412 6.13471 1.03352 5.92992 0.839511C5.72514 0.645503 5.48532 0.5 5.20778 0.5ZM5.20778 0.866457C5.35598 0.866457 5.50957 0.947298 5.67933 1.10628C5.84909 1.26526 6.02154 1.49699 6.1913 1.74759C6.53081 2.25147 6.84338 2.83349 7.25026 3.1272C7.65714 3.42361 8.30653 3.53947 8.89125 3.70653C9.18227 3.79007 9.45442 3.88437 9.65921 3.99485C9.86399 4.10533 9.98794 4.22928 10.0311 4.36939C10.0769 4.50951 10.0499 4.68197 9.95022 4.89214C9.85052 5.10232 9.68615 5.33674 9.49753 5.57656C9.12299 6.05619 8.66761 6.53044 8.51132 7.01007C8.35504 7.4897 8.44665 8.14179 8.46821 8.74806C8.47899 9.05255 8.4736 9.33818 8.43048 9.56722C8.38737 9.79626 8.30923 9.94985 8.18797 10.0388C8.06941 10.125 7.89696 10.1519 7.66523 10.1223C7.43619 10.0927 7.15865 10.0091 6.87572 9.90404C6.30447 9.69656 5.71167 9.40823 5.20778 9.40823C4.7039 9.40823 4.11109 9.69656 3.53984 9.90404C3.25422 10.0064 2.97937 10.0927 2.75034 10.1223C2.5213 10.1519 2.34885 10.125 2.22759 10.0388C2.10903 9.95254 2.02819 9.79626 1.98508 9.56722C1.94197 9.33818 1.93658 9.04986 1.94735 8.74806C1.96891 8.14179 2.05783 7.48701 1.90424 7.01007C1.74796 6.53044 1.29257 6.05619 0.91803 5.57656C0.732105 5.33674 0.565042 5.10232 0.465343 4.89214C0.365644 4.68197 0.338698 4.50951 0.384506 4.36939C0.430314 4.22928 0.554264 4.10533 0.759051 3.99485C0.961144 3.88437 1.23599 3.79007 1.527 3.70653C2.10903 3.53947 2.76111 3.42361 3.16799 3.1272C3.57487 2.8308 3.88744 2.24878 4.22696 1.74759C4.39672 1.49699 4.56917 1.26526 4.73893 1.10628C4.90599 0.947298 5.05958 0.866457 5.20778 0.866457Z',
                        fill: '#1A1A1A'
                    }),
                )
            }

            return (
                el('div', { className: 'aw__mobile-card' },
                    el('span', null,
                        el(RichText.Content, { tagName: 'strong', value: attributes.cardTitle }),
                    ),
                    el('div', { className: 'aw__mobile-card__casino' },
                        el('div', { className: 'aw__mobile-card__casino-rate' },
                            attributes.mediaURLCasinoLogo && el('img', {
                                width: 105,
                                className: 'aw__mobile-card__casino-logo',
                                src: attributes.mediaURLCasinoLogo,
                                alt: attributes.mediaAltCasinoLogo,
                                title: attributes.mediaTitleCasinoLogo,
                                loading: 'lazy'
                            }),
                            el('div', {className: 'aw__mobile-card__casino-rate__rating'},
                                el('span', null, `${attributes.rating ? attributes.rating : 5.0} / 5`),

                                el(Star, null),
                                el(Star, null),
                                el(Star, null),
                                el(Star, null),
                                el(Star, null),
                                el('div', {
                                    className: 'aw__mobile-card__casino-rate__rating-cover',
                                    style: {
                                        width: attributes.rating ? `${100 - attributes.rating*100/5}%`: '0%'
                                    }
                                })
                            ),
                        ),
                        el('div', { className: 'aw__mobile-card__casino-bonus' },
                            el(RichText.Content, {
                                tagName: 'span',
                                className: 'aw__mobile-card__casino-bonus__name',
                                value: attributes.cardName,
                            }),
                            el(RichText.Content, {
                                tagName: 'span',
                                className: 'aw__mobile-card__casino-bonus__header',
                                value: attributes.cardBonus,
                            }),
                            el(RichText.Content, {
                                tagName: 'span',
                                className: 'aw__mobile-card__casino-bonus__info',
                                value: attributes.cardAgeLimit,
                            }),
                        ),
                        el('button', { className: 'aw__mobile-card__casino-link' },
                            attributes.mediaURLLink && el('img', {
                                className: 'aw__mobile-card__casino-link-image',
                                src: attributes.mediaURLLink,
                                alt: attributes.mediaAltLink,
                                title: attributes.mediaTitleLink,
                                loading: 'lazy'
                            }),
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