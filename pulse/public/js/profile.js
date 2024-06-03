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
                "X-CSRF-TOKEN": csrfToken,
            },
            body: formData,
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.url) {
                    document.getElementById("profile-pic").src = data.url;
                    updateProfileImageUrl(data.url);
                    updateNavbarProfilePic(data.url);
                    window.location.href = "/profile-2";
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
        document
            .getElementById("profile-pic")
            .addEventListener("click", function () {
                document.getElementById("file-input").click();
            });

        const profilePicUrl = document.getElementById("profile-pic").src;
        if (!profilePicUrl || profilePicUrl.trim() === "") {
            profilePicUrl = "{{ asset('img/2nd-icon-user-profile.png') }}";
        }

        updateNavbarProfilePic(profilePicUrl);
        sessionStorage.setItem("profilePicUrl", profilePicUrl);
    });

    function updateNavbarProfilePic(imageUrl) {
        const navbarProfilePic = document.getElementById("navbar-profile-pic");
        if (navbarProfilePic) {
            navbarProfilePic.src = imageUrl;
        }
    }
