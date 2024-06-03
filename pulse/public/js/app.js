document.addEventListener("DOMContentLoaded", function () {
    const editLink = document.getElementById("edit-link");
    const inputFields = document.querySelectorAll(".input-field");
    const bioTextarea = document.getElementById("bio");

    bioTextarea.setAttribute("disabled", "disabled");

    editLink.addEventListener("click", function (event) {
        event.preventDefault();
        if (editLink.textContent === "Edit") {
            inputFields.forEach((input) => {
                input.removeAttribute("disabled");
                input.classList.add("editable");
            });
            editLink.textContent = "Save";
            bioTextarea.removeAttribute("disabled");
        } else {
            const formData = {};
            inputFields.forEach((input) => {
                formData[input.name] = input.value;
                input.setAttribute("disabled", "disabled");
                input.classList.remove("editable");
            });

            formData[
                "birthday"
            ] = `${formData["birth-year"]}-${formData["birth-month"]}-${formData["birth-day"]}`;
            formData["bio"] = bioTextarea.value;

            editLink.textContent = "Edit";
            bioTextarea.setAttribute("disabled", "disabled");

            saveUserInfo(formData);
            saveBio();
        }
    });

    function saveUserInfo(formData) {
        fetch("/update-user-info", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            body: JSON.stringify(formData),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    console.log("User info updated successfully");
                } else {
                    console.error("Error updating user info");
                }
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }

    function saveBio() {
        const bio = bioTextarea.value;

        // Send the bio to the server to be saved
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
