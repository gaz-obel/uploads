<header class="banner" style="padding: 1.5em 0">
  <div class="container">
    <nav class="middle-xs" style="display: flex;justify-content: space-between;">
      <a class="brand" href="http://sne.org.test/">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 84.26 130.44" style="width:32.5px;" xml:space="preserve"><style type="text/css">.st0{fill:#231F20;}.st1{display:none;fill:#231F20;}</style><path class="st0" d="M6.54,0h71.19c3.61,0,6.53,2.92,6.53,6.53v71.19c0,5.82-7.04,8.73-11.15,4.62L1.93,11.15C-2.19,7.04,0.73,0,6.54,0z"/><g><path class="st0" d="M0,120.02h6.24c0.44,3.78,2.59,5.28,7.08,5.28c3.25,0,6.11-1.14,6.11-4.04c0-3.08-2.99-3.69-7.78-4.79c-5.63-1.28-10.77-2.77-10.77-9.32c0-6.2,5.06-9.41,12.05-9.41c7.08,0,11.65,3.47,12.14,9.81h-6.11c-0.35-3.17-2.81-4.75-6.07-4.75c-3.43,0-5.67,1.45-5.67,3.69c0,2.55,2.2,3.3,6.86,4.31c6.46,1.41,11.74,2.95,11.74,9.72c0,6.38-5.14,9.94-12.22,9.94C5.06,130.44,0.22,126.66,0,120.02z"/><path class="st0" d="M30.07,97.83h6.56l10.62,17.8c1.03,1.74,2.23,4.46,2.23,4.46h0.09c0,0-0.18-3.3-0.18-5.53V97.83h6.38v31.89h-6.25l-10.88-17.62c-1.03-1.7-2.27-4.42-2.27-4.42h-0.09c0,0,0.18,3.35,0.18,5.58v16.46h-6.38V97.83z"/><path class="st0" d="M60.67,97.83h23.46v5.44h-17v7.14h14.9v5.31h-14.9v8.61h17.13v5.4h-23.6V97.83z"/></g><rect x="0" y="-2" class="st1" width="84.26" height="132.44"/></svg>
      </a>
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
  </div>
</header>
