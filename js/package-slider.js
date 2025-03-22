$(document).ready(function () {
  // Main Slider
  $(".main-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: false,
    arrows: true,
    fade: true,
    asNavFor: ".thumbnail-slider",
  });

  // Thumbnail Slider
  $(".thumbnail-slider").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".main-slider",
    infinite: false,
    focusOnSelect: true,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        },
        breakpoint: 480,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $(".up-accomm-feat__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true, // Add arrows for navigation
    dots: false, // Add dots for better UI
  });
});
