<header class="banners nav-bar navbar-fixed-top">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-4 col-xs-3">
        <a class="brand" href="<?php home_url('/') ?>"><img src="<?php echo get_template_directory_uri() . '/img/icon/brand.png' ?>" alt=""></a>
      </div>
      <div class="col">
        <nav class="nav-primary float-right text-center navbar-expand-lg navbar-expand-xl">
          <button class="navbar-toggler hidden-lg collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bar1"></span>
            <span class="bar2"></span>
            <span class="bar3"></span>
          </button>
          <div class="collapse navbar-collapse position-navbar-mobile" id="navbarSupportedContent">
						<?php
            	wp_nav_menu(['menu' => 'menu Header', 'menu_class' => 'nav d-flex align-items-center navbar-nav']);
            ?>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
