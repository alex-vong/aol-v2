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
				<div class="inner-column">
					<logo>
						<a href="#">Alex Codes Stuff</a>
					</logo>

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
				</div>
			</nav-bar>
		</nav>

		<main>
			<section class="hero hero-inner">
				<div class="inner-column">
					<h1 class="heading big-text">Hello, I'm Alex</h1>
					<p class="supporting-text">
						I create amazing experiences through design and development
					</p>
					<a href="#" class="btn">Find Out More</a>
				</div>
			</section>
		</main>

		<section id="about-me" class="about-me">
			<about-me-container>
				<div class="inner-column">
					<picture>
						<img
							src="https://peprojects.dev/images/square.jpg"
							alt="alex-picture"
						/>
					</picture>
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
		</section>




<section id="projects" class="projects">
	<h2 class="header medium-text">Projects:</h2>

	<?php include('projects.php');?>
	  <div class='inner-column'>
	  <ol class='projects-list'>
	 
		 <?php foreach($projectList as $project) { ?>

		 	<?php
		 	$name = $project["project"];
		 	$image = $project["image"];
		 	$link = $project["link"];
		 	$tools = $project["tools"];
		 	?>

		 	<li class="projects-list-item">
		 		<project-card>
		 			<picture>
		 				<img src="<?=$image?>" alt="">
		 			</picture>

		 			<div class="project-text">
			 			<h3 class="smaller-text"><?=$name?></h3>
			 			<p><?=$tools?></p>
			 			<a href="<?=$link?>">View Project</a>
			 		
		 			</div>
		 		</project-card>
		 	</li>

		  <?php } ?>

	  </ol>   
	  </div>
	
</section>


</body>
</html>
