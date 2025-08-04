// Vanilla JS parallax background effect
const parallaxSections = document.querySelectorAll('.parallax_test');

window.addEventListener('scroll', () => {
  const scrollY = window.scrollY;

  parallaxSections.forEach(section => {
    section.style.backgroundPositionY = `${scrollY * 0.5}px`;
  });
});
