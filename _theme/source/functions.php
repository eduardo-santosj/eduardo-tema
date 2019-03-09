<?php


// ACF includes
//include 'includes/acf/acf-maxprotect.php';

if ( get_site_url() == 'http://localhost/eduardo-tema' || get_site_url() == 'http://localhost:3000/eduardo-tema') {
	$site_url = get_site_url() . '/index.php';
} else {
	$site_url = get_site_url();
}

function register_primary_menu() {
	register_nav_menu( 'Primary Menu', 'primary_navigation');
}
add_action( 'after_setup_theme', 'register_primary_menu' );
