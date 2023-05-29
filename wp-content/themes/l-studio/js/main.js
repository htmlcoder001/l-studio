/* @author web@2dsd.ru | webtitov.ru */
'use strict';

document.addEventListener("DOMContentLoaded", () => {
  const WebT = {};

  WebT.settings = {
    modal_active_class: '--modal-show'
  };

  WebT.elements = {
    scroll_links: document.querySelectorAll('a[href^="#"]'),
    modal_toggle: document.querySelectorAll('[data-modal-toggle]'),
    modal_box: document.querySelectorAll('[data-modal]'),
    overlay: document.querySelector('.theme-overlay'),
    close_modal: document.querySelectorAll('[data-modal-close]'),
    project_images: document.querySelectorAll('.js-scrollable-image'),
    tooltip_links: document.querySelectorAll('.js-tooltip'),
    promo_buttons: document.querySelectorAll('[data-modal-toggle="promo"]'),
    ajax_forms: document.querySelectorAll('.ajax-form')
  };

  /* Check if click outside target element */
  const isClickOutside = ($target, $class) => {
    const closeTarget = (e) => {
      if (!e.target.classList.contains($class)) {
        $target.classList.remove($class);
      }
    };
    if ($target === 0) {
      document.body.removeEventListener('click', closeTarget);
    } else {
      document.body.addEventListener('click', closeTarget);
    }
  };

  /* Close all modals */
  const closeModals = () => {
    // close all modals
    for (let i=0; i < WebT.elements.modal_box.length; i++) {
      WebT.elements.modal_box[i].classList.remove(WebT.settings.modal_active_class);
    }
    // remove active classes from modal toggle buttons
    for (let i=0; i < WebT.elements.modal_toggle.length; i++) {
      WebT.elements.modal_toggle[i].classList.remove(WebT.settings.modal_active_class);
    }
    // close overlay
    WebT.elements.overlay.classList.remove(WebT.settings.modal_active_class);
  }

  /* Stick header on scroll */
  const changeHeaderClass = () => {
    let scrollPosY = window.pageYOffset | document.body.scrollTop,
      header = document.getElementsByTagName('header')[0];

    if(scrollPosY  > 100) {
      header.classList.add('sticky-header');
    } else if(scrollPosY <= 100) {
      header.classList.remove('sticky-header');
    }
  };

  /* Modals */
  (() => {
    // Add click event to close modals
    for (let i=0; i < WebT.elements.close_modal.length; i++) {
      WebT.elements.close_modal[i].addEventListener('click', () => {
        closeModals();
      });
    }
    // Add click event to open target modal
    for (let i=0; i < WebT.elements.modal_toggle.length; i++) {
      WebT.elements.modal_toggle[i].addEventListener('click', () => {
        let this_toggle = WebT.elements.modal_toggle[i],
            target_modal = this_toggle.getAttribute('data-modal-toggle');
        // if nav modal opened
        if (target_modal === 'nav' && this_toggle.classList.contains(WebT.settings.modal_active_class)) {
          closeModals();
          WebT.elements.modal_toggle[i].classList.remove(WebT.settings.modal_active_class);
        } else {
          closeModals();
          document.querySelector(`[data-modal='${target_modal}']`).classList.add(WebT.settings.modal_active_class);
          WebT.elements.overlay.classList.add(WebT.settings.modal_active_class);
          WebT.elements.modal_toggle[i].classList.add(WebT.settings.modal_active_class);
        }
      });
    }
  })();

  /* Promo modal */
  (() => {
    if (typeof WebT.elements.promo_buttons !== 'undefined' || WebT.elements.promo_buttons !== null) {
      for (let i=0; i < WebT.elements.promo_buttons.length; i++) {
        WebT.elements.promo_buttons[i].addEventListener('click', () => {
          let promo_title = WebT.elements.promo_buttons[i].getAttribute('data-promo-name'),
              promo_text = WebT.elements.promo_buttons[i].getAttribute('data-promo-text'),
              promo_image = WebT.elements.promo_buttons[i].getAttribute('data-promo-image');

          document.getElementById('modal_promo_name').textContent = promo_title;
          document.getElementById('modal_promo_text').textContent = promo_text;
          document.getElementById('modal_promo_type').setAttribute('value', promo_title);
          document.getElementById('modal_promo_image').setAttribute('src', promo_image);
          document.getElementById('modal_promo_image').setAttribute('alt', 'L-STUDIO - ' + promo_title);
        });
      }
    }
  })();

  /* Promo carousel */
  (() => {
    let promo_carousel =  '#promo_carousel';
    let swiper = new Swiper(promo_carousel, {
      spaceBetween: 20,
      slidesPerView: 2,
      navigation: {
        nextEl: '.promo-arrows__next',
        prevEl: '.promo-arrows__prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      breakpoints: {
        320: {
          slidesPerView: 1
        },
        960: {
          slidesPerView: 2
        }
      }
    });
  })();

  /* Team carousel */
  (() => {
    let team_carousel =  '#team_carousel';
    let swiper = new Swiper(team_carousel, {
      spaceBetween: 20,
      slidesPerView: 2,
      navigation: {
        nextEl: '.team-arrows__next',
        prevEl: '.team-arrows__prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      breakpoints: {
        320: {
          slidesPerView: 1
        },
        768: {
          slidesPerView: 2
        },
        960: {
          slidesPerView: 3
        },
        1024: {
          slidesPerView: 4
        }
      }
    });
  })();

  /* Anchor smooth scroll */
  (() => {
    WebT.elements.scroll_links.forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        closeModals();
        const offset = -30,
          element = document.querySelector(this.getAttribute('href')),
          target = element.getBoundingClientRect().top + window.pageYOffset + offset;
        window.scrollTo({top: target, behavior: 'smooth'});
      });
    });
  })();

  /* AJAX form send */
  (() => {
    function sendData($data) {
      const XHR = new XMLHttpRequest();

      XHR.addEventListener("error", function (event) {
        alert('Произошла ошибка');
        console.log('Не получилось');
      });

      XHR.addEventListener("load", function (event) {
        if (document.body.classList.contains(WebT.settings.modal_active_class)) {
          document.body.classList.remove(WebT.settings.modal_active_class);
        }
        alert('Форма успешно отправлена!');

        for (let value of $data.values()) {
          console.log(value);
        }
      });

      XHR.open('POST', '/form-send.php');
      XHR.send($data);
    }

    // Вешаем на все формы свое событие отправки
    for (let i = 0; i < WebT.elements.ajax_forms.length; i++) {
      WebT.elements.ajax_forms[i].addEventListener('submit', (event) => {

        let form_button = event.target.querySelector('button[type="submit"]');
        const form_data = new FormData(event.target);

        event.preventDefault();

        sendData(form_data);
        form_button.classList.add('--disabled-button');
        form_button.setAttribute('disabled', 'disabled');
      }, false);
    }
  })();

  /* todo: Contacts click */
  (() => {

  })();

  /* Masonry grid */

    function resizeGridItem(item){
      let grid = document.getElementsByClassName("pricelist-wrapper__grid")[0];
      let rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
      let rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
      //let rowSpan = Math.ceil((item.querySelector('.pricelist-item__list').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap));
      let rowSpan = Math.ceil((item.getBoundingClientRect().height+rowGap)/(rowHeight+rowGap));
      item.style.gridRowEnd = "span "+rowSpan;
      item.style.height = '100%';
    }

    function resizeAllGridItems(){
      let allItems = document.getElementsByClassName("pricelist-grid__item");
      for(let x=0;x<allItems.length;x++){
        resizeGridItem(allItems[x]);
      }
    }

    function resizeInstance(instance){
      //let item = instance.elements[0];
      resizeGridItem(instance);
    }



    let allItems = document.getElementsByClassName("pricelist-grid__item");
    for(let x=0;x<allItems.length;x++){
      resizeInstance(allItems[x]);
    }

  
  /* Functions init */
  window.addEventListener('load', resizeAllGridItems);
  window.addEventListener('resize', resizeAllGridItems);


  window.addEventListener('load', changeHeaderClass);
  window.addEventListener('scroll', changeHeaderClass);

  /* Phone inputs mask */
  jQuery('input[type=tel]').mask('+7 (000) 000-00-00');
});