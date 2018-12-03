<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yan_Designs_Base
 */

get_header();
?>

<?php if( get_field('header_bg') ) {
	$has_bg_color = "has_bg_color";
	$header_bg = "background-color:".get_field('header_bg');
} ?>

<style>
	.hero .parallax-overlay .parallax-img {
		<?php if (get_field('align_parallax_image_to') == 'top'){ ?>
			top: 0;
		<?php }?>
		<?php if (get_field('align_parallax_image_to') == 'bottom'){ ?>
			bottom: 0;
		<?php }?>
	}
	
	@media (min-width:768px) {
	.hero .parallax-overlay .parallax-img {
		max-width: <?php the_field('parallax_image_width'); ?>;
	}
	
	}
	@media (max-width:767px) {
	.hero .parallax-overlay .parallax-img {
		max-width: <?php the_field('parallax_image_width_mobile'); ?>;
	}
	}
</style>

<div class="hero single-hero <?php echo $has_bg_color;?>" style="<?php echo $header_bg;?>">
	<div class="container-wide">
		<div class="row">
			<div class="col-md-6">
				<header class="entry-header rellax hide" data-rellax-speed=".5" data-rellax-percentage="0.5">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php if( get_field('sub_title') ): ?>
						<p class="sub-title"><?php the_field('sub_title'); ?></p>
					<?php endif; ?>
				</header><!-- .entry-header -->
			</div>
			<div class="col-md-6">
				<?php if( get_field('header_image') ): ?>
					<div class="img-overlay" style="background-image: url('<?php the_field('header_image'); ?>');"></div>
				<?php endif; ?>
				<?php if( get_field('add_parallax_layer') && get_field('parallax_image') ): ?>
					<div class="parallax-overlay rellax" data-rellax-speed="-1" data-rellax-percentage="0.5">
						<img class="parallax-img hide" src="<?php the_field('parallax_image'); ?>"/>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

	<div id="primary" class="content-area">
		<div class="container">
		<main id="main" class="site-main">
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
