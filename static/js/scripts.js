/***
 * This contains logic applicable to elements on all pages
 * ****/

$(document).ready(function () {
  // Get the current URL path
  var path = window.location.pathname;

  // Iterate over each link in the navigation
  $(".navbar__list-href").each(function () {
    // Get the href attribute of the link
    var href = $(this).attr("href");

    // Check if the link's href matches the current path
    if (path === href) {
      // Apply the desired style (e.g., change text color to blue)
      $(this).css("color", "#207384");
    }
  });
});

/* let's make the subscribe button work */
const emailRegExp =
  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$/;
const subscibeButton = document.querySelector("#subscribeBtn");

function newsLetterEmail() {
  const emailElement = document.querySelector(".subscribe-email");
  const isValid =
    !emailElement.validity.valueMissing && emailRegExp.test(emailElement.value);

  if (isValid) {
    // TODO: submit the email address to database
    console.log(emailElement.value);
    // set the valid greeting message
    emailElement.value = "";
    document.querySelector(".js-message-invalid").textContent = "";
    document.querySelector(".js-message-valid").textContent =
      "Thank you for subscribing to our newsletter";
    // remove the greeting message and clear the input element
    setTimeout(function () {
      document.querySelector(".js-message-valid").textContent = "";
    }, 2000);
  } else {
    document.querySelector(".js-message-valid").textContent = "";
    document.querySelector(".js-message-invalid").textContent =
      "Please enter a valid email address";
    setTimeout(function () {
      document.querySelector(".js-message-invalid").textContent = "";
    }, 2000);
  }
}
subscibeButton.addEventListener("click", newsLetterEmail);
/* end of subscribe button functionality */
