document.addEventListener("DOMContentLoaded", function () {
    const success = document.getElementById("alert-success");
    const error = document.getElementById("alert-error");

    if (success) {
        setTimeout(() => {
            success.classList.add("fade-out");
            setTimeout(() => success.remove(), 1000);
        }, 4000);
    }

    if (error) {
        setTimeout(() => {
            error.classList.add("fade-out");
            setTimeout(() => error.remove(), 1000);
        }, 4000);
    }
});
