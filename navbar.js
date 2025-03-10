document.addEventListener("DOMContentLoaded", function() {
    let dropdownToggle = document.getElementById("otherDropdown");
    let dropdownMenu = document.getElementById("fullScreenDropdown");
    let closeButton = document.getElementById("closeDropdown");

    dropdownToggle.addEventListener("click", function(event) {
        event.preventDefault();
        dropdownMenu.classList.remove("d-none");
        dropdownMenu.classList.add("d-flex");
    });

    closeButton.addEventListener("click", function() {
        dropdownMenu.classList.remove("d-flex");
        dropdownMenu.classList.add("d-none");
    });
});