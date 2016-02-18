<header>
  <!-- <div class="space"></div> -->
    <!--    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> -->
    <div class="logo">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/dist/images/postfiftythree-logo-circle-grey-50.png" title="POSTFIFTYTHREE logo" /></a>
    </div>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>

    </nav>
    <div class="button">
      <a class="btn-open" href="#"></a>
    </div>
    <div class="overlay">
  <div class="wrap">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/dist/images/postfiftythree-logo-circle-grey-50.png" title="POSTFIFTYTHREE logo" /></a>
    <ul class="wrap-nav">
      <?php
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      ?>
    </ul>
    <div class="social">
      <a href="http://mario-loncarek.from.hr/">
        <div class="social-icon">
          <i class="fa fa-facebook"></i>
        </div>
      </a>
      <a href="#">
        <div class="social-icon">
          <i class="fa fa-twitter"></i>
        </div>
      </a>
      <a href="#">
        <div class="social-icon">
          <i class="fa fa-codepen"></i>
        </div>
      </a>
      <a href="#">
        <div class="social-icon">
          <i class="fa fa-behance"></i>
        </div>
      </a>
      <a href="#">
        <div class="social-icon">
          <i class="fa fa-dribbble"></i>
        </div>
      </a>
      <!-- <p>
        From: Zagreb, Croatia
        <br> Site: <a href="http://mario-loncarek.from.hr/">mario-loncarek.from.hr</a>
      </p> -->
    </div>
  </div>
</div>

</header>
