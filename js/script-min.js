!function(e){"use strict";function a(){if(e(".main-header").length){var a=e(window).scrollTop(),n=e(".main-header"),t=e(".scroll-to-top");a>=1?(n.addClass("fixed-header"),t.fadeIn(300)):(n.removeClass("fixed-header"),t.fadeOut(300))}}if(a(),e(".main-header li.dropdown ul").length&&e(".main-header .navigation li.dropdown").append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>'),e(".mobile-menu").length){var n=e(".main-header .nav-outer .main-menu .navigation").html();e(".mobile-menu").append('<div class="close-btn"><span class="icon flaticon-cancel-music"></span></div>'),e(".mobile-menu .navigation").append(n),e(".sticky-header .navigation").append(n),e(".mobile-menu .close-btn").on("click",function(){e("body").removeClass("mobile-menu-visible")}),e(".mobile-menu li.dropdown .dropdown-btn").on("click",function(){e(this).prev("ul").slideToggle(500)}),e(".mobile-nav-toggler").on("click",function(){e("body").addClass("mobile-menu-visible")}),e(".mobile-menu .menu-backdrop,.mobile-menu .close-btn").on("click",function(){e("body").removeClass("mobile-menu-visible")})}if(e(".schedule-block").length&&(e(".schedule-block.active").find(".lower-content").slideDown(),e(".schedule-block .toggle-btn").on("click",function(){e(this).parents(".schedule-block").toggleClass("active"),e(this).parents(".schedule-block").find(".lower-content").slideToggle(400),e(this).parents(".schedule-block").siblings().find(".lower-content").slideUp(400),e(this).parents(".schedule-block").siblings().removeClass("active")})),e(".date-btn").length){var t=e(".date-btn").attr("data-last-date");e(".date-btn").on("click",function(){e(this).html(t)})}if(e("#search-popup").length&&(e(".search-box-btn").on("click",function(){e("#search-popup").addClass("popup-visible")}),e(document).keydown(function(a){27==a.keyCode&&e("#search-popup").removeClass("popup-visible")}),e(".close-search,.search-popup .overlay-layer").on("click",function(){e("#search-popup").removeClass("popup-visible")})),e(".banner-carousel").length&&e(".banner-carousel").owlCarousel({animateOut:"fadeOut",animateIn:"fadeIn",loop:!0,margin:0,nav:!0,smartSpeed:500,autoHeight:!0,autoplay:!0,autoplayTimeout:5e3,navText:['<span class="fa fa-angle-left">','<span class="fa fa-angle-right">'],responsive:{0:{items:1},600:{items:1},1024:{items:1}}}),e(".single-item-carousel").length&&e(".single-item-carousel").owlCarousel({loop:!0,margin:0,nav:!0,smartSpeed:500,autoplay:!0,navText:['<span class="arrow_carrot-left"></span>','<span class="arrow_carrot-right"></span>'],responsive:{0:{items:1},600:{items:1},1024:{items:1}}}),e(".gallery-carousel").length&&e(".gallery-carousel").owlCarousel({loop:!0,margin:0,nav:!0,smartSpeed:500,autoplay:!0,navText:['<span class="arrow_carrot-left"></span>','<span class="arrow_carrot-right"></span>'],responsive:{0:{items:1},480:{items:2},767:{items:3},800:{items:4},1200:{items:5}}}),e(".sponsors-carousel").length&&e(".sponsors-carousel").owlCarousel({loop:!0,margin:30,nav:!0,lazyLoad:!0,smartSpeed:700,autoplay:!0,navText:['<span class="la la-angle-left"></span>','<span class="la la-angle-right"></span>'],responsive:{0:{items:1},600:{items:2},768:{items:3},1024:{items:4},1200:{items:5}}}),e(".parallax-scene-1").length){var s=e(".parallax-scene-1").get(0);new Parallax(s)}if(e(".parallax-scene-2").length){var s=e(".parallax-scene-2").get(0);new Parallax(s)}if(e(".parallax-scene-3").length){var s=e(".parallax-scene-3").get(0);new Parallax(s)}if(e(".parallax-scene-4").length){var s=e(".parallax-scene-4").get(0);new Parallax(s)}if(e(".parallax-scene-5").length){var s=e(".parallax-scene-5").get(0);new Parallax(s)}function o(){if(e(".masonry-items-container").length){var a=e(window),n=e(".masonry-items-container");n.isotope({itemSelector:".masonry-item",masonry:{columnWidth:1},animationOptions:{duration:500,easing:"linear"}}),a.on("resize",function(){n.isotope({itemSelector:".masonry-item",animationOptions:{duration:500,easing:"linear",queue:!1}})})}}o(),e(".count-box").length&&e(".count-box").appear(function(){var a=e(this),n=a.find(".count-text").attr("data-stop"),t=parseInt(a.find(".count-text").attr("data-speed"),10);a.hasClass("counted")||(a.addClass("counted"),e({countNum:a.find(".count-text").text()}).animate({countNum:n},{duration:t,easing:"linear",step:function(){a.find(".count-text").text(Math.floor(this.countNum))},complete:function(){a.find(".count-text").text(this.countNum)}}))},{accY:0}),e(".tabs-box").length&&e(".tabs-box .tab-buttons .tab-btn").on("click",function(a){a.preventDefault();var n=e(e(this).attr("data-tab"));if(e(n).is(":visible"))return!1;n.parents(".tabs-box").find(".tab-buttons").find(".tab-btn").removeClass("active-btn"),e(this).addClass("active-btn"),n.parents(".tabs-box").find(".tabs-content").find(".tab").fadeOut(0),n.parents(".tabs-box").find(".tabs-content").find(".tab").removeClass("active-tab animated fadeIn"),e(n).fadeIn(300),e(n).addClass("active-tab animated fadeIn")}),e(".accordion-box").length&&e(".accordion-box").on("click",".acc-btn",function(){var a=e(this).parents(".accordion-box"),n=e(this).parents(".accordion");if(!0!==e(this).hasClass("active")&&e(a).find(".accordion .acc-btn").removeClass("active "),e(this).next(".acc-content").is(":visible"))return!1;e(this).addClass("active"),e(a).children(".accordion").removeClass("active-block"),e(a).find(".accordion").children(".acc-content").slideUp(300),n.addClass("active-block"),e(this).next(".acc-content").slideDown(300)}),e(".time-countdown").length&&e(".time-countdown").each(function(){var a=e(this),n=e(this).data("countdown");a.countdown(n,function(a){e(this).html(a.strftime('<div class="counter-column"><span class="count">%D</span>Days</div> <div class="counter-column"><span class="count">%H</span>Hours</div>  <div class="counter-column"><span class="count">%M</span>Minutes</div>  <div class="counter-column"><span class="count">%S</span>Second</div>'))})}),e(".cs-countdown").length&&(e(function(){e("[data-countdown]").each(function(){var a=e(this),n=e(this).data("countdown");a.countdown(n,function(e){a.html(e.strftime("%D days %H:%M:%S"))})})}),e(".cs-countdown").countdown("").on("update.countdown",function(a){e(this).html(a.strftime("<div><span>%m</span><h6>Months</h6></div> <div><span>%D</span><h6>days</h6></div> <div><span>%H</span><h6>Hours</h6></div> <div><span>%M</span><h6>Minutes</h6></div> <div><span>%S</span><h6>Seconds</h6></div>"))})),e(".lightbox-image").length&&e(".lightbox-image").fancybox({openEffect:"fade",closeEffect:"fade",helpers:{media:{}}}),e("#contact-form").length&&e("#contact-form").validate({rules:{name:{required:!0},email:{required:!0,email:!0},message:{required:!0}}}),e(".scroll-to-target").length&&e(".scroll-to-target").on("click",function(){var a=e(this).attr("data-target");e("html, body").animate({scrollTop:e(a).offset().top},1500)}),e(".wow").length&&new WOW({boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!0}).init(),e(window).on("scroll",function(){a()}),e(window).on("load",function(){e(".preloader").length&&e(".preloader").delay(200).fadeOut(500),o()})$("img").hide();}(window.jQuery);