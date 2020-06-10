(function ($) {
  "use strict";

  let $navOpen = $('.nav-open'),
      $navSearch = $('.tg-header__mobile-nav-search');

  $navOpen.on('click', function () {
    let $this = $(this);

    $('body').toggleClass('tg-body-hidden');
    $this.toggleClass('active');
    $navSearch.toggleClass('active-nav')
  })


  /* --------------------- Search --------------------- */
  let $search = $('.tg-search');
  $search.each(function () {
    let $this = $(this),
        $input = $this.find('.tg-search__input'),
        $open = $this.find('.tg-search__open');

    $open.on('click', function () {
      $input.fadeToggle(300)
    })
  })

  $(document).mouseup(function (e) {
    if (!$search.is(e.target) && $search.has(e.target).length === 0) {
      $search.find('.tg-search__input').fadeOut(300)
    }
  });
  /* -------------------- End Search -------------------- */


  /* ------------------ Header slider ----------------- */
  let headerSlider = $('.tg-header-slider');
  headerSlider.each(function () {
    let $this = $(this),
        swiperContainer = $this.find('.swiper-container'),
        swiperPagination = $this.find('.tg-swiper-pagination');

    new Swiper(swiperContainer, {
      loop: true,
      speed: 500,
      autoHeight: true,
      pagination: {
        el: swiperPagination,
        clickable: true
      },
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      autoplay: {
        delay: 5000,
      },
    });
  })
  /* --------------- End Header slider ---------------- */


  let $exploreSlider = $('.tg-explore-slider');
  $exploreSlider.each(function () {
    let $this = $(this),
        swiperContainer = $this.find('.swiper-container');

    new Swiper(swiperContainer, {
      speed: 500,
      spaceBetween: 40,
      freeMode: true,
      slidesPerView: 'auto'
    });
  })


  /* -------------------- Location -------------------- */
  let windowWidth = window.innerWidth || $(window).width();

  let $location      = $('.tg-location'),
      $marker        = $location.find('.tg-location-map__marker'),
      $locationItem  = $location.find('.tg-location-item');

  if (windowWidth > 992) {
    $locationItem.each(function () {

      $(this).on('click', function () {
        let $this = $(this),
            mapId = $(this).data('map-id');

        $locationItem.removeClass('item-active');
        $marker.removeClass('marker-active');

        $this.addClass('item-active');
        $(mapId).addClass('marker-active');
      })
    });

    $marker.each(function () {
      $(this).on('click', function () {
        let $this = $(this),
            markerId = $(this).data('marker-id');

        $locationItem.removeClass('item-active');
        $marker.removeClass('marker-active');

        $this.addClass('marker-active');
        $('[data-map-id="' + markerId + '"]').addClass('item-active');
      })
    });

    $(document).mouseup(function (e) {
      if (!$locationItem.is(e.target) && $locationItem.has(e.target).length === 0) {
        $locationItem.removeClass('item-active');
        $marker.removeClass('marker-active');
      }

      if (!$marker.is(e.target) && $marker.has(e.target).length === 0) {
        $marker.removeClass('item-active');
        $marker.removeClass('marker-active');
      }
    });
  }
  /* ------------------- End Location ------------------- */


  /* ------------ Deleting placeholder focus ------------ */
  let inputPlaceholder = $('input, textarea');
  inputPlaceholder.on('focus', function () {
    $(this).data('placeholder', $(this).attr('placeholder'));
    $(this).attr('placeholder', '')
  });

  inputPlaceholder.on('blur', function () {
    $(this).attr('placeholder', $(this).data('placeholder'))
  });
  /* ---------- End Deleting placeholder focus ---------- */


})(jQuery);