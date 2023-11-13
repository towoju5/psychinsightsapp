<?php require_once 'header.php'?>


	<section class="js-flash flash">
		<div class="contact-flash">
			<span class="contact-flash-check"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
					viewBox="0 0 32 32">
					<path fill="#207384"
						d="M16 2a14 14 0 1 0 14 14A14 14 0 0 0 16 2Zm-2 19.59l-5-5L10.59 15L14 18.41L21.41 11l1.596 1.586Z" />
					<path fill="none" d="m14 21.591l-5-5L10.591 15L14 18.409L21.41 11l1.595 1.585L14 21.591z" />
				</svg>
			</span>
			<span class="contact-flash-message">Your request was successfully submitted.</span>
			<span class="contact-flash-cancel">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
					<path fill="#207384"
						d="m16.192 6.344l-4.243 4.242l-4.242-4.242l-1.414 1.414L10.535 12l-4.242 4.242l1.414 1.414l4.242-4.242l4.243 4.242l1.414-1.414L13.364 12l4.242-4.242z" />
				</svg>
			</span>
		</div>
	</section>

	<div class="mg-white shadow-xl px-8 py-12 rounded-xl mx-8 md:mx-32 lg:mx-64 lg:px-[10rem] my-8 md:">
		<div class="mb-10 md:mb-[6rem] text-center">
			<h3 class="text-4xl md:text-[4rem] py-3">Contact Us</h3>
			<p class="contact__text">Any questions or remarks? Just write us a message!</p>
		</div>
		<div class="grid md:grid-cols-2 items-center">

			<!-- <div class="form__left"> -->
			<div class="">
				<img src="static/images/bx-mail-send.svg" alt="contact us icon" class="mx-auto">
			</div>

			<div class="space-y-6">
				<div class="form-group">
					<label class="text-xl lg:text-2xl" for="email">Email</label>
					<input class="w-full py-3 px-3 rounded-xl border-2 border-[#207384]" type="email" name="email"
						id="email" placeholder="madisonjoe@gmail.com">
				</div>
				<div class="form-group">
					<label class="text-xl lg:text-2xl" for="message">Message</label>
					<textarea class="w-full rounded-xl p-3 border-2 border-[#207384]" minlength="100" name="message" id="" cols="24"
						rows="10"></textarea>
				</div>
				<div class="flex justify-start gap-2">
					<input type="checkbox" name="agree" id="agree" class="js-agree">
					<label class="text-xl" for="agree">
						You agree to our <a href="terms">terms of service.</a>
					</label>
				</div>

				<div class="mt-3">
					<button class="w-full py-3 px-4 text-white rounded-lg text-xl bg-[#207384]" type="submit">Submit</button>
				</div>
			</div>
		</div>
	</div>

<?php require_once 'footer.php'?>