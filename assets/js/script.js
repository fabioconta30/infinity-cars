document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("#registration-form");
    if (form) {
        form.addEventListener("submit", (event) => {
            const name = document.querySelector("#nome");
            const email = document.querySelector("#email");
            if (!name.value.trim() || !email.validity.valid) {
                event.preventDefault();
                alert("Confira seu nome e seu e-mail antes de enviar.");
            }
        });
    }
});
