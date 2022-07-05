"use strict";

require("slick-carousel");

module.exports = {
  /*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
  $dom: {
    slickSlider: $(".slick-arrows"),
    slickContnet: $(".testimonials__content-wrap"),
  },

  /*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
  init: function () {
    this.$dom.slickSlider.slick({
        slidesToScroll: 1,
        slidesToShow: 1,
        autoplay: false,
        infinite: true,
        speed: 1000,
        dots: false,
        arrows: true,
        nextArrow: '<span class="icon-angle-right"></span>',
        prevArrow: '<span class="icon-angle-left"></span>',
        rows: 0,
        cssEase: "linear",
        asNavFor: ".testimonials__content-wrap",
        adaptiveHeight: true
    });

    this.$dom.slickContnet.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        asNavFor: ".slick-arrows",
        adaptiveHeight: true
      });


  },
};
