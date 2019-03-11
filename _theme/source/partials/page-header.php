<?php
$background_section = get_field('background_header');
$information_professional = get_field('informations');
$apresentation_letter = get_field('apresatation_letter');
?>
<style>
.information {
	background: url('<?php echo $background_section['url']?>') no-repeat;
	background-position: center;
	background-size: cover;
}
.img-profile {
	background: url({{{ $image_profile['url'] }}})
}
</style>
<?php if(is_array($information_professional)) : ?>
	<section class="information">
		<div class="container">
			<div class="row align-items-end edit-height justify-content-end">
				<div class="col-12 col-sm-6">
					<div class="general-information" data-aos="fade-up">
						<?php foreach($information_professional as $key => $item) : ?>
							<div class="page-header">
								<div class="row align-items-center">
									<div class="col-12 col-sm-4">
										<div class="image-profile">
											<img src="<?php echo $item['icon_professional']['sizes']['thumbnail'] ?>" alt="<?php echo $item['icon_professional']['alt'] ?>" class="img-fluid ">
										</div>
									</div>
									<div class="col-12 col-sm-8">
										<div class="infos-profile">
											<h1 class="title-nickname"><?php echo $item['nickname'] ?></h1>
											<h2 class="function-profile text-uppercase"><?php echo $item['profession'] ?></h2>

											<div class="contato">
												<p class="name-profile"><?php echo $item['complete_name'] ?> - <?php echo $item['age'] ?></p>
												<p class="email-profile"><?php echo $item['email'] ?></p>
												<p class="phone-profile"><?php echo $item['Cellphone'] ?></p>
											</div>
										</div>
									</div>
								</div>
								<div class="row align-items-end justify-content-end">
									<div class="col-12">
										<div class="curriculo">
											<?php echo $item['download_curriculo'] ?>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<div class="apresentation" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="letter-apresentation text-justify">
					<p><?php echo $apresentation_letter ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <?php
	echo '<pre>';
	var_dump($item);
	echo '</pre>';
?> -->
