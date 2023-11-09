/***
 * This contains logic applicable to elements on all pages
 * ****/

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
