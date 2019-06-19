<?php if(get_field('enable_hero_banner') == 'Yes'): ?>
<div class="hero-header <?php if(is_front_page()):?>hero-header--style-home <?php endif; ?><?php if(get_field('hero_style') == 'dark'): ?> hero-header--style-dark<?php endif; ?>">
  <div class="hero-header__bg-img lazyBlur"
  <?php if(get_the_post_thumbnail_url()): ?>
  style="background-image:url(<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>)"
  data-bg="url(<?php echo get_the_post_thumbnail_url(); ?>)"
  <?php endif; ?>
  >
  </div>
  <div class="hero-header__content ">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6 <?php if(get_field('hero_content_alignment') == 'Right'): ?> col-md-offset-6 <?php endif; ?>">
            <h1>
              <?php echo get_field('hero_title') ?: get_the_title(); ?>

            </h1>
            <?php if(get_field('hero_context')): ?>
            <p><?php echo get_field('hero_context'); ?></p>
            <?php endif; ?>
            <?php if(get_field('hero_button_text')): ?>
            <a class="button button--type-primary" href="<?php echo get_field('hero_button_url'); ?>">
              <?php echo get_field('hero_button_text'); ?>

            </a>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>