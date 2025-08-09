// stats-animation.js

document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat-num");
  let started = false;

  function animateCounters() {
    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute("data-target");
        const count = +counter.innerText;
        const speed = 40;

        const increment = Math.ceil(target / speed);

        if (count < target) {
          counter.innerText = count + increment;
          setTimeout(updateCount, 20);
        } else {
          counter.innerText = target + "+";
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
    {
      threshold: 0.4,
    }
  );

  const statsSection = document.querySelector("#stats");
  if (statsSection) observer.observe(statsSection);
});
