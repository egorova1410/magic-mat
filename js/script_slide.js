document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider");
  const slides = document.querySelectorAll(".slide");
  const prevButton = document.querySelector(".prev-button");
  const nextButton = document.querySelector(".next-button");
  const dotsContainer = document.querySelector(".dots");
  let currentIndex = 0;
  let intervalId;

  // Создание индикаторов слайдов
  function createDots() {
    slides.forEach((_, index) => {
      const dot = document.createElement("div");
      dot.classList.add("dot");
      dot.addEventListener("click", () => goToSlide(index));
      dotsContainer.appendChild(dot);
    });
    updateDots();
  }

  // Обновление активного индикатора
  function updateDots() {
    const dots = document.querySelectorAll(".dot");
    dots.forEach((dot, index) => {
      if (index === currentIndex) {
        dot.classList.add("active");
      } else {
        dot.classList.remove("active");
      }
    });
  }

  // Переход к определенному слайду
  function goToSlide(index) {
    currentIndex = index;
    updateSlider();
    updateDots();
  }

  // Обновление положения слайдера
  function updateSlider() {
    const slideWidth = slides[0].offsetWidth;
    slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
  }

  // Переход к следующему слайду
  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlider();
    updateDots();
  }

  // Переход к предыдущему слайду
  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateSlider();
    updateDots();
  }

  // Автоматическое переключение слайдов
  function startSlider() {
    intervalId = setInterval(nextSlide, 5000); // Смена слайда каждые 5 секунд
  }

  // Остановка автоматического переключения
  function stopSlider() {
    clearInterval(intervalId);
  }

  // Обработчики событий для кнопок
  prevButton.addEventListener("click", prevSlide);
  nextButton.addEventListener("click", nextSlide);

  // Создание индикаторов и запуск слайдера
  createDots();
  startSlider();

  // Остановка слайдера при наведении мыши
  sliderContainer.addEventListener("mouseover", stopSlider);

  // Запуск слайдера при уходе мыши
  sliderContainer.addEventListener("mouseout", startSlider);
});
