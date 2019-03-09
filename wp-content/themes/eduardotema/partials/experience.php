<?php
	$timeline_list = get_field('experience');
?>
<section id="experiencia" class="experience">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="title-primary text-center text-uppercase" data-aos="fade-up">
          Experiências
        </h1>
      </div>
    </div>
    <div class="timeline-list">
      <ul class="timeline">
        <?php if(is_array($timeline_list)) :
        	foreach ($timeline_list as $key => $timeline_item) : ?>
        <li class="<?php echo $timeline_item['adicional_class'] ?> text-center" data-aos="fade-up">
          <div class="timeline-badge primary"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title text-uppercase"><?php echo $timeline_item['company_name'] ?></h4>
            </div>
            <div class="timeline-body">
              <p class="function-description text-justify"><?php echo $timeline_item['function_description'] ?></p>
              <p class="period"><?php echo $timeline_item['worked_period'] ?></p>
            </div>
          </div>
        </li>
				<?php
					endforeach;
					endif;
				?>
      </ul>
    </div>
  </div>
</section>
