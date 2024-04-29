document.addEventListener("DOMContentLoaded", function () {
    const dropdownItem = document.querySelector(".dropdown");
    const dropdownMenu = dropdownItem.querySelector(".dropdown-menu");

    dropdownItem.addEventListener("click", function () {
        // Toggle the display of the dropdown menu
        if (dropdownMenu.style.display === "block") {
            dropdownMenu.style.display = "none";
        } else {
            dropdownMenu.style.display = "block";
        }
    });

    const subMenuItems = dropdownMenu.querySelectorAll("a");
    subMenuItems.forEach(function (subItem) {
        subItem.addEventListener("click", function (event) {
            // Prevent the default link behavior
            event.preventDefault();

            // Add your onclick functionality here
            // For example, you can show a message or perform some action
            console.log("Clicked:", subItem.textContent);
        });
    });
});
const burgerIcon = document.getElementById("burger-icon");
const navLinks = document.querySelector(".nav-links");

burgerIcon.addEventListener("click", function () {
    navLinks.classList.toggle("show");
});

window.addEventListener("resize", function () {
    if (window.innerWidth >= 1000) {
        navLinks.classList.remove("show");
    }
});

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}