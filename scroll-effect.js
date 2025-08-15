window.addEventListener('scroll', () => {
  const brandText = document.getElementById('brand-text');
  const logo = document.getElementById('logo');

  // Make sure the logo's transform origin stays in the center
  logo.style.transformOrigin = 'center center';

  if (window.scrollY > 50) {
    brandText.classList.add('opacity-0', 'w-0', 'overflow-hidden');

    // Keep same position but rotate
    logo.style.transform = 'rotate(12deg)';
  } else {
    brandText.classList.remove('opacity-0', 'overflow-hidden');

    // Reset rotation without moving
    logo.style.transform = 'rotate(0deg)';
  }
});