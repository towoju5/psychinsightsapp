<?php

$testimonials = [
	[
		'name' => 'Anonymous',
		'message' => 'I have had the privilege of knowing the CEO of Psychinsight Sam Frerer both as a psychologist and as a person, and I am continually impressed by her exceptional abilities and warm-hearted nature. Sam\'s proficiency in psychology shines through in her ability to offer insightful and tailored strategies that genuinely make a difference in people\'s lives. However, what truly sets her apart is her unwavering empathy and approachability. She has an incredible gift for forming authentic connections with individuals, making them feel heard and valued.',
	],
	[
		'name' => 'Anonymous',
		'message' => 'I am writing this character reference for Sam Frerer whom I have had the pleasure of knowing for many years. Sam is an exceptional psychologist who possesses a unique combination of empathy, professionalism, and expertise. Their ability to create a safe and non-judgmental environment allows clients to open up and share their deepest concerns. Sam demonstrates exceptional listening skills and has a genuine passion for helping others. They are highly knowledgeable in various therapeutic approaches and consistently stay updated with the latest research and techniques. I have witnessed firsthand the positive impact Sam has had on their clients\' lives, and I wholeheartedly recommend them as a trusted and compassionate psychologist.',
	],
	[
		'name' => 'Anonymous',
		'message' => 'Sam is a compassionate and open individual, who applies her innate skills in an innovative way to ensure best evidenced-based care is harnessed in a way that is easy for others to understand and use. She is open to listening, and to hearing what people say, working with you to explore tailored methods for caring for your own psychological and emotional well-being.',
	],
	[
		'name' => 'Anonymous',
		'message' => 'Sam is a knowledgeable and experienced therapist with a highly prized Honours Psychology Degree from Monash University. She has a calm, non judgemental approach, providing a safe and confidential space to explore individual experiences for a range of issues including stress, anxiety, insomnia, depression and motivation. She understands that mental health is different for everyone.  <br>In addition to therapy, Sam uses a holistic approach, incorporating breathing exercises, meditation, fitness and other proven techniques that she utilizes in her own life. She  knows that tending to your mental health is as important as taking care of your physical body, and she is aware of the strong connection between the two. Ultimately, she provides her clients with tools that provide ongoing benefits that can be used throughout life. No fads, pseudoscience or empty promises here, just scientifically solid, individually tailored, and achievable long term mental health strategies that can benefit us all.',
	],
	[
		'name' => 'Anonymous',
		'message' => 'I am writing to provide a character reference for Sam Frerer. I have had the privilege of working with Sam in my role as Head of Department, Mental Health Team, for the Australian Defence Force in Canberra. As a senior supervising psychologist, I have had direct experience with Sam’s clinical skills as a psychologist as we work with the same client base - ADF members. <br>Sam consistently demonstrates a very high standard of the core competencies a psychologist should have who works to treat highly complex psychological disorders. Her professional practise framework, ethics, morals and integrity are exceptional as a psychologist. She is masterful in working across many psychology domains. Sam’s approach to treatment embodies a therapeutic style that fosters respect, mutual rapport, and she has an exemplary success rate of positive outcomes with her clients - many of whom have highly complex presentations. <br>Meticulous with organisational skills, she is also a psychologist who is adaptable and easily able to provide a safe and nurturing environment that builds trust and allows for even the most challenging of practitioner/client barriers to be broken down in order to facilitate positive engagement in therapy. <br>Sam does this utilising an empathetic and non judgmental approach combined with superb active listening skills. In sum, there is no doubt that Sam possesses in depth knowledge of a broad range of evidence based therapeutic approaches to psychology. She tailors her treatment plans to each individual, therefore ensuring best practise for every client to maximise successful treatment goals. <br>Sam also diligently stays well informed with research and continuing professional development to ensure she is always providing a gold standard of treatment to all her clients. I am well aware of many ADF clients that Sam has treated that were complex, but had highly successful outcomes in symptom reduction, which has not only changed lives, but, undoubtedly, also saved lives. I cannot recommend her more highly as an experienced, compassionate and skilled senior psychologist. She is a delight to work with as a colleague also.',
	],
];


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if(isset($_POST["subscribe"])) {
		// user is subscribing to newsletter
	}

	if(isset($_POST["message"])) {
		// user is sending message from contact form
	}
}
