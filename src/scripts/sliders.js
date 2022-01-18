import Swiper, { Pagination, Navigation, Autoplay } from "swiper";
function convertRemToPixels(rem) {
  return rem * parseFloat(getComputedStyle(document.documentElement).fontSize);
}
jQuery(document).ready(function ($) {
  let gallerySlider = new Swiper("#gallery-slider .swiper ", {
    modules: [Navigation, Autoplay],
    slidesPerView: 3,
    spaceBetween: convertRemToPixels(70),
    loop: true,
    speed: 1000,
    // autoplay: {
    //   delay: 3000,
    // },
    navigation: {
      nextEl: "#gallery-slider .swiper-button-next",
      prevEl: "#gallery-slider .swiper-button-prev",
    },
  });
  let singlePhotoSlider = new Swiper(".single-gallery-slider ", {
    modules: [Navigation],
    slidesPerView: '1.9',
    loop: true,
    spaceBetween: 30,
    navigation: {
      nextEl: ".top-bar .swiper-button-next",
      prevEl: ".top-bar .swiper-button-prev",
    },
  });
  let singleGallerySliderInner = new Swiper(".single-gallery .single-gallery-slider ", {
    modules: [Navigation],
    slidesPerView: '1.9',
    loop: true,
    spaceBetween: 30,
    navigation: {
      nextEl: ".single-gallery .swiper-button-next",
      prevEl: ".single-gallery .swiper-button-prev",
    },
  });


  // Extract wp gallery images
  function createSliderFromGallery(sliderSelector) {
    console.log(sliderSelector)
    let imgs = '';
    $(sliderSelector).each(function (index) {
      console.log(sliderSelector + ' img')
      return imgs = $(sliderSelector + ' img');
    })

    let imgsSrc = []
    for (var i = 0; i < imgs.length; i++) {
      imgsSrc.push(imgs[i].src);
    }
    let swiperSlides = ``;
    for (let i = 0; i < imgsSrc.length; i++) {
      swiperSlides += `<div class="swiper-slide"><img src="${imgsSrc[i]}"></div>`
    }
    let swiperMarkup = `<div class="swiper gallery-slider">
      <div class="swiper-wrapper">
      ${swiperSlides}
      </div>
      <div class="swiper-btns-wrapper">
              <div class="swiper-button swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
              <div class="swiper-button swiper-button-next"><i class="fas fa-chevron-right"></i></div>
        </div>
      </div>`;
    $(sliderSelector).replaceWith(swiperMarkup);
  }
  if ($('figure.swiper-slider').length) {
    $("figure.swiper-slider").each(function (index) {
      $(this).addClass('slider-' + (index + 1));
    })
    $("figure.swiper-slider").each(function (index) {
      createSliderFromGallery('figure.swiper-slider.slider-' + (index + 1), (index + 1));
    });
    let newsLetterInnerSlider = new Swiper(".gallery-slider ", {
      modules: [Navigation],
      slidesPerView: '1.7',
      loop: true,
      spaceBetween: 30,
      navigation: {
        nextEl: ".gallery-slider .swiper-button-next",
        prevEl: ".gallery-slider .swiper-button-prev",
      },
    });
  }
});
