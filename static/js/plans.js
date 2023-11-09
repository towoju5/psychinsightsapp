let priceButtonGroup = document.querySelector(".js-button-group");
priceButtonGroup.addEventListener("click", function (event) {
  if (event.target.type === "button") {
    // check and remove any previous class from button
    document
      .querySelectorAll(".plans__button--active")
      .forEach(function (button) {
        button.classList.remove("plans__button--active");
      });
    event.target.classList.add("plans__button--active");

    const activePriceCard = document.querySelector(".js-price-active");
    activePriceCard.classList.remove("js-price-active");

    if (event.target.innerText.toLowerCase() == "annually") {
      document.querySelector(".js-annual").classList.add("js-price-active");
      // show the percentage off
      document.querySelector(".js-plans-percent-off").style.display = "block";
    } else if (event.target.innerText.toLowerCase() == "monthly") {
      document.querySelector(".js-month").classList.add("js-price-active");
      document.querySelector(".js-plans-percent-off").style.display = "none";
    }
  }
});
