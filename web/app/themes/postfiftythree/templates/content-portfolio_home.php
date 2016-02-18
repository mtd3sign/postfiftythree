<div class="container-portfolio-home">

  <div class="portfolio-home">

    <?php

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => '3',
  );

  $query = new WP_Query($args);
?>

      <div class="portfolio-header">
        <h2><?php echo the_field( 'home_portfolio_title' ); ?></h2>
      </div>
      <div class="portfolio-home">

        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="portfolio-item">

          <?php
                        $image = get_field('portfolio_featured_image');
                        if( !empty($image) ):
                      ?>
            <!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> -->
            <img src="https://unsplash.it/600/300/?random" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
            <div class="portfolio-item-text">
              <h3>
                        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                      </h3>
            </div>
            <a href="<?php the_permalink(); ?>">
              <div class="portfolio-item-overlay">
                <h3>
                  <?php the_title(); ?>
                </h3>
                <?php the_excerpt(); ?>
                <div class="portfolio-item-date">
                  <?php the_date(); ?>
                </div>
              </div>
            </a>

        </div>


        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>



      </div>
      <div class="portfolio-items"><h4><a href="<?php echo get_page_link(36); ?>">View all portfolio items</a></h4>
      </div>
  </div>
</div>
