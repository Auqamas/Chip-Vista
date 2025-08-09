window.addEventListener('scroll', () => {
  const brandText = document.getElementById('brand-text');
  const logo = document.getElementById('logo');

  if (window.scrollY > 50) {
    brandText.classList.add('opacity-0', 'w-0', 'overflow-hidden');

    // Apply slight rotation to the logo
    logo.classList.add('rotate-12');
  } else {
    brandText.classList.remove('opacity-0', 'w-0', 'overflow-hidden');

    // Reset rotation
    logo.classList.remove('rotate-12');
  }
});
