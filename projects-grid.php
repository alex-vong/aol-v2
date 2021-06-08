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
			 			<h3 class="header smaller-text"><?=$name?></h3>
			 			<p class="supporting-text"><?=$tools?></p>
			 			<a href="<?=$link?>" class="btn supporting-text">View Project</a>
			 		
		 			</div>
		 		</project-card>
		 	</li>

		  <?php } ?>

	  </ol>   
	  </div>
	
</section>