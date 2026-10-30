
const newsletterModal = document.getElementById("newsletterModal");
const closeNewsletter = document.getElementById("closeNewsletter");
const newsletterForm = document.getElementById("newsletterForm");
const newsletterMessage = document.getElementById("newsletterMessage");

// Modal na 5 seconden openen
window.addEventListener("load", function () {

    if (!sessionStorage.getItem("newsletterShown")) {

        setTimeout(function () {
            newsletterModal.classList.add("active");
            sessionStorage.setItem("newsletterShown", "true");
        }, 5000);

    }

});

// Modal sluiten
closeNewsletter.addEventListener("click", function () {
    newsletterModal.classList.remove("active");
});

// Buiten de modal klikken om te sluiten
newsletterModal.addEventListener("click", function (event) {

    if (event.target === newsletterModal) {
        newsletterModal.classList.remove("active");
    }

});

// Nieuwsbrief formulier
newsletterForm.addEventListener("submit", function (event) {

    event.preventDefault();

    newsletterMessage.textContent =
        "Bedankt voor je interesse in onze nieuwsbrief!";

    newsletterForm.reset();

});
