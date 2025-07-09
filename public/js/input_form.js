// ✅ Save Data Function
function saveData() {
  const form = document.getElementById("myForm");
  const formData = new FormData(form);
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  Swal.fire({
    title: "Confirm Save",
    text: "Are you sure you want to save the form?",
    icon: "question",
    showCancelButton: true,
    confirmButtonText: "Yes, Save",
    cancelButtonText: "Cancel",
    confirmButtonColor: "#28a745",
    cancelButtonColor: "#aaa",
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      fetch("/save-input-form", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": csrfToken
        },
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === "success") {
          Swal.fire("✅ Success!", "Data saved successfully.", "success");
          form.reset();
        } else {
          Swal.fire("❌ Error", JSON.stringify(data.error), "error");
        }
      })
      .catch(error => {
        console.error(error);
        Swal.fire("❌ Fetch Error", "Check the console for details.", "error");
      });
    }
  });
}

// ✅ Logout Confirmation with SweetAlert2
document.addEventListener("DOMContentLoaded", () => {
  const logoutBtn = document.querySelector(".btnLogout");

  if (logoutBtn) {
    logoutBtn.addEventListener("click", (e) => {
      e.preventDefault();

      Swal.fire({
        title: "Confirm Logout",
        text: "Are you sure you want to logout?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes",
        cancelButtonText: "Cancel",
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        reverseButtons: true,
        backdrop: true,
        allowOutsideClick: false,
        allowEscapeKey: true
      }).then((result) => {
        if (result.isConfirmed) {
          // Create form to submit POST logout with CSRF
          const logoutForm = document.createElement("form");
          logoutForm.method = "POST";
          logoutForm.action = logoutBtn.getAttribute("href");

          const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
          const input = document.createElement("input");
          input.type = "hidden";
          input.name = "_token";
          input.value = csrf;

          logoutForm.appendChild(input);
          document.body.appendChild(logoutForm);
          logoutForm.submit();
        }
      });
    });
  }
});
