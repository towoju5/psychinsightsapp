<?php $pageTitle = "Home page";
require_once('header.php') ?>
<div class="slides">
	<section id="hero-section">
		<main class="mx-8 md:mx-32 min-h-[90vh] lg:mx-48 lg:flex justify-between items-center gap-10 mt-4 bg-right">
			<!-- // download buttons -->
			<div class="w-full lg:w-1/2 justify-center md:order-2 py-16 md:py-6">
				<div class="home__right anim-bounce animee__ group">
					<img src="./static/images/index/homescreen.png" alt="mockup for an iphone phone" class="home__image home__image--1 fly_in w-1/2">
					<img src="./static/images/phones/group48095554.png" alt="mockup for an iphone phone" class="home__image home__image--2 fly_out w-1/2">
				</div>
			</div>
			<div class="lg:w-1/2 md:order-1 md:pb-6">
				<div id="carouselExampleCrossfade" class="relative" data-te-carousel-init data-te-ride="carousel">
					<!--Carousel items-->
					<div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
						<!--First item-->
						<div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item data-te-carousel-active>
							<div class="home__texts home__texts-empower home__texts-active text-center lg:text-left w-full">
								<h1 class="home__heading home__heading-good">Good Mental Health&colon;<br>A Right&comma;
									Not a Privilege</h1>
								<p><small class="home__small">Every individual deserves mental clarity and peace&period;
										Explore our
										extensive
										resources&comma;
										ensuring accessible&comma; quality mental health solutions for
										all&period;</small></p>
							</div>
						</div>
						<!--Second item-->
						<div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
							<div class="home__texts home__texts-empower home__texts-active text-center lg:text-left w-full">
								<h1 class="home__heading home__heading-elevate">Elevate And Optimize Your Mental
									Well&dash;Being </h1>
								<small class="home__small">Embrace a comprehensive approach&period; Personalized mental
									wellness
									strategries
									designed
									for everyone&period; Elevate your mindset&comma; and find balance in daily
									life&period;</small>
							</div>
						</div>
						<!--Third item-->
						<div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
							<div class="home__texts home__texts-empower home__texts-active text-center lg:text-left w-full">
								<h1 class="home__heading home__heading-empower">Empower Your Journey With Our Insightful
									Guidance </h1>
								<small class="home__small home__small-empower">Uncover deep insights to guide your
									life&apos;s
									journey&period;
									We provide
									strategries and perspectives to help you take charge & thrive with
									confidence&period;</small>
							</div>
						</div>
						<!--Third item-->
						<div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
							<div class="home__texts home__texts-empower home__texts-active text-center lg:text-left w-full">
								<h1 class="home__heading home__heading-empower">Get useful insight and optimise your
									mental health </h1>
								<small class="home__small home__small-empower">Uncover deep insights to guide your
									life&apos;s
									journey&period;
									We provide
									strategries and perspectives to help you take charge & thrive with
									confidence&period;</small>
							</div>
						</div>
					</div>
				</div>
				<div class="gap-4 flex justify-center lg:justify-start">
					<a href="#" class="home__link">
						<img src="static/images/applestore.svg" alt="this is an apple store icon">
					</a>
					<a href="#" class="home__link">
						<img src="static/images/playstore.svg" alt="this is a google playstore icon">
					</a>
				</div>
			</div>
		</main>
	</section>
	<section id="ball-section" class="bg-white shadow-lg ">
		<div class="grid md:grid-cols-2 px-[4rem] py-[3rem] gap-10 items-center lg:mx-48">
			<div class="w-full px-3 py-2">
				<img src="./static/images/psyc.gif" alt="video" class="mx-auto">
				<!-- <video id="myVideo" preload="auto" autoplay muted loop style="width: 100%; height: auto;">
					<source src="./static/images/psyc.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video> -->
			</div>
			<div class="w-full px-3 py-2 text-left">
				<h1 class="pb-14 ball__title-heading">Elevate Your Mental Health: No Cost, No Card, No Stress</h1>
				<ul class="space-y-8">
					<li class="flex items-start gap-10">
						<img src="./static/images/index/location.svg" alt="Location">
						<div class="group">
							<p class="ball__title-text">Simply Start, No Strings Attached</p>
							<p class="reviews__text text-left">Begin Your 7-Day Trial of our Premium Mental Health Resources. No credit card required we’re committed to providing hassle-free access to improved psychological wellbeing.</p>
						</div>
					</li>
					<li class="flex items-start gap-10">
						<img src="./static/images/index/settings.svg" alt="Location">
						<div class="group">
							<p class="ball__title-text">Tailored Tools for Your Tranquility</p>
							<p class="reviews__text text-left">By completing our evidence-based questionnaires, you will be provided with personalized mental health resources in accordance with your unique psychological profile.</p>
						</div>
					</li>
					<li class="flex items-start gap-10">
						<img src="./static/images/index/clock.svg" alt="Location">
						<div class="group">
							<p class="ball__title-text">Always Here for You</p>
							<p class="reviews__text text-left">Our customer support team is available 24/7 to ensure you have the help you need, whenever you need it. Day or night, we're just a message away.</p>
						</div>
					</li>
					<li class="mt-6">
						<a href="#!signup" class="btn btn--free signup" data-te-toggle="modal" data-te-target="#loginModal" data-te-ripple-init data-te-ripple-color="light">
							Try for free
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="testimonial-section ">
		<div class="stories">
			<div class="stories__inner">
				<div class="stories__row">
					<h2 class="stories__heading">Stories you'd love to read</h2>
				</div>
				<div class="carousel py-3 glide">
					<div data-glide-el="track" class="glide__track js-stories stories__row stories__row-reviews" id="js-stories">
						<div class="glide__slides" style="overflow: unset!important;">
							<?php foreach ($testimonials as $k => $t) : ?>
								<div class="reviews js-reviews glide__slide">
									<div class="reviews__svg-container">
										<img src="./static/images/quote-icon.svg" alt="quote" class="mx-auto w-[63px]">
									</div>
									<p class="reviews__text"><?= substr($t['message'], 0, 200) . '...' ?>.
										<br> <span data-te-toggle="modal" data-te-target="#exampleModalLg" data-te-ripple-init data-te-ripple-color="light" class="openTestimonialModal text-blue-500 hover:cursor-pointer" data-message="<?= $t['message'] ?>">...See more</span>
									</p>
									<p class="reviews__author"><strong><?= $t['name'] ?></strong></p>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
				<!-- scroll  arrow -->
				<div class="stories__row stories__row-chevron">
					<div class="button-group">
						<button class="button button--left js-button-left">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path d="M15.41 7.41L14 6l-6 6l6 6l1.41-1.41L10.83 12l4.58-4.59z" />
							</svg>
						</button>
						<button class="button button--right js-button-right">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" />
							</svg>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="meditation ">
		<div class="stories">
			<div class="stories__inner">
				<div class="text-center my-6 md:mx-16 lg:mx-32  mt-10 ">
					<div class="grid md:grid-cols-2 lg:grid-cols-3 justify-center items-center gap-10">
						<div class="text-center mx-auto">
							<h3 class="humaans__heading-3">Take a moment for yourself</h3>
							<img src="static/images/humaan-stoic.png" alt="this is a humaan stoic file" class="humaans__image mx-auto">
							<p class="humaans__text">Define your goals clearly - be it reducing stress, improving sleep, or boosting your productivity.</p>
						</div>
						<div class="hidden lg:block text-center mx-auto">
							<h3 class="humaans__heading-3">Take a break&comma; <br> refresh your mind&period;</h3>
							<img src="static/images/humaan-yoga.png" alt="yoga posture" class="humaans__image mx-auto">
							<p class="humaans__text">Push ‘pause’ on your chaotic life to focus on revitalizing your health, clearing your mind, and striving for continuous self-improvement</p>
						</div>
						<div class="grid-2 text-center mx-auto">
							<h3 class="humaans__heading-3">Remain calm and maintain control&period;</h3>
							<img src="static/images/humaan-meditation.png" alt="meditation posture" class="humaans__image mx-auto">
							<p class="humaans__text">Learn to embrace the present moment, cultivate inner peace, and release what no longer serves you</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="categories-section" class="categories lg:mb-32 ">
		<div class="categories__inner pt-10 bg-white">
			<div class="mx-4 mb-4 py-5">
				<ul class="flex flex-wrap justify-center gap-6 -mb-px text-sm font-bold text-center text-gray-500" id="tabs-example" role="tablist">
					<li class="mr-2" role="presentation">
						<button class="bg-[#E2F8F9] md:text-xl lg:text-4xl text-black rounded-xl px-12 py-3" id="profile-tab-Depression" type="button" role="tab" aria-controls="dashboard-Depression" aria-selected="false">Depression</button>
					</li>
					<li class="mr-2" role="presentation">
						<button class="bg-[#E2F8F9] md:text-xl lg:text-4xl text-black rounded-xl px-12 py-3" id="dashboard-tab-Anxiety" type="button" role="tab" aria-controls="dashboard-Anxiety" aria-selected="false">Anxiety</button>
					</li>
					<li class="mr-2" role="presentation">
						<button class="bg-[#E2F8F9] md:text-xl lg:text-4xl text-black rounded-xl px-12 py-3" id="settings-tab-Stress" type="button" role="tab" aria-controls="settings-Stress" aria-selected="false">Stress</button>
					</li>
					<li role="presentation">
						<button class="bg-[#E2F8F9] md:text-xl lg:text-4xl text-black rounded-xl px-12 py-3" id="contacts-tab-Sleep" type="button" role="tab" aria-controls="contacts-Sleep" aria-selected="false">Sleep</button>
					</li>
					<li class="mr-2" role="presentation">
						<button class="bg-[#E2F8F9] md:text-xl lg:text-4xl text-black rounded-xl px-12 py-3" id="settings-tab-Motivation" type="button" role="tab" aria-controls="settings-Motivation" aria-selected="false">Motivation</button>
					</li>
					<li role="presentation">
						<button class="bg-[#E2F8F9] md:text-xl lg:text-4xl text-black rounded-xl px-12 py-3" id="contacts-tab-Concentration" type="button" role="tab" aria-controls="contacts-Concentration" aria-selected="false">Concentration</button>
					</li>
				</ul>
			</div>
			<div id="tabContentExample">
				<div class="rounded-lg bg-gray-50 lg:gap-10" id="dashboard-Depression" role="tabpanel" aria-labelledby="profile-tab-Depression">
					<div class="flex w-full items-center gap-10 mx-4">
						<div class="w-1/5 hidden md:block" data-te-animation-init data-te-animation-start="onShow" data-te-animation-reset="true" data-te-animation="[fly-in-right_0.5s]">
							<img src="./static/images/phones/mock up dashboard.png" alt="sleep_001s" class="mx-auto">
						</div>
						<div class="w-full md:w-3/5 py-[4rem] rounded-lg px-8 bg-[#e2f9f9] shadow-md">
							<p class="catty_text mb-6 md:px-12">Emotions Soothing Heavy Emotions is a guided practice designed to help individuals find calm and inner peace by addressing and soothing overwhelming or intense emotions.</p>
							<div class="mx-[3rem] py-4 px-10 md:px-[3rem] lg:px-32 bg-white rounded-xl flex items-center gap-4">
								<div class="play-btn">
									<img src="./static/images/play.svg" alt="play-btn" class="hover:cursor-pointer playPauseButton" data-audio="audio/(Depression)  Believe in Yourself.mp3">
								</div>
								<div class="text-2multi-line text-blalck gap-4 w-full">
									<h1 class="font-medium text-2xl lg:text-4xl py-3">Soothing Heavy</h1>
									<div class="lg:text-2xl flex gap-2 items-center">
										<span class="font-light">00:00</span>
										<input type="range" id="seek-slider" max="335" min="0" value="0">
										<span class="font-light">06:52</span>
									</div>
									<audio id="audio-player">
										<source src="" type="audio/mp3" id="audio-source">
									</audio>
								</div>
							</div>
						</div>
						<div class="w-1/5 hidden md:block animate-out slide-out-to-top slide-out-to-left">
							<img src="./static/images/phones/mockup journey.png" alt="sleep_001s" class="mx-auto">
						</div>
					</div>
				</div>
				<div class="hidden p-4 rounded-lg bg-gray-50" id="dashboard-Anxiety" role="tabpanel" aria-labelledby="dashboard-tab-Anxiety">
					<div class="flex w-full items-center gap-10">
						<div class="w-1/5 hidden md:block">
							<img src="./static/images/phones/iPhone 15 Pro Portrait Mockup.png" alt="sleep_001s" class="mx-auto">
						</div>
						<div class="w-full md:w-3/5 py-[4rem] rounded-lg px-8 bg-white shadow" style="background-image: url('./static/images/video-card-bg.png');">
							<p class="catty_text mb-6">Mindfulness Meditation is a guided practice that encourages individuals to cultivate present-moment awareness, reduce stress, and enhance their overall well-being through focused attention and mindful breathing.</p>
							<div class="mx-[3rem] py-4 px-10 md:px-[3rem] lg:px-32 bg-[#A6C1ED] rounded-xl flex items-center gap-10 lg:gap-20">
								<div class="play-btn">
									<img src="./static/images/play.svg" alt="play-btn" class="hover:cursor-pointer playPauseButton" data-audio="audio/(Anxiety)  Mindfulness Meditation.mp3">
								</div>
								<div class="text-2multi-line text-blalck gap-4 w-full">
									<h1 class="font-medium text-2xl lg:text-4xl py-3">Soothing Heavy</h1>
									<div class="lg:text-2xl flex gap-2 items-center">
										<span class="font-light">00:00</span>
										<input type="range" id="seek-slider" max="412" min="0" value="0">
										<span class="font-light">06:52</span>
									</div>
								</div>
							</div>
						</div>
						<div class="w-1/5 hidden md:block">
							<img src="./static/images/phones/right-anxiety-phone-0.9x.png" alt="sleep_001s" class="mx-auto">
						</div>
					</div>
				</div>
				<div class="hidden p-4 rounded-lg bg-gray-50" id="settings-Stress" role="tabpanel" aria-labelledby="settings-tab-Stress">
					<div class="flex w-full items-center gap-10">
						<div class="w-1/5 hidden md:block">
							<img src="./static/images/phones/left-stress-phone-0.9x.png" alt="sleep_001s" class="mx-auto">
						</div>
						<div class="w-full md:w-3/5 py-[4rem] rounded-lg px-8 bg-white shadow border border-gray-200">
							<p class="catty_text mb-6">Powerful Stress Reduction is a guided practice that empowers individuals with effective techniques to significantly reduce stress, fostering relaxation, mental clarity, and emotional balance.</p>
							<div class="mx-[3rem] py-4 px-10 md:px-[3rem] lg:px-32 bg-[#A6C1ED] rounded-xl flex items-center gap-10 lg:gap-20">
								<div class="play-btn">
									<img src="./static/images/play.svg" alt="play-btn" class="hover:cursor-pointer playPauseButton" data-audio="audio/(Stress) Powerful Stress Reduction.mp3">
								</div>
								<div class="text-2multi-line text-blalck gap-4 w-full">
									<h1 class="font-medium text-2xl lg:text-4xl py-3">Soothing Heavy</h1>
									<div class="lg:text-2xl flex gap-2 items-center">
										<span class="font-light">00:00</span>
										<input type="range" id="seek-slider" max="335" min="0" value="0">
										<span class="font-light">06:52</span>
									</div>
								</div>
							</div>
						</div>
						<div class="w-1/5 hidden md:block">
							<img src="./static/images/phones/right-stress-phone-0.9x.png" alt="sleep_001s" class="mx-auto">
						</div>
					</div>
				</div>
				<div class="hidden p-4 rounded-lg bg-gray-50" id="contacts-Sleep" role="tabpanel" aria-labelledby="contacts-tab-Sleep">
					<div class="flex w-full items-center gap-10">
						<div class="w-1/5 hidden md:block">
							<img src="./static/images/phones/left-sleep-phone-0.9x.png" alt="sleep_001s" class="mx-auto">
						</div>
						<div class="w-full md:w-3/5 py-[4rem] rounded-lg px-8 bg-white shadow border border-gray-200">
							<p class="catty_text mb-6">Improve Your Concentration is a guided practice designed to enhance focus and attention by providing techniques and exercises that support individuals in sharpening their concentration skills and mental clarity.</p>
							<div class="mx-[3rem] py-4 px-10 md:px-[3rem] lg:px-32 bg-[#A6C1ED] rounded-xl flex items-center gap-10 lg:gap-20">
								<div class="play-btn">
									<img src="./static/images/play.svg" alt="play-btn" class="hover:cursor-pointer playPauseButton" data-audio="audio/(Focus_Concentraion) Improve Your Concentration.mp3">
								</div>
								<div class="text-2multi-line text-blalck gap-4 w-full">
									<h1 class="font-medium text-2xl lg:text-4xl py-3">Soothing Heavy</h1>
									<div class="lg:text-2xl flex gap-2 items-center">
										<span class="font-light">00:00</span>
										<input type="range" id="seek-slider" max="335" min="0" value="0">
										<span class="font-light">06:52</span>
									</div>
								</div>
							</div>
						</div>
						<div class="w-1/5 hidden md:block">
							<img src="./static/images/phones/right-sleep-phone-0.9x.png" alt="sleep_001s" class="mx-auto">
						</div>
					</div>
				</div>
				<div class="hidden p-4 rounded-lg bg-gray-50" id="settings-Motivation" role="tabpanel" aria-labelledby="settings-tab-Motivation">
					<div class="flex w-full items-center gap-10">
						<div class="w-1/5 hidden md:block">
							<img src="./static/images/phones/iPhone 15 Pro Portrait Mockup.png" alt="sleep_001s" class="mx-auto">
						</div>
						<div class="w-full md:w-3/5 py-[4rem] rounded-lg px-8 bg-[#f4f5fb] shadow border border-gray-200">
							<p class="catty_text mb-6">Energizing Breath is a guided practice that utilizes specific breathing techniques to revitalize the body and mind, promoting increased energy, alertness, and a sense of vitality.</p>
							<div class="mx-[3rem] py-4 px-10 md:px-[3rem] lg:px-32 bg-white rounded-xl flex items-center gap-10 lg:gap-20">
								<div class="play-btn">
									<img src="./static/images/play.svg" alt="play-btn" class="hover:cursor-pointer playPauseButton" data-audio="audio/(Focus_Concentraion) Improve Your Concentration.mp3">
								</div>
								<div class="text-2multi-line text-blalck gap-4 w-full">
									<h1 class="font-medium text-2xl lg:text-4xl py-3">Soothing Heavy</h1>
									<div class="lg:text-2xl flex gap-2 items-center">
										<span class="font-light">00:00</span>
										<input type="range" id="seek-slider" max="335" min="0" value="0">
										<span class="font-light">06:52</span>
									</div>
								</div>
							</div>
						</div>
						<div class="w-1/5 hidden md:block">
							<img src="./static/images/phones/right-anxiety-phone-0.9x.png" alt="sleep_001s" class="mx-auto">
						</div>
					</div>
				</div>
				<div class="hidden p-4 rounded-lg bg-gray-50" id="contacts-Concentration" role="tabpanel" aria-labelledby="contacts-tab-Concentration">
					<div class="flex w-full items-center gap-10">
						<div class="w-1/5 hidden md:block">
							<img src="./static/images/phones/left-concentration-phone-0.9x.png" alt="sleep_001s" class="mx-auto">
						</div>
						<div class="w-full md:w-3/5 py-[4rem] rounded-lg px-8 bg-white shadow border border-gray-200">
							<p class="catty_text mb-6">Progressive Muscle Relaxation is a systematic practice that leads individuals through a series of muscle groups, helping them release tension and achieve a profound state of physical relaxation and calmness.</p>
							<div class="mx-[3rem] py-4 px-10 md:px-[3rem] lg:px-32 bg-[#A6C1ED] rounded-xl flex items-center gap-10 lg:gap-20">
								<div class="play-btn">
									<img src="./static/images/play.svg" alt="play-btn" class="hover:cursor-pointer playPauseButton" data-audio="audio/(Focus_Concentraion) Improve Your Concentration.mp3">
								</div>
								<div class="text-2multi-line text-blalck gap-4 w-full">
									<h1 class="font-medium text-2xl lg:text-4xl py-3">Soothing Heavy</h1>
									<div class="lg:text-2xl flex gap-2 items-center">
										<span class="font-light">00:00</span>
										<input type="range" id="seek-slider" max="335" min="0" value="0">
										<span class="font-light">06:52</span>
									</div>
								</div>
							</div>
						</div>
						<div class="w-1/5 hidden md:block">
							<img src="./static/images/phones/right-concentration-phone-0.9x.png" alt="sleep_001s" class="mx-auto">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- // latest articles -->
	<section class="articles pb-12">
		<div class="articles__inner">
			<div class="text-center text-zinc-800 text-5xl font-bold font-['Lato'] py-6">Latest articles</div>
			<div class="articles__row articles__row-content">
				<div class="gap-10 grid md:grid-cols-2 lg:grid-cols-3 lg:gap-16 py-10">
					<?php foreach ($blogs as $key => $blog) : ?>
						<div class="articles__div-col rounded-lg articles__div-col--1" style="background-image: url('<?= image_url($blog['image']) ?>'); width:100%;">
							<small class="articles__category"><?= $blog['category'] ?></small>
							<a href="blog.php?slug=<?= $key ?>" class="articles__link gap-4">
								<p class=""><?= $blog['title'] ?></p>
								<img src="static/images/chevron-right.svg" alt="chevron pointing right" class="articles__chevron">
							</a>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>

	<section hidden class="community my-10 js-community py-24 lg:py-44 ">
		<div class="community__inner">
			<div class="community__row">
				<h3 class="community__heading">Be a part of the large Psychinsight’s community</h3>
			</div>
			<div class="grid justify-center md:grid-cols-3 gap-10 mx-auto lg:gap-20">
				<div class="bg-[#207384] rounded-3xl px-10 text-center flex items-center min-h-[20rem] mx-auto">
					<div class="group w-[18rem] mb-6">
						<div class="flex justify-center">
							<img src="./static/images/solar_star-bold.svg" class="star-size" alt="Ratings">
							<img src="./static/images/solar_star-bold.svg" class="star-size" alt="Ratings">
							<img src="./static/images/solar_star-bold.svg" class="star-size" alt="Ratings">
							<img src="./static/images/solar_star-bold.svg" class="star-size" alt="Ratings">
							<img src="./static/images/solar_star-bold.svg" class="star-size" alt="Ratings">
						</div>
						<p class="text-white r_text1">5 Star rating</p>
					</div>
				</div>
				<div class="bg-[#207384] rounded-3xl px-10 text-center flex items-center min-h-[20rem] mx-auto">
					<div class="group text-center w-[18rem]">
						<div class="flex justify-center mb-6">
							<img src="./static/images/badge.svg" style="width: 32.1px;" class="star-size" alt="Badge">
						</div>
						<p class="text-white r_text1">50k</p> <span class="text-white r_text1">Ratings</span>
						<p style="font-family: lato; font-size: 10px; color: #fff;">ios & Google play</p>
					</div>
				</div>
				<div class="bg-[#207384] rounded-3xl px-10 text-center flex items-center min-h-[20rem] mx-auto">
					<div class="group text-center w-[18rem]">
						<div class="flex justify-center mb-6">
							<img src="./static/images/Vector.svg" style="width: 32.1px;" class="star-size" alt="Badge">
						</div>
						<p class="text-white r_text1">10m</p> <span class="text-white r_text1">Downloads</span>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script>
	$(document).ready(function() {
		var audio = $("#audio-player")[0];
		var audioSource = $("#audio-source");
		var timeLeftDisplay = $("#time-left");
		var currentPlayingAudio = $("#audio-source").attr("src")
		console.log(currentPlayingAudio);
		$(".playPauseButton").click(function() {
			var audioUrl = $(this).data("audio");
			imgSrc = $(this);
			if (audio.paused) {
				audioSource.attr("src", audioUrl);
				$(".playPauseButton").attr("src", "./static/images/play.svg")
				audio.pause()
				audio.load();
				if (audio.play()) {
					imgSrc.attr("src", "./static/images/pause.svg")
				}
				setInterval(updateTimeLeft, 1000); // Update time every second
			} else {
				audio.pause()
				imgSrc.attr("src", "./static/images/play.svg")
			}
		});

		function updateTimeLeft() {
			var timeLeft = audio.duration - audio.currentTime;
			var minutes = Math.floor(timeLeft / 60);
			var seconds = Math.floor(timeLeft % 60);
			timeLeftDisplay.text("Time Left: " + minutes + ":" + (seconds < 10 ? "0" : "") + seconds);
		}
	});
</script>
<script>
	$(document).ready(function() {
		var audio = $("#audio-player")[0];
		var audioSource = $("#audio-source");
		$("#range-control").rangeslider({
			polyfill: false,
			onSlideEnd: function(position, value) {
				audio.currentTime = audio.duration * value / 100;
			}
		});
		$(audio).on('timeupdate', function() {
			var percent = (audio.currentTime / audio.duration) * 100;
			$("#range-control").val(percent).change();
			$("#status").text(Math.round(percent * 100) / 100 + "%");
		});
		$("#btn-play").click(function() {
			audio.play();
		});
		$("#btn-stop").click(function() {
			audio.pause();
		});
		// Example of changing the audio source dynamically
		$("#playPauseButton").click(function() {
			var audioUrl = $(this).data("audio");
			audioSource.attr("src", audioUrl);
			audio.load(); // Reload the audio element to apply the changes
			audio.play();
		});
	});
</script>
<?php require_once('footer.php') ?>