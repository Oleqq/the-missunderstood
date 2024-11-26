
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
  

// swiper js end


// gallery js
document.querySelectorAll('.faces-of-humanity__tab').forEach((tab) => {
  tab.addEventListener('click', () => {
    // Удаляем активный класс у всех табов
    document.querySelectorAll('.faces-of-humanity__tab').forEach((t) =>
      t.classList.remove('faces-of-humanity__tab--active')
    );
    // Устанавливаем активный класс на кликнутый таб
    tab.classList.add('faces-of-humanity__tab--active');

    // Показываем соответствующую галерею
    const photographer = tab.getAttribute('data-photographer');
    document.querySelectorAll('.faces-of-humanity__grid').forEach((grid) => {
      grid.classList.remove('faces-of-humanity__grid--active');
      if (grid.getAttribute('data-photographer') === photographer) {
        grid.classList.add('faces-of-humanity__grid--active');
      }
    });
  });
});
