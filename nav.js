"use strict";

var indicator = document.querySelector(".nav-indicator");
var items = document.querySelectorAll(".nav-item");

function handleIndicator(el) {
  items.forEach(function (item) {
    item.classList.remove("is-active");
    item.removeAttribute("style");
  });
  indicator.style.width = "".concat(el.offsetWidth, "px");
  indicator.style.left = "".concat(el.offsetLeft, "px");
  indicator.style.backgroundColor = el.getAttribute("active-color");
  el.classList.add("is-active");
  el.style.color = el.getAttribute("active-color");
}

items.forEach(function (item, index) {
  item.addEventListener("click", function (e) {
    handleIndicator(e.target);
  });
  item.classList.contains("is-active") && handleIndicator(item);
});
// navbar sticky
// When the user scrolls the page, execute myFunction
window.onscroll = function () {
  myFunction();
};

// Get the navbar
const navbar = document.getElementsByClassName("nav")[0];

// Get the offset position of the navbar
let sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}
