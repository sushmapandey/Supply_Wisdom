<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Supplywisdom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('h-box'); ?>>

<?php if ( has_post_thumbnail() ) : ?>
  <div class="ar-img">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
      <?php the_post_thumbnail(); ?>
    </a>
  </div>
<?php endif; ?>
<div class="ar-content">
  <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
  <?php supplywisdom_archive_footer(); ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
</div>

</article><!-- #post-<?php the_ID(); ?> -->
