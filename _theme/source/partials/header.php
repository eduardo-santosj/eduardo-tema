<header class="banners nav-bar navbar-fixed-top">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-4 col-xs-3">
        <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/icon/brand.png')" alt=""></a>
      </div>
      <div class="col">
        <nav class="nav-primary float-right text-center navbar-expand-lg navbar-expand-xl">
          <button class="navbar-toggler hidden-lg collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </button>
          <div class="collapse navbar-collapse position-navbar-mobile" id="navbarSupportedContent">
            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav d-flex align-items-center navbar-nav']) !!}
            @endif
          </div>
        </nav>
      </div>
    </div>
  </div>

</header>
