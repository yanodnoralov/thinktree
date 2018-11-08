<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yan_Designs_Base
 */

?>
	<?php if(!is_front_page() && !is_home()): ?>
	
	<?php if( get_field('footer_call_to_action', 'option') ): ?>
	<div class="footer-cta">
		<div class="container">
			<div class="row d-flex align-items-center">
				<h4>[CONTACT FORM WILL GO HERE]</h4>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if( get_field('area_1', 'option') ): ?>
		<div class="footer-widgets-wrap">
			<div class="container">
				<div class="row">
					<div class="foot-widget col-sm-6 col-lg-4">
						<?php the_field('area_1', 'option'); ?>
					</div>
					<div class="foot-widget col-sm-6 col-lg-4">
						<?php if( get_field('area_2', 'option') ): ?>
							<?php the_field('area_2', 'option'); ?>
						<?php endif; ?>
					</div>
					<div class="foot-widget col-sm-6 col-lg-4 pl-xl-5">
						<?php if( get_field('area_3', 'option') ): ?>
							<?php the_field('area_3', 'option'); ?>
						<?php endif; ?>
					</div>
					<div class="sep"></div>
				</div>
			</div>
		</div>
	<?php endif; ?>
		
	<?php endif; ?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
			<div class="col-12">
				<div class="site-info">
					<small>
					<?php if( get_field('copyright_', 'option') ): ?>
							<?php the_field('copyright_', 'option'); ?>
						<?php endif; ?>
					</small>
<!--
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'yan-base' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'yan-base' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'yan-base' ), 'yan-base', '<a href="http://yandesigns.com">Yan Designs</a>' );
						?>
-->
				</div><!-- .site-info -->
			</div>
			</div><!-- #row -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
