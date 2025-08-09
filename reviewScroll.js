document.addEventListener("DOMContentLoaded", () => {
  const scroller = document.getElementById("reviewScroller");
  let scrollSpeed = 0.5; // adjust speed

  function autoScroll() {
    scroller.scrollLeft += scrollSpeed;
    if (scroller.scrollLeft >= scroller.scrollWidth - scroller.clientWidth) {
      scroller.scrollLeft = 0; // restart
    }
    requestAnimationFrame(autoScroll);
  }

  // Pause on hover
  scroller.addEventListener("mouseenter", () => scrollSpeed = 0);
  scroller.addEventListener("mouseleave", () => scrollSpeed = 0.5);

  autoScroll();
});
