const menu = document.querySelector("#menu");
const nav = document.querySelector(".nav-items");

const menuToggle = () => {
  nav.classList.toggle("active");
};

const handleClickOutside = (event) => {
  if (
    !menu.contains(event.target) &&
    !nav.contains(event.target) &&
    nav.classList.contains("active")
  ) {
    nav.classList.remove("active");
  }
};

menu.addEventListener("click", menuToggle);
document.addEventListener("click", handleClickOutside);
