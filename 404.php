<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Yan_Designs_Base
 */

get_header();
?>

<div class="hero single-hero mb-5">
	<div class="container-wide">
		<div class="row">
			<div class="col-12">
				<h1 class="page-title entry-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'yan-base' ); ?></h1>
			</div>
		</div>
	</div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<section class="error-404 not-found">
							<div class="page-content">
								<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'yan-base' ); ?></p>
			
								<?php
// 								get_search_form();
			
								the_widget( 'WP_Widget_Recent_Posts' );
								?>
			
							</div><!-- .page-content -->
						</section><!-- .error-404 -->
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
