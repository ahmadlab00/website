document.addEventListener("DOMContentLoaded", function() {
    const signupbtn = document.getElementById("signupbtn");
    const signinbtn = document.getElementById("signinbtn");
    const nameField = document.getElementById("nameField");
    const passwordInput = document.getElementById("password");
    const showPasswordBtn = document.getElementById("showPasswordBtn");
    const submitBtn = document.getElementById("submitBtn");
    const formTitle = document.getElementById("title");

    let showPassword = false;

 
    // Switch to Sign In form
    signupbtn.addEventListener("click", function() {
        nameField.style.display = "none";
        signinbtn.classList.add("active");
        signupbtn.classList.remove("active");
        submitBtn.textContent = "submit";
        formTitle.textContent = "Sign in"; // Change form title
    });

    // Switch to Sign Up form
    signinbtn.addEventListener("click", function() {
        nameField.style.display = "block";
        signupbtn.classList.add("active");
        signinbtn.classList.remove("active");
        submitBtn.textContent = "submit";
        formTitle.textContent = "Sign up"; // Change form title
    });

    // Form submission handling
    submitBtn.addEventListener("click", function(event) {
        event.preventDefault();
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const password = passwordInput.value;

        if (name && email && password) {
            alert("Form submitted successfully!");
        } else {
            alert("Please fill in all fields.");
        }
    });
});