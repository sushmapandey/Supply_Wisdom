<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Supplywisdom
 */

get_header(); ?>

	<main id="primary" class="site-main">
	<?php while ( have_posts() ) : the_post(); ?>

<section class="sw-blog container">
	<div>
		<?php
			$categories = get_the_category();
				if ( ! empty( $categories ) ) {
					echo '<a class="cat-link" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
				}
			?>
		<?php 
			the_title( '<h1 class="entry-title">', '</h1>' );
		?>
		<p><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"><?php echo get_avatar( get_the_author_meta('ID'), 60); ?></a> Written by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"><?php echo esc_html( get_the_author() ) ?></a>
		</p>
  </div>
  <div>
		<?php 
			if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;
		?>
	</div>
</section>
<div class="container">
	<div class="blog-content">
		<?php 
					the_content();
		?>
	</div><!-- eo blog-content -->
</div>





<div class="post-nav container">
	<div class="prev">
		<?php previous_post_link(' %link'); ?> 
	</div>
	<div class="next">
		<?php next_post_link('%link'); ?> 
	</div>
</div>

<?php 
	wp_reset_postdata();
	$args = array(
		'posts_per_page' => 3,
		'tag'						 => 'featured'
	);
	$query = new WP_Query( $args );

	if ( $query->have_posts() ) : ?>
<section class="sw-featured sw-pb">
  <h2 class="sw-heading">Related Insights</h2>
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

?>




<?php
endwhile; // End of the loop.
?>







	</main><!-- #primary -->

<?php
get_footer();
