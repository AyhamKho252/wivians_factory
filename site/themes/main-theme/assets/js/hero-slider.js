var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

  function updateBackgroundLinearGradient(swiperSlide) {
    // Check if the screen width is 767px or smaller
    if (window.innerWidth <= 767) {
      // Get the current background value
      var currentBackground = swiperSlide.style.background;

      // Update the linear gradient value
      var newBackground = currentBackground.replace(/linear-gradient\([^)]+\)/, 'linear-gradient(rgba(255, 255, 255, 0.28), rgba(255, 255, 255, 0.28))');

      // Apply the new background value
      swiperSlide.style.background = newBackground;
    }
  }

  // Call the function on page load and resize for each swiper-slide
  var swiperSlides = document.querySelectorAll('.swiper-slide');
  swiperSlides.forEach(function (swiperSlide) {
    updateBackgroundLinearGradient(swiperSlide);
  });

  window.addEventListener('resize', function () {
    swiperSlides.forEach(function (swiperSlide) {
      updateBackgroundLinearGradient(swiperSlide);
    });
  });