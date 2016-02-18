<?php while (have_posts()) : the_post(); ?>
  <div class="container-single">
    <div class="single-post">
    <div class="single-content">
      <div class="single-text">
        <?php the_content(); ?>
      </div>
      <div class="single-images">
        <?php the_field( 'portfolio_gallery' ); ?>
      </div>
    </div>
  </div>
  </div>
<?php endwhile; ?>
