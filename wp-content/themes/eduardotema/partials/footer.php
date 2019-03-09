<?php
	$name_develop = get_field('name_develop');
	$footer = get_field('icon_footer');
	$networks_list = get_field('networks');
?>
<footer id="footer" class="content-info">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-sm title-copy">
        <p class="develop"><?php echo $name_develop ?></p>
      </div>
      <div class="col-12 col-sm brand-footer">
        <a href="<?php home_url('/') ?>">
          <img src="<?php echo $footer['url'] ?>" alt="">
        </a>
      </div>
      <div class="col-12 col-sm position-list">
        <?php if (is_array($networks_list)) : ?>
        <ul class="list-inline">
					<?php foreach ($networks_list as $key => $networks_item) : ?>
          <li class="list-inline-item">
            <a href="<?php echo $networks_item['url_redes_sociais'] ?>">
              <img src="<?php echo $networks_item['icon_networks']['url'] ?>" alt="">
            </a>
          </li>
					<?php endforeach; ?>
          <li class="list-inline-item">
            <?php
            $date = date("Y");
            ?>
            <p><?php echo $date ?></p>
          </li>
        </ul>
				<?php endif; ?>
      </div>
    </div>
  </div>
</footer>

<script rel="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script rel="text/javascript" src="<?php echo get_template_directory_uri() . '/js/main.min.js' ?>"></script>

<?php wp_footer(); ?>
</body>

</html>