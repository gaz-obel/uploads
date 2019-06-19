<div class="apprenticeships">
  <div class="hero-header hero-header--style">
    <picture>
      <source media="(min-width: 1024px)" srcset="<?php echo get_field('course_featured_image'); ?>">
      <img class="hero-header_banner-img" src="<?php echo get_field('course_featured_image_small'); ?>" alt="">
    </picture>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6">
            <h1 class="text-white">
              <?php echo get_the_title(); ?>

            </h1>
            <div class="hero-header__key-facts">
              <div class="hero-header__key-fact text-white">
                  <i class="fal fa-award fa-lg"></i>
                  <strong>Level 3 Course</strong>
              </div>
              <div class="hero-header__key-fact text-white">
                  <i class="fal fa-clock fa-lg"></i>
                  <strong><?php echo get_field('course_length')['length']; ?> 
                    <?php if(get_field('course_length')['length'] == 1): ?>
                      <?php echo rtrim(get_field('course_length')['timeframe'], 's'); ?>

                    <?php else: ?>
                      <?php echo get_field('course_length')['timeframe']; ?>

                    <?php endif; ?>
                  </strong>
              </div>
              <div class="hero-header__key-fact text-white">
                  <i class="fal fa-pound-sign fa-lg"></i>
                  <strong>Apprenticeship funding</strong>
              </div>
            </div>
            <p class="text-white"><?php echo get_field('course_context'); ?></p>
            <a class="button button--type-primary">Apply now
            </a>
        </div>
      </div>
    </div>
  </div>
  <div class="block block--type-key-features">
    <div class="container">
      <div class="row middle-xs">
        <div class="col-xs-12 col-md-6">
          <h2>
            Course Overview
          </h2>
          <?php echo get_field('course_overview'); ?>


        </div>
        <div class="col-xs-12 col-md-5 col-md-offset-1">
          <div class="key-features">
            <div class="key-features__row">
              <div class="key-features__cell">
                <i class="fal fa-clock fa-lg"></i>
                <strong>Course Duration</strong>
              </div>
              <div class="key-features__cell">
                <?php echo get_field('course_length')['length']; ?> 
                <?php if(get_field('course_length')['length'] == 1): ?>
                  <?php echo rtrim(get_field('course_length')['timeframe'], 's'); ?>

                <?php else: ?>
                  <?php echo get_field('course_length')['timeframe']; ?>

                <?php endif; ?>
              </div>
            </div>
            <div class="key-features__row">
              <div class="key-features__cell">
                <i class="fal fa-pound-sign fa-lg"></i>                
                <strong>Course Fees</strong>
              </div>
              <div class="key-features__cell">Apprenticeship <a href="/courses/apprenticeships/" target="_blank">Find out more ></a></div>
            </div>
            <div class="key-features__row">
              <div class="key-features__cell">
                <i class="fas fa-signal-alt-3"></i>
                <strong>Course Level</strong>
              </div>
              <div class="key-features__cell">Level <?php echo get_field('level'); ?></div>
            </div>
            <div class="key-features__row">
              <div class="key-features__cell">
                <i class="fal fa-award fa-lg"></i>
                <strong>Awarding Body</strong>
              </div>
              <div class="key-features__cell"><?php echo get_field('awarding_body')->post_title; ?></div>
            </div>
            <div class="key-features__row">
              <div class="key-features__cell">
                <i class="fal fa-map-marker-alt fa-lg"></i>                
                <strong>Location</strong>
              </div>
              <div class="key-features__cell"><?php echo get_field('location') ? get_field('location') : 'Nationwide'; ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $__env->make('partials.course_components.component--type-modules', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div class="block block--type-text-half">
    <div class="container">
      <div class="row">
          <div class="col-xs-12 col-md-6">
            <h2>What do you need to<br/> apply for this course?</h2>
            <?php if(get_field('entry_requirements')): ?>
              <?php echo get_field('entry_requirements'); ?>

            <?php else: ?>
              <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam reprehenderit harum omnis porro.</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas perferendis sequi neque nesciunt repudiandae suscipit sit asperiores, aperiam maiores provident cum, hic, at repellendus voluptatum ad laboriosam impedit tempore pariatur.</p>
            <?php endif; ?>
          </div>
          <div class="col-xs-12 col-md-6">
            <h2>Progression<br/> Opportunities</h2>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam reprehenderit harum omnis porro.</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas perferendis sequi neque nesciunt repudiandae suscipit sit asperiores, aperiam maiores provident cum, hic, at repellendus voluptatum ad laboriosam impedit tempore pariatur.</p>
          </div>
        </div>
    </div>
  </div>
  <div class="block block--type-img-text block--colour-grey">
      <div class="container">
          <div class="row middle-xs center-xs">
              <div class="col-xs-12 col-md-7">
                  <div>
                      <h2>Register your interest</h2>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis nisi fuga iure doloribus, fugit voluptatum quam eum nam enim error et quos officia nemo deserunt autem minus praesentium iusto expedita.</p>
                      <a class="button button--type-primary" href="" target="_blank">Talk to us</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="block block--type-img-right">
      <div class="container">
          <div class="row middle-xs">
              <div class="col-xs-12 col-md-6 block--type-img__content">
                  <div>
                      <h2>Looking to empower your current staff?</h2>
                      <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias fuga, sunt recusandae illo.</h4>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, veniam? Sint nobis voluptate, unde quae tenetur distinctio voluptates officia qui, mollitia impedit dolorem vero dignissimos, molestias est illum nulla neque.</p>
                  </div>
              </div>
              <div class="col-xs-12 col-md-5 col-md-offset-1 block--type-img__image">
                  <div>
                      <img class="img img--type-rounded img--size-100" src="http://sne.org.test/wp-content/uploads/2019/04/empower-current-staff_img.jpg" />
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="block block--type-img-full block--style-dark" style="background-image:url(http://sne.org.test/wp-content/uploads/2019/04/full-img_testimonials.jpg)">
    <div class="container">
        <div class="row middle-xs">
            <div class="col-xs-12 col-md-5 col-md-offset-7 block--type-img__content">
                <div>
                    <h2>Learner testimonial</h2>
                    <p class="quote">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, commodi quod? Reiciendis, nemo repudiandae maiores eos ex doloremque praesentium exercitationem eveniet ullam aperiam."</p>
                    <p><small>Sarah Smith - North College Group</small></p>
                    <p><a class="button button--type-primary">Find out more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>