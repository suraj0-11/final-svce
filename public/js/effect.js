// Select card container, individual cards, navigation buttons, previous and next buttons.
const cards = document.querySelector(".cards"),
  allCards = document.querySelectorAll(".card"),
  buttons = document.querySelectorAll(".cards_wrapper button"),
  prevBtn = document.querySelector(".prev"),
  nextBtn = document.querySelector(".next");

// Function to control the visibility of prev and next buttons
const btnsFunction = () => {
  // Hide previous button if at the start of the scroll
  if (cards.scrollLeft === 0) {
    prevBtn.style.display = "none";
  } else {
    prevBtn.style.display = "unset";
  }

  // Hide next button if at the end of the scroll
  if (cards.scrollLeft + cards.clientWidth >= cards.scrollWidth) {
    nextBtn.style.display = "none";
  } else {
    nextBtn.style.display = "unset";
  }
};

// Scroll functionality for navigation buttons
prevBtn.addEventListener("click", () => {
  const cardWidth = allCards[0].offsetWidth;
  const cardMargin = window.getComputedStyle(allCards[0]).marginRight;
  const totalCardWidth = cardWidth + parseInt(cardMargin);
  cards.scrollLeft -= totalCardWidth;
  btnsFunction(); // Update button visibility
});

nextBtn.addEventListener("click", () => {
  const cardWidth = allCards[0].offsetWidth;
  const cardMargin = window.getComputedStyle(allCards[0]).marginRight;
  const totalCardWidth = cardWidth + parseInt(cardMargin);
  cards.scrollLeft += totalCardWidth;
  btnsFunction(); // Update button visibility
});

// Add scroll event listener to the cards container to update button visibility
cards.addEventListener("scroll", () => {
  btnsFunction();
  stopAutoScroll(); // Stop auto-scroll on manual scroll
  startAutoScroll(); // Resume auto-scroll after a short delay
});

// Update button visibility on page load
window.addEventListener("load", btnsFunction);

// Automatic horizontal scrolling
let scrollInterval;

const startAutoScroll = () => {
  scrollInterval = setInterval(() => {
    const cardWidth = allCards[0].offsetWidth;
    const cardMargin = window.getComputedStyle(allCards[0]).marginRight;
    const totalCardWidth = cardWidth + parseInt(cardMargin);
    cards.scrollLeft += totalCardWidth; // Scroll to the next card
    btnsFunction(); // Update button visibility
  }, 3000); // Adjust the scrolling interval in milliseconds
};

const stopAutoScroll = () => {
  clearInterval(scrollInterval);
};

// Start auto-scrolling on page load
window.addEventListener("load", startAutoScroll);

// Stop auto-scrolling on mouse hover
cards.addEventListener("mouseenter", stopAutoScroll);
cards.addEventListener("mouseleave", startAutoScroll);
