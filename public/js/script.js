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
  " .pricing__bottom--wrapper .option"
);

const footerToggle = document.querySelectorAll(".footer-main > ul")


document.addEventListener("DOMContentLoaded", function () {
  const currencySelects = document.querySelectorAll('select[name="currency"]');
  const durationCheckbox = document.getElementById('duration');
  const cards = document.querySelectorAll('.card');
  const monthlyPrices = [0, 24, 38, 56, 0, 20, 30, 50]; // Monthly prices corresponding to each card
  const yearlyPrices = [0, 19, 30, 45, 0, 16, 24, 40]; // Yearly prices corresponding to each card

  currencySelects.forEach(function (select) {
    select.addEventListener("change", function () {
      const currency = this.value;
      updatePrices(currency);
    });
  });

  // Event listener for checkbox change
  durationCheckbox.addEventListener('change', function () {
    updatePrices();
  });

  // Function to update prices based on the selected currency and duration
  function updatePrices(currency = 'USD') {
    cards.forEach(function (card, index) {
      const priceElement = card.querySelector('.card-top #basic-price-' + (index + 1));
      const basePrice = durationCheckbox.checked ? yearlyPrices[index] : monthlyPrices[index];
      let newPrice;

      // Perform currency conversion here
      switch (currency) {
        case 'USD':
          newPrice = basePrice;
          break;
        case 'EUR':
          newPrice = basePrice * 0.85;
          break;
        case 'MAD':
          newPrice = basePrice * 8.93;
          break;
        case 'GBP':
          newPrice = basePrice * 0.73; // Conversion rate as of writing
          break;
        case 'AUD':
          newPrice = basePrice * 1.34; // Conversion rate as of writing
          break;
          // Add more cases for other currencies as needed
        default:
          newPrice = basePrice;
      }

      // Round to the nearest integer
      newPrice = Math.round(newPrice);

      // Update the currency symbol and price content
      priceElement.innerHTML = '<span>' + currency + '</span>' + newPrice;
    });
  }

  // Initial update of prices based on the initial currency selection and checkbox state
  updatePrices();
});

footerToggle.forEach((item) => {
  item.addEventListener("click", () => {
    item.classList.toggle("active")
  })
})


const mobileMenuToggle = document.querySelectorAll("#mobileExpand");
const mobileMenuContent = document.querySelectorAll(".mobile");

mobileMenuToggle.forEach((option) => {
  option.addEventListener("click", function () {
    const content = this.nextElementSibling;

    if (content.classList.contains("active")) {
      content.classList.remove("active");
      this.classList.remove("active");
    } else {
      mobileMenuContent.forEach((cn) => cn.classList.remove("active"));
      mobileMenuToggle.forEach((tn) => tn.classList.remove("active"));

      content.classList.add("active");
      this.classList.add("active");
    }
  });
});



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


function topSlide(n) {
  const bgOffset = (WIDTH / priceOpts.length) * n;
  priceOptsContainer.style.setProperty("--bg-offsetTop", `${bgOffset}%`);

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