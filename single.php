<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Yan_Designs_Base
 */

get_header();
?>

<div class="hero single-hero mb-5">
	<div class="container-wide">
		<div class="row">
			<div class="col-12">
				<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
			</div>
		</div>
	</div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-12">

						<?php
						while ( have_posts() ) :
							the_post();
				
							get_template_part( 'template-parts/content', get_post_type() );
				
							the_post_navigation();
				
							// If comments are open or we have at least one comment, load up the comment template.
/*
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
*/
				
						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
