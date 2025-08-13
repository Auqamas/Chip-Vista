document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");
  const btn = document.getElementById("submitBtn");

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent actual form submission for demo

    // Change button style and text
    btn.textContent = "Message Sent";
    btn.classList.remove("bg-blue-500", "hover:bg-blue-600");
    btn.classList.add("bg-emerald-500", "hover:bg-emerald-600");

    // Disable button
    btn.disabled = true;
  });
});
