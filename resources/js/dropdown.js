const dropdowns = document.querySelectorAll(".dropdown");

dropdowns.forEach((dropdown) => {
    dropdown.addEventListener("click", function () {
        dropdown.querySelector("ul").classList.toggle("hidden");
    });
});
