<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<!-- Define prod or homolog URI -->
	<?php
		$home = get_template_directory_uri();
	?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="theme-color" content="#ffffff">

	<!-- Favicon -->
	<!-- <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $home; ?>/img/favicon/apple-icon-57x57.png?v=3">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $home; ?>/img/favicon/apple-icon-60x60.png?v=3">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $home; ?>/img/favicon/apple-icon-72x72.png?v=3">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $home; ?>/img/favicon/apple-icon-76x76.png?v=3">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $home; ?>/img/favicon/apple-icon-114x114.png?v=3">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $home; ?>/img/favicon/apple-icon-120x120.png?v=3">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $home; ?>/img/favicon/apple-icon-144x144.png?v=3">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $home; ?>/img/favicon/apple-icon-152x152.png?v=3">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $home; ?>/img/favicon/apple-icon-180x180.png?v=3">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $home; ?>/img/favicon/android-icon-192x192.png?v=3">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $home; ?>/img/favicon/favicon-32x32.png?v=3">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $home; ?>/img/favicon/favicon-96x96.png?v=3">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $home; ?>/img/favicon/favicon-16x16.png?v=3"> -->

	<title><?php wp_title(); ?></title>

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Amiko|Montserrat:300,400,500,600,700" rel="stylesheet">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo $home . '/css/main.css' ?>">
	<link rel="stylesheet" href="<?php echo $home . '/css/sprite.css' ?>">

	<?php wp_head(); ?>
</head>
<body >
	<h1 style="display:none;">Eduardo Santos Jacinto - Portfólio - Experiência e Conhecimentos</h1>
	<?php include 'partials/header.php' ?>
	<div class="wrap" role="document">
    <div class="content">
      <main class="main">