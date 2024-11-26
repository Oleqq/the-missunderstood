
// swiper js
document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.new-articles__swiper', {
      
      slidesPerView: 4,  
      slidesToScroll: 1, 
      spaceBetween: 13,  
      navigation: { 
        nextEl: '.new-articles__swiper-button-next',
        prevEl: '.new-articles__swiper-button-prev',
      },
    });
  });

document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.travel-guides__slider', {
      
      
      slidesPerView: 4,  
      
      spaceBetween: 28,  
      navigation: { 
        nextEl: '.new-articles__swiper-button-next',
        prevEl: '.new-articles__swiper-button-prev',
      },
    });
  });
  