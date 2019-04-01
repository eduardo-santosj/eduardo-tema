<?php
	$project_list = get_field('projects');
?>

<section id="projetos" class="projects">
  <div class="container">
    <h1 class="title-primary text-center text-uppercase" data-aos="fade-up">
      Projetos
    </h1>
    <?php if (is_array($project_list)) : ?>
    <div class="row">
			<?php foreach ($project_list as $key => $project_item) : ?>
				<div class="col-12 col-sm-3 img-scale hidden-xs" data-aos="fade-up">
					<a class="link-project" href="<?php echo $project_item['project_link']?>">
						<img class="img-fluid " src="<?php echo $project_item['project_img']['url']?>" alt="<?php echo $project_item['project_img']['alt']?>">
						<p class="name-project text-center"><?php echo $project_item['name_project']?></p>
					</a>
				</div>
			<?php endforeach; ?>

			<div class="col-12 visible-xs" data-aos="fade-up">
				<div class="owl-carousel">
				<?php foreach ($project_list as $key => $project_item) : ?>
					<div class="item">
						<a class="link-project" href="<?php echo $project_item['project_link']?>">
							<img class="img-fluid img-scale" src="<?php echo $project_item['project_img']['url']?>" alt="<?php echo $project_item['project_img']['alt']?>">
							<p class="name-project text-center"><?php echo $project_item['name_project']?></p>
						</a>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
    </div>
  </div>
	<?php endif; ?>
</section>
