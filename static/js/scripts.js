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

<script>
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }


        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        var themeToggleDarkIcon_2 = document.getElementById('theme-toggle-dark-icon-2');
        var themeToggleLightIcon_2 = document.getElementById('theme-toggle-light-icon-2');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
            if (themeToggleDarkIcon_2) {
                themeToggleLightIcon_2.classList.remove('hidden');
            }
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
            if (themeToggleDarkIcon_2) {
                themeToggleDarkIcon_2.classList.remove('hidden');
            }
        }


        var themeToggleBtn_2 = document.getElementById('theme-toggle-2');
        if (themeToggleBtn_2) {

            themeToggleBtn_2.addEventListener('click', function () {

                // toggle icons inside button
                themeToggleDarkIcon_2.classList.toggle('hidden');
                themeToggleLightIcon_2.classList.toggle('hidden');

                sync_theme()

            });
        }


        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function () {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            sync_theme()


        });


        function sync_theme() {
            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        }



        document.addEventListener('DOMContentLoaded', function () {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function () {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function () {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function () {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
</script>