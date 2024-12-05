let scrollPercent = 0;  // Прогресс прокрутки от 0 до 1
let targetScrollPercent = 0;  // Целевой прогресс прокрутки

// Определяем изображения в зависимости от ширины экрана
const heroImgs = document.querySelectorAll('.hero__img img');
const heroH1 = document.querySelector('.hero__img h1');
const heroFader = document.querySelector('.hero__fader');

// Функция для обновления анимации
function updateAnimation() {
    // Выбираем активное изображение в зависимости от ширины экрана
    const activeImg = window.innerWidth <= 767 ? document.querySelector('.mobile-img') : document.querySelector('.desktop-img');

    // Масштабирование изображения (максимум 1.26)
    const scaleY = 1 + scrollPercent * 0.26;  // Масштабирование изображения
    activeImg.style.transform = `scale(${scaleY})`;
    activeImg.style.transformOrigin = 'center center';

    // Плавное появление текста
    heroH1.style.opacity = Math.min(scrollPercent * 3, 1);  // Текст появляется быстрее

    // Плавное появление фейдера
    heroFader.style.opacity = Math.min(scrollPercent * 2, 1);  // Фейдер появляется быстрее
}

// Функция для обновления прокрутки
function handleScroll(event) {
    // Обрабатываем изменение прокрутки (с использованием deltaY)
    const scrollDelta = event.deltaY || (event.touches ? event.touches[0].clientY : 0);
    if (scrollDelta) {
        // Модификация прокрутки для плавности (замедляем прокрутку)
        targetScrollPercent += scrollDelta * 0.002;  // Можно подкорректировать скорость прокрутки
        targetScrollPercent = Math.min(Math.max(targetScrollPercent, 0), 1);  // Ограничиваем значения от 0 до 1
    }
}

// Функция для анимации прокрутки и обновления прогресса
function update() {
    // Интерполяция для плавного перехода между текущим и целевым значением
    scrollPercent += (targetScrollPercent - scrollPercent) * 0.1;  // Коэффициент замедления

    // Обновляем анимацию
    updateAnimation();

    // Продолжаем обновлять анимацию
    requestAnimationFrame(update);
}

// Слушаем события колесика мыши и тачскролл
document.addEventListener('wheel', handleScroll, { passive: false });
document.addEventListener('touchmove', handleScroll, { passive: false });

// Начинаем обновление анимации
requestAnimationFrame(update);











document.addEventListener('DOMContentLoaded', function() {
  const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              console.log('Element is visible:', entry.target);
              entry.target.classList.add('animated');
              observer.unobserve(entry.target);
          }
      });
  }, {
      root: null, 
      rootMargin: '0px', 
      threshold: 0.01 
  });

  const sections = document.querySelectorAll('section');
  console.log('Sections found:', sections);  // Логирование выбранных элементов

  sections.forEach(section => {
      observer.observe(section);
  });
});






// swiper js
document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper('.new-articles__swiper', {
      slidesPerView: 4,  
     
      spaceBetween: 13,  
      navigation: { 
          nextEl: '.new-articles__swiper-button-next',
          prevEl: '.new-articles__swiper-button-prev',
      },
      breakpoints: {
          2560: { slidesPerView: 4 },
          1920: { slidesPerView: 4 },
          1440: { slidesPerView: 4 },
          1024: { slidesPerView: 3 },
          991: { slidesPerView: 3 },
          767: { slidesPerView: 2 },
          567: { slidesPerView: 1.1},
          467: { slidesPerView: 1.1 },
          0: { slidesPerView: 1.1 },
      }
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

      breakpoints: {
        2560: {
          slidesPerView: 4,  
        },
        1920: {
          slidesPerView: 4,
        },
        1440: {
          slidesPerView: 4,
        },
        1024: {
          slidesPerView: 3,
        },
        991: {
          slidesPerView: 3,
        },
        767: {
          slidesPerView: 2,
        },
        567: {
          slidesPerView: 1.5,
        },
        467: {
          slidesPerView: 1.3,
        },
        0: {
          slidesPerView: 1.3,
        },
      }
    });
  });
  
  document.addEventListener("DOMContentLoaded", function () {
    if (window.innerWidth < 767) {
      const swiper = new Swiper('.info-section__cards', {
        slidesPerView: 1.3, 
        slidesToScroll: 1,
        
      });
    }
  });
  
// swiper js end


// gallery js
document.querySelectorAll('.faces-of-humanity__tab').forEach((tab) => {
  tab.addEventListener('click', () => {
    
    document.querySelectorAll('.faces-of-humanity__tab').forEach((t) =>
      t.classList.remove('faces-of-humanity__tab--active')
    );
    
    tab.classList.add('faces-of-humanity__tab--active');

   
    const photographer = tab.getAttribute('data-photographer');
    document.querySelectorAll('.faces-of-humanity__grid').forEach((grid) => {
      grid.classList.remove('faces-of-humanity__grid--active');
      if (grid.getAttribute('data-photographer') === photographer) {
        grid.classList.add('faces-of-humanity__grid--active');
      }
    });
  });
});


// gallery dropdown
document.querySelector('.faces-of-humanity__dropdown-button').addEventListener('click', function() {
  const dropdown = document.querySelector('.faces-of-humanity__dropdown');
  dropdown.classList.toggle('open');
});


document.querySelectorAll('.faces-of-humanity__tab').forEach(tab => {
  tab.addEventListener('click', function() {
     
      document.querySelectorAll('.faces-of-humanity__tab').forEach(tab => tab.classList.remove('faces-of-humanity__tab--active'));
      
      this.classList.add('faces-of-humanity__tab--active');
     
      document.querySelector('.faces-of-humanity__dropdown').classList.remove('open');
      
      console.log('Selected photographer:', this.dataset.photographer);
  });
});



// header burger
function toggleMenu() {
  // Select the burger icon and menu
  const burgerIcon = document.querySelector('.burger-icon');
  const burgerMenu = document.querySelector('.burger-menu');

  // Toggle the active/open classes
  burgerIcon.classList.toggle('active');
  burgerMenu.classList.toggle('open');
}





