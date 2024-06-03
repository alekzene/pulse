function uploadProfileImage(event) {
    const file = event.target.files[0];
    const formData = new FormData();
    formData.append("profile_image", file);

    // Get CSRF token from the meta tag
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    fetch("/upload-profile-image", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": csrfToken, // Include CSRF token in the headers
        },
        body: formData,
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.url) {
                document.getElementById("profile-pic").src = data.url;
                updateProfileImageUrl(data.url);
                updateNavbarProfilePic(data.url); // Update navbar profile pic
            }
        })
        .catch((error) => console.error("Error:", error));
}

function updateProfileImageUrl(imageUrl) {
    fetch("/update-profile-image-url", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
        body: JSON.stringify({ imageUrl }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                console.log("Profile image URL updated successfully");
            } else {
                console.error("Error updating profile image URL");
            }
        })
        .catch((error) => console.error("Error:", error));
}

document.addEventListener("DOMContentLoaded", function () {
    // Add event listener to profile picture
    document
        .getElementById("profile-pic")
        .addEventListener("click", function () {
            // Trigger click event on file input
            document.getElementById("file-input").click();
        });

    // Set the initial navbar profile picture
    const profilePicUrl = document.getElementById("profile-pic").src;
    updateNavbarProfilePic(profilePicUrl);
});

function updateNavbarProfilePic(imageUrl) {
    const navbarProfilePic = document.getElementById("navbar-profile-pic");
    if (navbarProfilePic) {
        navbarProfilePic.src = imageUrl;
    }
}
