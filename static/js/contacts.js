document.querySelector(".js-contact-submit")
  .addEventListener("click", function () {
    const flashContainer = document.querySelector(".js-flash");
    const emailAddress = document.querySelector(".js-email");
    const message = document.querySelector(".js-message");
    const isAgreed = document.querySelector(".js-agree").checked;

    if (isAgreed) {
      console.log("Agreement Reached");
    }

    if (isAgreed && message.value && emailAddress.value) {
      console.log("Values provided for both message and email adress");
      console.log(`Email: ${emailAddress.value} - Message: ${message.value}`);

      // show flash message for 5 seconds
      flashContainer.classList.add("flash--active");
      setTimeout(function () {
        message.value = "";
        emailAddress.value = "";
        flashContainer.classList.remove("flash--active");
      }, 5000);
    }
  });