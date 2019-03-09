<?php
	$server = $_SERVER['HTTP_HOST'];

?>
<section id="contato" class="form">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="title-primary text-center text-uppercase" data-aos="fade-up">
          Contato
        </h1>
      </div>
      <div class="col-12" data-aos="fade-up">
        <?php
				if($server == 'localhost') :
					echo do_shortcode('[contact-form-7 id="117" title="Contact form 1"]');
				elseif($server == 'eduardosantosj.com.br'):
					echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]	');
				endif;
        ?>
      </div>
    </div>
  </div>
</section>
