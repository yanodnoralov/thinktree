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
	$header_bg = "background-color:".get_field('header_bg').";";
} 
if( get_field('header_image') ){
	$header_bg_img = 'background-image: url("'.get_field("header_image").'");';
}
?>

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

<div class="hero <?php echo $has_bg_color;?>" style='<?php echo $header_bg; echo $header_bg_img;?>'>
	<div class="custom-container">
		<div class="rowz">
			<div class="content-col">
				<header class="entry-header rellax hide" data-rellax-speed=".5" data-rellax-percentage="0.5">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php if( get_field('sub_title') ): ?>
						<p class="sub-title"><?php the_field('sub_title'); ?></p>
					<?php endif; ?>
				</header><!-- .entry-header -->
			</div>
			<div class="img-col">
				<?php if( get_field('parallax_image') ): ?>
					<div class="parallax-overlay rellax" data-rellax-speed="-1" data-rellax-percentage="0.5">
						<img class="parallax-img hide" src="<?php the_field('parallax_image'); ?>"/>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
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
	        
	        
	    /**
		 *  Infinite next and previous post looping in WordPress
		 */
		    
		if( get_adjacent_post(false, '', false) ) {
			$n = get_adjacent_post(false, '', false);
			?>
			<div class="next-article-wrapper section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<a class="next-article-inner" href="<?php echo get_permalink($n->ID); ?>">
								<p class="h5">NEXT PROJECT</p>
								<p class="h2"><?php echo $n->post_title; ?></p>
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else { 
			$last = new WP_Query('post_type=project&posts_per_page=1&order=ASC'); $last->the_post();?>
		    	<div class="next-article-wrapper section">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<a class="next-article-inner" href="<?php echo get_permalink(); ?>">
									<p class="h5">NEXT PROJECT</p>
									<p class="h2"><?php echo get_the_title(); ?></p>
								</a>
							</div>
						</div>
					</div>
				</div>
		    <?php
		    wp_reset_query();
		};
	    ?>

		<?php
		endwhile; // End of the loop.
		?>
		
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
