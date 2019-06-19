<div class="hero-header"
<?php if(get_the_post_thumbnail_url()): ?> 
style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)" 
<?php endif; ?>
>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
          <h1>
              <?php echo get_the_title(); ?>

            </h1>
            <p><?php echo get_the_date(); ?></p>
      </div>
    </div>
  </div>
</div>
<article class="block block--type-news-article">
  <div class="container container--size-sm">
    <?php
      the_content() 
    ?>
  </div>
  <footer>
    <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

  </footer>
</article>
