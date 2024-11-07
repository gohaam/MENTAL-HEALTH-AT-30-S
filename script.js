document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll(".card-content");
    const infoBox = document.getElementById("info-box");
    const infoTitle = document.getElementById("info-title");
    const infoDescription = document.getElementById("info-description");
    const buttonsContainer = infoBox.querySelector(".box-button"); // Ganti ke .box-button

    // Awalnya sembunyikan tombol
    buttonsContainer.style.display = "none";

    cards.forEach(card => {
        card.addEventListener("click", function() {
            // Hapus status aktif dari semua kartu
            cards.forEach(c => c.classList.remove("active"));

            // Tambahkan status aktif ke kartu yang diklik
            card.classList.add("active");

            // Ambil data title dan description dari kartu yang diklik
            const titleText = card.getAttribute("data-title");
            const descriptionText = card.getAttribute("data-description");

            // Tampilkan title dan description di infoBox
            infoTitle.textContent = titleText;
            infoDescription.textContent = descriptionText;
            infoBox.style.display = "block";
            buttonsContainer.style.display = "flex";  // Tampilkan tombol
        });
    });

    // Sembunyikan infoBox dan hapus status aktif ketika klik di luar kartu
    document.addEventListener("click", function(event) {
        if (!event.target.closest(".card-content")) {
            cards.forEach(c => c.classList.remove("active"));
            infoBox.style.display = "none";
            buttonsContainer.style.display = "none";  // Sembunyikan tombol
        }
    });
});

//fungsi snackbar
function showSnackbar(messages, type) {
    var snackbar = document.getElementById("snackbar");

    function displayMessage(index) {
        if (index >= messages.length) return;

        snackbar.textContent = messages[index];
        snackbar.classList.remove("snackbar-error", "snackbar-success");

        if (type === "error") {
            snackbar.classList.add("snackbar-error");
        } else if (type === "success") {
            snackbar.classList.add("snackbar-success");
        }

        snackbar.classList.add("show");

        setTimeout(function() {
            snackbar.classList.remove("show");
            setTimeout(function() {
                displayMessage(index + 1);
            }, 500);
        }, 3000);
    }

    displayMessage(0);
};

