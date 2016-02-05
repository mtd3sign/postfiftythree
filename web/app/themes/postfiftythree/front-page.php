<?php /*
  Template Name: Front Page
*/ ?>

<!-- <br/>
<?php get_template_part('templates/content', 'video'); ?>
<br/> -->
<?php get_template_part('templates/content', 'hero'); ?>
<?php get_template_part('templates/content', 'design'); ?>
<?php get_template_part('templates/content', 'development'); ?>
<?php get_template_part('templates/content', 'portfolio_home'); ?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
