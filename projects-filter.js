document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".filter-btn");
  const cards = document.querySelectorAll(".project-card");

  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      const filter = btn.getAttribute("data-filter");

      // Active button style
      buttons.forEach(b => b.classList.remove("bg-blue-600", "text-white"));
      buttons.forEach(b => b.classList.add("bg-gray-200", "text-gray-800"));
      btn.classList.add("bg-blue-600", "text-white");

      // Filter logic
      cards.forEach(card => {
        if (filter === "all" || card.getAttribute("data-category") === filter) {
          card.classList.remove("hidden");
        } else {
          card.classList.add("hidden");
        }
      });
    });
  });
});