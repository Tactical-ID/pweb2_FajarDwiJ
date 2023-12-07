// Function to set active link based on current URL
function setActiveLink() {
  var links = document.querySelectorAll(".nav-link");
  var currentPageUrl = window.location.href;

  links.forEach(function (link) {
    if (link.href === currentPageUrl) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });
}

// Execute setActiveLink function when the DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
  setActiveLink();
});
