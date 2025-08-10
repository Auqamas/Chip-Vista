// rise-animation.js
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".animate-rise");

  const animate = (el) => {
    el.classList.remove("opacity-0", "translate-y-10");
    el.classList.add("opacity-100", "translate-y-0");
  };

  const observer = new IntersectionObserver(
    (entries, observerInstance) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animate(entry.target);
          observerInstance.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.2 } // Trigger when 20% of element is visible
  );

  elements.forEach((el) => {
    // Set initial hidden state
    el.classList.add("opacity-0", "translate-y-10", "transition-all", "duration-700");

    // Observe for scroll into view
    observer.observe(el);

    // Animate immediately if already in view on load
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom >= 0) {
      animate(el);
    }
  });
});
