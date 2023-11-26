<?php $pageTitle = "Help center";
require_once('header.php') ?>

<section class="faqs">
    <div class="faqs__inner">
        <div class="faqs__row faqs__row--1">
            <div class="faqs__container">
                <h2 class="faqs__heading">Help and Support</h2>
                <small class="faqs__small">You don’t need to go through it all alone. Reach out to us to get the assistance and
                    support you require.</small>
            </div>
        </div>
        <div class="faqs__row faqs__row--2">
            <div class="faqs__container">
                <h2 class="faqs__heading">Frequently asked Questions (FAQs)</h2>
                <div class="faqs__accordions">
                    <?php foreach($faqs as $faq): ?>
                    <div class="faqs__accordion">
                        <button class="js-faq-button faqs__button" type="button">
                            <span class="js-faq-question faqs__question font-bold"><?= $faq['title'] ?></span>
                            <span class="faqs__svg">
                                <svg class="w-6 h-6 transition-transform duration-300 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </button>
                        <div class="js-faq-answer faqs__answer"><?= $faq['message'] ?></div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="faqs__row faqs__row--3">
            <div class="faqs__container">
                <h2 class="faqs__heading">Troubleshooting</h2>
                <div class="faqs__accordions">
                    <div class="faqs__accordion">
                        <button class="js-faq-button faqs__button" type="button">
                            <span class="js-faq-question faqs__question">App Isn&#39;t Loading Properly</span>
                            <span class="faqs__svg">
                                <svg class="w-6 h-6 transition-transform duration-300 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </button>
                        <div class="js-faq-answer faqs__answer">
                            <p>If you're facing issues with our app, try these quick fixes:</p>
                            <ul>
                                <li class="list-decimal">Internet Connection: Confirm your device has a stable internet connection.</li>
                                <li class="list-decimal">Update the App: Ensure Psych Insights is updated to the latest version in your app store.</li>
                                <li class="list-decimal">Clear Cache: Go to your device's settings, select Psych Insights, and clear the cache.</li>
                                <li class="list-decimal">Restart Device: Sometimes, a simple restart of your device can resolve the issue.</li>
                                <li class="list-decimal">Reinstall App: Uninstall and then reinstall Psych Insights.</li>
                                <li class="list-decimal">Contact Support: If problems persist, please contact our support team with details about your device and the issue.</li>
                            </ul>
                            <small>For immediate updates on app performance and fixes, follow our official channels.</small>
                        </div>
                    </div>
                    <div class="faqs__accordion">
                        <button class="js-faq-button faqs__button" type="button">
                            <span class="js-faq-question faqs__question">I am unable to log in</span>
                            <span class="faqs__svg">
                                <svg class="w-6 h-6 transition-transform duration-300 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </button>
                        <div class="js-faq-answer faqs__answer">This might be an issue as you are attempting to log in with an
                            incorrect email address, an incorrect
                            password, or an incorrect login method.
                            Please review our quick tips below:
                            Incorrect Email Address Troubleshooting:
                            If you are experiencing a login error your Psychinsights account might simply be associated with an
                            alternative email address. We ask that you attempt to log in once more using an alternative email address
                            that might be associated with your account.
                            Alternatively, your Psychinsights account might be associated with a completely different login method
                            such as
                            a social login method. We ask that you attempt to re-login using a different login method such as
                            Facebook, Spotify, or Apple Sign-in.
                            Incorrect Password Troubleshooting:
                            If you have forgotten your password, do not worry! Please enter your email address at:
                            https://www.pyschinsights.com/login/forgotten-password to have the password link sent directly to your
                            inbox.​
                            Important Note: The reset password email will only come into your inbox if you enter an email address that
                            is connected to a Psychinsights account. If you do not receive a reset password email within 10 minutes
                            please
                            note that your Psychinsights account is associated with a different email or login method.
                            If you continue to experience any login issues, please feel free to reach out to us at
                            help@pyschinsights.com and we will be happy to further assist you!</div>
                    </div>
                    <div class="faqs__accordion">
                        <button class="js-faq-button faqs__button" type="button">
                            <span class="js-faq-question faqs__question">How can I download the app?</span>
                            <span class="faqs__svg">
                                <svg class="w-6 h-6 transition-transform duration-300 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </button>
                        <div class="js-faq-answer faqs__answer">The Psychinsights app is currently available on Apple (iPhone, iPad,
                            iPod Touch) and Android (smartphones
                            and tablets) devices. To download the app, search for &#34;Psychinsights&#34; in the Apple App Store or
                            the Google Play Store.</div>
                    </div>
                    <div class="faqs__accordion">
                        <button class="js-faq-button faqs__button" type="button">
                            <span class="js-faq-question faqs__question">Why is the app taking up so much storage?</span>
                            <span class="faqs__svg">
                                <svg class="w-6 h-6 transition-transform duration-300 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </button>
                        <div class="js-faq-answer faqs__answer">Depending on the courses you are using and have downloaded the
                            storage space on your device might fill up
                            quite quickly.
                            Here are a few tips to clear out some of that storage:
                            1. Reinstalling the app to clear and free up the storage Psychinsights is using.
                            2. Review the Psychinsights download manager and see if you can go through your downloaded content and
                            delete
                            the content you have already listened to.
                            3. Clear the app&#39;s cache.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faqs__row faqs__row--4">
            <div class="faqs__container">
                <h2 class="faqs__heading">Billing and Subscriptions</h2>
                <div class="faqs__accordions">
                    <?php foreach($billings as $k => $billing): ?>
                    <div class="faqs__accordion">
                        <button class="js-faq-button faqs__button" type="button">
                            <span class="js-faq-question faqs__question font-bold"><?= $billing['title'] ?></span>
                            <span class="faqs__svg">
                                <svg class="w-6 h-6 transition-transform duration-300 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </button>
                        <div class="js-faq-answer faqs__answer"><?= $billing['message'] ?></div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <div class="flex-col justify-between items-center inline-flex  space-y-3">
            <div class="text-center text-zinc-800 text-4xl font-extrabold font-['Lato'] leading-10">Can’t find what you are looking for?</div>
            <div class="Frame1000002118 justify-end items-center gap-20 inline-flex">
                <div class="WeAreHereToHelp text-zinc-800 text-2xl font-normal font-['Lato'] leading-loose">We are here to help.</div>
                <div class="Cta px-6 py-3.5 bg-cyan-700 rounded-2xl shadow justify-center items-center gap-3 flex">
                    <a href="./contact.php" class="TryForFree text-center text-white text-lg font-semibold font-['Noto Sans'] leading-normal tracking-tight">Contact us</a>
                </div>
            </div>
        </div>

    </div>
</section>


<script>
    const accordionButton = document.getElementsByClassName("js-faq-button");
    for (const button of accordionButton) {
        // console.log(button);
        button.addEventListener("click", function() {
            this.classList.toggle("active");

            let answer = this.nextElementSibling;
            if (answer.style.display === "block") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
        });
    }

    $('.faqs__button').click(function() {
        const svg = $(this).find('.faqs__svg svg');
        svg.toggleClass('rotate-180');
    });
    $(".help_center").text("Help center")
</script>
<?php require_once('footer.php') ?>