console.log("this is the help page");

// const panels = document.getElementsByClassName("js-faq-answer");
// for (const panel of panels) {
//   console.log(panel);
// }

const accordionButton = document.getElementsByClassName("js-faq-button");
for (const button of accordionButton) {
  console.log(button);
  button.addEventListener("click", function () {
    this.classList.toggle("active");

    let answer = this.nextElementSibling;
    if (answer.style.display === "block") {
      answer.style.display = "none";
    } else {
      answer.style.display = "block";
    }
  });
}
