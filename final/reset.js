document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirmPassword");
    const submitBtn = document.getElementById("submitBtn");

    // Disable the submit button initially
    submitBtn.setAttribute("disabled", "disabled");

    // Check if passwords match on input
    passwordInput.addEventListener("input", function () {
        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;

        if (password === confirmPassword && password !== "") {
            submitBtn.removeAttribute("disabled");
        } else {
            submitBtn.setAttribute("disabled", "disabled");
        }
    });

    confirmPasswordInput.addEventListener("input", function () {
        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;

        if (password === confirmPassword && password !== "") {
            submitBtn.removeAttribute("disabled");
        } else {
            submitBtn.setAttribute("disabled", "disabled");
        }
    });
});
