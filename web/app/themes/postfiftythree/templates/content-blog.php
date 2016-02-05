

  <?php

  $args = array(
    'post_type' => 'blog',
    'posts_per_page' => '6',
  );

  $query = new WP_Query($args);

  ?>
    <div class="blog-item">

    <?php
        // The Loop
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                echo '<div class="blog-item">';
                echo '<h2><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>';
                echo '<p>'.get_the_excerpt().'</p>';

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
