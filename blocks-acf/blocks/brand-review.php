<?
    $info = get_field('info');
    $site_name = get_field('logo', 'options')['text'];
    $page_description = get_field('rank_math_description', get_the_ID());
    $additional_info = get_field('additional_info');
?>

<div class="brand-review-box">
    <? if (!empty($additional_info['items'])) { ?>
    <div class="additional-info">
    <? } ?>
        <table class="brand-review <?= !empty($info['bonus_code']) ? 'brand-review-with-code' : ''?>">
            <tbody>
                <tr>
                    <td class="brand-review-title">
                        <img
                            class="brand-review-logo"
                            loading="lazy"
                            src="<?= $info['logo']['url'] ?>"
                            alt="<?= $info['logo']['alt'] ?>"
                            title="<?= $info['logo']['title'] ?>"
                            width="154"
                        >
                        <span class="brand-review-logo-text">
                            <?= $info['logo_text_hidden'] ?>
                        </span>
                        <div>
                            <div class="brand-review-name">
                                <?= $info['name'] ?>
                            </div>
                            <div class="brand-review-country">
                                <span><?= $info['сountry']['text'] ?></span>
                                <img
                                    loading="lazy"
                                    src="<?= $info['сountry']['image']['url'] ?>"
                                    alt="<?= $info['сountry']['image']['alt'] ?>"
                                    title="<?= $info['сountry']['image']['title'] ?>"
                                    width="26"
                                >
                            </div>
                            <div class="brand-review-rating desktop-hidden">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="#F8CC63" xmlns="http://www.w3.org/2000/svg"><path d="M19.9713 7.70508C19.9024 7.4929 19.719 7.33833 19.4983 7.3063L13.2983 6.40528L10.5254 0.78705C10.4267 0.587012 10.2231 0.460449 10 0.460449C9.77701 0.460449 9.5733 0.587012 9.47459 0.78705L6.70162 6.40524L0.501674 7.3063C0.281011 7.33833 0.0975736 7.4929 0.0287066 7.70501C-0.0402386 7.91719 0.0172613 8.15004 0.176948 8.30567L4.66319 12.6789L3.60429 18.854C3.56659 19.0739 3.65698 19.296 3.83741 19.4271C4.01784 19.5581 4.25698 19.5755 4.45448 19.4717L9.99998 16.5561L15.5453 19.4716C15.6311 19.5167 15.7247 19.5389 15.8179 19.5389C15.9394 19.5389 16.0604 19.5012 16.1624 19.4271C16.3428 19.296 16.4332 19.0738 16.3955 18.854L15.3363 12.6789L19.823 8.30567C19.9827 8.15001 20.0402 7.91715 19.9713 7.70508Z"/></svg>
                                <span><?= $info['rating'] ?> / 5</span>
                            </div>
                        </div>
                    </td>

                    <td class="brand-review-rating mobile-hidden">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="#F8CC63" xmlns="http://www.w3.org/2000/svg"><path d="M19.9713 7.70508C19.9024 7.4929 19.719 7.33833 19.4983 7.3063L13.2983 6.40528L10.5254 0.78705C10.4267 0.587012 10.2231 0.460449 10 0.460449C9.77701 0.460449 9.5733 0.587012 9.47459 0.78705L6.70162 6.40524L0.501674 7.3063C0.281011 7.33833 0.0975736 7.4929 0.0287066 7.70501C-0.0402386 7.91719 0.0172613 8.15004 0.176948 8.30567L4.66319 12.6789L3.60429 18.854C3.56659 19.0739 3.65698 19.296 3.83741 19.4271C4.01784 19.5581 4.25698 19.5755 4.45448 19.4717L9.99998 16.5561L15.5453 19.4716C15.6311 19.5167 15.7247 19.5389 15.8179 19.5389C15.9394 19.5389 16.0604 19.5012 16.1624 19.4271C16.3428 19.296 16.4332 19.0738 16.3955 18.854L15.3363 12.6789L19.823 8.30567C19.9827 8.15001 20.0402 7.91715 19.9713 7.70508Z"/></svg>
                        <span><?= $info['rating'] ?> <small>/ 5</small></span>
                        <span class="brand-review-rating-text">
                            <?= $info['rating_text_hidden'] ?>
                        </span>
                    </td>

                    <td class="brand-review-bonus">
                        <div class="brand-review-bonus-value">
                            <div class="brand-review-name-mobile"><?= $info['name'] ?></div>
                            <span><?= $info['bonus_title'] ?></span>
                            <b><?= $info['bonus_text'] ?></b>

                            <? if (!empty($additional_info['items'])) { ?>
                                <button class="additional-info__button mobile" data-open="<?= $additional_info['open_text'] ?>" data-close="<?= $additional_info['close_text'] ?>">
                                    <span class="additional-info__text"><?= $additional_info['open_text'] ?></span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12V12C21 16.971 16.971 21 12 21V21C7.029 21 3 16.971 3 12V12C3 7.029 7.029 3 12 3V3C16.971 3 21 7.029 21 12Z" stroke="#171A22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9 13L12 10L15 13" stroke="#171A22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            <? } ?>
                        </div>

                        <? if ( !empty($info['bonus_code']) ) { ?>
                            <div class="bonus-code mobile-hidden">
                                <div class="bonus-code-value">
                                    <?= $info['bonus_code'] ?>
                                </div>
                                <div class="bonus-code-copy">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4.66406" y="4.66504" width="9.33722" height="9.33722" rx="2" stroke="#8B8D91" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4.66387 11.3348H3.32998C2.5933 11.3348 1.99609 10.7376 1.99609 10.0009V3.33145C1.99609 2.59476 2.5933 1.99756 3.32998 1.99756H9.99943C10.7361 1.99756 11.3333 2.59476 11.3333 3.33145V4.66534" stroke="#8B8D91" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="bonus-code-status">Copied</div>
                                </div>
                            </div>
                        <? } ?>
                    </td>

                    <td class="brand-review-buttons">
                        <? if (!empty($info['button'])) { ?>
                            <button class="brand-review-button button green big"
                                onclick="window.open('<?= $info['button']['url'] ?>', '<?= !empty($info['button']['target']) ? $info['button']['target'] : '_self' ?>')">
                                <?= $info['button']['title'] ?>
                            </button>
                        <? } ?>

                        <? if ( !empty($info['bonus_code']) ) { ?>
                            <div class="bonus-code desktop-hidden">
                                <div class="bonus-code-value">
                                    <?= $info['bonus_code'] ?>
                                </div>
                                <div class="bonus-code-copy">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4.66406" y="4.66504" width="9.33722" height="9.33722" rx="2" stroke="#8B8D91" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4.66387 11.3348H3.32998C2.5933 11.3348 1.99609 10.7376 1.99609 10.0009V3.33145C1.99609 2.59476 2.5933 1.99756 3.32998 1.99756H9.99943C10.7361 1.99756 11.3333 2.59476 11.3333 3.33145V4.66534" stroke="#8B8D91" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="bonus-code-status">Copied</div>
                                </div>
                            </div>
                        <? } ?>
                    </td>

                    <? if (!empty($additional_info['items'])) { ?>
                        <td class="additional-info-box">
                            <button class="additional-info__button" data-open="<?= $additional_info['open_text'] ?>" data-close="<?= $additional_info['close_text'] ?>">
                                <span class="additional-info__text"><?= $additional_info['open_text'] ?></span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21 12V12C21 16.971 16.971 21 12 21V21C7.029 21 3 16.971 3 12V12C3 7.029 7.029 3 12 3V3C16.971 3 21 7.029 21 12Z" stroke="#171A22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 13L12 10L15 13" stroke="#171A22" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </td>
                    <? } ?>
                </tr>
            </tbody>
        </table>
        <? if (!empty($additional_info['items'])) { ?>
            <div class="additional-info__content">
                <table class="additional-info__table">
                    <tbody>
                        <? foreach ($additional_info['items'] as $item) { ?>
                        <tr>
                            <td>
                                <? if (!empty($item['icon'])) { ?>
                                    <img loading="lazy" src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>" title="<?= $item['icon']['title'] ?>" width="16">
                                <? } ?>
                                <?= $item['key'] ?>
                            </td>
                            <td>
                                <? if (!empty($item['link'])) { ?>
                                    <a href="<?= $item['link'] ?>">
                                <? } ?>
                                    
                                <?= $item['value'] ?>
                                
                                <? if (!empty($item['link'])) { ?>
                                    </a>
                                <? } ?>
                            </td>
                        </tr>
                        <? } ?>
                    </tbody>
                </table>
            </div>
        <? } ?>
    <? if (!empty($additional_info['items'])) { ?>
    </div>
    <? } ?>
</div>

<script type="application/ld+json">
    [{
        "@context": "http://schema.org",
        "@type": "Review",
        "name": "<?= trim($info['name']) ?>",
        "description": "<?= $page_description ?>",
        "itemReviewed": {
            "@type": "Game",
            "name": "<?= trim($info['name']) ?>"
        },
        "author": {
            "@type": "Organization",
            "name": "<?= $site_name ?>",
            "url": "<?= get_site_url() ?>"
        },
        "reviewRating": {
            "@type": "Rating",
            "worstRating": 0,
            "bestRating": 5,
            "ratingValue": <?= $info['rating'] ?>
        }
    }]
</script>