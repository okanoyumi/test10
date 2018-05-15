<?php
/**
 * Index
 *
 * @package WordPress
 **/

get_header();
?>
<div>
<?php
  if ( have_posts() ) :
  while ( have_posts() ) :
  the_post();
   ?>
<ul class="post">
<li><?php the_title(); ?></li>
<li><?php echo get_the_date(); ?></li>
<?php the_post_thumbnail(); ?>
<?php the_content( '読む' ); ?>
<?php endwhile; ?>
</div>
<?php get_footer();