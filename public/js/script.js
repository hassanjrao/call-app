const menu = document.querySelector("#menu");
const nav = document.querySelector(".nav-items");
const WIDTH = 100;

const labels = document.querySelectorAll(".plan label");
const plan = document.querySelector(".plan");
const priceOpts = document.querySelectorAll(".pricing__options .prc__opt");
const priceOptsContainer = document.querySelector(".pricing__options ");

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

priceOpts.forEach((item) => {
  item.addEventListener("click", (e) => {
    priceOpts.forEach((opt) => {
      opt.classList.remove("active");
    });
    e.target.classList.add("active");
  });
});

function topSlide(n) {
  const bgOffset = (WIDTH / priceOpts.length) * n;
  priceOptsContainer.style.setProperty("--bg-offsetTop", `${bgOffset}%`);
  console.log("hello ");
}

function slideBg(n) {
  const bgOffset = (WIDTH / labels.length) * n;
  plan.style.setProperty("--bg-offset", `${bgOffset}%`);
}

labels.forEach((item) => {
  item.addEventListener("click", (e) => {
    labels.forEach((label) => {
      label.classList.remove("active");
      console.log(label);
    });

    e.target.classList.add("active");
  });
});

menu.addEventListener("click", menuToggle);
document.addEventListener("click", handleClickOutside);
