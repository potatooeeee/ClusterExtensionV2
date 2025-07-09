document.addEventListener("DOMContentLoaded", () => {
  const loginBox = document.getElementById("loginBox");
  const registerBox = document.getElementById("registerBox");
  const headerLoginBtn = document.getElementById("headerLoginBtn");
  const showRegister = document.getElementById("showRegister");
  const showLogin = document.getElementById("showLogin");
  const loginForm = document.getElementById("loginForm");
  const registerForm = document.getElementById("registerForm");
  const loading = document.getElementById("loading");

  // Toggle login/register form
  headerLoginBtn?.addEventListener("click", () => {
    loginBox.classList.toggle("show");
    registerBox.classList.remove("show");
  });

  showRegister?.addEventListener("click", (e) => {
    e.preventDefault();
    loginBox.classList.remove("show");
    registerBox.classList.add("show");
  });

  showLogin?.addEventListener("click", (e) => {
    e.preventDefault();
    registerBox.classList.remove("show");
    loginBox.classList.add("show");
  });

  // Laravel Login Submit
  loginForm?.addEventListener("submit", async (e) => {
    e.preventDefault();
    loading.style.display = "flex";

    const formData = new FormData(loginForm);
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute("content");

    try {
      const response = await fetch("/login", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": csrfToken,
        },
        body: formData,
      });

      const result = await response.text();

      if (result.toLowerCase().includes("input-form")) {
        window.location.href = "/input-form";
      } else {
        alert(result);
        console.log(result);
      }
    } catch (err) {
      alert("Login failed. Please try again.");
      console.error(err);
    } finally {
      loading.style.display = "none";
    }
  });

  // Laravel Registration Submit
  registerForm?.addEventListener("submit", async (e) => {
    e.preventDefault();
    loading.style.display = "flex";

    const password = document.getElementById("reg_pass").value;
    const confirmPassword = document.getElementById("reg_confirm_pass").value;

    if (password !== confirmPassword) {
      alert("Passwords do not match.");
      loading.style.display = "none";
      return;
    }

    const formData = new FormData(registerForm);

    try {
      const response = await fetch("/register", {
        method: "POST",
        body: formData,
      });

      const result = await response.text();
      alert(result);

      if (result.toLowerCase().includes("successful")) {
        registerForm.reset(); // clear the form fields
        registerBox.classList.remove("show");
        loginBox.classList.add("show");
      }
    } catch (error) {
      alert("Registration failed. Try again.");
      console.error(error);
    } finally {
      loading.style.display = "none";
    }
  });

  // Show/Hide Password
  document.getElementById("showPasswordCheckbox")?.addEventListener("change", function () {
    const pass = document.getElementById("reg_pass");
    const confirm = document.getElementById("reg_confirm_pass");

    const type = this.checked ? "text" : "password";
    if (pass) pass.type = type;
    if (confirm) confirm.type = type;
  });

   document.getElementById("showLoginPassword")?.addEventListener("change", function () {
    const pass = document.getElementById("pass");

    const type = this.checked ? "text" : "password";
    if (pass) pass.type = type;
  });

  if (loading) loading.style.display = "none";
});
