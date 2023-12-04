<?php $pageTitle = "Psychinsights App";
require_once('header.php') ?>
<div>

	<!-- hero section -->
	<section id="hero-section" class="h-full">
		<div class="min-h-screen">
			<main class="mx-8 md:mx-32 min-h-[90vh] lg:mx-48 lg:flex justify-between items-center gap-10 mt-4 bg-right">
				<!-- // download buttons -->
				<div class="w-full lg:max-w-[50%] justify-center md:order-2 pt-10 md:py-6">
					<div class="home__right anim-bounce animee__group">
						<img src="./static/images/index/homescreen.png" alt="mockup for an iPhone phone" class="home__image home__image--1 fly_in md:w-1/2">
						<img src="./static/images/phones/group48095554.png" alt="mockup for an iPhone phone" class="home__image home__image--2 fly_out md:w-1/2">
					</div>
				</div>
				<div class="lg:w-1/2 md:order-1 md:pb-6">
					<div id="carouselExampleCrossfade" class="relative" data-te-carousel-init data-te-ride="carousel" data-te-interval="15000">
						<!--Carousel items-->
						<div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
							<!--First item-->
							<div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item data-te-carousel-active>
								<div class="home__texts home__texts-empower home__texts-active text-center lg:text-left w-full">
									<h1 class="home__heading home__heading-good">Good Mental Health&colon;<br>A Right&comma;
										Not a Privilege</h1>
									<p><small class="home__small">We are all deserving of mental clarity and tranquility. We offer a wide array of resources, with the goal of providing accessible, science-backed mental health solutions for everyone.</small></p>
								</div>
							</div>
							<!--Second item-->
							<div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
								<div class="home__texts home__texts-empower home__texts-active text-center lg:text-left w-full">
									<h1 class="home__heading home__heading-elevate">Elevate And Optimize Your Mental
										Well&dash;Being </h1>
									<small class="home__small">Adopt a holistic approach to your mental wellness. Our protocols are personalized to your unique needs and psychological profile, and aim to bring peace to your mind, a spring to your step, and a smile to your face.</small>
								</div>
							</div>
							<!--Third item-->
							<div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
								<div class="home__texts home__texts-empower home__texts-active text-center lg:text-left w-full">
									<h1 class="home__heading home__heading-empower">Empower Your Journey With Our Insightful
										Guidance </h1>
									<small class="home__small home__small-empower">Discover profound insights that illuminate your life’s path. We provide evidence-based strategies, empowering you to take control and become the best version of yourself.</small>
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
		</div>
	</section>

	<!-- steps of use -->
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
				<h1 class="pb-14 ball__title-heading">Elevate Your Mental Health: No Cost, No Card, No Stress.</h1>
				<ul class="space-y-8">
					<li class="flex items-start gap-10">
						<img src="./static/images/index/location.svg" alt="Location">
						<div class="group">
							<p class="ball__title-text">Simply Start, No Strings Attached</p>
							<p class="reviews__text text-left">Begin Your 7-Day Trial of our Premium Mental Health Resources. No credit card required. We’re committed to providing hassle-free access to improved psychological wellbeing.</p>
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

	<!-- testimonial section -->
	<div class="stories">
		<div class="stories__inner">
			<div class="stories__row">
				<h2 class="stories__heading">Stories you'd love to read</h2>
			</div>
			<div class="carousel">
				<div class="js-stories stories__row stories__row-reviews" id="slicky">
					<?php foreach ($testimonials as $k => $t) : ?>
						<div class="reviews js-reviews glide__slide min-h-[330px] min-w-[350px]">
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


			<!-- scroll  arrow -->
			<div class="stories__row stories__row-chevron md:hidden">
				<div class="button-group">
					<button class="button button--left js-button-left" onclick="$('#slicky').slick('slickPrev');">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M15.41 7.41L14 6l-6 6l6 6l1.41-1.41L10.83 12l4.58-4.59z" />
						</svg>
					</button>
					<button class="button button--right js-button-right" onclick="$('#slicky').slick('slickNext');">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M10 6L8.59 7.41L13.17 12l-4.58 4.59L10 18l6-6l-6-6z" />
						</svg>
					</button>
				</div>
			</div>
		</div>
	</div>
	</section>

	<!-- budha section -->
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
						<div class="md:hidden lg:block text-center mx-auto">
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

	<!-- mp3 audio section -->
	<section id="categories-section" class="categories lg:mb-32 ">
		<div class="categories__inner pt-10 bg-white">
			<div class="mx-4 mb-4 py-5">
				<ul class="flex flex-wrap justify-center gap-6 -mb-px text-sm font-bold text-center text-gray-500" id="tabs-example" role="tablist">
					<li class="mr-2 psy_li-nav" role="presentation">
						<button class="bg-[#E2F8F9] md:text-xl lg:text-4xl text-black rounded-xl px-12 py-3 hover:bg-[#1E6C7C] hover:text-white" id="profile-tab-Depression" type="button" role="tab" aria-controls="dashboard-Depression" aria-selected="false">Depression</button>
					</li>
					<li class="mr-2 psy_li-nav" role="presentation">
						<button class="bg-[#E2F8F9] md:text-xl lg:text-4xl text-black rounded-xl px-12 py-3 hover:bg-[#1E6C7C] hover:text-white" id="dashboard-tab-Anxiety" type="button" role="tab" aria-controls="dashboard-Anxiety" aria-selected="false">Anxiety</button>
					</li>
					<li class="mr-2 psy_li-nav" role="presentation">
						<button class="bg-[#E2F8F9] md:text-xl lg:text-4xl text-black rounded-xl px-12 py-3 hover:bg-[#1E6C7C] hover:text-white" id="settings-tab-Stress" type="button" role="tab" aria-controls="settings-Stress" aria-selected="false">Stress</button>
					</li>
					<li class="mr-2 psy_li-nav" role="presentation">
						<button class="bg-[#E2F8F9] md:text-xl lg:text-4xl text-black rounded-xl px-12 py-3 hover:bg-[#1E6C7C] hover:text-white" id="contacts-tab-Sleep" type="button" role="tab" aria-controls="contacts-Sleep" aria-selected="false">Sleep</button>
					</li>
					<li class="mr-2 psy_li-nav" role="presentation">
						<button class="bg-[#E2F8F9] md:text-xl lg:text-4xl text-black rounded-xl px-12 py-3 hover:bg-[#1E6C7C] hover:text-white" id="settings-tab-Motivation" type="button" role="tab" aria-controls="settings-Motivation" aria-selected="false">Motivation</button>
					</li>
					<li class="mr-2 psy_li-nav" role="presentation">
						<button class="bg-[#E2F8F9] md:text-xl lg:text-4xl text-black rounded-xl px-12 py-3 hover:bg-[#1E6C7C] hover:text-white" id="contacts-tab-Concentration" type="button" role="tab" aria-controls="contacts-Concentration" aria-selected="false">Focus</button>
					</li>
				</ul>
			</div>
			<div id="tabContentExample">
				<div class="rounded-lg bg-gray-50 lg:gap-10" id="dashboard-Depression" role="tabpanel" aria-labelledby="profile-tab-Depression">
					<div class="flex w-full items-center gap-10 mx-4">
						<div class="w-1/5 hidden md:block animate__animated animate__fadeInLeft">
							<img src="./static/images/index/mp3-mockups/001.png" alt="sleep_001s" class="mx-auto">
						</div>
						<div class="w-full md:w-3/5 py-[4rem] rounded-lg px-3 bg-[#e2f9f9] shadow-md mx-4 animate__animated animate__slideInRight">
							<p class="catty_text mb-6 text-center md:px-12">Elevate your mood with our curated mindfulness recordings, specifically designed to revitalize your spirit and add a spring to your step.</p>
							<div class="py-4 px-4 bg-white rounded-xl items-center gap-4">
								<div class="playPauseBtn play-pause-btn hidden">
									<img src="./static/images/play.svg" alt="play-btn" class="hover:cursor-pointer" data-audio="">
								</div>
								<div class="text-2xl multi-line text-blalck gap-4">
									<div class="lg:text-2xl flex gap-2 items-center audio_player-1 p-2" data-title="Soothing Heavy emotions">
										<audio crossorigin class="psy_audio-player">
											<source src="./audio/(Depression)  Believe in Yourself.mp3" type="audio/mpeg">
										</audio>
									</div>
								</div>
							</div>
						</div>
						<div class="w-1/5 hidden md:block animate__animated animate__fadeInRight">
							<img src="./static/images/index/mp3-mockups/002.png" alt="sleep_001s" class="mx-auto">
						</div>
					</div>
				</div>
				<div class="hidden p-4 rounded-lg bg-gray-50" id="dashboard-Anxiety" role="tabpanel" aria-labelledby="dashboard-tab-Anxiety">
					<div class="flex w-full items-center gap-10">
						<div class="w-1/5 hidden md:block animate__animated animate__fadeInLeft">
							<img src="./static/images/index/mp3-mockups/003.png" alt="sleep_001s" class="mx-auto">
						</div>
						<div class="w-full md:w-3/5 py-[4rem] rounded-lg px-3 bg-[#e2f9f9] shadow-md mx-4 animate__animated animate__slideInRight">
							<p class="catty_text mb-6 text-center">Alleviate your worries with our handpicked relaxation tracks, crafted to calm your mind and bring tranquility to your daily life.</p>
							<div class="mx-[1rem] bg-white rounded-xl flex items-center gap-10 lg:gap-20">
								<div class="playPauseBtn play-pause-btn hidden">
									<img src="./static/images/play.svg" alt="play-btn" class="hover:cursor-pointer playPauseButton" data-audio="audio/(Anxiety)  Mindfulness Meditation.mp3">
								</div>
								<div class="text-2multi-line text-blalck gap-4 w-full">
									<div class="lg:text-2xl flex gap-2 items-center audio_player-2 p-2" data-title="Mindfulness Meditation">
										<audio crossorigin class="psy_audio-player">
											<source src="./audio/(Anxiety)  Mindfulness Meditation.mp3" type="audio/mpeg">
										</audio>
									</div>
								</div>
							</div>
						</div>
						<div class="w-1/5 hidden md:block animate__animated animate__fadeInRight">
							<img src="./static/images/index/mp3-mockups/004.png" alt="sleep_001s" class="mx-auto">
						</div>
					</div>
				</div>
				<div class="hidden p-4 rounded-lg bg-gray-50" id="settings-Stress" role="tabpanel" aria-labelledby="settings-tab-Stress">
					<div class="flex w-full items-center gap-10">
						<div class="w-1/5 hidden md:block animate__animated animate__fadeInLeft">
							<img src="./static/images/index/mp3-mockups/005.png" alt="sleep_001s" class="mx-auto">
						</div>
						<div class="w-full md:w-3/5 py-[4rem] rounded-lg px-3 bg-[#e2f9f9] shadow-md mx-4 animate__animated animate__slideInRight">
							<p class="catty_text mb-6 text-center">Calm the chaos in your mind with our stress-relief audios, tailored to ease your tension and restore a sense of balance.</p>
							<div class="mx-[1rem] bg-white rounded-xl flex items-center gap-10 lg:gap-20">
								<div class="playPauseBtn play-pause-btn hidden">
									<img src="./static/images/play.svg" alt="play-btn" class="hover:cursor-pointer playPauseButton" data-audio="audio/(Stress) Powerful Stress Reduction.mp3">
								</div>
								<div class="text-2multi-line text-blalck gap-4 w-full">
									<div class="lg:text-2xl flex gap-2 items-center audio_player-3 p-2" data-title="Powerful Stress Reduction">
										<audio crossorigin class="psy_audio-player">
											<source src="./audio/(Stress) Powerful Stress Reduction.mp3" type="audio/mpeg">
										</audio>
									</div>
								</div>
							</div>
						</div>
						<div class="w-1/5 hidden md:block animate__animated animate__fadeInRight">
							<img src="./static/images/index/mp3-mockups/006.png" alt="sleep_001s" class="mx-auto">
						</div>
					</div>
				</div>
				<div class="hidden p-4 rounded-lg bg-gray-50" id="contacts-Sleep" role="tabpanel" aria-labelledby="contacts-tab-Sleep">
					<div class="flex w-full items-center gap-10">
						<div class="w-1/5 hidden md:block animate__animated animate__fadeInLeft">
							<img src="./static/images/index/mp3-mockups/007.png" alt="sleep_001s" class="mx-auto">
						</div>
						<div class="w-full md:w-3/5 py-[4rem] rounded-lg px-3 bg-[#e2f9f9] shadow-md mx-4 animate__animated animate__slideInRight">
							<p class="catty_text mb-6 text-center">Drift into a restful slumber with our selection of soothing sleep audios, carefully chosen to help you relax and enhance the quality of your sleep</p>
							<div class="mx-[1rem] bg-white rounded-xl flex items-center gap-10 lg:gap-20">
								<div class="playPauseBtn play-pause-btn hidden">
									<img src="./static/images/play.svg" alt="play-btn" class="hover:cursor-pointer playPauseButton" data-audio="audio/(Focus_Concentraion) Improve Your Concentration.mp3">
								</div>
								<div class="text-2multi-line text-blalck gap-4 w-full">
									<div class="lg:text-2xl flex gap-2 items-center audio_player-4 p-2" data-title="Progressive Muscle Relaxation">
										<audio crossorigin class="psy_audio-player">
											<source src="./audio/(Focus_Concentraion) Improve Your Concentration.mp3" type="audio/mpeg">
										</audio>
									</div>
								</div>
							</div>
						</div>
						<div class="w-1/5 hidden md:block animate__animated animate__fadeInRight">
							<img src="./static/images/index/mp3-mockups/008.png" alt="sleep_001s" class="mx-auto">
						</div>
					</div>
				</div>
				<div class="hidden p-4 rounded-lg bg-gray-50" id="settings-Motivation" role="tabpanel" aria-labelledby="settings-tab-Motivation">
					<div class="flex w-full items-center gap-10">
						<div class="w-1/5 hidden md:block animate__animated animate__fadeInLeft">
							<img src="./static/images/index/mp3-mockups/009.png" alt="sleep_001s" class="mx-auto">
						</div>
						<div class="w-full md:w-3/5 py-[4rem] rounded-lg px-3 bg-[#e2f9f9] shadow-md mx-4 animate__animated animate__slideInRight">
							<p class="catty_text mb-6 text-center">Ignite your drive with our inspiring audio collection, specifically designed to spark your enthusiasm and fuel your ambition for the day ahead.</p>
							<div class="mx-[1rem] bg-white rounded-xl flex items-center gap-10 lg:gap-20">
								<div class="playPauseBtn play-pause-btn hidden">
									<img src="./static/images/play.svg" alt="play-btn" class="hover:cursor-pointer playPauseButton">
								</div>
								<div class="text-2multi-line text-blalck gap-4 w-full">
									<div class="lg:text-2xl flex gap-2 items-center audio_player-5 p-2" data-title="Energizing Breath">
										<audio crossorigin class="psy_audio-player">
											<source src="./audio/(Motivation) Energising Breath.mp3" type="audio/mpeg">
										</audio>
									</div>
								</div>
							</div>
						</div>
						<div class="w-1/5 hidden md:block animate__animated animate__fadeInRight">
							<img src="./static/images/index/mp3-mockups/010.png" alt="sleep_001s" class="mx-auto">
						</div>
					</div>
				</div>
				<div class="hidden p-4 rounded-lg bg-gray-50" id="contacts-Concentration" role="tabpanel" aria-labelledby="contacts-tab-Concentration">
					<div class="flex w-full items-center gap-10">
						<div class="w-1/5 hidden md:block animate__animated animate__fadeInLeft">
							<img src="./static/images/index/mp3-mockups/011.png" alt="sleep_001s" class="mx-auto">
						</div>
						<div class="w-full md:w-3/5 py-[4rem] rounded-lg px-3 bg-[#e2f9f9] shadow-md mx-4 animate__animated animate__slideInRight">
							<p class="catty_text mb-6 text-center">Sharpen your focus with our specialized concentration recordings, deliberately chosen to enhance your mental clarity and boost your productivity.</p>
							<div class="mx-[1rem] bg-white rounded-xl flex items-center gap-10 lg:gap-20">
								<div class="playPauseBtn play-pause-btn hidden">
									<img src="./static/images/play.svg" alt="play-btn" class="hover:cursor-pointer playPauseButton">
								</div>
								<div class="text-2multi-line text-blalck gap-4 w-full">
									<div class="lg:text-2xl flex gap-2 items-center audio_player-0 p-2" data-title="Improving Your Concentration">
										<audio crossorigin class="psy_audio-player">
											<source src="./audio/(Focus_Concentraion) Improve Your Concentration.mp3" type="audio/mpeg">
										</audio>
									</div>
								</div>
							</div>
						</div>
						<div class="w-1/5 hidden md:block animate__animated animate__fadeInRight">
							<img src="./static/images/index/mp3-mockups/012.png" alt="sleep_001s" class="mx-auto">
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
					<?php foreach ($blogs as $key => $blog) :  if ($key != 'no-slug') : ?>
							<div class="articles__div-col rounded-lg articles__div-col--1" style="background-image: url('<?= image_url($blog['image']) ?>'); width:100%;">
								<small class="articles__category"><?= $blog['category'] ?></small>
								<a href="blog.php?slug=<?= $key ?>" class="articles__link gap-4">
									<p class=""><?= $blog['title'] ?></p>
									<img src="static/images/chevron-right.svg" alt="chevron pointing right" class="articles__chevron">
								</a>
							</div>
					<?php endif;
					endforeach ?>
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
	var screenHeight = window.innerHeight;
	if (screenHeight > 700) {
		$('.home__image').addClass('w-1/2');
	} else {
		$('.home__image').addClass('w-[35%]');
	}
	$("#slicky").slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 0,
		speed: 2000,
		cssEase: 'linear',
		responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: false,
				}
			}
		]
	})
	// Handling Prev and Next buttons
	$('.slick-prev').click(function() {
		$('.slider').slick('slickPrev');
	});

	$('.slick-next').click(function() {
		$('.slider').slick('slickNext');
	});
	document.addEventListener("DOMContentLoaded", function() {
		for (let index = 0; index < 6; index++) {
			var title, obj;
			obj = ".audio_player-" + index;
			new GreenAudioPlayer(obj);
			title = $(obj).data('title');
			var mpTitleElement = $(obj).parent().find('.mp__title');
			mpTitleElement.text(title);
		}
	});
	$('.psy_li-nav').click(function() {
		$('audio').each(function() {
			$('.play-pause-btn__icon').attr('d', 'M48 34.5L26 49L26 20L48 34.5Z');
			this.pause();
		});
		return false
	});
</script>
<?php require_once('footer.php') ?>