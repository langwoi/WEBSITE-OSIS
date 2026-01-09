/* ===== SLIDER ===== */
const slides = document.querySelectorAll('.slide');
let index = 0;

slides[0].classList.add('active');

setInterval(() => {
  slides[index].classList.remove('active');
  index = (index + 1) % slides.length;
  slides[index].classList.add('active');
}, 3500);

/* ===== COUNTER ===== */
const counters = document.querySelectorAll('.counter');

counters.forEach(counter => {
  const target = +counter.dataset.target;
  let current = 0;
  const increment = target / 100;

  const updateCounter = () => {
    current += increment;
    if (current < target) {
      counter.innerText = Math.ceil(current);
      requestAnimationFrame(updateCounter);
    } else {
      counter.innerText = target;
    }
  };

  updateCounter();
});