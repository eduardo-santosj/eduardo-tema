<footer id="footer" class="content-info">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-sm title-copy">
        <p class="develop"><?php $name_develop ?></p>
      </div>
      <div class="col-12 col-sm brand-footer">
        <a href="<?php home_url('/') ?>">
          <img src="<?php $footer['url'] ?>" alt="">
        </a>
      </div>
      <div class="col-12 col-sm position-list">
        <?php if (is_array($networks_list)) : ?>
        <ul class="list-inline">
					<?php foreach ($networks_list as $key => $networks_item) : ?>
          <li class="list-inline-item">
            <a href="<?php $networks_item['url_redes_sociais'] ?>">
              <img src="<?php $networks_item['icon_networks']['url'] ?>" alt="">
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

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri() . '/js/main.min.js' ?>"></script>

<?php wp_footer(); ?>
</body>

</html>