let lastScrollTop = 0;
let isAtTop = true;

window.addEventListener(
  "scroll",
  function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    let nav = document.querySelector("nav");
    let navbar = document.querySelector(".navbar");
    let dropdownButton = document.querySelectorAll(".dropdown button");
    let navbarA = this.document.querySelectorAll(".navbar a");

    if (scrollTop > lastScrollTop && scrollTop > 50) {
      // Scroll down and not at the top
      nav.classList.add("scrolled");
      navbar.classList.add("scrolled");
      navbarA.forEach((a) => {
        a.classList.add("scrolled");
      });
      dropdownButton.forEach((button) => {
        button.classList.add("scrolled");
      });
      isAtTop = false;
    } else if (scrollTop === 0 && !isAtTop) {
      // Scroll to top
      nav.classList.remove("scrolled");
      navbar.classList.remove("scrolled");
      navbarA.forEach((a) => {
        a.classList.remove("scrolled");
      });
      dropdownButton.forEach((button) => {
        button.classList.remove("scrolled");
      });
      isAtTop = true;
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
  },
  false
);


