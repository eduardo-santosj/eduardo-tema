<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
<p class="byline author vcard">
  <?php echo  __('By', 'sage')?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" rel="author" class="fn">
    <?php get_the_author() ?>
  </a>
</p>
