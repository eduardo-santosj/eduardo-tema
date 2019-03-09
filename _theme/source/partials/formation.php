<?php
	$mortarboard = get_field('graduations_icon');
	$complementary = get_field('complementary_icon');
	$language = get_field('language_icon');
	$formation_list = get_field('graduations');
	$complementary_list = get_field('complementary');
	$language_list = get_field('language');
?>


<style>
  .icon-mortarboard {
    background: url(<?php $mortarboard['url'] ?>) no-repeat;
  }
  .icon-complementary {
    background: url(<?php $complementary['url'] ?>) no-repeat;
  }
  .icon-language {
    background: url(<?php $language['url'] ?>) no-repeat;
  }
</style>
<section id="formacao" class="formation">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="title-primary text-center text-uppercase" data-aos="fade-up">
          Informações
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h2 class="title-courses" data-aos="fade-up">
          <span class="icon icon-mortarboard"></span>
          Formações Acadêmicas
        </h2>
      </div>
      <?php if(is_array($formation_list)) :
      	foreach ($formation_list as $key => $formation) : ?>
      <div class="col-12 col-sm-6">
        <div class="list-formation" data-aos="fade-up">
          <p class="star-end"><?php $formation['year_start_end']?></p>
          <p class="school"><?php $formation['name_school'] ?></p>
          <p class="course">Curso: <?php $formation['name_course'] ?></p>
          <p class="conclusion">Ano de Conclusão: <?php $formation['conclusion_year'] ?></p>
        </div>
      </div>
      <?php
				endforeach;
				endif;
			?>
    </div>
  </div>
</section>
<section class="skills">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="title-primary text-center text-uppercase" data-aos="fade-up">
          skills
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6">
        <div class="col-12">
          <h2 class="title-courses" data-aos="fade-up">
            <span class="icon icon-complementary"></span>
            Cursos Complementares
          </h2>
        </div>
				<?php if(is_array($complementary_list)) :
        	foreach ($complementary_list as $key => $complementary) : ?>
        <div class="col-12">
          <div class="list-formation" data-aos="fade-up">
            <p class="school"><?php $complementary['name_school'] ?></p>
            <p class="course"><?php $complementary['name_course'] ?></p>
            <p class="conclusion"><?php $complementary['year_conclusion'] ?></p>
          </div>
        </div>
        <?php
					endforeach;
					endif;
				?>
      </div>
      <div class="col-12 col-sm-6">
          <div class="col-12">
            <h2 class="title-courses" data-aos="fade-up">
              <span class="icon icon-language"></span>
              Idiomas
            </h2>
          </div>
          <?php if(is_array($language_list)) :
          	foreach ($language_list as $key => $language) : ?>
          <div class="col-12">
            <div class="list-formation" data-aos="fade-up">
              <p class="school"><?php $language['name_language'] ?></p>
              <p class="course"><?php $language['name_school'] ?></p>
            </div>
          </div>
          <?php
						endforeach;
						endif;
					?>
        </div>
    </div>
  </div>
</section>
