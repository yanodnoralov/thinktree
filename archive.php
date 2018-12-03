<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yan_Designs_Base
 */

get_header();
?>

<div class="hero single-hero mb-5">
	<div class="container-wide">
		<div class="row">
			<div class="col-12">
				<?php if ( have_posts() ) : ?>
					<header class="page-header entry-title">
						<?php
						the_archive_title( '<h1 class="entry-title">', '</h1>' );
						?>
					</header><!-- .page-header -->
				<?php else :?>
					<h1 class="entry-title #ffffff"><?php esc_html_e( 'Nothing Found', 'yan-base' ); ?></h1>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div class="container">
				<div class="row">
					<div class="col-12">

						<?php if ( have_posts() ) : ?>
				
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
				
								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_type() );
				
							endwhile;
				
							the_posts_navigation();
							
						endif;
						?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
