<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Supplywisdom
 */

?>

<div class="resource-card">
  <div class="card">
    <?php 
      if ( has_post_thumbnail() ) :
    ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
    <?php
      endif;
    ?>
    <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>

    <div class="socials-link">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-linkedin-in"></i>
    </div>
  </div>
</div>
<!-- #post-<?php the_ID(); ?> -->


