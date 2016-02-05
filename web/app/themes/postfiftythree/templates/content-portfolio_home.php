<div class="container-portfolio-home">

<?php

  $args = array(
       'post_type' => 'portfolio',
     'posts_per_page' => '6',
  );

  $query = new WP_Query($args);
?>

    <div class="portfolio-header">
        <h2><?php echo the_field( 'home_portfolio_title' ); ?></h2>
    </div>
    <div class="portfolio-home">

        <?php
          // The Loop
          if ($query->have_posts()) {

              while ($query->have_posts()) {

                  $query->the_post();
                    echo '<div class="portfolio-item">';
                    echo '<h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3>';
                    echo '<p>'.get_the_content().'</p>';

                  // $image = get_field('image');
                  $image = 'https://unsplash.it/200/300/?random';
                  $size = 'full'; // (thumbnail, medium, large, full or custom size)

              if ($image) {
                  echo wp_get_attachment_image($image, $size);
              }
                echo '</div>';
              }

          } else {
              // no posts found
          }
          /* Restore original Post Data */
          wp_reset_postdata();

          ?>

        </div>
        <p><a href="<?php echo get_page_link(36); ?>">View all portfolio items</a></p>
      </div>
