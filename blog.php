<?php $pageTitle = "Blog page";
require_once('header.php');
$slug = $_REQUEST['slug'] ?? '';
$blog = $blogs[$slug];
?>
<section class="mt-10">
	<div class="blog__inner py-10 lg:py-20">
		<div class="post">
			<div class="post__row">
				<div class="post__heading">
					<h3 class="post__header text-4xl md:text-8xl font-extrabold"><?= $blog['title'] ?></h3>
					<div class="post__smalls">
						<small class="post__small post__small--date"><?= $blog['date'] ?></small>
						<small class="post__small post__small--read"><?= $blog['read'] ?></small>
						<small class="post__small post__small--category"><?= $blog['category'] ?></small>
					</div>
				</div>
			</div>
			<div class="post__row  py-4 px-12">
				<div class="post__body">
					<div class="blog-image  py-10">
						<img src="<?= image_url($blog['image']) ?>" alt="<?= $blog['title'] ?>" class="mx-auto rounded-2xl">
					</div>
					<div class="blog-body">
						<?= $blog['message'] ?>
					</div>
				</div>
			</div>
		</div>


		<div class="resource hidden">
			<div class="resource__row">
				<div class="resource__body">
					<p class="resource__text">
						Learn to manage feelings and thoughts with the lifelong skill of everyday
						mindfulness, any time of the day.
					</p>
				</div>
				<div class="resource__audio">
					<div class="resource__audio-row resource__audio-row--1">
						<button class="categories__audio-button" type="button">
							<svg class="categories__audio-svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
								<path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
							</svg>
						</button>
					</div>
					<div class="resource__audio-row resource__audio-row--2">
						<p class="categories__audio-title">Stressed out</p>
						<small class="categories__audio-small">Music with soft and Lo-Fi</small>
					</div>
					<div class="resource__audio-row resource__audio-row--3">
						<p class="categories__audio-time">20&colon;00</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
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

<?php require_once 'footer.php' ?>