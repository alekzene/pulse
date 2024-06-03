document.addEventListener("DOMContentLoaded", function () {
    const editLink = document.getElementById("edit-link");
    const inputFields = document.querySelectorAll(".input-field");
    const bioTextarea = document.getElementById("bio");

    function toggleBioEditable(editable) {
        if (editable) {
            bioTextarea.removeAttribute("disabled");
            bioTextarea.classList.add("editable");
        } else {
            bioTextarea.setAttribute("disabled", "disabled");
            bioTextarea.classList.remove("editable");
        }
    }

    toggleBioEditable(false);

    editLink.addEventListener("click", function (event) {
        event.preventDefault();
        const isEditMode = editLink.textContent === "Edit";

        inputFields.forEach((input) => {
            input.disabled = !isEditMode;
        });

        toggleBioEditable(isEditMode);

        editLink.textContent = isEditMode ? "Save" : "Edit";

        if (!isEditMode) {
            saveBio();
        }
    });

    function saveBio() {
        const bio = bioTextarea.value;

        fetch("/update-user-bio", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            body: JSON.stringify({ bio }),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    console.log("Bio updated successfully");
                } else {
                    console.error("Error updating bio");
                }
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }
});
