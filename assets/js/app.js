/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};

;// CONCATENATED MODULE: ./src/js/modules/functions.js
/* Проверка поддержки webp, добавление класса webp или no-webp для HTML */
function isWebp() {
   // Проверка поддержки webp
   function testWebP(callback) {
      let webP = new Image();
      webP.onload = webP.onerror = function () {
         callback(webP.height == 2);
      };
      webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
   };
   // Доблавние класса _webp или _no-webp для HTML
   testWebP(function (support) {
      let className = support === true ? 'webp' : 'no-webp';
      document.documentElement.classList.add(className);
   });
}

function accordion(
   buttonClass, // класс кнопки
   toggleClass = "", // класс переключения
   searchPanel, // поиск панели с контентом
   addSomeStylesToPanel = "", // стили для панели
   addActiveClassForAccordionWrapper = "", // активный класс для обертки
   isClickNeededOnChilds = true, // отрабатываем ли клик на потомках
   searchPanelGlobal = ""
) {
   const accordion = document.getElementsByClassName(buttonClass);

   for (let i = 0; i < accordion.length; i++) {
      accordion[i].addEventListener("click", function (e) {
         if (!isClickNeededOnChilds) {
            if (e.target !== e.currentTarget)
               return
         }

         e.stopPropagation();
         if (toggleClass !== "") {
            this.classList.toggle(toggleClass);
         }
         let panel = "";

         if (typeof (searchPanel) === "boolean" && searchPanel === true) {
            panel = this.firstChild.nextElementSibling;
         } else if (typeof (searchPanel) === "boolean" && searchPanel === false) {
            panel = this.nextElementSibling;
         } else if (typeof (searchPanel) === "string") {
            panel = this.querySelectorAll(searchPanel)[0];
         }

         if (panel.style.maxHeight) {
            setTimeout(() => { panel.removeAttribute('style') }, 200);
            panel.style.maxHeight = null;
         } else {
            panel.style.cssText = addSomeStylesToPanel;
            panel.style.maxHeight = panel.scrollHeight + "px";
         }

         if (addActiveClassForAccordionWrapper) {
            e.target.parentElement.classList.toggle(addActiveClassForAccordionWrapper);
         }
      });
   }
}

function accordionCasinoList(
   buttonClass, // класс кнопки
   toggleClass = "", // класс переключения
   addSomeStylesToPanel = "", // стили для панели
   addActiveClassForAccordionWrapper = ""
) {
   const accordion = document.getElementsByClassName(buttonClass);

   for (let i = 0; i < accordion.length; i++) {
      accordion[i].addEventListener("click", function (e) {
         e.stopPropagation();
         if (toggleClass !== "") {
            this.querySelector('.aw-casinos__table-info__arrow-down').classList.toggle(toggleClass);
         }
         let panel = this.nextElementSibling;

         if (panel.style.maxHeight) {
            setTimeout(() => { panel.removeAttribute('style') }, 200);
            panel.style.maxHeight = null;
         } else {
            panel.style.cssText = addSomeStylesToPanel;
            panel.style.maxHeight = panel.scrollHeight + "px";
         }

         if (addActiveClassForAccordionWrapper) {
            this.classList.toggle(addActiveClassForAccordionWrapper);
         }
      });
   }
}

function accordionAboutUs(
   buttonClass, // класс кнопки
   toggleClass = "", // класс переключения
   addActiveClassForAccordionWrapper = "", // активный класс для обертки
) {
   const accordion = document.getElementsByClassName(buttonClass);

   for (let i = 0; i < accordion.length; i++) {
      accordion[i].addEventListener("click", function (e) {
         e.stopPropagation();
         const parent = e.currentTarget.closest('.aw-accordion-tabs__accordion')
         if (toggleClass !== "") {
            parent.querySelector('button').classList.toggle(toggleClass);
         }
         let panel = parent.querySelector('.aw-accordion-tabs__accordion-panel');

         if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
         } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
         }

         if (addActiveClassForAccordionWrapper) {
            parent.classList.toggle(addActiveClassForAccordionWrapper);
         }
      });
   }
}

// Стили для li подменю
function subMenuLiStylesOl(submenuClass, inColumn = false) {
   const submenus = document.querySelectorAll(submenuClass);
   for (let submenu = 0; submenu < submenus.length; submenu++) {
      const submenuElement = submenus[submenu];
      const lis = submenuElement.querySelectorAll("ol li");
      if (lis.length !== 0) {
         const amountOfLis = lis.length;

         if (inColumn) {
            const checkLi = Math.ceil((amountOfLis / 2) - 1);

            // Убираем border и padding у последнего элемента первого столбца
            lis[checkLi].style.borderBottom = "none";
            lis[checkLi].style.paddingBottom = "0";

            // Убираем border и padding у последнего элемента второго столбца, если он внизу
            if (checkLi % 2 === 0) {
               lis[amountOfLis - 1].style.borderBottom = "none";
               lis[amountOfLis - 1].style.paddingBottom = "0";
            }
         } else {
            // Убираем border и padding у последнего элемента первого столбца
            lis[amountOfLis - 2].style.borderBottom = "none";
            lis[amountOfLis - 2].style.paddingBottom = "0";

            // Убираем border и padding у последнего элемента второго столбца
            if (amountOfLis % 2 === 0) {
               lis[amountOfLis - 1].style.borderBottom = "none";
               lis[amountOfLis - 1].style.paddingBottom = "0";
            } else {
               lis[amountOfLis - 1].style.borderBottom = "none";
               lis[amountOfLis - 1].style.paddingBottom = "0";

               lis[amountOfLis - 2].style.borderBottom = "1px solid #DDE7E2";
               lis[amountOfLis - 2].style.paddingBottom = "12px";
            }
         }
      }
   }
}

function addArrowToSubmenuParent(selectSubmenu, classWrapper, addClass) {
   const secondHeaderMenuLis = document.querySelectorAll(selectSubmenu);
   for (let li = 0; li < secondHeaderMenuLis.length; li++) {
      const liElement = secondHeaderMenuLis[li];
      if (liElement.querySelector(classWrapper)) {
         liElement.classList.add(addClass);
      }
   }
}

// selectSubmenu, classWrapper, addClass
function addArrowToSubmenuParentMobile(selectSubmenu, classWrapper, addClass) {
   const secondHeaderMenuLis = document.querySelectorAll(selectSubmenu);
   for (let li = 0; li < secondHeaderMenuLis.length; li++) {
      const liElement = secondHeaderMenuLis[li];
      if (liElement.querySelector(classWrapper)) {
         liElement.classList.add(addClass);

         let linkElement = liElement.querySelector('a')
         linkElement.insertAdjacentHTML(
            'afterend',
            '<span></span>'
         );
         let spanElement = liElement.querySelector('span')

         const elementsArray = [
            linkElement,
            spanElement
         ]

         const wrapper = document.createElement('span')
         wrapper.classList = 'aw-submenu-control-wrapper'

         elementsArray.forEach(
             child => {
                wrapper.appendChild(child)
             }
         )
         // liElement.childNodes.forEach(
         //     ch => {
         //        console.log(ch)
         //        // wrapper.appendChild(ch)
         //     }
         // );
         liElement.prepend(wrapper);
      }
   }
}

function clickMobileMenuItem() {
   const mobileMenuItems = document.querySelectorAll(".aw-second-header > .container > ul:nth-child(2) > li");
   const body = document.querySelector('body')

   for (let i = 0; i < mobileMenuItems.length; i++) {
      mobileMenuItems[i].addEventListener("click", function (event) {
         const childrenCollection = mobileMenuItems[i].children;
         const ul = childrenCollection[0];

         for (let i = 0; i < mobileMenuItems.length; i++) {
            if (
               event.target !== mobileMenuItems[i] &&
               mobileMenuItems[i].children[0].className.includes("aw-show-hide-submenu-mobile")
            ) {
               mobileMenuItems[i].children[0].classList.remove("aw-show-hide-submenu-mobile");
            }
         }

         ul.classList.toggle("aw-show-hide-submenu-mobile");

         if (ul.classList.contains('aw-show-hide-submenu-mobile')) {
            body.classList.add('aw-overflow-y-hidden')
         } else {
            body.classList.remove('aw-overflow-y-hidden')
         }
      });
   }
}

function openVerticalTab() {
   let i, tabContent, tabLinks;

   // Скрваем все элементы с классом "aw-vertical-tabs__content-text"
   tabContent = document.getElementsByClassName("aw-vertical-tabs__content-text");
   if (tabContent) {
      for (i = 0; i < tabContent.length; i++) {
         tabContent[i].style.display = "none";
      }
   }

   // Для всех элементов с class="aw-vertical-tabs__tabs-link" убираем класс с модификатором --active
   tabLinks = document.getElementsByClassName("aw-vertical-tabs__tabs-link");
   if (tabLinks) {
      for (i = 0; i < tabLinks.length; i++) {
         tabLinks[i].addEventListener('click', function (event) {

            if (event.target.tagName === 'SPAN' && event.target.closest('[data-content]'))
               return

            let parentForContent = document.getElementById(event.target.dataset.content).parentElement;

            // Проверка содержится ли активный class у всех кнопок
            for (i = 0; i < tabLinks.length; i++) {
               if (tabLinks[i].classList.contains('aw-vertical-tabs__tabs-link--active')) {
                  tabLinks[i].classList.remove('aw-vertical-tabs__tabs-link--active')
               }
            }

            // Проверка содержится ли class для display block у всех табов
            for (let element of parentForContent.children) {
               if (element.classList.contains('aw-display-block')) {
                  element.classList.remove('aw-display-block')
               }
            }

            document.getElementById(event.target.dataset.content).classList.add('aw-display-block')
            event.target.className += " aw-vertical-tabs__tabs-link--active";
         })
      }
   }
}
;// CONCATENATED MODULE: ./src/js/app.js


document.addEventListener('DOMContentLoaded', function () {
   isWebp();
   // Стили для li подменю в шапке десктопа
   subMenuLiStylesOl(".aw-submenu-wrapper", true);
   // Стили для li подменю в шапке мобилки
   subMenuLiStylesOl(".aw-submenu-wrapper-mobile");

   // Стрелки для пунктов с подменю для десктопа
   addArrowToSubmenuParent(".aw-second-header > .container > ul:first-child > li", ".aw-submenu-wrapper", "aw-submenu-li");
   // Стрелки для пунктов с подменю для мобилки
   addArrowToSubmenuParentMobile(".aw-second-header > .container > ul:nth-child(2) > li > ul > li", ".aw-submenu-wrapper-mobile", "aw-submenu-li-mobile");

   // Аккордеон для FAQ
   accordion("aw-faq__accordion__button", "aw-active-accordion", false, "margin-top: -7px;");
   // Аккордеон для подменю шапки
   accordion("submenu__accordions-button", "aw-submenu-header-accordion-active", false);
   // Аккордеон в сайдбаре
   accordion("aw-aside__card-top-spiele__accordions-dropdown", "aw-submenu-sidebar-accordion-active", false, "", "aw-submenu-sidebar-parent-active");
   // Аккордеон для подменю шапки в мобилке
   accordion("aw-submenu-li-mobile", "aw-submenu-li-mobile-active", true, "padding: 12px 16px;");
   // Аккордеон для подменю сайдбара в мобилке
   accordion("aw-aside__card-top-spiele__accordions-button", "aw-submenu-li-mobile-active", ".aw-aside__card-top-spiele__accordions-button > ul", "padding-left: 32px;");
   // Аккордеон для Overview Casino на 2 странице
   accordion("aw-casino-overview__accordion-button", "aw-casino-overview__accordion-active", false);

   // Аккордеон для Casino lists
   accordionCasinoList("aw-casinos__table-info", "aw-casinos__table-info__arrow-down__active", '', 'aw-casinos__table-dropdown-panel__active');

   // Аккордеон для Our Principles на странице About Us в мобилке
   accordionAboutUs("aw-accordion-tabs__accordion-button", "aw-accordion-tabs__accordion-active-button", "aw-accordion-tabs__accordion-active-wrapper");

   // Выезжающее меню в мобилке
   clickMobileMenuItem();

   // Вертикальные табы на странице About Us
   openVerticalTab();

   // Попап на странице Blog Separate
   const promoPopupClose = document.querySelector(".aw-promo-popup__close");
   const promoPopup = document.querySelector(".aw-promo-popup");
   if (promoPopup && promoPopupClose) {
      promoPopupClose.addEventListener("click", function () {
         promoPopup.style.display = "none";
      })
   }

   // Инициализация Swiper на главной
   const swiperMain = new Swiper('.swiper-main', {
      direction: 'horizontal',
      allowTouchMove: true,
      // mousewheel: true,

      // Навигация
      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
         disabledClass: 'aw-swiper-disabled-button'
      },
      pagination: {
         el: '.swiper-pagination',
         type: 'bullets',
      },

      breakpoints: {
         320: {
            slidesPerView: 1,
            spaceBetween: 20
         },
         // when window width is >= 769px
         769: {
            slidesPerView: "auto", // для слайдов разной ширины
            spaceBetween: 24,
         },
      },
      on: {
         init: function () {
            checkArrowAndPagination();
         },
         resize: function () {
            checkArrowAndPagination();
         }
      }
   });

   // Инициализация Swiper на странице Review ниже
   const swiperReview = new Swiper('.swiper-review', {
      direction: 'horizontal',
      allowTouchMove: true,
      mousewheel: true,

      // Навигация
      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
         disabledClass: 'aw-swiper-disabled-button'
      },
      pagination: {
         el: '#bulletsMoreTestimonials',
         type: 'bullets',
      },

      breakpoints: {
         320: {
            slidesPerView: "auto",
            spaceBetween: 20
         },
         // when window width is >= 769px
         769: {
            slidesPerView: "auto", // для слайдов разной ширины
            spaceBetween: 24,
            slidesPerGroup: 1
         },
      },
      on: {
         init: function () {
            checkArrowAndPagination();
         },
         resize: function () {
            checkArrowAndPagination();
         }
      }
   });

   // Инициализация Swiper на странице Review header
   const swiperReviewHeader = new Swiper('.swiper-review-header', {
      // direction: 'horizontal',
      allowTouchMove: true,
      mousewheel: true,
      slidesPerView: "auto",

      // Навигация
      pagination: {
         el: '#bulletsHeroReviewCasino',
         type: 'bullets',
      },

      breakpoints: {
         // when window width is >= 320px
         320: {
            enabled: true,
            spaceBetween: 20
         },
         // when window width is >= 533px
         533: {
            enabled: false,
            spaceBetween: 0
         }
      }
   });

   const sliderBlogPopularNews = $('.slider-blog-popular-news');
   if (sliderBlogPopularNews) {
      sliderBlogPopularNews.slick({
         rows: 3,
         slidesPerRow: 1,
         arrows: false,
         dots: true,
         dotsClass: 'aw-page-navigation'
      });

      // sliderBlogPopularNews.on('wheel', (function(e) {
      //    e.preventDefault();
      //
      //    if (e.originalEvent.deltaY < 0) {
      //       $(this).slick('slickNext');
      //    } else {
      //       $(this).slick('slickPrev');
      //    }
      // }));
   }

   function checkArrowAndPagination() {
      const swiperPrev = document.querySelector('.swiper-button-prev');
      const swiperNext = document.querySelector('.swiper-button-next');
      const swiperPagination = document.querySelector('.swiper-pagination');
      if (window.innerWidth > 993) {
         swiperPrev.style.display = 'flex';
         swiperNext.style.display = 'flex';
         swiperPagination.style.display = 'none';
      } else {
         swiperPrev.style.display = 'none';
         swiperNext.style.display = 'none';
         swiperPagination.style.display = 'block';
      }
   }

   // Логика поисковой строки
   const form = document.querySelector('#input-form')
   form.addEventListener('focusout', () => form.value = '')

   // Выпадающие блоки с информацией
   const rotateInfoButtons = document.querySelectorAll('[data-rotate-button]')
   let infoBlockCurrentState
   let info
   let rotateInfoArrow

   rotateInfoButtons.forEach(btn => {
      btn.addEventListener('click', (e) => {
         info = e.currentTarget.querySelector('.aw-info')
         rotateInfoArrow = e.currentTarget.querySelector('[data-rotate-arrow]')

         if (infoBlockCurrentState) {
            info.classList.add('none')

            if (rotateInfoArrow && rotateInfoArrow !== null) {
               rotateInfoArrow.classList.remove('rotate')
            }
            infoBlockCurrentState = false
         } else {
            info.classList.remove('none')

            if (rotateInfoArrow && rotateInfoArrow !== null) {
               rotateInfoArrow.classList.add('rotate')
            }
            infoBlockCurrentState = true
         }
      })
   })
   document.addEventListener('click', (e) => {
      if (e.target.closest('[data-rotate-button]'))
         return

      if (infoBlockCurrentState) {
         info.classList.add('none')

         if (rotateInfoArrow && rotateInfoArrow !== null) {
            rotateInfoArrow.classList.remove('rotate')
         }
         infoBlockCurrentState = false
      }
   })

   // Выпадающая таблица в hero
   const hideShowTable = document.querySelector('#hideShowTable')
   const tableWrapper = document.querySelector('.aw-hero.container .aw-table-wrapper')
   const arrowTable = document.querySelector('#arrowTable')

   if (hideShowTable && tableWrapper && arrowTable) {
      hideShowTable.addEventListener('click', () => {
         const hideShowTableSpan = hideShowTable.querySelector('span')
         arrowTable.classList.toggle('rotate')

         if (hideShowTableSpan.textContent.toUpperCase() === hideShowTableSpan.dataset.open.toUpperCase()) {
            hideShowTableSpan.innerHTML = `<strong>${hideShowTableSpan.dataset.close.toUpperCase()}</strong>`
         } else {
            hideShowTableSpan.innerHTML = `<strong>${hideShowTableSpan.dataset.open.toUpperCase()}</strong>`
         }

         if (tableWrapper.style.maxHeight) {
            tableWrapper.style.maxHeight = null;
            tableWrapper.style.marginTop = '0'
         } else {
            tableWrapper.style.maxHeight = tableWrapper.scrollHeight + "px";
            tableWrapper.style.marginTop = '24px'
         }
      })
   }

   // Демо слота
   const slotDemo = document.querySelector('.aw-slot-demo');
   if (slotDemo) {
      const playButton = slotDemo.querySelector('.aw-info-card-in-hero__left-play-free-button')
      const iframeWrapper = slotDemo.nextElementSibling
      const iframe = iframeWrapper.querySelector('iframe')
      playButton.addEventListener('click', () => {
         slotDemo.classList.add('none')
         iframe.src = iframe.dataset.src
         iframeWrapper.classList.remove('none')
      })
   }

   // Прилипающая шапка
   var sticky = new Sticky('.selector');

   // Кнопка "Наверх"
   const goTopBtn = document.querySelector('#toTopButton');
   const goTopBtnMobile = document.querySelector('#toTopButtonMobile');

   if (goTopBtn) {
      window.addEventListener('scroll', function () {
         if (window.pageYOffset > 600) {
            goTopBtn.classList.add('show');
         } else {
            goTopBtn.classList.remove('show');
         }
      });

      goTopBtn.addEventListener('click', (e) => {
         e.preventDefault()
         const scrollTarget = document.querySelector(e.target.getAttribute('href'))
         const topOffset = document.querySelector('#main').offsetHeight
         const elementPosition = scrollTarget.getBoundingClientRect().top
         const offsetPosition = elementPosition - topOffset;

         window.scrollBy({
            top: offsetPosition,
            behavior: 'smooth'
         });
      })
   }

   if (goTopBtnMobile) {
      goTopBtnMobile.addEventListener('click', (e) => {
         e.preventDefault()
         const scrollTarget = document.querySelector(e.target.getAttribute('href'))
         const topOffset = document.querySelector('#main').offsetHeight
         const elementPosition = scrollTarget.getBoundingClientRect().top
         const offsetPosition = elementPosition - topOffset;

         window.scrollBy({
            top: offsetPosition,
            behavior: 'smooth'
         });
      })
   }

   // Убираем класс прилипания при ширине меньше 994
   // if (document.documentElement.clientWidth <= 994) {
   // 	document.querySelector('header').classList.remove('selector')
   // }

   const filterContainerForReviews = document.querySelector('.aw-filter-elemnts-container');
   if (filterContainerForReviews) {
      var mixer = mixitup(filterContainerForReviews, {
         animation: {
            duration: 300
         }
      });
   }

   const affiliateContainer = document.querySelector('.aw-affiliate-container');
   if (affiliateContainer) {
      var classesOfFirstTable = affiliateContainer.querySelector('table').classList
      var lastClassOfFirstTable = classesOfFirstTable[classesOfFirstTable.length - 1]

      var mixerAffiliate = mixitup(affiliateContainer, {
         load: {
            filter: `.${lastClassOfFirstTable}`
         },
         animation: {
            // enable: false,
            duration: 300
         }
      });
   }

   // Добавляем к последнему элементу списка активный класс на странице About Us
   const aboutUsList = document.querySelector('ul.is-style-our-history')
   if (aboutUsList)
      aboutUsList.lastElementChild.classList.add('aw-our-history__active-list')

   /**
    * Popup Gallery в hero на странице Reviews Casino
    */
   // * Main Elements
   const lightboxCard = document.querySelectorAll('.aw-hero__preview-cards__card')
   const lightboxArray = Array.from(lightboxCard) // массив нод листа lightboxCard
   const lastCard = lightboxArray.length - 1
   const lightboxContainer = document.querySelector('.aw-hero__preview-lightbox-container')
   const lightboxImage = document.querySelector('.aw-hero__preview-lightbox-img')
   let activeCard

   // * Buttons
   const lightboxButtons = document.querySelectorAll('.aw-hero__preview-lightbox-btn')
   const lightboxButtonRight = document.querySelector('#lightboxRight')
   const lightboxButtonLeft = document.querySelector('#lightboxLeft')
   const lightboxButtonClose = document.querySelector('.aw-hero__preview-lightbox-close-btn')

   // * Functions
   const showLightBox = () => { lightboxContainer.classList.add('aw-lightbox-active') }
   const hideLightBox = () => { lightboxContainer.classList.remove('aw-lightbox-active') }
   const setActiveImage = (element, forCard = false) => {
      if (forCard === true) {
         lightboxImage.src = element.querySelector('img').dataset.imagesrc
      } else {
         lightboxImage.src = element.parentNode.querySelector('img').dataset.imagesrc
      }
      activeCard = lightboxArray.indexOf(element)
      removeButtonInactiveClass()
      switch (activeCard) {
         case 0:
            lightboxButtonLeft.classList.add('aw-btn-inactive')
            break
         case lastCard:
            lightboxButtonRight.classList.add('aw-btn-inactive')
            break
         default:
            removeButtonInactiveClass()
      }
   }
   const removeButtonInactiveClass = () => {
      lightboxButtons.forEach(btn => {
         btn.classList.remove('aw-btn-inactive')
      })
   }
   const removeButtonAnimation = () => {
      lightboxButtons.forEach(btn => {
         setTimeout(function () { btn.blur() }, 200)
      })
   }

   const transitionSlidesLeft = () => {
      lightboxButtonLeft.focus()
      activeCard === 0 ? setActiveImage(lightboxArray[lastCard], true) : setActiveImage(lightboxArray[activeCard].previousElementSibling, true)
      removeButtonAnimation()
   }
   const transitionSlidesRight = () => {
      lightboxButtonRight.focus()
      activeCard === lastCard ? setActiveImage(lightboxArray[0], true) : setActiveImage(lightboxArray[activeCard].nextElementSibling, true)
      removeButtonAnimation()
   }
   const transitionSlideHandler = (moveItem) => {
      moveItem.includes('lightboxLeft') ? transitionSlidesLeft() : transitionSlidesRight()
   }

   // * Event Listeners
   lightboxCard.forEach(element => {
      element.addEventListener('click', (e) => {
         showLightBox()
         setActiveImage(element, true)
      })
   })

   if (lightboxContainer) {
      lightboxContainer.addEventListener('click', () => { hideLightBox() })
   }

   lightboxButtons.forEach(btn => {
      btn.addEventListener('click', (e) => {
         e.stopPropagation()
         transitionSlideHandler(e.currentTarget.id)
      })
   })

   if (lightboxButtonClose) {
      lightboxButtonClose.addEventListener('click', () => { hideLightBox() })
   }

   /**
    * Копирование в буфер промокода 
    */
   // * Elements
   const copyButtons = document.querySelectorAll('[data-copybutton]')

   // * Functions
   const copyPromoToClipboard = (button) => {
      const promoCode = button.querySelector('span').textContent
      const hiddenTextarea = document.createElement('textarea');
      const tooltip = button.querySelector('span.aw-tooltiptext')
      hiddenTextarea.value = promoCode;
      hiddenTextarea.setAttribute('readonly', '');
      hiddenTextarea.style.position = 'absolute';
      hiddenTextarea.style.left = '-9999px';
      document.body.appendChild(hiddenTextarea);
      hiddenTextarea.select();
      document.execCommand('copy');
      document.body.removeChild(hiddenTextarea);
      tooltip.innerHTML = "Copied: " + promoCode
   }

   // * Event Listeners
   copyButtons.forEach(button => {
      button.addEventListener('click', () => {
         copyPromoToClipboard(button)
      })
      button.addEventListener('mouseleave', () => {
         const tooltip = button.querySelector('span.aw-tooltiptext')
         tooltip.innerHTML = "Copy to clipboard"
      })
   })

   // Замена класса иконок для рейтинга в форме
   const starRatingContactForm = document.querySelector('.wpcf7-uacf7_star_rating')
   if (starRatingContactForm) {
      let allStarIcons = document.querySelectorAll('.icon > i')
      allStarIcons.forEach((icon) => {
         icon.classList = 'fa fa-star'
      })
   }

   // Sticky Sidebar
   // [...document.getElementsByClassName('js-sticky')].forEach((e, i, a) => {
   //    console.log(i)
   //    e.style.top = (i > 0) ? `${parseFloat(getComputedStyle(a[i-1]).height)+parseFloat(getComputedStyle(a[i-1]).top)}px` : `0px`
   // });

   /**
    * Копировать текущий URL поста
    */
   const sharePageLinkButton = document.querySelector('#sharePageLink')

   if (sharePageLinkButton) {
      // * Functions
      const copyUrlToClipboard = () => {
         const url = window.location.href
         const hiddenTextarea = document.createElement('textarea');
         hiddenTextarea.value = url;
         hiddenTextarea.setAttribute('readonly', '');
         hiddenTextarea.style.position = 'absolute';
         hiddenTextarea.style.left = '-9999px';
         document.body.appendChild(hiddenTextarea);
         hiddenTextarea.select();
         document.execCommand('copy');
         document.body.removeChild(hiddenTextarea);
      }


      // * Event Listeners
      sharePageLinkButton.addEventListener('click', () => {
         copyUrlToClipboard()
      })
   }


   /**
    * Логика для инпута поиска в шапке
    */
   const inputLookup = document.querySelector('#input-form')
   const parentNav = inputLookup.closest('.aw-first-header')
   const main = parentNav.closest('header').nextElementSibling

   inputLookup.addEventListener('click', (e) => {
      parentNav.classList.add('left-item__input-active')
      // main.style.backgroundColor = "red";
   })
   // при клике в любом месте окна браузера
   window.addEventListener('click', e => {
      if (e.target !== inputLookup && parentNav.classList.contains('left-item__input-active')) {
         parentNav.classList.remove('left-item__input-active')
      }
   })
});
/******/ })()
;