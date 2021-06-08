<?php include('head.php')?>

<body>
	<?php include('nav-bar.php')?>

	<main id="home">
		<section class="hero hero-inner">
			<div class="inner-column">
				<h1 class="header big-text">Hello, I'm&nbspAlex</h1>
				<p class="supporting-text">
					I create amazing experiences through design and development
				</p>
				<a href="#about-me" class="btn supporting-text">Find Out More</a>
			</div>
		</section>
	</main>

	<section id="about-me" class="about-me">
		<div class="inner-column">
			<about-me-container>
				<picture>
					<img
						src="https://peprojects.dev/images/square.jpg"
						alt="alex-picture"
					/>
				</picture>

				<div class="about-me-text">
					<h2 class="header medium-text">About Me:</h2>
					<h3 class="header smaller-text">
						Web Designer and Developer based in Los Angeles, CA.
					</h3>
					<p class="supporting-text">
						Using design thinking and goal driven development, I create and
						build websites for small and large companies alike to generate
						pleasant user experiences.
					</p>
				</div>
			</about-me-container>
		</div>

	</section>

	<?php include('projects-grid.php')?>

	<section id="writing">
		<div class="inner-column">
			<div class="blog">
				<h3 class="header smaller-text">
					Blogs
				</h3>
				<p class="supporting-text">
					I enjoy writing about my journey in the world of web design and development
				</p>
				<a href="https://alexvong.substack.com/" class="btn supporting-text">Read Them Here</a>
			</div>
		</div>
	</section>

	<?php include('footer.php')?>

</body>
</html>
