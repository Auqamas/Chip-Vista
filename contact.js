document.addEventListener("DOMContentLoaded", () => {
    
    const form = document.getElementById("contactForm");
    const successMessage = document.getElementById("successMessage");

    if (!form) return;

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        fetch(this.action, {
            method: "POST",
            body: new FormData(this),
        })
        .then(() => {
            successMessage.classList.remove("hidden");
            form.reset();
        })
        .catch(() => {
            alert("There was an error sending your message.");
        });
    });
});