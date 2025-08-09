document.addEventListener("DOMContentLoaded", () => {
  const section = document.getElementById("cardSection");

  const showCards = () => {
    section.classList.remove("opacity-0", "translate-y-10");
    section.classList.add("opacity-100", "translate-y-0");
  };

  // Animate on load
  showCards();

  // Animate on scroll into view
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        showCards();
      }
    });
  }, { threshold: 0.2 });

  observer.observe(section);
});
