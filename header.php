<!DOCTYPE html>
<html>
<?php require_once("./static/function.php") ?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="static/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="static/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/static/images/favicon/site.webmanifest">
	<link rel="mask-icon" href="/static/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<title>Psychinsights App &#8212; Everyone deserves sound mental health.</title>
	<link rel="stylesheet" href="static/css/slick.css">
	<link rel="stylesheet" href="static/css/slides.css">
	<link rel="stylesheet" href="static/css/styles.css">
	<script src="static/js/tailwind.js"></script>
	<!-- <script src="//cdn.tailwindcss.com"></script> -->
	<link href="//cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowsbite.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
	<link href="//fonts.cdnfonts.com/css/jost" rel="stylesheet">
	<script src="./static/js/jquery-3.7.1.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

	<!-- <link rel='stylesheet' href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"> -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

</head>

<body>
	<header class="home items-center mb-24">
		<nav class="bg-white lg:hidden">
			<div class="md:mx-12 flex flex-wrap items-center justify-between mx-auto p-4">
				<div class="group flex gap-10">
					<a class="navbar__link navbar__logo" href="/">
						<img class="navbar__image" src="static/images/logo.png" alt="psychinsights logo">
						<span class="navbar__text">PsychInsights</span>
					</a>
				</div>
				<div class="flex lg:order-2 ml-auto mr-10">
					<a href="#!signup" class="btn btn--free signup" data-te-toggle="modal" data-te-target="#loginModal" data-te-ripple-init="" data-te-ripple-color="light">Try for free</a>
				</div>
				<button data-collapse-toggle="navbar-cta" type="button" class="lg:hidden" aria-expanded="false">
					<span class="sr-only">Open main menu</span>
					<svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"></path>
					</svg>
				</button>
				<div class="items-center justify-end w-full lg:flex lg:w-auto hidden lg:order-1" id="navbar-cta">
					<ul class="navbar__list font-medium flex flex-col p-4 lg:p-0 mt-4 rounded-lg">
						<li class="navbar__list-item border-b md:border-b-0 pb-3">
							<a href="plans.php" class="navbar__list-href">Plan</a>
						</li>
						<li class="navbar__list-item border-b md:border-b-0 pb-3">
							<a href="about.php" class="navbar__list-href">About Us</a>
						</li>
						<li class="navbar__list-item border-b md:border-b-0 pb-3">
							<a href="contact.php" class="navbar__list-href">Contact Us</a>
						</li>
						<li class="navbar__list-item border-b md:border-b-0 pb-3">
							<a href="help.php" class="navbar__list-href">Help</a>
						</li>
						<li class="navbar__list-item login-now">
							<button type="button" data-te-toggle="modal" data-te-target="#loginModal" data-te-ripple-init="" data-te-ripple-color="light">
								Login
							</button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<nav class="bg-white hidden lg:block">
			<div class="md:mx-12 flex flex-wrap items-center justify-between mx-auto p-4">
				<div class="group flex gap-10">
					<a class="navbar__link navbar__logo" href="/">
						<img class="navbar__image" src="static/images/logo.png" alt="psychinsights logo">
						<span class="navbar__text">PsychInsights</span>
						<span class="ml-5 help_center text-2xl font-light italic"></span>
					</a>
				</div>
				<div class="ml-auto flex gap-10">
					<div class="flex lg:order-2">
						<a href="#!signup" class="btn btn--free signup" data-te-toggle="modal" data-te-target="#loginModal" data-te-ripple-init="" data-te-ripple-color="light">Try for free</a>
					</div>
					<div class="items-center justify-end hidden w-full lg:flex md:w-auto lg:order-1" id="navbar-cta">
						<ul class="navbar__list font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
							<li class="navbar__list-item">
								<a href="plans.php" class="navbar__list-href <?php if(uri_segment() == "plans.php") { echo "border-b-[#207384]"; } ?>">Plan</a>
							</li>
							<li class="navbar__list-item">
								<a href="about.php" class="navbar__list-href <?php if(uri_segment() == "about.php") { echo "border-b-[#207384]"; } ?>">About Us</a>
							</li>
							<li class="navbar__list-item">
								<a href="contact.php" class="navbar__list-href <?php if(uri_segment() == "contact.php") { echo "border-b-[#207384]"; } ?>">Contact Us</a>
							</li>
							<li class="navbar__list-item">
								<a href="help.php" class="navbar__list-href <?php if(uri_segment() == "help.php") { echo "border-b-[#207384]"; } ?>">Help</a>
							</li>
							<li class="navbar__list-item login-now">
								<button type="button" data-te-toggle="modal" data-te-target="#loginModal" data-te-ripple-init="" data-te-ripple-color="light">
									Login
								</button>
							</li>
						</ul>
					</div>
					<button data-collapse-toggle="navbar-cta" type="button" class="lg:hidden">
						<span class="sr-only">Open main menu</span>
						<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"></path>
						</svg>
					</button>
				</div>
			</div>
		</nav>
	</header>