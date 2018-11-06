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

<div class="hero <?php echo $has_bg_color;?>" style="<?php echo $header_bg;?>">
	<div class="container">
		<header class="entry-header rellax hide" data-rellax-speed=".5" data-rellax-percentage="0.5">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php if( get_field('sub_title') ): ?>
				<p class="sub-title"><?php the_field('sub_title'); ?></p>
			<?php endif; ?>
		</header><!-- .entry-header -->
	</div>
	<?php if( get_field('header_image') ): ?>
		<div class="img-overlay" style="background-image: url('<?php the_field('header_image'); ?>');"></div>
	<?php endif; ?>
	<?php if( get_field('parallax_image') ): ?>
		<div class="parallax-overlay rellax" data-rellax-speed="-1" data-rellax-percentage="0.5">
			<img class="parallax-img hide" src="<?php the_field('parallax_image'); ?>" width="<?php if( get_field('parallax_image_width') ): the_field('parallax_image_width'); endif;?>"/>
		</div>
	<?php endif; ?>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<?php
		while ( have_posts() ) :
			the_post();
			
	        // get layout from acf and print it out
	        if ( have_rows('sections') ) {
	            while ( have_rows('sections') ) {
	                the_row();
	                echo get_template_by_layout( get_row_layout() );
	            }
	        }

		endwhile; // End of the loop.
		?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
