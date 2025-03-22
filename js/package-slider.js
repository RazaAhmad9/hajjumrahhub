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
    arrows: true,
    dots: true,
  });
});
