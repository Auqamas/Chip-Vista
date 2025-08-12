// stats-animation.js
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat-num");
  let started = false;

  function animateCounters() {
    counters.forEach(counter => {
      const target = parseFloat(counter.getAttribute("data-target"));
      const suffix = counter.getAttribute("data-suffix") || ""; // e.g., "+", "%"
      let count = 0; // Always start from 0
      const speed = 40;
      const increment = target / speed;

      const updateCount = () => {
        if (count < target) {
          count += increment;
          counter.innerText = Math.floor(count) + suffix;
          setTimeout(updateCount, 20);
        } else {
          counter.innerText = target + suffix; // Exact final value
        }
      };

      updateCount();
    });
  }

  // Trigger animation when in view
  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !started) {
          started = true;
          animateCounters();
        }
      });
    },
    { threshold: 0.4 }
  );

  const statsSection = document.querySelector("#stats");
  if (statsSection) observer.observe(statsSection);
});