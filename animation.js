document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".animate-rise");

  const animate = (el) => {
    el.classList.remove("opacity-0", "translate-y-10");
    el.classList.add("opacity-100", "translate-y-0");
  };

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animate(entry.target);
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.2 }
  );

  elements.forEach((el) => {
    // Observe all matching elements
    observer.observe(el);

    // Animate immediately if in view on load
    const rect = el.getBoundingClientRect();
    const inView =
      rect.top < window.innerHeight && rect.bottom >= 0;

    if (inView) animate(el);
  });
});
