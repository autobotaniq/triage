!function(e){"use strict";var i=function(e){let i,n=e.find(".swiper-container"),t=n.data("space-between");i=new Swiper(n,{slidesPerView:3,spaceBetween:t,pagination:{el:".swiper-pagination",clickable:!0}})};void 0===window.acf?e(".by-testimonial").each(function(){i(e(this))}):window.acf.addAction("render_block_preview/type=testimonials-block-acf",i)}(jQuery);