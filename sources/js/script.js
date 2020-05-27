(function ($) {
  "use strict";

  let $navOpen = $('.nav-open'),
    $navSearch = $('.tg-header__mobile-nav-search');

  $navOpen.on('click', function () {
    let $this = $(this);

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

  $(document).mouseup(function (e){
    if (!$search.is(e.target) && $search.has(e.target).length === 0) {
      $search.find('.tg-search__input').fadeOut(300)
    }
  });
  /* -------------------- End Search -------------------- */


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