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
	if ( have_posts() ) :


		$sticky_post=0;

		/* Start the Loop */
		while ( have_posts() ) : the_post();
		if ( is_sticky() && $sticky_post==0 ) {
			$sticky_post++;
			// Sticky post content
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
					
						the_title( '<h2 class="entry-title">', '</h2>' ); 
						the_excerpt();
					?>
					<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"  class="btn">read more</a>
			</div>
		</section>

	<section class="sw-pb">
  <h2 class="sw-heading">Latest Insights</h2>
  <div class="sw-resources-card container">
		<?php
 		} else {
			// normal post content
			/*
				* Include the Post-Format-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Format name) and that will be used instead.
				*/
				get_template_part( 'template-parts/content-home', get_post_format() );


		}




		endwhile;

		the_posts_navigation();
		?>

		</div>
		</section>

		<?php

		

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>

	</main><!-- #primary -->

<?php
get_footer();
