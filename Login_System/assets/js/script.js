document.addEventListener("DOMContentLoaded", function () {
  const passwordField = document.querySelector("input[name='password']");
  const togglePassword = document.createElement("span");
  const registerForm = document.querySelector("form");

  // Password toggle functionality
  togglePassword.innerText = "👁️";
  togglePassword.style.cursor = "pointer";
  passwordField.parentNode.insertBefore(
    togglePassword,
    passwordField.nextSibling
  );

  togglePassword.addEventListener("click", function () {
    if (passwordField.type === "password") {
      passwordField.type = "text";
      togglePassword.innerText = "🙈";
    } else {
      passwordField.type = "password";
      togglePassword.innerText = "👁️";
    }
  });

  // Password Strength Validation
  passwordField.addEventListener("input", function () {
    const strengthMessage = document.getElementById("strengthMessage");
    const password = passwordField.value;
    let strength = "Weak";
    let color = "red";

    if (
      password.length > 6 &&
      /[A-Z]/.test(password) &&
      /\d/.test(password) &&
      /[!@#$%^&*]/.test(password)
    ) {
      strength = "Strong";
      color = "green";
    } else if (
      password.length > 6 &&
      /[A-Z]/.test(password) &&
      /\d/.test(password)
    ) {
      strength = "Medium";
      color = "orange";
    }

    strengthMessage.textContent = `Strength: ${strength}`;
    strengthMessage.style.color = color;
  });

  // Form Validation Before Submission
  registerForm.addEventListener("submit", function (event) {
    const username = document.querySelector("input[name='username']").value;
    const email = document.querySelector("input[name='email']").value;
    const password = passwordField.value;

    if (!username || !email || !password) {
      alert("All fields are required!");
      event.preventDefault();
    } else if (password.length < 6) {
      alert("Password must be at least 6 characters!");
      event.preventDefault();
    }
  });
});
