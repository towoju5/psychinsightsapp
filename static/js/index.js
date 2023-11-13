/***
 * This is for functionalities on the index page
 ***/


document.addEventListener("wheel", (event) => {
	event.preventDefault();
	const delta = Math.sign(event.deltaY);
	window.scrollBy({
		top: delta * window.innerHeight,
		behavior: 'smooth'
	});
});

// Get all tab buttons and tab content
const tabButtons = document.querySelectorAll('[role="tab"]');
const tabContents = document.querySelectorAll('[role="tabpanel"]');

// Add click event listeners to tab buttons
tabButtons.forEach((button) => {
	button.addEventListener("click", () => {
		// Remove the "selected" class from all tab buttons and hide tab content
		tabButtons.forEach((btn) => {
			btn.setAttribute("aria-selected", "false");
			btn.classList.remove("bg-[#DD6565]", "text-white");
		});
		tabContents.forEach((content) => {
			content.classList.add("hidden");
		});

		button.classList.add("bg-[#DD6565]", "text-white");

		// Add the "selected" class to the clicked tab button and show the corresponding tab content
		button.setAttribute("aria-selected", "true");
		const tabId = button.getAttribute("aria-controls");
		const tabContent = document.getElementById(tabId);
		tabContent.classList.remove("hidden");
	});
});

/* let's get the numbers running */
function count() {
	const counters = document.querySelectorAll(".js-counter");

	counters.forEach((counter) => {
		counter.textContent = 0;

		const updateCount = () => {
			const target = +counter.getAttribute("data-target");
			const text = +counter.innerText;
			const increment = target / 120;

			if (text < target) {
				counter.innerText = Math.ceil(text + increment);
				setTimeout(updateCount, 30);
			} else {
				counter.textContent = target;
			}
		};
		updateCount();
	});
}

document.getElementById("password").addEventListener("input", function () {
	validatePassword(this.value);
});

var passwordInput = document.getElementById('password');
var toggleButton = document.getElementById('togglePassword');

toggleButton.addEventListener('click', function() {
  if (passwordInput.type === 'password') {
	passwordInput.type = 'text';
	toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
  } else {
	passwordInput.type = 'password';
	toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
  }
});

function validatePassword(password) {
	var minLength = 8;
	var hasUpperCase = /[A-Z]/.test(password);
	var hasLowerCase = /[a-z]/.test(password);
	var hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password);

	if (password.length < minLength) {
		document.getElementById("error-message").textContent = "Password must be at least 8 characters long.";
	} else if (!hasUpperCase || !hasLowerCase) {
		document.getElementById("error-message").textContent = "Password must have both uppercase and lowercase letters.";
	} else if (!hasSpecialChar) {
		document.getElementById("error-message").textContent = "Password must have at least 1 special character.";
	} else {
		document.getElementById("error-message").textContent = "";
	}
}

/* end of getting the numbers running */

/* start of phone transitioning code */
const buttonRow = document.querySelector(".js-button-row");
const allCategoriesButtons = buttonRow.querySelectorAll(
	".js-categories-button"
);
/* TODO: use regex instead of this map */
const phonesMap = new Map([
	["Depression", ".categories-depression-phones"],
	["Anxiety", ".categories-anxiety-phones"],
	["Stress", ".categories-stress-phones"],
	["Concentration", ".categories-concentration-phones"],
	["Motivation", ".categories-motivation-phones"],
	["Sleep", ".categories-sleep-phones"],
]);

buttonRow.addEventListener("click", function (event) {
	if (event.target.type === "button") {
		// get the current active button
		currentActiveButton = buttonRow.querySelector(
			".categories__button--active"
		);
		if (event.target !== currentActiveButton) {
			// get the current active button and remove it from being the active one
			currentActiveButton.classList.remove("categories__button--active");
			// let's paint the now clicked button
			event.target.classList.add("categories__button--active");

			// clickedButton = event.target;
			clickedButtonText = event.target.innerText;
			console.log(`You just clicked the ${clickedButtonText} button`);
			className = phonesMap.get(clickedButtonText);
			// console.log(className);

			// get the current display phones
			let currentDisplayedPhones = document.querySelector(
				".categories-phones-active"
			);
			currentDisplayedPhones.classList.remove("categories-phones-active");
			// set a new current displayed phones
			element = document.querySelector(className);
			element.classList.add("categories-phones-active");
		}
	}
});
/* end of phone transitioning logic */

//
let index = 0;
let interval = setInterval(run, 2000);
let reviewsCards = document.querySelectorAll(".js-reviews");
let stories = document.querySelector(".js-stories");

function run() {
	index++;
	changeImage();
}

function changeImage() {
	if (index > reviewsCards.length - 1) {
		index = 0;
	} else if (index < 0) {
		index = reviewsCards.length - 1;
	}
	stories.style.transform = `translateX(${-index * 37}rem)`;
}

function resetInterval() {
	clearInterval(interval);
	interval = setInterval(run, 1200);
}

document.querySelector(".js-button-left").addEventListener("click", () => {
	index--;
	changeImage();
	resetInterval();
});

document.querySelector(".js-button-right").addEventListener("click", () => {
	index++;
	changeImage();
	resetInterval();
});
//

const homeLeft = document.querySelector(".home__left");
homeLeft.keyframes = [{
	transform: "translateX(-22px)",
}, ];

homeLeft.animProps = {
	duration: 1000,
	easing: "ease-in",
};

homeLeft.animate(homeLeft.keyframes, homeLeft.animProps);

