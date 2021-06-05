<section id="projects" class="projects">

<?php include('projects.php');?>


  <div class='inner-column'>
  <ol class='projects'>

 
 <?php foreach($projectList as $project) { ?>

 	<?php
 	$name = $project["project"];
 	$image = $project["image"];
 	$link = $project["link"];
 	$tools = $project["tools"];
 	?>

 	<li class="projects-list">
 		<project-card>
 			<picture>
 				<img class="project-image" src="<?=$image?>" alt="">
 			</picture>
 			<h3><?=$name?></h3>
 			<a href="<?=$link?>">View Projects</a>
 			<p><?=$tools?></p>
 		</project-card>
 	</li>



  <?php } ?>


  </ol>   
  </div>
	
</section>