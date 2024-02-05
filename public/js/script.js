const WIDTH = 100;
const menu = document.querySelector("#menu");
const nav = document.querySelector(".nav-items");
const labels = document.querySelectorAll(".plan label");
const plan = document.querySelector(".plan");
const priceOpts = document.querySelectorAll(".pricing__options .prc__opt");
const priceOptsContainer = document.querySelector(".pricing__options ");
const questions = document.querySelectorAll(
  ".faq .accordion .tape .question "
);
const answers = document.querySelectorAll(
  ".faq .accordion .tape .answer "
);
const choices = document.querySelectorAll(
  ".powerDialer .pricing__bottom--wrapper .option"
);

questions.forEach((question) => {
  question.addEventListener("click", function () {
    const answer = this.nextElementSibling;

    questions.forEach((q) => q.classList.remove("active"));
    answers.forEach((a) => a.classList.remove("active"));

    if (!answer.classList.contains("active")) {
      answer.classList.add("active");
      this.classList.add("active");
    }
  });
});
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
    });

    e.target.classList.add("active");
  });
});

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

labels.forEach(function (label, index) {
  label.addEventListener("click", function () {
    choices.forEach((item, itemIndex) => {
      if (index === itemIndex) {
        if (!item.classList.contains("active")) {
          item.classList.toggle("active");
        }
      } else {
        item.classList.remove("active");
      }
    });
  });
});


// Grabbing 
const cardWrapper = document.querySelector('.integration .other .cardWrapper ');

let isMouseDown = false;
let startX;
let scrollLeft;

cardWrapper.addEventListener('mousedown', (e) => {
  isMouseDown = true;
  startX = e.pageX - cardWrapper.offsetLeft;
  scrollLeft = cardWrapper.scrollLeft;
  cardWrapper.classList.add('grabbing');
});

cardWrapper.addEventListener('mouseleave', () => {
  if (isMouseDown) {
    isMouseDown = false;
    cardWrapper.classList.remove('grabbing');
  }
});

cardWrapper.addEventListener('mouseup', () => {
  if (isMouseDown) {
    isMouseDown = false;
    cardWrapper.classList.remove('grabbing');
  }
});

cardWrapper.addEventListener('mousemove', (e) => {
  if (!isMouseDown) return;
  e.preventDefault();

  const x = e.pageX - cardWrapper.offsetLeft;
  const walk = x - startX;
  cardWrapper.scrollLeft = scrollLeft - walk;
});