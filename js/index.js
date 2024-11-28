
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
