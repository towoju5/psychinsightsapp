<?php require_once 'header.php' ?>

<!-- //  add some margin to the top -->
<div class="mt-[10rem]"></div>
<!-- <section class="js-flash flash">
	<div class="contact-flash">
		<span class="contact-flash-check"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
				<path fill="#207384" d="M16 2a14 14 0 1 0 14 14A14 14 0 0 0 16 2Zm-2 19.59l-5-5L10.59 15L14 18.41L21.41 11l1.596 1.586Z" />
				<path fill="none" d="m14 21.591l-5-5L10.591 15L14 18.409L21.41 11l1.595 1.585L14 21.591z" />
			</svg>
		</span>
		<span class="contact-flash-message">Your request was successfully submitted.</span>
		<span class="contact-flash-cancel">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
				<path fill="#207384" d="m16.192 6.344l-4.243 4.242l-4.242-4.242l-1.414 1.414L10.535 12l-4.242 4.242l1.414 1.414l4.242-4.242l4.243 4.242l1.414-1.414L13.364 12l4.242-4.242z" />
			</svg>
		</span>
	</div>
</section> -->

<div class="bg-white shadow-xl px-8 py-12 rounded-xl mx-8 md:mx-32 lg:mx-64 lg:px-[10rem] my-8 md:my-12">
	<div class="mb-10 md:mb-[6rem] text-center">
		<h3 class="text-4xl md:text-[4rem] text-[#0F2851] py-3">Contact Us</h3>
		<p class="contact__text text-[#2E2F32]">Any questions or remarks? Just write us a message!</p>
	</div>
	<div class="grid md:grid-cols-2 items-center gap-20 md:py-[5rem] md:px-[3rem]">

		<!-- <div class="form__left"> -->
		<div class="bg">
			<img src="static/images/bx-mail-send.svg" alt="contact us icon" class="mx-auto bg-[#E2F8F9] rounded-[100%] p-[3rem] w-[70%]">
		</div>

		<form action="./static/function.php" method="POST" class="space-y-6" id="myForm">
			<div class="form-group">
				<label class="text-xl lg:text-2xl" for="email">Email</label>
				<input class="w-full py-4 px-3 rounded-xl border-2 border-[#207384] text-2xl" type="email" name="email" id="email" placeholder="madisonjoe@gmail.com" required>
				<span class="error-email"></span>
			</div>
			<div class="form-group">
				<label class="text-xl lg:text-2xl" for="message">Message</label>
				<textarea class="w-full rounded-xl p-3 border-2 border-[#207384] text-2xl" minlength="100" name="message" id="message" cols="24" rows="10" required></textarea>
				<span class="error-message"></span>
				<!-- <p id="textCount" class="text-gray-600 text-xl">0 characters</p> -->
			</div>
			<div class="group">
				<div class="flex justify-start gap-2">
					<input type="checkbox" name="agree" id="agree" class="js-agree text-2xl" onclick="updateBtn" required>
					<label class="text-xl" for="agree">
						You agree to our <a href="terms" class="font-bold text-2xl">Terms of service.</a>
					</label>
				</div>
				<span class="error-agree"></span>
			</div>

			<div class="mt-3">
				<button class="w-full py-3 px-4 rounded-lg text-2xl bg-[#E2F8F9] text-[#207384]" id="submitButton" type="button" onclick="validateForm()">Submit</button>
			</div>
		</form>
	</div>
</div>


<script>
	$('#email, #message, #agree').on('input change', updateBtn);
	function updateBtn() {
		var email = $('#email').val()
		var agree = $('#agree').val()
		var message = $('#message').val()
		if (email.length > 0 && message.length > 0) {
			$('#submitButton').removeClass('bg-[#E2F8F9] text-[#207384]').addClass('bg-[#207384] text-white');
		} else {
			$('#submitButton').removeClass('bg-[#207384] text-white').addClass('bg-[#E2F8F9] text-[#207384]');
		}
	}

	function validateForm() {
		// Reset error messages to null/empty
		document.querySelector('.error-email').textContent = '';
		document.querySelector('.error-message').textContent = '';
		document.querySelector('.error-agree').textContent = '';

		// Validate Email
		const emailInput = document.getElementById('email');
		const emailValue = emailInput.value.trim();
		const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

		if (!emailRegex.test(emailValue)) {
			document.querySelector('.error-email').textContent = 'Invalid email format';
			return;
		}

		// Validate Message
		const messageInput = document.getElementById('message');
		const messageValue = messageInput.value.trim();

		if (messageValue.length < 100) {
			document.querySelector('.error-message').textContent = 'Message must be at least 100 characters';
			return;
		}
		const agreeCheckbox = document.getElementById('agree');
		if (!agreeCheckbox.checked) {
			document.querySelector('.error-agree').textContent = 'You must agree to the Terms of Service';
			return;
		}

		alert('Form submitted successfully!');
		resetForm();
	}

	// Function to reset the form
	function resetForm() {
		document.getElementById('myForm').reset();
		// Additional logic for resetting other elements if needed
	}

	// Character count for the textarea
	document.getElementById('message').addEventListener('input', function() {
		const textCount = document.getElementById('textCount');
		textCount.textContent = this.value.length + ' characters';
	});

	// Function to check if all fields are filled and terms are accepted
	function checkFormValidity() {
		var email = $('#email').val();
		var message = $('#message').val();
		var agree = $('#agree').is(':checked');

		return email !== '' && message !== '' && agree;
	}

</script>
<?php require_once 'footer.php' ?>