<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="[[meta-description]]" />
		<meta name="og:description" content="[[meta-description]]" />
		<meta property="og:image" content="[[meta-image]]" />
		<meta property="og:title" content="[[meta-content]]" />
		<link rel="shortcut icon" type="image/jpg" href="[[favicon]]" />

		<link rel="stylesheet" href="styles/styles.css" />
		<link rel="stylesheet" href="styles/menu.css" />
		<title>Alex On-Line</title>
	</head>

	<body>
		<nav>
			<nav-bar>
				<picture class="alex-man">
					<img src="images/alex-pow.svg" alt="">
				</picture>
				
				<nav-links>
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#blogs">My Writing</a></li>
						<li><a href="#projects">Projects</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav-links>
				
				<menu-wrap>
						<input type="checkbox" class="toggler" />
						<div class="hamburger">
							<div></div>
						</div>

						<menu>
							<div>
								<div>
									<ul>
										<li><a href="#">About</a></li>
										<li><a href="#blogs">My Writing</a></li>
										<li>
											<a href="https://peprojects.dev/alpha-1/alexvong/"
												>Projects</a
											>
										</li>
										<li><a href="#contact">Contact</a></li>
									</ul>
								</div>
							</div>
						</menu>
					</menu-wrap>
			</nav-bar>
		</nav>

		<main>
			<section class="hero hero-inner">
				<div class="inner-column">
					<h1 class="header big-text">Hello, I'm&nbspAlex</h1>
					<p class="supporting-text">
						I create amazing experiences through design and development
					</p>
					<a href="#" class="btn supporting-text">Find Out More</a>
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

<section id="writing" class="blog">
	<div class="inner-column">
		<h3 class="header smaller-text">
			I Also Write
		</h3>
		<p class="supporting-text">
			I enjoy writing about my journey in the world of web design and development
		</p>
		<a href="https://alexvong.substack.com/" class="btn supporting-text">Read Them Here</a>
	</div>
</section>




</body>
</html>
