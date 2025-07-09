document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("modal");
  const modalBody = document.getElementById("modal-body");
  const modalForm = document.getElementById("modalForm");

  const labels = [
    "Programs/Projects/Activities", "Performance Indicators (Output level)", "Type of Participants/Beneficiaries",
    "Q1", "Q2", "Q3", "Q4", "Total",
    "Q1", "Q2", "Q3", "Q4", "Total",
    "Fund Source", "Remarks"
  ];

  function createEditableField(label, value) {
    const isMultiline = label === "Remarks" || label === "Fund Source";
    if (isMultiline) {
      const cleanedValue = value ? value.replace(/<br\s*\/?>/g, "\n") : '';
      return `
        <div class="modal-field">
          <label>${label}</label>
          <textarea rows="6" style="width: 100%; padding: 6px;">${cleanedValue}</textarea>
        </div>
      `;
    } else {
      return `
        <div class="modal-field">
          <label>${label}</label>
          <input type="text" value="${value || ''}" style="width: 100%; padding: 6px;" />
        </div>
      `;
    }
  }

  document.querySelectorAll("table tr").forEach((row, index) => {
    if (index === 0 || row.classList.contains("sub-header")) return;

    row.addEventListener("click", () => {
      document.querySelectorAll("table tr.selected").forEach(r => r.classList.remove("selected"));
      row.classList.add("selected");

      const cells = Array.from(row.cells).map(cell => cell.innerHTML.trim());
      const formFields = labels.map((label, i) => createEditableField(label, cells[i])).join("");
      modalBody.innerHTML = formFields;
      modal.style.display = "block";
    });
  });

  modalForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const activeRow = document.querySelector("table tr.selected");
    if (!activeRow) return;

    const inputElements = modalForm.querySelectorAll("input, textarea");
    const inputValues = Array.from(inputElements).map(el => el.value.trim());

    inputValues.forEach((val, i) => {
      if (activeRow.cells[i]) {
        if (labels[i] === "Remarks" || labels[i] === "Fund Source") {
          activeRow.cells[i].innerHTML = val.replace(/\n/g, "<br>");
        } else {
          activeRow.cells[i].innerText = val;
        }
      }
    });

    modal.style.display = "none";
    activeRow.classList.remove("selected");
  });

  document.getElementById("modalCancelBtn")?.addEventListener("click", () => {
    modal.style.display = "none";
    document.querySelectorAll("table tr.selected").forEach(r => r.classList.remove("selected"));
  });

  window.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.style.display = "none";
      document.querySelectorAll("table tr.selected").forEach(r => r.classList.remove("selected"));
    }
  });

  // ✅ SweetAlert2 Logout Confirmation
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
