<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Supplywisdom
 */

get_header(); ?>

	<main id="primary" class="site-main">
<?php
// This is sticky post, getting the recenet sticky and dispalying the same, 
	$args = array(
		'posts_per_page' => 1,
		'post__in'  => get_option( 'sticky_posts' ),
		'ignore_sticky_posts' => 1
	);
	$query = new WP_Query( $args );
?>
<section class="sw-resource">
	<div>
	<?php 
				if ( has_post_thumbnail() ) :
					the_post_thumbnail();
				endif;
	?>
	</div>
	<div>
			<?php 
			
				the_title( '<h1 class="entry-title">', '</h1>' ); 
				the_excerpt();
			?>
			<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"  class="btn">read more</a>
	</div>
</section>
<?php 
	wp_reset_postdata();
	$args = array(
		'posts_per_page' => 3,
		'tag'						 => 'featured'
	);
	$query = new WP_Query( $args );

	if ( $query->have_posts() ) : ?>
<section class="sw-featured sw-pb">
  <h2 class="sw-heading">Featured Insights</h2>
  <div class="sw-resources-card container">
	<?php
		while ( $query->have_posts() ) : $query->the_post();
			get_template_part( 'template-parts/content-home', get_post_format() );
		endwhile;
	?>
	</div>
</section>

<?php	
	endif; 
	wp_reset_postdata(); 

	if ( have_posts() ) : 
?>
<section class="sw-pb">
  <h2 class="sw-heading">Latest Insights</h2>
  <div class="sw-resources-card container">

	<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content-home', get_post_format() );
		endwhile;
	?>

	</div>
</section>

<?php	endif; ?>
  </main><!-- #primary -->

<?php
get_footer();
